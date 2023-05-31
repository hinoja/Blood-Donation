<div>
    <div class="table-responsive">
        <table class="table table-striped table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>@lang('Name')</th>
                    <th>@lang('Start')</th>
                    <th>@lang('validated')</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $appointment->user->name }}</td>
                        <td>
                            {{ $appointment->FormatDate($appointment->start) }}
                            {{ $appointment->start }} </td>
                        <td>
                            <div class="py-2 px-2">
                                <span
                                    class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-{{ $appointment->is_validated ? 'success' : 'dark' }} ">
                                    {{ $appointment->is_validated ? 'Yes' : 'No' }}</span>
                            </div>
                        </td>
                        <td>
                            @if (!$appointment->is_validated)
                                <a wire:click="showValidateForm({{ $appointment }})" title="@lang('Validate appointment')"
                                    type="button" class="btn btn-primary " class="btn bg-grey waves-effect"> <i
                                        style="color: white;" class="fas fa-check"></i>
                                    {{-- @lang('Validated') --}}
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                <div style="background:rgba(246, 45, 45, 0.3)" wire:ignore.self class="modal fade"
                    id="validateAppointment" tabindex="-1" role="dialog" aria-labelledby="EditCategoryLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="DeleteModalLabel">@lang('Validate Appointment'): {{ $name }}
                                </h5>
                                <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div>
                                <div class="modal-body">
                                    <p class="text-danger font-weight-bold">@lang('Are you sure you want to validate this appointment  ?')
                                        <br>
                                    </p>
                                    </span>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-success" wire:click="closeModal()"
                                        data-dismiss="modal">@lang('Cancel')</button>
                                    <button type="button" wire:click="ActiveAppointment()" class="btn btn-danger">
                                        @lang('Yes! active')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </tbody>
        </table>
        <ul class="header-dropdown" style="float: right;">
            {{ $appointments->links() }}
        </ul>

    </div>

</div>

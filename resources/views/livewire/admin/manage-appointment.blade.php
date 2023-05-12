<div>
    <div class="table-responsive">
        <table class="table table-striped table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>@lang('Name')</th>
                    {{-- <th>@lang('Email')</th> --}}
                    <th>@lang('Start')</th>
                    {{-- <th>@lang('Created at')</th> --}}
                    <th>@lang('validated')</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $appointment->user->name }}</td>
                        {{-- <td>{{ $appointment->email }}</td> --}}
                        <td>
                            {{ $appointment->FormatDate($appointment->start) }}
                            {{ $appointment->start }} </td>
                        {{-- <td>
                            <span class="badge badge-success">{{ $appointment->created_at->diffForHumans() }}</span>
                        </td> --}}
                        <td>
                            {{--
                            <div class="py-2 px-2">
                                <span
                                    class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-@if ($appointment->is_validated) info @else dark @endif ">
                                    @if ($appointment->is_validate)  @lang('Yes')  @else  @lang('No')     @endif
                                </span>
                            </div> --}}
                            <div class="py-2 px-2">
                                <span
                                    class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-{{ $appointment->is_validated ? 'success' : 'dark' }} ">
                                    {{ $appointment->is_validated ? 'Yes' : 'No' }}</span>
                            </div>
                        </td>
                        <td>
                            {{-- <button class="btn btn-primary">@lang('Validated')</button> --}}
                            @if (!$appointment->is_validated)
                                <button type="button" class=" btn btn-primary " {{-- wire:click="showModalForm({{ $appointment }})" --}}
                                    class="btn bg-grey waves-effect"> <i class="fas fa-check"></i>  @lang('Validated')
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <ul class="header-dropdown" style="float: right;">
            {{ $appointments->links() }}
        </ul>
    </div>

</div>

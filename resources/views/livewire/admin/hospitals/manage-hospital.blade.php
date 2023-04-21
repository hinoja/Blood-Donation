<div>
    <div class="row clearfix jsdemo-notification-button">
        <div class="col-sm-12">
            {{-- <button type="button" class="btn btn-raised bg-pink waves-effect" data-placement-from="top"
                data-placement-align="left" data-animate-enter="animated fadeIn" data-animate-exit="animated fadeOut"
                data-color-name="bg-black"> FADE IN/OUT </button> --}}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('Full Name')</th>
                    {{-- <th>@lang('Email')</th> --}}
                    <th>@lang('Town')</th>
                    <th>@lang('Receipt')</th>
                    <th>@lang('Active')</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hospitals as $hospital)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $hospital->name }}</td>
                        {{-- <td>{{ $hospital->email }}</td> --}}
                        <td>{{ $hospital->town }}</td>
                        <td>
                            <span class="badge badge-success">{{ $hospital->created_at->diffForHumans() }}</span>
                        </td>
                        <td>
                            <div class="py-2 px-2">
                                <span
                                    class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-{{ $hospital->is_active ? 'info' : 'dark' }} ">
                                    {{ $hospital->is_active ? 'Yes' : 'No' }}</span>
                            </div>
                        </td>
                        <td>
                            <button type="button"
                                class="@if ($hospital->is_active) btn btn-primary @else btn btn-danger @endif"
                                wire:click="showModalForm({{ $hospital }})" class="btn bg-grey waves-effect"> <i
                                    class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <ul class="header-dropdown" style="float: right;">
            {{ $hospitals->links() }}
        </ul>
    </div>



    {{-- Modal:  Show Details --}}
    <div style="background:rgba(0, 0, 0, 0.3)" wire:ignore.self class="modal fade" id="HospitalModal" tabindex="-1"
        role="dialog" aria-labelledby="EditCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="MessageModalLabel">@lang('Hospital Details')</h5>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <div class="text-center"> <img class="text-center"
                                src="{{ asset('storage/hospitals/logo/' . $displayHospital?->logo) }}" height="80px"
                                width="100px" alt="" class="text-center"></div>
                        <br>
                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label">@lang('Name')</label>
                            <div style="float:right;">{{ $displayHospital?->name }}</div>
                            <br>
                            <br>
                            @lang('Go to website') : <a class="text-center" target="_blank"
                                href="{{ $displayHospital?->siteInternet }}">{{ $displayHospital?->siteInternet }}</a>
                            <br>
                            <hr>
                            <div><label for="control-label" style="font-weight:bold;float:left;">Email</label>
                                <a style="float:right;"
                                    href="mailto:{{ $displayHospital?->email }}">{{ $displayHospital?->email }}</a>
                            </div>

                        </div>
                        <br>
                        <hr>

                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label">@lang('Urgence Number')</label>
                            <div class="text-danger" style="float:right;">{{ $displayHospital?->urgenceNumber }}</div>
                        </div>
                        <br>
                        <hr>
                        <div class="text-center">
                            <span class="text-center" style="color: orange;"> @lang('Map') <i
                                    class="fas fa-map-marker-alt  text-lg text-center"></i></span>
                        </div>
                        <div class="form-group">
                            {{-- <label style="font-weight:bold;float:left;" class="control-label">@lang('Town')</label> --}}
                            <span class="mr-3" style="font-weight: bold;">@lang('Town'): </span>
                            {{ $displayHospital?->town }} <br>
                            <span class="mr-3" style="font-weight: bold;">@lang('Region'): </span>
                            {{ $displayHospital?->region }} <br>
                            <span class="mr-3" style="font-weight: bold;">@lang('Long'): </span> <span
                                class="text-danger">{{ $displayHospital?->longitude }}</span> <br>
                            <span class="mr-3" style="font-weight: bold;">@lang('Lati'): </span> <span
                                class="text-danger">{{ $displayHospital?->latitude }}</span>

                        </div>


                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label">@lang('Description')</label>
                            <br>
                            <div style="text-align:justify;">
                                @if ($displayHospital?->description)
                                    {{ $displayHospital?->description }}
                                @else
                                    Null
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" wire:click="closeModal()"
                            data-dismiss="modal">@lang('Cancel') </button>
                        <div>
                            @if (!$displayHospital?->is_active)
                                <button style="display: block;" type="button" id="buttonReply"
                                    wire:click="showConfirmationModal({{ $displayHospital }})"
                                    class="btn btn-{{ !$displayHospital?->is_active ? 'success' : 'danger' }}">
                                    <i class="fa fa-check"></i> @lang('Active')
                                </button>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--  --}}
    {{-- Modal:   confirmation --}}
    <div style="background:rgba(0, 0, 0, 0.3)" wire:ignore.self class="modal fade" id="ConfirmationModal" tabindex="-1"
        role="dialog" aria-labelledby="EditCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteModalLabel">@lang('Active this account') : @if (isset($this->data))
                            {{ $this->data->name }}
                        @endif
                    </h5>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <p class="text-danger font-weight-bold">@lang('Are you sure you want to active this account ?')
                            <br>
                            {{-- @lang('This will also remove all subcategories and jobs linked to that category.') --}}
                        </p>
                        </span>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success" wire:click="closeModal()"
                            data-dismiss="modal">@lang('Cancel')</button>
                        {{-- <button type="button" wire:click="ConfirmationActivate()" class="btn btn-danger">
                            @lang('Yes! active')</button> --}}

                        <div>
                            <button wire:click="ConfirmationActivate()" style="float: right;" wire:loading.remove type="button"
                                class="btn btn-danger">
                                {{-- <i class="fa fa-paper-plane"></i> --}}
                                @lang('Yes,active')
                            </button>
                            <button wire:loading style="float: right;" class="btn btn-danger" >
                                <span class="spinner-border spinner-border-sm" role="status"
                                    aria-hidden="true"></span>
                                @lang('Loading')...
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--  --}}



</div>

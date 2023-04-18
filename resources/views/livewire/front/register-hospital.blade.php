<div>


    <!-- start step indicators -->
    <div class=" multi-step">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="@if ($step === 1 || $step === 2 || $step === 3 || $step === 4) active @endif" id="account">
                                <strong>Account</strong>
                            </li>
                            <li id="personal" class="@if ($step === 2 || $step === 3 || $step === 4) active @endif ">
                                <strong>files</strong>
                            </li>
                            <li id="payment" class="@if ($step === 3 || $step === 4) active @endif ">
                                <strong>Services</strong>
                            </li>
                            <li id="confirm" class="@if ($step === 4) active @endif ">
                                <strong>Finish</strong>
                            </li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0"
                                style="width:@if ($step === 1) 25% @elseif($step === 2) 50% @elseif($step === 3) 75% @elseif($step === 4) 100% ; @endif"
                                aria-valuemax="100"></div>
                        </div>
                        <br>
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                </div>

                            </div>

                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>

                                </div>

                            </div>

                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>

                                </div>

                            </div>

                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end step indicators -->
    <div class="registration-area__form">
        <form action="#" method="post" name="registration__form">
            @if ($step === 1)
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Name Hospital') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="hospital_name"> @lang('Full Name')</label>
                                <input name="hospital_name" wire:model.defer="hospital_name" class="form-control"
                                    type="text" required>
                            </div>
                            @error('hospital_name')
                                <span class="text-center">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Date Of Birth') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="birth_date">Birth Date</label>
                                <input wire:model.defer="birth_date" class="form-control" type="date"
                                    name="birth_date" required>
                            </div>
                            @error('birth_date')
                                <span class="text-center">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                </div>
                {{-- urgence --}}
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Urgency Number') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="urgency_number">Number</label>
                                <input wire:model.defer="urgency_number" class="form-control" type="number"
                                    name="urgency_number" required>
                            </div>
                            @error('urgency_number')
                                <span class="text-center">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Email') </p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="description">email</label>
                                   <input wire:model.defer="email" class="form-control" type="email"
                                    name="urgency_email" required>
                            </div>
                            @error('description')
                            <span class="text-center">{{ $message }}</span>
                        @enderror

                        </div>
                    </div>
                </div>
            @endif
            {{-- <div class="registration-area__form-single">
                <p class="secondary">Blood Group *</p>
                <div class="registration-area__form-single__inner">
                    <div class="input-group-column">
                        <div class="input">
                            <label for="regiGroup">Blood Group</label>
                            <select class="select-blood-group" id="regiGroup">
                                <option label="none" selected></option>
                                <option value="ab+">AB+</option>
                                <option value="ab-">AB-</option>
                                <option value="o+">O+</option>
                                <option value="o-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- manager --}}
            {{-- @if ($step === 2)
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Name') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="manager_name">Full Name</label>
                                <input wire:model.defer="manager_name" class="form-control" type="text"
                                    name="manager_name" required>
                            </div>
                            @error('manager_name')
                                <span class="text-center">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Call Number') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="call_number">number</label>
                                <input wire:model.defer="call_number" class="form-control" type="number"
                                    name="call_number" required>
                            </div>
                            @error('call_number')
                            <span class="text-center">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Email') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="manager_email">text</label>
                                <input wire:model.defer="manager_email" class="form-control" type="email"
                                    name="manager_email" required>
                            </div>
                            @error('manager_email')
                            <span class="text-center">{{ $message }}</span>
                        @enderror

                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Password') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="password">@lang('password')</label>
                                <input wire:model.defer="password" class="form-control" type="password"
                                    name="password" required>
                            </div>
                            @error('password')
                            <span class="text-center">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div>
            @endif --}}

            @if ($step === 2)
                <div>
                    <div class="registration-area__form-single">
                        <p class="secondary">@lang('Add a logo') <span class="text-danger">*</span></p>
                        <div class="registration-area__form-single__inner">
                            <div class="input-group-column">
                                <div class="input">
                                    <label for="logo">@lang('Image')>
                                        <input wire:model.defer="logo" class="form-control" type="file"
                                            name="logo" required>
                                </div>
                                @error('logo')
                                    <span class="text-center">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>

                    <div class="registration-area__form-single">
                        <p class="secondary">@lang('Description') </p>
                        <div class="registration-area__form-single__inner">
                            <div class="input-group-column">
                                <div class="input">
                                    <label for="description_file">@lang('File')</label>
                                    <input wire:model.defer="description_file" class="form-control" type="file"
                                        name="description_file" required>
                                </div>
                                @error('description_file')
                                    <span class="text-center">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
            @endif



            @if ($step === 3)
                <div class="  contact-area__content " style="display: block;">
                    <p class="secondary">@lang('Services ') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__innercontact-area-single contact-area__content-form">
                        <div class="input-group-column ">
                            <div class="input">
                                <label for="services.0">text</label>
                                <input class="input-lg input-control" type="text" name="services1" required>
                                {{-- <textarea class="input-lg" name="" id="" cols="30" rows="10"></textarea> --}}
                                @error('services.0')
                                    <span class="text-center">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group-column ">
                                <div wire:click.prevent="add({{ $i }})" class="btn btn-primary btn-lg">+
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($servicesInput as $key => $index)
                        {{-- <div class="registration-area__form-single__inner"> --}}
                        <div class="input-group-column" wire:key="{{ $index }}">
                            <div class="input">
                                <label for="regiNumber">text</label>
                                <input class="input" type="text" name="regi_number" required>
                            </div>
                            <div class="input-group-column ">
                                <div wire:click.prevent="remove({{ $key }})" class="btn btn-danger btn-lg">
                                    ---
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}
                    @endforeach

                </div>
            @endif
            {{-- position --}}
            @if ($step === 4)
                <h3 class="text-center"> @lang('Localisation')</h3>
                <div class=" ">
                    <div class=" text-center">
                        <span style="text-align: center;"> <b>@lang('Country')</b>  {{ $location->countryName }}
                        </span>
                    </div>
                </div>
                <hr style="color: white">
                <hr style="color: white">
                <div class="registration-area__form-single">
                    <div class="registration-area__form-single">
                        <span> <b class="px-4">@lang('Region')</b> {{ $location->regionName }} </span>
                    </div>
                    <div class="">
                        <span> <b class="px-1"> @lang('Town')</b> {{ $location->cityName }} </span>
                    </div>

                </div>
                <hr style="color: white">
                <hr style="color: white">
                <div class="registration-area__form-single">
                    <div class="registration-area__form-single">
                        <span> <b class="px-2">@lang('Longitude')</b> {{ $location->longitude }} </span>
                    </div>
                    <div class="registration-area__form-single">
                        <span> <b class="px-1">@lang('Latitude')</b>{{ $location->latitude }} </span>
                    </div>
                </div>
    </div>
    @endif

    </form>
</div>
<div class="row"></div>
<hr style="color:white;">

<div class="form-footer donate-area">
    @if ($step > 1)
        <button wire:click="previous()" style="float: left;" class="button button--effect">
            @lang('Previous')</button>
    @endif

    <button wire:click="next()" style="float: right;" class="button button--effect">
        @lang('Next')</button>
    {{--
            <button wire:click="position()"  class="button button--effect">
                @lang('location')</button> --}}

</div>
</div>

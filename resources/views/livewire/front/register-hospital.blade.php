<div>


    <!-- start step indicators -->
    <div class="container-fluid multi-step">
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
                                <strong>Personal</strong>
                            </li>
                            <li id="payment" class="@if ($step === 3 || $step === 4) active @endif ">
                                <strong>Image</strong>
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
                                <label for="nameHos"> @lang('Full Name')</label>
                                <input name="nameHos" class="form-control" type="text" required>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Date Of Birth') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">Birth Date</label>
                                <input class="form-control" type="date" name="regi_number" required>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- urgence --}}
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Urgency Number') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">Number</label>
                                <input class="form-control" type="number" name="regi_number" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Description ') </p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">text</label>
                                <textarea class="form-control" type="number" name="regi_number" cols="30" rows="10"></textarea>
                            </div>
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
            @if ($step === 2)
                {{-- director --}}
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Manager Name') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">Full Name</label>
                                <input class="form-control" type="text" name="regi_number" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="registration-area__form-single">
                    <p class="secondary">@lang('Manager Number') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner">
                        <div class="input-group-column">
                            <div class="input">
                                <label for="regiNumber">number</label>
                                <input class="form-control" type="number" name="regi_number" required>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ($step === 3)
                    <div>
                        <div class="registration-area__form-single">
                            <p class="secondary">@lang('Add a logo') <span class="text-danger">*</span></p>
                            <div class="registration-area__form-single__inner">
                                <div class="input-group-column">
                                    <div class="input">
                                        <label for="regiNumber">@lang('image')>
                                            <input class="form-control" type="file" name="regi_number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br> <hr>
                        <div class="registration-area__form-single">
                            <p class="secondary">@lang(' description') </p>
                            <div class="registration-area__form-single__inner">
                                <div class="input-group-column">
                                    <div class="input">
                                        <label for="regiNumber">@lang('File')</label>
                                        <input class="form-control" type="file" name="regi_number" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif

            {{-- <div class="registration-area__form-single">
                <p class="secondary">Address *</p>
                <div class="registration-area__form-single__inner mb-0">
                    <div class="input-group-column input-group-column--secondary">
                        <div class="input">
                            <label for="regiAddress">Street Address</label>
                            <input class="form-control" type="text" name="regi_address" id="regiAddress" required>
                        </div>
                        <div class="input">
                            <label for="regiCity">City</label>
                            <input class="form-control" type="text" name="regi_city" id="regiCity" required>
                        </div>
                        <div class="input">
                            <label for="regiState">State / Province</label>
                            <input class="form-control" type="text" name="regi_state" id="regiState" required>
                        </div>
                        <div class="input">
                            <label for="regiCountry">Country</label>
                            <select class="select-regi-country" id="regiCountry">
                                <option label="none" selected></option>
                                <option value="usa">United State</option>
                                <option value="japan">Japan</option>
                                <option value="brazil">Brazil</option>
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="china">China</option>
                            </select>
                        </div>
                        <div class="input registration-input-button mb-0">
                            <button type="submit" class="button button--effect">Submit<i
                                    class="fa-solid fa-arrow-right-long"></i></button>

                        </div>
                    </div>
                </div>
            </div> --}}

            @if ($step === 4)
                <div class="registration-area__form-single " style="display: block;">
                    <p class="secondary">@lang('Services ') <span class="text-danger">*</span></p>
                    <div class="registration-area__form-single__inner ">
                        <div class="input-group-column ">
                            <div class="input">
                                <label for="services1">text</label>
                                <input class="form-control" type="text" name="services1" required>
                            </div>
                            <div class="input-group-column ">
                                <div class="btn btn-primary btn-lg">+</div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="registration-area__form-single__inner"> --}}
                    <div class="input-group-column ">
                        <div class="input">
                            <label for="regiNumber">text</label>
                            <input class="form-control" type="text" name="regi_number" required>
                        </div>
                        <div class="input-group-column ">
                            <div class="btn btn-danger btn-lg">---</div>
                        </div>
                    </div>
                    {{-- </div> --}}



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

    </div>
</div>

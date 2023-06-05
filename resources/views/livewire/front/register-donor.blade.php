<div>
    <form method="POST" action="{{ route('register.donor.post') }}">
        @csrf
        <!--Name -->
        <br>
        <div class="input-group icon before_span {{ $errors->has('email') ? 'has-error' : '' }}"
            style="width:500px; margin-left: 9rem !important;">
            {{-- <label for="email" class="control-label">@lang('Email')</label> --}}
            <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
            <div class="form-line">
                <input type="email" class="form-control @error('name') is-invalid @enderror" name="name"
                    placeholder="@lang('name')" value="{{ old('email') }}" tabindex="1" required autofocus>
                {{-- <input type="password" class="form-control" name="email" placeholder="Password" required> --}}
            </div>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <!-- Email Address -->
        <br>
        <div class="input-group icon before_span {{ $errors->has('email') ? 'has-error' : '' }}"
            style="width:500px; margin-left: 9rem !important;">
            {{-- <label for="email" class="control-label">@lang('Email')</label> --}}
            <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
            <div class="form-line">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" placeholder="email" value="{{ old('email') }}" tabindex="1" required>
                {{-- <input type="password" class="form-control" name="email" placeholder="Password" required> --}}
            </div>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <br>
        <div class="input-group icon before_span {{ $errors->has('password') ? 'has-error' : '' }}"
            style="width:500px; margin-left: 9rem !important;">
            <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
            <div class="form-line">
                <input type="password" required autocomplete="current-password" class="form-control" name="password"
                    placeholder="Password" required>
            </div>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- phoneNUmber -->
        <br>
        <div class="input-group icon before_span {{ $errors->has('password') ? 'has-error' : '' }}"
            style="width:500px; margin-left: 9rem !important;">
            <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
            <div class="form-line">
                <input type="number" required autocomplete="current-password" class="form-control" name="password"
                    placeholder="@lang('phone Number')" required>
            </div>
            @error('phoneNUmber')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <!-- birthDate -->
        <br>

        <div class="input-group icon before_span {{ $errors->has('password') ? 'has-error' : '' }}"
            style="width:500px; margin-left: 9rem !important;">
            <span class="input-group-addon"> <i class="fas fa-birthday-cake"></i> </span>
            <div class="form-line">
                <input type="date" required autocomplete="current-password" class="form-control" name="birthDate"
                    placeholder="@lang('birth date')" required>
            </div>
            @error('birthDate')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- State -->
        <br>

        <div style="display: inline-block;">
            <div class="container">
                <div class="row">
                    <div class="col-6 mr-4">
                        <div class="input-group icon before_span {{ $errors->has('password') ? 'has-error' : '' }}"
                            style="width:400px; margin-left: 9rem !important;">
                            <span class="input-group-addon"> <i class="fas fa-birthday-cake"></i> </span>
                            <div class="form-line">
                                <input type="password" required autocomplete="current-password" class="form-control"
                                    name="password" placeholder="Password" required>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group icon before_span {{ $errors->has('password') ? 'has-error' : '' }}"
                            style="width:300px; margin-left: 9rem !important;">
                            <span class="input-group-addon"> <i class="fas fa-birthday-cake"></i> </span>
                            <div class="nice-select select-donation-type">
                                <select class="form-control" name="" id="">
                                    <option value="">A+</option>
                                    <option value="">A-</option>
                                    <option value="">B+</option>
                                    <option value="">B-</option>
                                    <option value="">AB+</option>
                                    <option value="">AB-</option>
                                </select>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <br>

        <!-- City -->
        <br>
        <div style="display: inline-block;">
            <div class="container">
                <div class="row">
                    <div class="col-5 mt-1">
                        <div class="input-group icon before_span {{ $errors->has('password') ? 'has-error' : '' }}"
                            style="width:500px; margin-left: 9rem !important;">
                            <span class="input-group-addon"> <i class="fas fa-birthday-cake"></i> </span>
                            <div class="form-line">

                                <select class="form-control" name="" id="">
                                    <option value="">Garoua</option>
                                    <option value="">MAroua</option>
                                    <option value="">Edea</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="input-group icon before_span {{ $errors->has('password') ? 'has-error' : '' }}"
                            style="width:500px; margin-left: 9rem !important;">
                            <span class="input-group-addon"> <i class="fas fa-birthday-cake"></i> </span>
                            <div class="form-line">

                                <select class="form-control" name="" id="">
                                    <option value="">Garoua</option>
                                    <option value="">MAroua</option>
                                    <option value="">Edea</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>




    </form>
</div>

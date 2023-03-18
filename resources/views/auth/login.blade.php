<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/locked.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:25 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Swift - Hospital Admin ::</title>
    <link rel="icon" href="{{ asset('assets/front/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/back/css/main.css') }}" />

</head>

<body class="theme-cyan authentication">
    <div class="container">
        <div class="card-top"></div>
        <div class="card locked">
            <h1 class="title"><span>Swift Hospital</span>Locked</h1>
            <div class="d-flex">
                <div class="thumb">
                    <img class="media-object" src="assets/images/random-avatar7.jpg" class="rounded" alt="">
                </div>
                <div>
                    <h6 class="media-heading">Dr. John Smith</h6>
                    <p>ENT Specialist</p>
                </div>
            </div>
            <div class="body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="input-group icon before_span">
                        {{-- <label for="email" class="control-label">@lang('Email')</label> --}}
                        <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                        <div class="form-line">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" tabindex="1" required autofocus>
                            {{-- <input type="password" class="form-control" name="email" placeholder="Password" required> --}}
                        </div>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                        <div class="form-line">
                            <input type="password" required autocomplete="current-password" class="form-control"
                                name="password" placeholder="Password" required>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" style="background: #ef4444;" class="btn btn-raised waves-effect ">@lang('Login')</button>
                    </div>
                    {{-- <div class="text-center"><a href="sign-in.html">@lang('Sign In!')</a></div> --}}
                </form>
            </div>
        </div>
    </div>

    <div class="theme-bg"></div>
    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/back/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/back/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('assets/back/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/locked.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:25 GMT -->

</html>


{{--
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

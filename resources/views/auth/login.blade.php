@extends('layouts.authFormLayout')
@section('title')
    @lang('Login')
@endsection
@section('header')
    @lang('Login')
@endsection
@section('content')
    <style>
        .resize {
            width: 50rem !important;
            height: 40rem !important;
            margin-left: -225px !important;
            background-attachment: fixed;
        }
    </style>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <br>
        <div class="input-group icon before_span {{ $errors->has('email') ? 'has-error' : '' }}"
            style="width:500px; margin-left: 9rem !important;">
            {{-- <label for="email" class="control-label">@lang('Email')</label> --}}
            <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
            <div class="form-line">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    placeholder="xyz@mail.com" value="{{ old('email') }}" tabindex="1" required autofocus
                    style="width: ;">
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
        <br>
        <!-- Remember Me -->
        <div style="margin-left: 9rem !important;">
            <input class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember"
                id="remember_me" type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
            <label for="remember_me">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="align-center">

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}" style="text-decoration: none;">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <br><br>
        <div class="text-center">
            <button type="submit" style="background: #ea3d3d; color: white;"
                class="btn btn-raised waves-effect ">@lang('Login')</button>
        </div>
        {{-- <div class="text-center"><a href="sign-in.html">@lang('Sign In!')</a></div> --}}
    </form>
@endsection

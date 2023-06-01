@extends('layouts.authFormLayout')
@section('title')
    @lang('Reset Password')
@endsection
@section('header')
    @lang('Reset Password')
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
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        {{-- @method('PATCH') --}}

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <br>
        <span class="input-group-addon">Email </span>
        <div class="input-group icon before_span {{ $errors->has('email') ? 'has-error' : '' }}"
            style="width:500px; margin-left: 9rem !important;">
            {{-- <label for="email" class="control-label">@lang('Email')</label> --}}
            <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
            <div class="form-line">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" placeholder="xyz@mail.com" value="{{ old('email') }}" tabindex="1" required autofocus
                    style="width: ;">
                {{-- <input type="password" class="form-control" name="email" placeholder="Password" required> --}}
            </div>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- PASSWORD -->
        <br>
        <span class="input-group-addon">Password </span>
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
        <!-- PASSWORD COnfirmation -->
        <span class="input-group-addon">Password Confirmation</span>
        {{-- <div class="input-group icon before_span {{ $errors->has('email') ? 'has-error' : '' }}">

            <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
            <div class="form-line">
                <input id="password" type="password" required autocomplete="current-password"
                    class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                    tabindex="1" required >

            </div>
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> --}}

        <div class="input-group icon before_span {{ $errors->has('password') ? 'has-error' : '' }}"
            style="width:500px; margin-left: 9rem !important;">
            <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
            <div class="form-line">
                <input id="password" type="password" required autocomplete="current-password" class="form-control"
                    name="password_confirmation" placeholder="Password" required>
            </div>
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <br> <br>
        <div class="align-center">

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Log in') }}
            </a>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" style="background: #ea3d3d;"
                class="btn btn-raised waves-effect ">@lang('Submit Request')</button>
        </div>
        {{-- <div class="text-center"><a href="sign-in.html">@lang('Sign In!')</a></div> --}}
    </form>
@endsection

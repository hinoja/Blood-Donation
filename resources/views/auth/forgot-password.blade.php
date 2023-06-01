@extends('layouts.authFormLayout')
@section('title')
    @lang('Forgot your password?')
@endsection
@section('header')
    @lang('Forgot your password ?')
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
    <div class="mb-4 text-sm text-gray-600 text-center" style="font-weight:bold;">
        {{ __('Fill your email address in this form and we will send you a link to reset your password.') }}
    </div>
    <br><br>
    <form method="POST" action="{{ route('resetPassword.email') }}">
        @csrf
        @method('post')
        <!-- Email Address -->
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
        <br> <br>
        <div class="align-center">

            {{-- @if (Route::has('password.request')) --}}
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Log in') }}
            </a>
            {{-- @endif --}}
        </div>
        <br>
        <div class="text-center">
            <button type="submit" style="background: #ea3d3d;"
                class="btn btn-raised waves-effect ">@lang('Send the link')</button>
        </div>
        {{-- <div class="text-center"><a href="sign-in.html">@lang('Sign In!')</a></div> --}}
    </form>
@endsection

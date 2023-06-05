@extends('layouts.authFormLayout')
@section('title')
    @lang('Register')
@endsection
@section('header')
    @lang('Register')
@endsection
@section('content')
    <style>
        .resize {
            width: 60rem !important;
            height: 60rem !important;
            margin-left: -325px !important;
            background-attachment: fixed;
        }
    </style>
    @livewire('front.register-donor')
@endsection

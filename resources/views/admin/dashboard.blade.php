@extends('layouts.admin')
@section('signleTitle', __('Dashboard'))
@section('title', 'Dashboard')
@section('sub-title', 'Welcome to Swift applicatio')
@section('content')
    <div class="container-fluid">
        
        @livewire('admin.dashboard')

    </div>

@endsection

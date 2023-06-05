@extends('layouts.front')
@section('title', __('Welcome'))
@section('content')
    <!-- ==== hero section start ==== -->
    @include('includes.front.Hero')
    <!-- ==== #hero section end ==== -->

    <!-- ==== overview section start ==== -->
    @include('includes.front.overview')
    <!-- ==== #overview section end ==== -->

    <!-- ==== organization section start ==== -->
    @include('includes.front.organization')
    <!-- ==== #organization section end ==== -->

    <!-- ==== counter start ==== -->
    @include('includes.front.counter')
    <!-- ==== #counter end ==== -->

    <!-- ==== service section start ==== -->
    @include('includes.front.services')
    <!-- ==== #service section end ==== -->

    <!-- ==== call now section start ==== -->
    {{-- @include('includes.front.callNow') --}}
    <!-- ==== #call now section end ==== -->

    <!-- ==== campaign section start ==== -->
    {{-- @include('includes.front.campaign') --}}
    <!-- ==== #camapign section end ==== -->

    <!-- ==== testimonial section start ==== -->
    {{-- @include('includes.front.testimonial') --}}
    <!-- ==== testimonial section end ==== -->

    <!-- ==== donor section end ==== -->
    @include('includes.front.donor')
    <!-- ==== #donor section end ==== -->

    <!-- ==== appointment section start ==== -->
    @include('includes.front.appointement')
    <!-- ==== #appointment section end ==== -->

    <!-- ==== team section start ==== -->
    @include('includes.front.teamSection')
    <!-- ==== #team section end ==== -->

    <!-- ==== blog section start ==== -->
    @livewire('front.home.blog-section')
    <!-- ==== #blog section end ==== -->

    <!-- ==== cta section start ==== -->
    @include('includes.front.cta')
    <!-- ==== #cta section end ==== -->
@endsection

@push('css')
    @livewireStyles()
@endpush

@push('js')
    @livewireScripts()
@endpush

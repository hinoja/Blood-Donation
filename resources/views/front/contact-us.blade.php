@extends('layouts.front')
@section('title', __('Contact us'))
@push('css')
    @livewireStyles()
@endpush
@push('js')
    @livewireScripts()
    {{-- <script src="{{ asset('js/jquery-2.2.2.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script> --}}
@endpush
@section('content')
    <!-- ==== banner section start ==== -->
    <section class="banner bg-img dark-overlay dark-overlay--secondary"
        data-background="{{ asset('assets/front/images/banner-bg.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-area">
                        <div class="banner-area__content">
                            <h2> @lang('Contact us')</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">@lang('Home')</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@lang('Contact us')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== #banner section end ==== -->

    <!-- ==== contact form section start ==== -->
    <section class="contact section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-area">
                        <div class="contact-area__content">
                            <div class="row neutral-row">
                                <div class="col-lg-7 row-item">
                                    <div class="contact-area-single contact-area__content-form">
                                        <h4 class="descender">@lang('General information')</h4>
                                        <p>@lang('We appreciate your interest in donating blood. Below you will find information on how to contact us.')</p>
                                        @livewire('front.contact.contact-manage')
                                    </div>
                                </div>
                                <div class="col-lg-5 row-item">
                                    <div class="contact-area-single contact-area__sidebar wow fadeInUp">
                                        <p class="secondary">Blood Excellence!</p>
                                        <h4>Expanded Blood Donate
                                            Services Here</h4>
                                        <p class="neutral-bottom">The enquiry service answers all the questions it receives </p>
                                        <div class="group">
                                            <p class="secondary"><i class="fa-solid fa-phone"></i>Emergency Line:
                                               +(237) 688 88 88 88
                                            </p>
                                            <p class="secondary"><i class="fa-solid fa-location-dot"></i>Location:
                                                Douala
                                               Cameroun</p>
                                            <p class="secondary"><i class="fa-solid fa-clock"></i>Mon - Fri: 8:00 am -
                                                7:00 pm
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== #contact form section end ==== -->

    <!-- ==== google map start ==== -->
    {{-- <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <iframe class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed/v1/place?q=Douala,+Cameroon&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="true" aria-hidden="false"
            tabindex="0">
        </iframe>
    </div> --}}
    {{-- https://www.google.cm/maps/place/ENSET+Douala/@4.0567451,9.7438074,21z/data=!4m6!3m5!1s0x10610d98cd1c0cb9:0xdd72d50dbc051a34!8m2!3d4.0567046!4d9.7438228!16s%2Fg%2F122tpqhg?hl=fr --}}
    <div class="wow fadeInUp" data-wow-delay="0.1s">
        <iframe class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed/v1/place?q=ENSET+Douala&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8""
            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0">
        </iframe>
    </div>

    <!-- ==== #google map end ==== -->
@endsection

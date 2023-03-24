@extends('layouts.front')
@section('title', __('Contact us'))
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if (session()->has('success'))
        <script>
            swal("Success", "{!! Session::get('success') !!}", "success", {
                button: "ok"
            });
        </script>
    @elseif (session()->has('danger'))
        <script>
            swal("Error", "{!! Session::get('error') !!}", "error", {
                button: "ok"
            });
        </script>
    @endif
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
                                        <h4 class="descender">@lang('Get In Touch')</h4>
                                        <p>@lang('On the other hand, we denounce with righteous indignation and dislike men who
                                                                                                                            are so
                                                                                                                            beguiled and righteous indignation and dislike men by the charms')</p>
                                        @livewire('front.contact.contact-manage')
                                    </div>
                                </div>
                                <div class="col-lg-5 row-item">
                                    <div class="contact-area-single contact-area__sidebar wow fadeInUp">
                                        <p class="secondary">Blood Excellence!</p>
                                        <h4>Expanded Blood Donate
                                            Services Here</h4>
                                        <p class="neutral-bottom">On the other hand, we denounce with righteous
                                            indignation and
                                            dislike men who are so
                                            beguiled and demoralized by the charms </p>
                                        <div class="group">
                                            <p class="secondary"><i class="fa-solid fa-phone"></i>Emergency Line: (002)
                                                012612457
                                            </p>
                                            <p class="secondary"><i class="fa-solid fa-location-dot"></i>Location:
                                                Street 68,
                                                Mahattan,
                                                New York</p>
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
            src="https://www.google.cm/maps/place/ENSET+Douala/@4.0567059,9.7432756,19z/data=!3m1!4b1!4m6!3m5!1s0x10610d98cd1c0cb9:0xdd72d50dbc051a34!8m2!3d4.0567046!4d9.7438228!16s%2Fg%2F122tpqhg?hl=fr"
            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0">
        </iframe>
    </div>

    <!-- ==== #google map end ==== -->
@endsection

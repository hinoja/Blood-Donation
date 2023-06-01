<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from croptheme.com/blad-ai-ltr/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 11:38:48 GMT -->

<head>

    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/front/images/favicon.png') }}" type="image/x-icon">
    <!-- #title -->
    {{-- <title> Blood Donation Activism | @yield('signleTitle') </title> --}}
    <title> {{ config('app.name', 'Blood Donation') }} | @lang('Register Hospital') </title>
    <!-- #keywords -->
    <meta name="keywords" content="blood, blood donation, donatioin, Blood Donation, Medical, Hospital">
    <!-- #description -->
    <meta name="description" content="Blood Donation Activism & Campaign ">
    <!-- #author -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.12/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- ==== css dependencies start ==== -->

    <!-- bootstrap five css -->
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- font awesome six css -->
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/font-awesome/css/all.min.css') }}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/nice-select/css/nice-select.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/magnific-popup/css/magnific-popup.css') }}">
    <!-- owl theme default css -->
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <!-- owl owl carousel css -->
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/slick/css/slick.css') }}">
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/odometer/css/odometer.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/animate/animate.css') }}">
    @stack('css')

    <!-- ==== css dependencies end ==== -->
    @livewireStyles()
    <!-- main css -->

    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">

</head>


<body>
    @include('sweetalert::alert')
    <style>
        .multi-step {
            margin: 0;
            padding: 0;
        }

        .multi-step {
            height: 100%;
        }

        p {
            color: grey;
        }

        #heading {
            text-transform: uppercase;
            color: #ea062b;
            font-weight: normal;
        }


        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        .form-card {
            text-align: left;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #ea062b;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left;
        }

        .purple-text {
            color: #ea062b;
            font-weight: normal;
        }

        /*Step Count*/
        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right;
        }

        /*Field names*/
        .fieldlabels {
            color: gray;
            text-align: left;
        }

        /*Icon progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #ea062b;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400;
        }

        /*Icons in the ProgressBar*/
        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e";
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030";
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
            padding-right: 5px;
            /* margin-right: 4px; */

        }

        /*Icon ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding-left: 15px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #ea062b;
        }

        /*Animated Progress Bar*/
        .progress {
            height: 20px;
        }

        .progress-bar {
            background-color: #ea062b;
        }

        /*Fit image in bootstrap div*/
        .fit-image {
            width: 100%;
            object-fit: cover;
        }
    </style>
    <!-- ==== topbar start ==== -->
    @include('includes.front.topBar')
    <!-- ==== #topbar end ==== -->

    <!-- ==== #header start ==== -->
    @include('includes.front.header')
    <!-- ==== #header end ==== -->

    <!-- ==== full screen search start ==== -->
    @include('includes.front.screenSearch')
    <!-- ==== #full screen search end ==== -->

    <!-- ==== sidenav start ==== -->
    @include('includes.front.sideNav')
    <!-- ==== sidenav end ==== -->

    <!-- ==== banner section start ==== -->
    <section class="banner bg-img dark-overlay dark-overlay--secondary" data-background="assets/images/banner-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-area">
                        <div class="banner-area__content">
                            <h2>Register As Hospital</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('Home')</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">@lang('Register Now')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== #banner section end ==== -->

    <!-- ==== registration section start ==== -->
    <section class="registration ">
        <div class="container">
            {{-- <div class="row"> --}}
            <div class="col-lg-12">
                <div class="registration-area wow fadeInUp">
                    {{-- <div class="section-header section-inner-space">
                            <h2 class="neutral-bottom">Blad Ai Organization</h2>
                        </div> --}}
                    @livewire('front.register-hospital')
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="section-space"></div>
    <!-- ==== #registration section end ==== -->

    <!-- ==== footer start ==== -->
    @include('includes.front.footer')
    <!-- ==== #footer end ==== -->

    <!-- ==== scroll bottom to top ==== -->
    <a href="javascript:void(0)" class="scrollToTop">
        <i class="fa-solid fa-angle-up"></i>
    </a>

    <!--=== Start RTL Section ===-->
    @include('includes.front.RTL')
    <!--=== End RTL Section ===-->

    <!-- ==== js dependencies start ==== -->

    <!-- jquery -->
    @if (session()->has('success'))
        <script>
            swal("Success", "{!! Session::get('success') !!}", "success", {
                button: "ok",
                timer: 7000
            });
        </script>
    @elseif (session()->has('danger'))
        <script>
            swal("Error", "{!! Session::get('error') !!}", "error", {
                button: "ok"
            });
        </script>
    @endif
    @stack('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9']) --}}

    <script src="{{ asset('assets/front/vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <!-- bootstrap five js -->
    <script src="{{ asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('assets/front/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/front/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/front/vendor/slick/js/slick.js') }}"></script>
    <!-- odometer js -->
    <script src="{{ asset('assets/front/vendor/odometer/js/odometer.min.js') }}"></script>
    <!-- viewport js -->
    <script src="{{ asset('assets/front/vendor/viewport-js/viewport.jquery.js') }}"></script>
    <!-- owl carousel min js -->
    <script src="{{ asset('assets/front/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/front/vendor/wow/wow.min.js') }}"></script>

    <!-- ==== js dependencies end ==== -->

    @livewireScripts()
    <!-- plugin js -->
    <script src="{{ asset('assets/front/js/plugin.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
</body>

<!-- Mirrored from croptheme.com/blad-ai-ltr/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 11:38:48 GMT -->

</html>

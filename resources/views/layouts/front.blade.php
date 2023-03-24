<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from croptheme.com/blad-ai-ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 11:37:47 GMT -->

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/front/images/favicon.png') }}" type="image/x-icon">
    <!-- #title -->
    {{-- <title> Blood Donation Activism | @yield('signleTitle') </title> --}}
    <title> {{ config('app.name','Blood Donation')  }} | @yield('title') </title>
    <!-- #keywords -->
    <meta name="keywords" content="blood, blood donation, donatioin, Blood Donation, Medical, Hospital">
    <!-- #description -->
    <meta name="description" content="Blood Donation Activism & Campaign ">
    <!-- #author -->
    <meta name="author" content="janohicorporation">

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

    @yield('content')
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
    @stack('js')
    @livewireScripts()
    <!-- plugin js -->
    <script src="{{ asset('assets/front/js/plugin.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
</body>

<!-- Mirrored from croptheme.com/blad-ai-ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 11:38:16 GMT -->

</html>

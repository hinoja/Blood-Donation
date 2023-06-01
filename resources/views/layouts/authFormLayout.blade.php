<!DOCTYPE html>
<html>
<!-- Mirrored from thememakker.com/templates/swift/hospital/locked.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:25 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Blood Donation | @yield('title')</title>
    <link rel="icon" href="{{ asset('assets/front/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/back/css/main.css') }}" />


</head>

<body class="theme-cyan authentication">

    @include('sweetalert::alert')
    <div class="container">
        <!-- <div class="card-top"></div> -->
        <div class="card resize locked ">

            <h1 class="title" style="color: #ea3d3d;"> @yield('header')
                {{-- <span class="msg" >@lang('Sign In a  membership')</span> --}}
            </h1>
            <div class="d-flex">
                <div class="thumb" style="margin:auto;">
                    <a href="{{ route('home') }}">
                        <img class="media-object" style="width: 150px !important;"
                            src="{{ asset('assets/back/images/bg2.jpg') }}" class="rounded" alt="logo">
                    </a>
                </div>
            </div>
            <span style="font-weight: bold;" class="text-center ">BLOOD DONATION</span>
            <div class="body">
                @yield('content')
            </div>
        </div>
    </div>
    {{-- <div class="theme-bg"></div> --}}
    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/back/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/back/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/back/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
</body>
<!-- Mirrored from thememakker.com/templates/swift/hospital/locked.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:25 GMT -->

</html>

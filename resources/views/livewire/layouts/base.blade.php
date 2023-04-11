<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> Blood Donation :: @lang('Edit Post')</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/morrisjs/morris.css') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/back/css/main.css') }}" />
    <!-- Fontawesome Css -->

    <link rel="stylesheet" href="{{ asset('assets/back/modules/fontawesome/css/all.min.css') }}">
    @stack('css')
</head>


<body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-cyan">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Blood Donation loading...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>



    <!-- Top Bar -->
    @include('includes.back.navbar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('includes.back.leftSidebar')

        <!-- Right Sidebar -->
        @include('includes.back.rightSidebar')

    </section>

    <section class="content home">
        <div class="block-header text-center">
            <h2> Edit Post</h2>
            <small class="text-muted">Description text here ...</small>
        </div>


        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <x-livewire-alert::scripts />
        <section class="  profile-page">
            {{-- @livewire('admin.posts.add-post') --}}

            {{ $slot }}
        </section>
    </section>

    <div class="color-bg"> </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/back/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/back/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/back/bundles/chartscripts.bundle.js') }}"></script> <!-- Chart Plugins Js -->
    <script src="{{ asset('assets/back/bundles/sparklinescripts.bundle.js') }}"></script> <!-- Chart Plugins Js -->

    <script src="{{ asset('assets/back/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
    <script src="{{ asset('assets/back/js/pages/index.js') }}"></script>
    <script src="{{ asset('assets/back/js/pages/charts/sparkline.min.js') }}"></script>
    @stack('js')
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:08 GMT -->

</html>

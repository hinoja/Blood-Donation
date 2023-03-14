<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:07 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Swift - Hospital Admin ::</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
    <link rel="stylesheet" href="assets/plugins/morrisjs/morris.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css" />
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
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- #Float icon -->
    <ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
        <li class="mfbc_wrap">
            <a href="javascript:void(0);" class="mfbcb-main g-bg-cyan">
                <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
                <i class="mfbcm-icon-active zmdi zmdi-close"></i>
            </a>
            <ul class="mfbc_list">
                <li><a href="doctor-schedule.html" data-mfb-label="Doctor Schedule" class="mfb-child bg-blue"><i
                            class="zmdi zmdi-calendar mfbc_icon"></i></a></li>
                <li><a href="patients.html" data-mfb-label="Patients List" class="mfb-child bg-orange"><i
                            class="zmdi zmdi-account-o mfbc_icon"></i></a></li>
                <li><a href="payments.html" data-mfb-label="Payments" class="mfb-child bg-purple"><i
                            class="zmdi zmdi-balance-wallet mfbc_icon"></i></a></li>
            </ul>
        </li>
    </ul>

    <!-- Morphing Search  -->
    <div id="morphsearch" class="morphsearch">
        <form class="morphsearch-form">
            <div class="form-group m-0">
                <input value="" type="search" placeholder="Explore Swift..."
                    class="form-control morphsearch-input" />
                <button class="morphsearch-submit" type="submit">Search</button>
            </div>
        </form>
        <div class="morphsearch-content">
            <div class="dummy-column">
                <h2>People</h2>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar1.jpg" alt="" />
                    <h3>Sara Soueidan</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar2.jpg" alt="" />
                    <h3>Rachel Smith</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar3.jpg" alt="" />
                    <h3>Peter Finlan</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar4.jpg" alt="" />
                    <h3>Patrick Cox</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar5.jpg" alt="" />
                    <h3>Tim Holman</h3>
                </a>
            </div>
            <div class="dummy-column">
                <h2>Popular</h2>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar5.jpg" alt="" />
                    <h3>Sara Soueidan</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar4.jpg" alt="" />
                    <h3>Rachel Smith</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar1.jpg" alt="" />
                    <h3>Peter Finlan</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar2.jpg" alt="" />
                    <h3>Patrick Cox</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar3.jpg" alt="" />
                    <h3>Tim Holman</h3>
                </a>
            </div>
            <div class="dummy-column">
                <h2>Recent</h2>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar1.jpg" alt="" />
                    <h3>Sara Soueidan</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar5.jpg" alt="" />
                    <h3>Rachel Smith</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar1.jpg" alt="" />
                    <h3>Peter Finlan</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar4.jpg" alt="" />
                    <h3>Patrick Cox</h3>
                </a>
                <a class="dummy-media-object" href="javascript:void(0);"><img class="rounded"
                        src="assets/images/xs/avatar2.jpg" alt="" />
                    <h3>Tim Holman</h3>
                </a>
            </div>
        </div>
        <span class="morphsearch-close"></span>
    </div>

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
        @yield('content')
    </section>

    <div class="color-bg"></div>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="assets/bundles/chartscripts.bundle.js"></script> <!-- Chart Plugins Js -->
    <script src="assets/bundles/sparklinescripts.bundle.js"></script> <!-- Chart Plugins Js -->

    <script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/charts/sparkline.min.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:08 GMT -->

</html>

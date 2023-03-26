<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:07 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> Blood Donation :: <?php echo $__env->yieldContent('signleTitle'); ?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/bootstrap/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/morrisjs/morris.css')); ?>" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/css/main.css')); ?>" />
    <!-- Fontawesome Css -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/back/modules/fontawesome/css/all.min.css')); ?>">
    <?php echo $__env->yieldPushContent('css'); ?>
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
    



    <!-- Top Bar -->
    <?php echo $__env->make('includes.back.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php echo $__env->make('includes.back.leftSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Right Sidebar -->
        <?php echo $__env->make('includes.back.rightSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </section>

    <section class="content home">
        <div class="block-header text-center" >
            <h2><?php echo $__env->yieldContent('title'); ?></h2>
            <small class="text-muted"><?php echo $__env->yieldContent('sub-title'); ?></small>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </section>

    <div class="color-bg"> </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo e(asset('assets/back/bundles/libscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->
    <script src="<?php echo e(asset('assets/back/bundles/vendorscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->
    <?php echo $__env->yieldPushContent('js'); ?>
    <script src="<?php echo e(asset('assets/back/bundles/chartscripts.bundle.js')); ?>"></script> <!-- Chart Plugins Js -->
    <script src="<?php echo e(asset('assets/back/bundles/sparklinescripts.bundle.js')); ?>"></script> <!-- Chart Plugins Js -->

    <script src="<?php echo e(asset('assets/back/bundles/mainscripts.bundle.js')); ?>"></script><!-- Custom Js -->
    <script src="<?php echo e(asset('assets/back/js/pages/index.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/back/js/pages/charts/sparkline.min.js')); ?>"></script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:08 GMT -->

</html>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/layouts/admin.blade.php ENDPATH**/ ?>
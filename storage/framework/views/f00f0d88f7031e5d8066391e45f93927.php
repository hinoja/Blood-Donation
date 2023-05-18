<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<!-- Mirrored from croptheme.com/blad-ai-ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 11:37:47 GMT -->

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/front/images/favicon.png')); ?>" type="image/x-icon">
    <!-- #title -->
    
    <title> <?php echo e(config('app.name', 'Blood Donation')); ?> | <?php echo $__env->yieldContent('title'); ?> </title>
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
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- font awesome six css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendor/font-awesome/css/all.min.css')); ?>">
    <!-- nice select css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendor/nice-select/css/nice-select.css')); ?>">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendor/magnific-popup/css/magnific-popup.css')); ?>">
    <!-- owl theme default css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendor/owl-carousel/css/owl.theme.default.min.css')); ?>">
    <!-- owl owl carousel css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendor/owl-carousel/css/owl.carousel.min.css')); ?>">
    <!-- slick css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendor/slick/css/slick.css')); ?>">
    <!-- odometer css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendor/odometer/css/odometer.css')); ?>">
    <!-- animate css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/vendor/animate/animate.css')); ?>">
    <?php echo $__env->yieldPushContent('css'); ?>
    <!-- ==== css dependencies end ==== -->
    
    <!-- main css -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/style.css')); ?>">
</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== topbar start ==== -->
    <?php echo $__env->make('includes.front.topBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #topbar end ==== -->

    <!-- ==== #header start ==== -->
    <?php echo $__env->make('includes.front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #header end ==== -->

    <!-- ==== full screen search start ==== -->
    <?php echo $__env->make('includes.front.screenSearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #full screen search end ==== -->

    <!-- ==== sidenav start ==== -->
    <?php echo $__env->make('includes.front.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== sidenav end ==== -->

    <?php echo $__env->yieldContent('content'); ?>
    <!-- ==== footer start ==== -->
    <?php echo $__env->make('includes.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #footer end ==== -->

    <!-- ==== scroll bottom to top ==== -->
    <a href="javascript:void(0)" class="scrollToTop">
        <i class="fa-solid fa-angle-up"></i>
    </a>

    <!--=== Start RTL Section ===-->
    <?php echo $__env->make('includes.front.RTL', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--=== End RTL Section ===-->

    <!-- ==== js dependencies start ==== -->

    <!-- jquery -->
    <?php if(session()->has('success')): ?>
        <script>
            swal("Success", "<?php echo Session::get('success'); ?>", "success", {
                button: "ok",
                timer: 7000
            });
        </script>
    <?php elseif(session()->has('danger')): ?>
        <script>
            swal("Error", "<?php echo Session::get('error'); ?>", "error", {
                button: "ok"
            });
        </script>
    <?php endif; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    

    <script src="<?php echo e(asset('assets/front/vendor/jquery/jquery-3.6.0.min.js')); ?>"></script>
    <!-- bootstrap five js -->
    <script src="<?php echo e(asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- nice select js -->
    <script src="<?php echo e(asset('assets/front/vendor/nice-select/js/jquery.nice-select.min.js')); ?>"></script>
    <!-- magnific popup js -->
    <script src="<?php echo e(asset('assets/front/vendor/magnific-popup/js/jquery.magnific-popup.min.js')); ?>"></script>
    <!-- slick js -->
    <script src="<?php echo e(asset('assets/front/vendor/slick/js/slick.js')); ?>"></script>
    <!-- odometer js -->
    <script src="<?php echo e(asset('assets/front/vendor/odometer/js/odometer.min.js')); ?>"></script>
    <!-- viewport js -->
    <script src="<?php echo e(asset('assets/front/vendor/viewport-js/viewport.jquery.js')); ?>"></script>
    <!-- owl carousel min js -->
    <script src="<?php echo e(asset('assets/front/vendor/owl-carousel/js/owl.carousel.min.js')); ?>"></script>
    <!-- wow js -->
    <script src="<?php echo e(asset('assets/front/vendor/wow/wow.min.js')); ?>"></script>

    <!-- ==== js dependencies end ==== -->
    <?php echo $__env->yieldPushContent('js'); ?>
    
    <!-- plugin js -->
    <script src="<?php echo e(asset('assets/front/js/plugin.js')); ?>"></script>
    <!-- main js -->
    <script src="<?php echo e(asset('assets/front/js/main.js')); ?>"></script>
</body>

<!-- Mirrored from croptheme.com/blad-ai-ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Feb 2023 11:38:16 GMT -->

</html>
<?php /**PATH C:\Users\Benutzer\Blood\resources\views/layouts/front.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> Blood Donation :: <?php echo app('translator')->get('Edit Post'); ?></title>
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
            <p>Blood Donation loading...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>



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
        <div class="block-header text-center">
            <h2> Edit Post</h2>
            <small class="text-muted">Description text here ...</small>
        </div>


        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <section class="  profile-page">
            

            <?php echo e($slot); ?>

        </section>
    </section>

    <div class="color-bg"> </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo e(asset('assets/back/bundles/libscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->
    <script src="<?php echo e(asset('assets/back/bundles/vendorscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->
    <script src="<?php echo e(asset('assets/back/bundles/chartscripts.bundle.js')); ?>"></script> <!-- Chart Plugins Js -->
    <script src="<?php echo e(asset('assets/back/bundles/sparklinescripts.bundle.js')); ?>"></script> <!-- Chart Plugins Js -->

    <script src="<?php echo e(asset('assets/back/bundles/mainscripts.bundle.js')); ?>"></script><!-- Custom Js -->
    <script src="<?php echo e(asset('assets/back/js/pages/index.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/back/js/pages/charts/sparkline.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:08 GMT -->

</html>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/layouts/base.blade.php ENDPATH**/ ?>
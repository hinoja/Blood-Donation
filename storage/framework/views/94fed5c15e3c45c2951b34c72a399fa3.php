
<?php $__env->startSection('title',__('Welome')); ?>
<?php $__env->startSection('content'); ?>
    <!-- ==== hero section start ==== -->
    <?php echo $__env->make('includes.front.Hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #hero section end ==== -->

    <!-- ==== overview section start ==== -->
    <?php echo $__env->make('includes.front.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #overview section end ==== -->

    <!-- ==== organization section start ==== -->
    <?php echo $__env->make('includes.front.organization', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #organization section end ==== -->

    <!-- ==== counter start ==== -->
    <?php echo $__env->make('includes.front.counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #counter end ==== -->

    <!-- ==== service section start ==== -->
    <?php echo $__env->make('includes.front.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #service section end ==== -->

    <!-- ==== call now section start ==== -->
    
    <!-- ==== #call now section end ==== -->

    <!-- ==== campaign section start ==== -->
    <?php echo $__env->make('includes.front.campaign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #camapign section end ==== -->

    <!-- ==== testimonial section start ==== -->
    
    <!-- ==== testimonial section end ==== -->

    <!-- ==== donor section end ==== -->
    <?php echo $__env->make('includes.front.donor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #donor section end ==== -->

    <!-- ==== appointment section start ==== -->
    <?php echo $__env->make('includes.front.appointement', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #appointment section end ==== -->

    <!-- ==== team section start ==== -->
    <?php echo $__env->make('includes.front.teamSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #team section end ==== -->

    <!-- ==== blog section start ==== -->
    <?php echo $__env->make('includes.front.blogSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #blog section end ==== -->

    <!-- ==== cta section start ==== -->
    <?php echo $__env->make('includes.front.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==== #cta section end ==== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/front/home.blade.php ENDPATH**/ ?>
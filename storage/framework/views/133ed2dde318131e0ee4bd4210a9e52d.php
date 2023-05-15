<?php $__env->startSection('title', __('Contact us')); ?>
<?php $__env->startPush('css'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <!-- ==== banner section start ==== -->
    <section class="banner bg-img dark-overlay dark-overlay--secondary"
        data-background="<?php echo e(asset('assets/front/images/banner-bg.png')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-area">
                        <div class="banner-area__content">
                            <h2> <?php echo app('translator')->get('Contact us'); ?></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><?php echo app('translator')->get('Home'); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo app('translator')->get('Contact us'); ?></li>
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
                                        <h4 class="descender"><?php echo app('translator')->get('General information'); ?></h4>
                                        <p><?php echo app('translator')->get('We appreciate your interest in donating blood. Below you will find information on how to contact us.'); ?></p>
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.contact.contact-manage')->html();
} elseif ($_instance->childHasBeenRendered('KTPqo97')) {
    $componentId = $_instance->getRenderedChildComponentId('KTPqo97');
    $componentTag = $_instance->getRenderedChildComponentTagName('KTPqo97');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KTPqo97');
} else {
    $response = \Livewire\Livewire::mount('front.contact.contact-manage');
    $html = $response->html();
    $_instance->logRenderedChild('KTPqo97', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    </div>
                                </div>
                                <div class="col-lg-5 row-item">
                                    <div class="contact-area-single contact-area__sidebar wow fadeInUp">
                                        <p class="secondary"><?php echo app('translator')->get('Blood Excellence'); ?>!</p>
                                        <h4><?php echo app('translator')->get('Expanded Blood Donate Services Here'); ?></h4>
                                        
                                        <div class="group">
                                            <p class="secondary"><i class="fa-solid fa-phone"></i><?php echo app('translator')->get('Emergency Line'); ?>:
                                               +(237) 688 88 88 88
                                            </p>
                                            <p class="secondary"><i class="fa-solid fa-location-dot"></i><?php echo app('translator')->get('Location'); ?> :
                                                Douala
                                               <?php echo app('translator')->get('Cameroon'); ?></p>

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
    
    
    <div class="wow fadeInUp" data-wow-delay="0.1s">
        <iframe class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed/v1/place?q=ENSET+Douala&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8""
            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0">
        </iframe>
    </div>

    <!-- ==== #google map end ==== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/front/contact-us.blade.php ENDPATH**/ ?>
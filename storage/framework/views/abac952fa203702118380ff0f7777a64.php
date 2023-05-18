
<?php $__env->startSection('title', __('Blog')); ?>
<?php $__env->startPush('css'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
   <!-- ==== blog section start ==== -->
   <section class="blog bg-white section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.posts.list-post')->html();
} elseif ($_instance->childHasBeenRendered('E4duOlt')) {
    $componentId = $_instance->getRenderedChildComponentId('E4duOlt');
    $componentTag = $_instance->getRenderedChildComponentTagName('E4duOlt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('E4duOlt');
} else {
    $response = \Livewire\Livewire::mount('front.posts.list-post');
    $html = $response->html();
    $_instance->logRenderedChild('E4duOlt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
</section>
<!-- ==== #blog section end ==== -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Benutzer\Blood\resources\views/front/blog/index.blade.php ENDPATH**/ ?>
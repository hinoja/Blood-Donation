<?php $__env->startSection('signleTitle', __('Add Post')); ?>
<?php $__env->startSection('title', 'Add Post'); ?>
<?php $__env->startSection('sub-title', 'Description text here...'); ?>
<?php $__env->startPush('css'); ?>
    
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/summernote/summernote-bs4.css')); ?>">
    
     <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
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
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.posts.add-post')->html();
} elseif ($_instance->childHasBeenRendered('Y4YdlGH')) {
    $componentId = $_instance->getRenderedChildComponentId('Y4YdlGH');
    $componentTag = $_instance->getRenderedChildComponentTagName('Y4YdlGH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Y4YdlGH');
} else {
    $response = \Livewire\Livewire::mount('admin.posts.add-post');
    $html = $response->html();
    $_instance->logRenderedChild('Y4YdlGH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/admin/posts/add.blade.php ENDPATH**/ ?>
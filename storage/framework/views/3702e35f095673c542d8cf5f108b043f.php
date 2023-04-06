<?php $__env->startSection('signleTitle', __('Add Post')); ?>
<?php $__env->startSection('title', 'Add Post'); ?>
<?php $__env->startSection('sub-title', 'Description text here...'); ?>
<?php $__env->startPush('css'); ?>
    
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    
    
    <script src="<?php echo e(asset('assets/back/js/pages/tables/jquery-datatable.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/back/bundles/datatablescripts.bundle.js')); ?>"></script>
    <!-- Page Specific JS File -->
    <script src="<?php echo e(asset('assets/back/js/page/modules-datatables.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/back/js/pages/ui/modals.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/back/plugins/bootstrap-notify/bootstrap-notify.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/back/js/pages/ui/notifications.js')); ?>"></script>


    <script type="text/javascript">
        // close message  modal
        window.livewire.on('closeModal', () => {
            $('#DeleteModal').modal('hide');
            // $('#DeleteModal').modal('hide');
        });
        window.livewire.on('openDeleteModal', () => {
            //show modal details
            $('#DeleteModal').modal('show');
        });
        // window.livewire.on('closeFormReply', () => {
        //     // Close Input Reply and replyButton
        //     document.getElementById('InputRepyForm').style.display = 'none';
        // });
        // window.livewire.on('showFormReply', () => {
        //     // Show input reply
        //     document.getElementById('InputRepyForm').style.display = 'block';
        //     // document.getElementById('buttonReply').style.display = 'none';
        // });
    </script>
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
} elseif ($_instance->childHasBeenRendered('VkwLXyO')) {
    $componentId = $_instance->getRenderedChildComponentId('VkwLXyO');
    $componentTag = $_instance->getRenderedChildComponentTagName('VkwLXyO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VkwLXyO');
} else {
    $response = \Livewire\Livewire::mount('admin.posts.add-post');
    $html = $response->html();
    $_instance->logRenderedChild('VkwLXyO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/admin/posts/add.blade.php ENDPATH**/ ?>
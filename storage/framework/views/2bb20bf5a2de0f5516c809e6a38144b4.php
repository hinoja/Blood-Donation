<?php $__env->startSection('signleTitle', __('Users list')); ?>
<?php $__env->startSection('title', 'All Users'); ?>
<?php $__env->startSection('sub-title', 'Description text here...'); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/modules/datatables/datatables.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('assets/back/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="<?php echo e(asset('assets/back/modules/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/back/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <!-- Page Specific JS File -->
    <script src="<?php echo e(asset('assets/back/js/page/modules-datatables.js')); ?>"></script>
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
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">

                    </div>
                    <div class="body">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users.user-manage')->html();
} elseif ($_instance->childHasBeenRendered('l1GFBMa')) {
    $componentId = $_instance->getRenderedChildComponentId('l1GFBMa');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1GFBMa');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1GFBMa');
} else {
    $response = \Livewire\Livewire::mount('admin.users.user-manage');
    $html = $response->html();
    $_instance->logRenderedChild('l1GFBMa', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/admin/users/index.blade.php ENDPATH**/ ?>
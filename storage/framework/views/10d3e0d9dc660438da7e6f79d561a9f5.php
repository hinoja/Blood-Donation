<?php $__env->startSection('signleTitle', __('Hospitals list')); ?>
<?php $__env->startSection('title', 'All Hospitals'); ?>
<?php $__env->startSection('sub-title', 'Description text here...'); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/fullcalendar/fullcalendar.min.css')); ?>">
    
    <link rel="stylesheet"
        href="<?php echo e(asset('assets/back/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('js'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="<?php echo e(asset('assets/back/js/pages/ui/modals.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/back/plugins/bootstrap-notify/bootstrap-notify.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/back/js/pages/ui/notifications.js')); ?>"></script>
    
    <script src="<?php echo e(asset('assets/back/js/pages/calendar/calendar.js')); ?>"></script>

    <script type="text/javascript">
        // close message  modal
        window.livewire.on('closeModal', () => {
            $('#HospitalModal').modal('hide');
        });
        window.livewire.on('closeModalConfirmation', () => {
            $('#ConfirmationModal').modal('hide');
        });
        window.livewire.on('openModal', () => {
            //show modal details
            $('#HospitalModal').modal('show');
        });
        window.livewire.on('showConfimation', () => {
            //show modal details
            $('#ConfirmationModal').modal('show');
        });
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
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">

                    </div>
                    <div class="body">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.hospitals.manage-hospital')->html();
} elseif ($_instance->childHasBeenRendered('4Xnng3o')) {
    $componentId = $_instance->getRenderedChildComponentId('4Xnng3o');
    $componentTag = $_instance->getRenderedChildComponentTagName('4Xnng3o');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4Xnng3o');
} else {
    $response = \Livewire\Livewire::mount('admin.hospitals.manage-hospital');
    $html = $response->html();
    $_instance->logRenderedChild('4Xnng3o', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/admin/hospitals/index.blade.php ENDPATH**/ ?>
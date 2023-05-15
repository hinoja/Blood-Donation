<?php $__env->startSection('signleTitle', __('Users list')); ?>
<?php $__env->startSection('title', 'All Users'); ?>
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
                        
                        <div class="table-responsive">
                            <table
                                class="table table-striped table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th><?php echo app('translator')->get('First Name'); ?></th>
                                        <th><?php echo app('translator')->get('Email'); ?></th>
                                        <th><?php echo app('translator')->get('Active'); ?></th>
                                        <th><?php echo app('translator')->get('Role'); ?></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($user->name); ?> <?php if($user->last_seen >= now()->subMinutes(2)): ?>
                                                    
                                                    <i class="badge badge-pill badge-success"> Online </i>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($user->email); ?> </td>
                                            <td>
                                                <?php if($user->is_active): ?>
                                                    <div class="py-2 px-2">
                                                        <span
                                                            class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-info ">
                                                            <?php echo app('translator')->get('Yes'); ?></span>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="py-2 px-2">
                                                        <span
                                                            class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-dark ">
                                                            <?php echo app('translator')->get('No'); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php echo e($user->role->name); ?>

                                            </td>
                                            <td>
                                                <?php if($user->role_id > 1): ?>
                                                    <form method="POST"
                                                        action="<?php echo e(route('admin.users.status', $user->id)); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PATCH'); ?>
                                                        <a href="<?php echo e(route('admin.users.status', $user->id)); ?>"
                                                            title="<?php echo e($user->is_active ? __('Block') : __('Unblock')); ?>"
                                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();"
                                                            class="btn btn-<?php echo e($user->is_active ? 'danger' : 'primary'); ?>">
                                                            <?php if($user->is_active): ?>
                                                                <i class="fa fa-lock"></i>
                                                            <?php else: ?>
                                                                <i class="fa fa-lock-open"></i>
                                                            <?php endif; ?>

                                                        </a>
                                                    </form>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/admin/users/index.blade.php ENDPATH**/ ?>
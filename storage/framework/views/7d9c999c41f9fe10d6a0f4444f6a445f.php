<div>
    <div class="table-responsive">
        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <th>#</th>
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
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td>
                            <?php if($user->is_active): ?>
                                <span class="badge badge-pill badge-sm badge-success  waves-effect">
                                    <?php echo app('translator')->get('Yes'); ?></span>
                            <?php else: ?>
                                <span class="badge badge-pill badge-sm badge-dark   waves-effect">
                                    <?php echo app('translator')->get('No'); ?></span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php echo e($user->role->name); ?>

                        </td>
                        <td>
                            <?php if($user->role_id !== 1): ?>
                                <?php if($user->is_active): ?>
                                    <button wire:click="UpdateStatusUser(<?php echo e($user); ?>)" class="btn btn-danger"><i
                                            class="fa fa-lock"></i> </button>
                                <?php else: ?>
                                    <button wire:click="UpdateStatusUser(<?php echo e($user); ?>)" class="btn btn-info"><i
                                            class="fa fa-lock-open"></i> </button>
                                <?php endif; ?>
                            <?php endif; ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <ul class="header-dropdown" style="float: right;">
            <?php echo e($users->links()); ?>

        </ul>
    </div>
</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/admin/users/user-manage.blade.php ENDPATH**/ ?>
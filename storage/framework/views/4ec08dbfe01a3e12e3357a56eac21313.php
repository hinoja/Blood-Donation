<div>
    <div class="table-responsive">
        <table class="table table-striped table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th><?php echo app('translator')->get('Name'); ?></th>
                    
                    <th><?php echo app('translator')->get('Start'); ?></th>
                    
                    <th><?php echo app('translator')->get('validated'); ?></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($appointment->user->name); ?></td>
                        
                        <td>
                            <?php echo e($appointment->FormatDate($appointment->start)); ?>

                            <?php echo e($appointment->start); ?> </td>
                        
                        <td>
                            
                            <div class="py-2 px-2">
                                <span
                                    class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-<?php echo e($appointment->is_validated ? 'success' : 'dark'); ?> ">
                                    <?php echo e($appointment->is_validated ? 'Yes' : 'No'); ?></span>
                            </div>
                        </td>
                        <td>
                            
                            <button type="button"
                                class="<?php if($appointment->is_validated): ?> btn btn-primary <?php else: ?> btn btn-danger <?php endif; ?>"
                                
                                class="btn bg-grey waves-effect">
                                <?php if($appointment->is_validated): ?>  <i class="fas fa-times"></i> <?php else: ?> <i class="fas fa-check"></i> <?php endif; ?> </button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <ul class="header-dropdown" style="float: right;">
            <?php echo e($appointments->links()); ?>

        </ul>
    </div>

</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/admin/manage-appointment.blade.php ENDPATH**/ ?>
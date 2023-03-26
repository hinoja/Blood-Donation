<div>
    <div class="row clearfix jsdemo-notification-button">
        <div class="col-sm-12">
            
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo app('translator')->get('First Name'); ?></th>
                    <th><?php echo app('translator')->get('Subject'); ?></th>
                    <th><?php echo app('translator')->get('Receipt_at'); ?></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($message->name); ?></td>
                        <td><?php echo e($message->subject); ?></td>
                        <td>
                            <span class="badge badge-info"><?php echo e($message->created_at->diffForHumans()); ?></span>
                        </td>
                        <td>
                            <button type="button"
                                class="<?php if($message->response): ?> btn btn-primary <?php else: ?> btn btn-danger <?php endif; ?>"
                                wire:click="showModalForm(<?php echo e($message); ?>)" class="btn bg-grey waves-effect"> <i
                                    class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <ul class="header-dropdown" style="float: right;">
            <?php echo e($messages->links()); ?>

        </ul>
    </div>



    
    <div style="background:rgba(0, 0, 0, 0.3)" wire:ignore.self class="modal fade" id="MessageModal" tabindex="-1"
        role="dialog" aria-labelledby="EditCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="MessageModalLabel"><?php echo app('translator')->get('Message Details'); ?></h5>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label"><?php echo app('translator')->get('Name'); ?></label>
                            <div style="float:right;"><?php echo e($displayContact?->name); ?></div>
                            <br>
                            <hr>
                            <div><label for="control-label" style="font-weight:bold;float:left;">Email</label>
                                <a style="float:right;" href=""><?php echo e($displayContact?->email); ?></a>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label"><?php echo app('translator')->get('Subject'); ?></label>
                            <div style="float:right;"><?php echo e($displayContact?->subject); ?></div>
                        </div>
                        <br>
                        <hr>
                        <div class="form-group">
                            <label style="font-weight:bold;float:left;" class="control-label"><?php echo app('translator')->get('Message'); ?></label>
                            <br>
                            <div style="text-align:justify;"><?php echo e($displayContact?->message); ?></div>
                        </div>
                        <form wire:submit.prevent="replyMessage(<?php echo e($displayContact); ?>)" id="InputRepyForm"
                            style="display:none;">
                            <hr style="background-color:blue;">
                            <div class="form-group">
                                <label class="control-label"> <?php echo app('translator')->get('Response'); ?> </label>
                                <textarea style="background: rgb(213, 213, 235);" cols="20" rows="5" type="text" wire:model.defer="reply"
                                    class="form-control" placeholder=" <?php echo e(__('Reply to the message here')); ?>..."></textarea>
                                <?php $__errorArgs = ['reply'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger "><?php echo e($message); ?> </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <br>
                                <div>
                                    <button wire:loading.remove type="submit" style="float: right;"
                                        class="btn btn-success">
                                        <i class="fa fa-paper-plane"></i>
                                        <?php echo app('translator')->get('Send'); ?>
                                    </button>
                                    <button wire:loading wire:target="replyMessage" style="float: right;"
                                        class="btn btn-success" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        ...
                                    </button>
                                </div>
                            </div>
                        </form>

                        <?php if($displayContact?->response): ?>
                            <div class="form-group">
                                <label style="font-weight:bold;float:left;"
                                    class="control-label"><?php echo app('translator')->get('Response'); ?></label>
                                <br>
                                <div style="text-align:justify; color:rgb(6, 179, 6);"><?php echo e($displayContact->response); ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" wire:click="closeModal()"
                            data-dismiss="modal"><?php echo app('translator')->get('Cancel'); ?> </button>
                        <div>


                            <?php if(!$displayContact?->response): ?>
                                <button style="display: block;" type="button" id="buttonReply"
                                    wire:click="<?php echo e($showForm ? 'closeReply()' : 'showReplyInput()'); ?>"
                                    class="btn btn-primary">
                                    <i class="fa fa-reply"></i>
                                    <?php if($showForm): ?>
                                        <?php echo app('translator')->get('Do not reply'); ?>
                                    <?php else: ?>
                                        <?php echo app('translator')->get('Reply'); ?>
                                    <?php endif; ?>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    


</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/admin/contacts/contact-manage.blade.php ENDPATH**/ ?>
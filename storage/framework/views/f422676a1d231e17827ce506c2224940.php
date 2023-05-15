<div>
    <div>
        <div class="mr-4">
            <a href="<?php echo e(route('admin.post.add')); ?>" class="btn btn-primary btn-md float-right mr-3"> <i
                    class="fa fa-plus"></i> <span class="text-sm"> <?php echo app('translator')->get('Add Post'); ?></span></a>
        </div>
        <div class="body table-responsive">
            <table
                class="table table-bordered table-striped  table-hover
             
             ">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th><?php echo app('translator')->get('image'); ?></th>
                        <th><?php echo app('translator')->get('title'); ?></th>
                        <th><?php echo app('translator')->get('By'); ?></th>
                        <th><?php echo app('translator')->get('published_at'); ?></th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td class="col-2"> <img width="100"
                                    src="<?php if($post->image): ?> <?php echo e(asset('storage/posts/' . $post->image)); ?> <?php else: ?> <?php echo e(asset('storage/posts/noImage.png')); ?> <?php endif; ?>"
                                    class="col-7" alt=""></td>
                            <td><?php echo e($post->title); ?></td>
                            <td> <?php echo e($post->user->name); ?> </td>
                            <td>
                                <?php if($post->published_at): ?>
                                    <span class="badge badge-pill badge-sm badge-success  waves-effect">
                                        <?php echo e($post->FormatDate($post->published_at)); ?></span>
                                <?php else: ?>
                                    <span class="badge badge-pill badge-sm badge-dark   waves-effect">
                                        <?php echo app('translator')->get('No'); ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <button wire:click="showDeleteForm(<?php echo e($post); ?>)"
                                    class="btn btn-danger  waves-effect"><i class="fa fa-trash "></i> </button>
                                    <button wire:click="showPublishForm(<?php echo e($post); ?>)"
                                    class="btn btn-<?php echo e($post->published_at ? 'success' : 'warning'); ?> "><i
                                    class="fas fa-cloud-upload-alt"></i> </button>
                                    <a  href="<?php echo e(route('admin.post.edit',['post'=>$post])); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <ul class="header-dropdown" style="float: right;">
                <?php echo e($posts->links()); ?>

            </ul>
        </div>
    </div>


    
    <div style="background:rgba(0, 0, 0, 0.3)" wire:ignore.self class="modal fade" id="DeleteModal" tabindex="-1"
        role="dialog" aria-labelledby="EditCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteModalLabel"><?php echo app('translator')->get('Delete Post'); ?>: <?php echo e($nameDelete); ?></h5>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <p class="text-danger font-weight-bold"><?php echo app('translator')->get('Are you sure you want to delete this post?'); ?>
                            <br>
                            
                        </p>
                        </span>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success" wire:click="closeModal()"
                            data-dismiss="modal"><?php echo app('translator')->get('Cancel'); ?></button>
                        <button type="button" wire:click="destroyPost()" class="btn btn-danger">
                            <?php echo app('translator')->get('Yes! delete'); ?></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    


    
    <div style="background:rgba(0, 0, 0, 0.3)" wire:ignore.self class="modal fade" id="PublishModal" tabindex="-1"
        role="dialog" aria-labelledby="EditCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">
                        <?php if($publishPost): ?>
                            <?php if($publishPost->published_at): ?>
                                <?php echo app('translator')->get('Unpublish Post'); ?>: <?php echo e($publishPost->title); ?>

                    </h5>
                <?php else: ?>
                    <?php echo app('translator')->get('Publish Post'); ?>: <?php echo e($publishPost->title); ?></h5>
                    <?php endif; ?>

                    <?php endif; ?>
                    <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <div class="modal-body">
                        <p class="text-danger font-weight-bold"><?php echo app('translator')->get('Are you sure you want to publish this post?'); ?>
                            <br>
                            
                        </p>
                        </span>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-success" wire:click="closeModal()"
                            data-dismiss="modal"><?php echo app('translator')->get('Cancel'); ?></button>
                        <button type="button" wire:click="PublishPost()" class="btn btn-danger">
                            <?php if($publishPost): ?>
                                <?php if($publishPost->published_at): ?>
                                    <?php echo app('translator')->get('Yes! Unpublish'); ?>
                                <?php else: ?>
                                    <?php echo app('translator')->get('Yes! Publish'); ?>
                                <?php endif; ?>

                            <?php endif; ?>

                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    

</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/admin/posts/posts-manage.blade.php ENDPATH**/ ?>
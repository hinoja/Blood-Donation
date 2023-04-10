<div>
    <div class="container-fluid">
        <form wire:submit.prevent="storePost()" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row clearfix">
                <div class="col-md-12 p-l-0 p-r-0">
                    <section class="boxs-simple">
                        <div class="profile-header">
                            <div class="profile_info">
                                <?php if($image): ?>
                                    <div class="profile-image ">
                                        <img src="<?php echo e($image->temporaryUrl()); ?>" class="col-3" height="120px"
                                            width="60px" alt="">
                                    </div>
                                    
                                <?php endif; ?>
                                <h4 class="mb-0"><strong>Preview Picture</strong> </h4>
                                
                                <div class="mt-10">
                                    <br> <br>
                                    
                                </div>

                            </div>
                        </div>
                        <div class="profile-sub-header">
                            <div class="box-list">
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Title</h2>
                        </div>
                        <div class="body">
                            <p class="text-default">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="title" wire:model.defer="title"
                                            class="form-control" placeholder="title of post ...">
                                    </div>
                                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>picture</h2>
                        </div>
                        <div class="body">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="container row">
                                    <div class="form-group col-10">
                                        <div class="form-line">
                                            <input type="file" name="image" wire:model="image" class="form-control"
                                                placeholder="upload a image...">
                                        </div>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Tags</h2>
                        </div>
                        <div class="body">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                <div class=" row">
                                    <div class="col-10 ">
                                        <div class=" form-group drop-custum">
                                            <select class="form-select form-control show-tick" wire:model="tags_name"
                                                name="tags_name" id="" multiple>
                                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option class=" " value="<?php echo e($tag->id); ?>">
                                                        <?php echo e($tag->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            
                                        </div>
                                        <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">

                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#usersettings"><?php echo app('translator')->get('Content'); ?></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class=" ">
                                <div class="tab-pane in active">
                                    <div class="body">
                                        <div wire:ignore class="col-12">
                                            <textarea   id="description" wire:model="content"  class="form-control col-12"
                                                cols="40" rows="50"><?php echo e($content); ?></textarea>
                                        </div>
                                        <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mr-4" style="float: right;">
                        <button type="submit" class="btn btn-success btn-lg mr-3"> <i class="fa fa-save">
                                <?php echo app('translator')->get('Save'); ?></i> </button>
                        <button type="reset" class="btn btn-danger btn-lg"> <i class="fa fa-trash">
                                <?php echo app('translator')->get('Reset'); ?></i> </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
<?php $__env->startPush('js'); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>

    
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script src="<?php echo e(asset('assets/back/summernote/summernote-bs4.js')); ?>"></script>
    <script>
        $('#description').summernote({
            height: 500,
            focus: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                    window.livewire.find('<?php echo e($_instance->id); ?>').set('content', contents);
                }
            }

        });
    </script>



    
    
<?php $__env->stopPush(); ?>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/admin/posts/add-post.blade.php ENDPATH**/ ?>
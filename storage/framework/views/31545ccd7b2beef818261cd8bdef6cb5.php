<?php
    use Illuminate\Support\Str;
?>
<div>
    <div class="blog-area">
        <div class="row neutral-row justify-content-center">

            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($post): ?>
                    <div class="col-md-6 col-lg-4 row-item align-center">
                        <div class="blog-area__single img-effect">
                            <div class="poster">
                                <a href="<?php echo e(route('front.blog.show', $post)); ?>">
                                    <img src="<?php if($post->image): ?> <?php echo e(asset('storage/posts/' . $post->image)); ?> <?php else: ?> <?php echo e(asset('storage/posts/noImage.png')); ?> <?php endif; ?>"
                                        alt="Helpless">
                                </a>

                                <a href="<?php echo e(route('front.blog.show', $post)); ?>" class="expand"><i
                                        class="fa-solid fa-plus"></i></a>
                            </div>
                            <div class="blog-area__single-content">
                                <div class="blog-post-date">
                                    <p><i class="fa-solid fa-clock"></i><?php echo e($post->FormatDate($post->published_at)); ?></p>
                                    <p><a href="<?php echo e(route('front.blog.show', $post)); ?>">
                                            
                                            
                                    </p>
                                </div>
                                <h6><a href="<?php echo e(route('front.blog.show', $post)); ?>"><?php echo e($post->title); ?></a></h6>
                                <p class="neutral-bottom" style="text-align:justify;">
                                    <?php echo e(Str::limit($post->content, 200, '...')); ?></p>
                                <a href="<?php echo e(route('front.blog.show', $post)); ?>" class="read-more">
                                    <?php echo app('translator')->get('Read More'); ?>
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
        </div>
        <div class="pagination-wrapper">
            <nav aria-label="Page navigation">
                <ul class="pagination  justify-content-center  active">

                    <?php echo e($posts->links()); ?>

                    

                </ul>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/livewire/front/posts/list-post.blade.php ENDPATH**/ ?>
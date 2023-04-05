<?php $__env->startSection('title', __('Details Blog')); ?>
<?php $__env->startPush('css'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <!-- ==== blog details section start ==== -->
    <section class="blog-default section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-default-area">
                        <div class="row neutral-row">
                            <div class="col-lg-8 row-item">
                                <div class="blog-default-area__content blog-details blog-default-area__content-alt-two">
                                    <div class="details-poster">
                                        <img src="<?php echo e(asset('assets/front/images/news/blog-default-poster.png')); ?>"
                                            alt="Blog">
                                    </div>
                                    <div class="blog-post-date">
                                        <p><i class="fa-solid fa-clock"></i><?php echo e($post->FormatDate($post->published_at)); ?></p>
                                    </div>
                                    <br>
                                    <h2><?php echo e($post->title); ?></h2>

                                    <p  style="text-align:justify;"><?php echo $post->content; ?> </p>

                                    <div class="img-group">
                                        <img src="<?php echo e(asset('assets/front/images/campaigns/campaign-details-slider-one.png')); ?>"
                                            alt="Donate">
                                        <img src="<?php echo e(asset('assets/front/images/campaigns/campaign-details-slider-two.png')); ?>"
                                            alt="Donate">
                                    </div>
                                    <div class="post__tags">
                                        <p class="tertiary"> Tags</p>
                                        <div class="tags">
                                            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="#" class="tag-btn"><?php echo e($tag->name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="author__info">
                                        <div class="avatar wow fadeInUp">
                                            <img src="<?php echo e(asset('assets/front/images/avatars/author.png')); ?>"
                                                alt="Post Author">
                                        </div>
                                        <div class="author__content">
                                            <h6><?php echo e($post->user->name); ?></h6>
                                            
                                            <div class="social social--secondary">
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 row-item">
                                <div class="blog-default-area__sidebar">
                                    <div class="sidebar-single sidebar-single-default">
                                        <form action="#" method="post" name="searchPost">
                                            <div class="input-group-btn input-group-btn--secondary">
                                                <input type="search" name="search__post" id="searchPost"
                                                    placeholder="<?php echo app('translator')->get('Search'); ?>" required>
                                                <button type="submit" class="button button--effect"><i
                                                        class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="sidebar-single sidebar-single-default sidebar-single-default-profile wow fadeInUp">
                                        <div class="img-box">
                                            <img src="<?php echo e(asset('assets/front/images/avatars/markusa.png')); ?>"
                                                alt="Markusa">
                                        </div>
                                        <h4 class="text-center">Nicolas Markusa</h4>
                                        <p class="text-center">Lorem ipsum dolor sit amet, adipiscing elit, sed do
                                            eiusmod
                                            temptor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="social social--tertiary">
                                            <a href="javascript:void(0)">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="sidebar-single sidebar-single-default wow fadeInUp">
                                        <h4><?php echo app('translator')->get('Recent Posts'); ?></h4>
                                        <?php $__currentLoopData = $recentsPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="recent-post-single">
                                                <div class="latest-news__single-content">
                                                    <p>
                                                        <a
                                                            href="<?php echo e(route('front.blog.show', $recent)); ?>"><?php echo e($recent->title); ?></a>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <div class="categories sidebar-single sidebar-single-default">
                                        <h4><?php echo app('translator')->get('Quick Link'); ?></h4>
                                        <ul>
                                            
                                            <li>
                                                <a href="<?php echo e(route('front.blog.index')); ?>><i class="fa-solid
                                                    fa-arrow-right-long"></i>Our
                                                    Blog</a>
                                            </li>
                                            <li>
                                                <a href="about-us.html"><i
                                                        class="fa-solid fa-arrow-right-long"></i><?php echo app('translator')->get('About'); ?></a>
                                            </li>
                                            <li>
                                                <a href="team.html"><i class="fa-solid fa-arrow-right-long"></i>Our
                                                    <?php echo app('translator')->get('Team'); ?></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('front.contact')); ?>"><i
                                                        class="fa-solid fa-arrow-right-long"></i><?php echo app('translator')->get('Contact us'); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="sidebar-single sidebar-single-default sidebar-single--secondary excellence">
                                        <h4><?php echo app('translator')->get('Blood Excellence'); ?> </h4>
                                        <p><?php echo app('translator')->get('Expanded Blood Donate Services Here'); ?></p>
                                        
                                        <a href="<?php echo e(route('front.contact')); ?>"
                                            class="button button--quinary button--effect"><?php echo app('translator')->get('Contact us'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== #blog details section end ==== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/front/blog/show.blade.php ENDPATH**/ ?>
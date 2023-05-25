<div class="sidenav d-none d-xl-block">
    <div class="navbar-inner">
        <div class="close-sidebar-wrapper">
            <a href="javascript:void(0)" class="close-sidebar">
                <i class="fa-solid fa-xmark"></i>
            </a>
        </div>
        <div class="intro">
            <a href="index.html">
                <img src="<?php echo e(asset('assets/front/images/logo.png')); ?>" alt="Logo" class="logo">
            </a>
        </div>
        <ul>
            <li><a href="index.html"><i class="fa-solid fa-angle-right"></i> <?php echo app('translator')->get('Home'); ?></a></li>
            <li><a href="about-us.html"><i class="fa-solid fa-angle-right"></i> <?php echo app('translator')->get('About'); ?></a></li>
            
            <li><a href="blog.html"><i class="fa-solid fa-angle-right"></i> <?php echo app('translator')->get('Blog'); ?></a></li>
            
            
        </ul>
        <form action="#" method="post">
            <div class="input-group-btn input-group-btn--secondary">
                <input type="email" name="sidenav__newsletter__email" id="sidenavNewsletterEmail"
                    placeholder="<?php echo app('translator')->get('Enter Your Email'); ?>" required>
                <button type="submit" class="button button--effect"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/includes/front/sideNav.blade.php ENDPATH**/ ?>
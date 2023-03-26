<?php
    $currentUri = Route::current()->uri;
?>

<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="admin-image "> <img src="<?php echo e(asset('assets/front/images/avatars/niro.png')); ?>" alt=""> </div>
        <div class="admin-action-info"> <span><?php echo app('translator')->get('welcome'); ?></span>
            <h3><?php echo e(auth()->user()->name); ?></h3>
            <ul>
                <li><a href="<?php echo e(route('home')); ?>" class="text-success" title="Go to WelcomePage"><i
                            class="fas fa-home"></i> <?php echo app('translator')->get('WelcomePage'); ?></a></li> <br>

                
                <li>
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <a class="text-danger" title="sign out" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                        this.closest('form').submit();">
                            <i class="btn-sm fas fa-sign-out-alt"></i> <?php echo app('translator')->get('Log Out'); ?>
                        </a>

                        
                    </form>
                </li>
            </ul>
        </div>
        <div class="quick-stats">
            <h5>Today Report</h5>
            <ul>
                <li><span>16<i>Patient</i></span></li>
                <li><span>20<i>Panding</i></span></li>
                <li><span>04<i>Visit</i></span></li>
            </ul>

        </div>
        <div class="row"></div>
        <hr>
    </div>
    <br>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if(Str::contains($currentUri, 'dashboard')): ?> active open <?php endif; ?>"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                        class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            

            <li class="<?php if(Str::contains($currentUri, 'users')): ?> active open <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(route('admin.users.index')); ?>"><i class="zmdi zmdi-account-o"></i>
                    <span><?php echo app('translator')->get('All Users'); ?></span></a>
            </li>
            <li class="<?php if(Str::contains($currentUri, 'contacts')): ?> active open <?php endif; ?>">
                <a class="nav-link" href="<?php echo e(route('admin.contacts')); ?>"><i class="fa fa-comment"></i>
                    <span><?php echo app('translator')->get('All Messages'); ?></span></a>
            </li>

        </ul>
    </div>
    <!-- #Menu -->
</aside>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/includes/back/leftSidebar.blade.php ENDPATH**/ ?>
<?php
    $currentUri = Route::current()->uri;
?>

<header class="header">
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?php echo e(asset('assets/front/images/logo-light.png')); ?>" alt="Logo" class="logo">
            </a>
            <div class="collapse navbar-collapse justify-content-center order-3 order-xl-2" id="primaryNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if(Str::contains($currentUri, '/')): ?> active <?php endif; ?>"   href="<?php echo e(route('home')); ?>" id="navbarHomeDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo app('translator')->get('Home'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html"><?php echo app('translator')->get('About'); ?></a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="services.html">Our Services</a></li>
                            <li><a class="dropdown-item" href="service-details.html">Service Details</a></li>
                            <li><a class="dropdown-item" href="team.html">Team Members</a></li>
                            <li><a class="dropdown-item" href="donate-now.html">Donate Now</a></li>
                            <li><a class="dropdown-item" href="gallery.html">Photo Gallery</a></li>
                            <li><a class="dropdown-item" href="register.html">Registration Now</a></li>
                            <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                            <li><a class="dropdown-item" href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a class="dropdown-item" href="terms-conditions.html">Terms & Conditions</a></li>
                            <li><a class="dropdown-item" href="404.html">Error</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php if(Str::contains($currentUri, 'contact-us')): ?> active <?php endif; ?>"   href="<?php echo e(route('front.contact')); ?>"><?php echo app('translator')->get('Contact us'); ?></a>
                    </li>
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>"><?php echo app('translator')->get('Dashboard'); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">

                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('Log in'); ?></a>
                            </li>
                            <li class="nav-item">
                                <?php if(Route::has('register')): ?>
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo app('translator')->get('Register'); ?></a>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    </li>

                </ul>
            </div>
            <div class="navbar-out order-2 order-xl-3">
                <div class="navbar-out__group">
                    <a href="javascript:void(0)" class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.lang.change')->html();
} elseif ($_instance->childHasBeenRendered('JcYqVLg')) {
    $componentId = $_instance->getRenderedChildComponentId('JcYqVLg');
    $componentTag = $_instance->getRenderedChildComponentTagName('JcYqVLg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JcYqVLg');
} else {
    $response = \Livewire\Livewire::mount('front.lang.change');
    $html = $response->html();
    $_instance->logRenderedChild('JcYqVLg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


                    

                    <a href="javascript:void(0)" class="d-none d-xl-block open-sidenav">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav"
                    aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle Primary Nav">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/includes/front/header.blade.php ENDPATH**/ ?>
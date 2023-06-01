@php
    $currentUri = Route::current()->uri;
@endphp

<header class="header">
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/front/images/logo-light.png') }}" alt="Logo" class="logo">
            </a>
            <div class="collapse navbar-collapse justify-content-center order-3 order-xl-2" id="primaryNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('home')) active @endif" href="{{ route('home') }}">
                            @lang('Home')
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link @if (Str::contains($currentUri, 'Hospital')) active @endif"
                            class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarCampaignDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('Register')
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarCampaignDropdown">
                            @auth
                            <li><a class="dropdown-item" href="{{ route('chatify') }}">@lang('Chat')</a>

                            @else
                                <li><a class="dropdown-item" href="{{ route('register.donor.view') }}">@lang('Donor')</a>
                                </li>
                            @endauth
                            <li><a class="dropdown-item"
                                    href="{{ route('front.register.hospital') }}">@lang('Hospital')</a></li>
                        </ul>
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
                    <li class="nav-item dropdown ">
                        <a class="nav-link @if (request()->routeIs('front.blog.index') || request()->routeIs('front.blog.show')) active @endif"
                            href="{{ route('front.blog.index') }}">
                            Blog
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link @if (Str::contains($currentUri, 'contact-us')) active @endif"
                            href="{{ route('front.contact') }}">@lang('Contact us')</a>
                    </li>
                    @if (Route::has('login'))
                        @auth

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">{{ Auth::user()->name }}</a>
                            </li>
                        @else
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('login') }}">@lang('Log in')</a>
                            </li>

                        @endauth
                    @endif

                    </li>

                </ul>
            </div>
            <div class="navbar-out order-2 order-xl-3">
                <div class="navbar-out__group">
                    <a href="javascript:void(0)" class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>

                    <ul class="nav-item dropdown navbar-nav " class="input mb-0">

                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-globe"></i>
                            @if (app()->getLocale() === 'fr')
                                @lang('Français')
                            @else
                                @lang('English')
                            @endif
                        </a>
                        <div class="dropdown-menu nav-item  ">
                            <a href="{{ route('lang', 'fr') }}" class="dropdown-item  has-icon">@lang('Français')</a>
                            <a href="{{ route('lang', 'en') }}" class="dropdown-item has-icon">@lang('English')</a>
                        </div>
                    </ul>


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

<div class="sidenav d-none d-xl-block">
    <div class="navbar-inner">
        <div class="close-sidebar-wrapper">
            <a href="javascript:void(0)" class="close-sidebar">
                <i class="fa-solid fa-xmark"></i>
            </a>
        </div>
        <div class="intro">
            <a href="index.html">
                <img src="{{ asset('assets/front/images/logo.png') }}" alt="Logo" class="logo">
            </a>
        </div>
        <ul>
            <li><a href="index.html"><i class="fa-solid fa-angle-right"></i> @lang('Home')</a></li>
            <li><a href="about-us.html"><i class="fa-solid fa-angle-right"></i> @lang('About')</a></li>
            {{-- <li><a href="campaign.html"><i class="fa-solid fa-angle-right"></i> @lang('Campaign')</a></li> --}}
            <li><a href="blog.html"><i class="fa-solid fa-angle-right"></i> @lang('Blog')</a></li>
            {{-- <li><a href="blog-details.html"><i class="fa-solid fa-angle-right"></i>@lang(' Blog Details')</a></li> --}}
            {{-- <li><a href="{{ route('') }}"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li> --}}
        </ul>
        <form action="#" method="post">
            <div class="input-group-btn input-group-btn--secondary">
                <input type="email" name="sidenav__newsletter__email" id="sidenavNewsletterEmail"
                    placeholder="@lang('Enter Your Email')" required>
                <button type="submit" class="button button--effect"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</div>

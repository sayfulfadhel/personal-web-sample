<header id="site_header" class="header">
    <div class="header-content clearfix">
        <div class="text-logo">
            <a href="{{ route('home') }}">
                <div class="logo-symbol">N</div>
                <div class="logo-text">
                    Ndo
                    <span>Malau</span>
                </div>
            </a>
        </div>
        <div class="site-nav mobile-menu-hide">
            <ul class="leven-classic-menu site-main-menu">
                <li class="menu-item{{ request()->is('about-me') ? ' current-menu-item' : '' }}">
                    <a href="{{ route('about-me') }}">ABOUT</a>
                </li>
                <li class="menu-item{{ request()->is('portfolio') ? ' current-menu-item' : '' }}">
                    <a href="{{ route('portfolio') }}">PORTFOLIO</a>
                </li>
                <li class="menu-item{{ request()->is('blog') ? ' current-menu-item' : '' }}">
                    <a href="{{ route('blog') }}">BLOG</a>
                </li>
                <li class="menu-item{{ request()->is('contact') ? ' current-menu-item' : '' }}">
                    <a href="{{ route('contact') }}">CONTACT</a>
                </li>
            </ul>
        </div>
        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</header>

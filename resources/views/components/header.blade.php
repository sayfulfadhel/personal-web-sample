<header id="site_header" class="header">
    <div class="header-content clearfix">
        <div class="text-logo">
            <a href="{{ route('home') }}">
                @svg('laravel-logo-id', ['class' => 'inline-block'])
            </a>
        </div>
        <div class="site-nav mobile-menu-hide">
            <ul class="leven-classic-menu site-main-menu">
                <li class="menu-item{{ request()->is('about-me') ? ' current-menu-item' : '' }}">
                    <a href="{{ route('about-me') }}">About Me</a>
                </li>
                <li class="menu-item{{ request()->is('portfolio') ? ' current-menu-item' : '' }}">
                    <a href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li class="menu-item{{ request()->is('blog') ? ' current-menu-item' : '' }}">
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="menu-item{{ request()->is('contact') ? ' current-menu-item' : '' }}">
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</header>

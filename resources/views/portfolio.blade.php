@extends('layouts.base', ['title' => 'Portfolio'])
@section('content')
    <div id="main" class="site-main">
        <div id="main-content" class="single-page-content">
            <div id="primary" class="content-area">
                <div class="page-title">
                    <h1>Portfolio</h1>
                    <div class="page-subtitle">
                        <h4> My Works</h4>
                    </div>
                </div>
                <div id="content" class="page-content site-content single-post" role="main">
                    <div class="row">
                        <div class=" col-xs-12 col-sm-12 ">
                            <div id="portfolio_content_q" class="portfolio-content">
                                <div class="portfolio-grid three-columns shuffle">
                                    <figure class="item lbimage">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('img/portfolio/1.jpg') }}" alt="Rideshur" />
                                            <a class="lightbox" href="{{ asset('img/portfolio/1.jpg') }}"></a>
                                        </div>
                                        <i class="fa fa-image"></i>
                                        <h4 class="name">Rideshur</h4>
                                        <span class="category">Brand</span>
                                    </figure>
                                    <figure class="item lbimage">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('img/portfolio/2.jpg') }}" alt="Greenbridge" />
                                            <a class="lightbox" href="{{ asset('img/portfolio/2.jpg') }}"></a>
                                        </div>
                                        <i class="fa fa-image"></i>
                                        <h4 class="name">Greenbridge</h4>
                                        <span class="category">Brand</span>
                                    </figure>
                                    <figure class="item lbimage">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('img/portfolio/3.jpg') }}" alt="Humn.ai" />
                                            <a class="lightbox" href="{{ asset('img/portfolio/3.jpg') }}"></a>
                                        </div>
                                        <i class="fa fa-image"></i>
                                        <h4 class="name">Humn.ai</h4>
                                        <span class="category">Brand</span>
                                    </figure>
                                    <figure class="item lbimage">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('img/portfolio/4.jpg') }}" alt="Perdoo" />
                                            <a class="lightbox" href="{{ asset('img/portfolio/4.jpg') }}"></a>
                                        </div>
                                        <i class="fa fa-image"></i>
                                        <h4 class="name">Perdoo</h4>
                                        <span class="category">Brand</span>
                                    </figure>
                                    <figure class="item lbimage">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('img/portfolio/5.jpg') }}" alt="Shepper" />
                                            <a class="lightbox" href="{{ asset('img/portfolio/5.jpg') }}"></a>
                                        </div>
                                        <i class="fa fa-image"></i>
                                        <h4 class="name">Shepper</h4>
                                        <span class="category">Brand</span>
                                    </figure>
                                    <figure class="item lbimage">
                                        <div class="portfolio-item-img">
                                            <img src="{{ asset('img/portfolio/6.jpg') }}" alt="SeedLegals" />
                                            <a class="lightbox" href="{{ asset('img/portfolio/6.jpg') }}"></a>
                                        </div>
                                        <i class="fa fa-image"></i>
                                        <h4 class="name">SeedLegals</h4>
                                        <span class="category">Brand</span>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

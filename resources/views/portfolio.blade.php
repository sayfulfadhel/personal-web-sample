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
                                        <img src="/img/portfolio/1.jpg" alt="Project 1" title="" />
                                        <a class="lightbox" href="/img/portfolio/1.jpg"></a>
                                    </div>
                                    <i class="fa fa-image"></i>
                                    <h4 class="name">Project 1</h4>
                                    <span class="category">Image</span>
                                </figure>
                                <figure class="item lbimage">
                                    <div class="portfolio-item-img">
                                        <img src="/img/portfolio/2.jpg" alt="Project 2" title="" />
                                        <a class="lightbox" href="/img/portfolio/2.jpg"></a>
                                    </div>
                                    <i class="fa fa-image"></i>
                                    <h4 class="name">Project 2</h4>
                                    <span class="category">Image</span>
                                </figure>
                                <figure class="item lbimage">
                                    <div class="portfolio-item-img">
                                        <img src="/img/portfolio/3.jpg" alt="Project 3" title="" />
                                        <a class="lightbox" href="/img/portfolio/3.jpg"></a>
                                    </div>
                                    <i class="fa fa-image"></i>
                                    <h4 class="name">Project 3</h4>
                                    <span class="category">Image</span>
                                </figure>
                                <figure class="item lbimage">
                                    <div class="portfolio-item-img">
                                        <img src="/img/portfolio/4.jpg" alt="Project 4" title="" />
                                        <a class="lightbox" href="/img/portfolio/4.jpg"></a>
                                    </div>
                                    <i class="fa fa-image"></i>
                                    <h4 class="name">Project 4</h4>
                                    <span class="category">Image</span>
                                </figure>
                                <figure class="item lbimage">
                                    <div class="portfolio-item-img">
                                        <img src="/img/portfolio/5.jpg" alt="Project 5" title="" />
                                        <a class="lightbox" href="/img/portfolio/5.jpg"></a>
                                    </div>
                                    <i class="fa fa-image"></i>
                                    <h4 class="name">Project 5</h4>
                                    <span class="category">Image</span>
                                </figure>
                                <figure class="item lbimage">
                                    <div class="portfolio-item-img">
                                        <img src="/img/portfolio/6.jpg" alt="Project 6" title="" />
                                        <a class="lightbox" href="/img/portfolio/6.jpg"></a>
                                    </div>
                                    <i class="fa fa-image"></i>
                                    <h4 class="name">Project 6</h4>
                                    <span class="category">Image</span>
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

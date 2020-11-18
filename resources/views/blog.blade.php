@extends('layouts.base', ['title' => 'Blog'])
@section('content')
<div id="main" class="site-main">
    <div id="main-content" class="single-page-content">
        <div id="primary" class="content-area">

            <div class="page-title">
                <h1>Blog</h1>
                <div class="page-subtitle">
                    <h4> My Diary</h4>
                </div>
            </div>

            <div id="content" class="page-content site-content single-post" role="main">

                <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">

                        <div class="blog-masonry three-columns clearfix">
                            <!-- Blog Post 1 -->
                            <div class="item">
                                <div class="blog-card">
                                    <div class="media-block">
                                        <div class="category">
                                            <a href="#" title="View all posts in WordPress">WordPress</a>
                                        </div>
                                        <a href="{{ route('post')}}">
                                            <img src="/img/portfolio/1.jpg"
                                                alt="How to Make a WordPress Plugin Extensible" title="" />
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">04 Dec 2019</div>
                                        <a href="{{ route('post')}}">
                                            <h4 class="blog-item-title">How to Make a WordPress Plugin Extensible</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 1 -->

                            <!-- Blog Post 2 -->
                            <div class="item">
                                <div class="blog-card">
                                    <div class="media-block">
                                        <div class="category">
                                            <a href="#" title="View all posts in Design">Design</a>
                                        </div>

                                        <a href="{{ route('post')}}">
                                            <img src="/img/portfolio/2.jpg"
                                                alt="6 Easy Steps to Better Icon Design" title="" />
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">04 Dec 2019</div>
                                        <a href="{{ route('post')}}">
                                            <h4 class="blog-item-title">6 Easy Steps to Better Icon Design</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 2 -->

                            <!-- Blog Post 3 -->
                            <div class="item">
                                <div class="blog-card">
                                    <div class="media-block">
                                        <div class="category">
                                            <a href="#" title="View all posts in UI">UI</a>
                                        </div>
                                        <a href="{{ route('post')}}">
                                            <img src="/img/portfolio/3.jpg"
                                                alt="Creative and Innovative Navigation Designs" title="" />
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">04 Dec 2019</div>
                                        <a href="{{ route('post')}}">
                                            <h4 class="blog-item-title">Creative and Innovative Navigation Designs</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 3 -->

                            <!-- Blog Post 4 -->
                            <div class="item">
                                <div class="blog-card">
                                    <div class="media-block">
                                        <div class="category">
                                            <a href="#" title="View all posts in Design">Design</a>
                                        </div>
                                        <a href="{{ route('post')}}">
                                            <img src="/img/portfolio/4.jpg"
                                                alt="Why I Switched to Sketch For UI Design" title="" />
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">04 Dec 2019</div>
                                        <a href="{{ route('post')}}">
                                            <h4 class="blog-item-title">Why I Switched to Sketch For UI Design</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 4 -->

                            <!-- Blog Post 5 -->
                            <div class="item">
                                <div class="blog-card">
                                    <div class="media-block">
                                        <div class="category">
                                            <a href="#" title="View all posts in E-Commerce">E-Commerce</a>
                                        </div>
                                        <a href="{{ route('post')}}">
                                            <img src="/img/portfolio/5.jpg"
                                                alt="An Overview of E-Commerce Platforms" title="" />
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">04 Dec 2019</div>
                                        <a href="{{ route('post')}}">
                                            <h4 class="blog-item-title">An Overview of E-Commerce Platforms</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 5 -->

                            <!-- Blog Post 6 -->
                            <div class="item">
                                <div class="blog-card">
                                    <div class="media-block">
                                        <div class="category">
                                            <a href="#" title="View all posts in E-Commerce">E-Commerce</a>
                                        </div>
                                        <a href="{{ route('post')}}">
                                            <img src="/img/portfolio/6.jpg"
                                                alt="Designing the Perfect Feature Comparison Table" title="" />
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">04 Dec 2019</div>
                                        <a href="{{ route('post')}}">
                                            <h4 class="blog-item-title">Designing the Perfect Feature Comparison Table
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Post 6 -->
                        </div>

                        <a class="btn btn-primary" href="#">See All Posts</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

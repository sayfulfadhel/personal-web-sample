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
                            <div class="blog-masonry two-columns clearfix">
                                <div class="item">
                                    <div class="blog-card">
                                        <div class="media-block">
                                            <div class="category">
                                                <a href="#" title="View all posts in WordPress">WordPress</a>
                                            </div>
                                            <a href="{{ route('post') }}">
                                                <img src="{{ asset('img/blog/1.jpg') }}" alt="How to Make a WordPress Plugin Extensible" />
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <div class="post-date">04 Dec 2020</div>
                                            <a href="{{ route('post') }}">
                                                <h4 class="blog-item-title">How to Make a WordPress Plugin Extensible</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-card">
                                        <div class="media-block">
                                            <div class="category">
                                                <a href="#" title="View all posts in Design">Design</a>
                                            </div>
                                            <a href="{{ route('post') }}">
                                                <img src="{{ asset('img/blog/2.jpg') }}" alt="6 Easy Steps to Better Icon Design" />
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <div class="post-date">04 Dec 2020</div>
                                            <a href="{{ route('post') }}">
                                                <h4 class="blog-item-title">6 Easy Steps to Better Icon Design</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="#">See All Posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

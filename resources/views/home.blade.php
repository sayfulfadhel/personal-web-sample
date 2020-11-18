@extends('layouts.base', ['title' => 'Home'])
@section('content')
    <div id="main" class="site-main">
        <div id="main-content" class="single-page-content">
            <div id="primary" class="content-area">
                <div id="content" class="page-content site-content single-post" role="main">
                    <div class="row">
                        <div class=" col-xs-12 col-sm-12">
                            <div class="home-content">
                                <div class="row flex-v-align">
                                    <div class="col-sm-12 col-md-5 col-lg-5">
                                        <div class="home-photo">
                                            <div class="hp-inner" style="background-image: url(/img/main_photo.jpg);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7 col-lg-7">
                                        <div class="home-text hp-left">
                                            <div class="item">
                                                <h4>HI THERE !</h4>
                                            </div>
                                            <h1>I'M Ndo Malau</h1>
                                            <p>I'm a Indonesia based web designer & front‑end developer focused on crafting clean & user‑friendly experiences, I am passionate about building excellent software that improves the lives of those around me.</p>
                                            <div class="home-buttons">
                                                <a href="#" class="btn btn-primary">Download CV</a>
                                                <a href="{{ route('about-me') }}" class="btn btn-secondary">More About Me</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

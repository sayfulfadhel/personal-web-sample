@extends('layouts.base', ['title' => 'Post'])
@section('content')
    <div id="main" class="site-main">
        <div id="main-content" class="single-page-content">
            <div id="primary" class="content-area">
                <div id="content" class="page-content site-content" role="main">
                    <article class="post">
                        <header class="entry-header">
                            <div class="entry-meta entry-meta-top">
                                <span><a href="#" rel="category tag">WordPress</a></span>
                            </div>
                            <h2 class="entry-title">How to Make a WordPress Plugin Extensible</h2>
                        </header>
                        <div class="post-thumbnail">
                            <img src="{{ asset('img/blog/1.jpg')}}" alt="Thumbnails" />
                        </div>
                        <div class="post-content">
                            <div class="entry-content">
                                <div class="row">
                                    <div class=" col-xs-12 col-sm-12 ">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam cursus lorem a
                                            turpis feugiat, et porttitor leo dapibus. In ut tincidunt lectus, id hendrerit
                                            enim. Maecenas at nibh eu nulla dignissim posuere. Nullam viverra vitae elit a
                                            tempus. Donec quis eleifend eros. Donec imperdiet nisi mi, in ultricies risus
                                            porta ac. Nullam laoreet convallis nibh sed congue. Donec nulla ipsum, tincidunt
                                            a augue maximus, pellentesque imperdiet lectus. Aenean posuere consequat libero,
                                            id efficitur quam dictum volutpat.</p>
                                        <p>Donec mollis a lacus a pharetra. Nam facilisis enim erat, in scelerisque eros
                                            mollis quis. Aliquam erat volutpat. Nam vel nibh justo. Nunc vestibulum leo a
                                            ultricies malesuada. Proin quis volutpat sem. Morbi consequat lacinia pulvinar.
                                        </p>
                                        <div class="single-image ">
                                            <img src="{{ asset('img/blog/2.jpg')}}" alt="image">
                                        </div>
                                        <p>Cras commodo, nulla a commodo sodales, nisl mauris interdum lectus, ac mattis
                                            lacus purus ut nunc. Fusce volutpat aliquam euismod. Aliquam pulvinar neque
                                            turpis, in tincidunt mi varius et. Curabitur vitae tempus mauris, porta dictum
                                            ante. Nam pellentesque et mauris a suscipit. Vivamus gravida erat nec elit
                                            ullamcorper, quis laoreet metus efficitur. Duis vulputate, mauris a auctor
                                            pretium, elit nisl eleifend nulla, non accumsan augue massa quis tellus. Aliquam
                                            at justo libero.</p>
                                        <p>Donec mollis a lacus a pharetra. Nam facilisis enim erat, in scelerisque eros
                                            mollis quis. Aliquam erat volutpat. Nam vel nibh justo. Nunc vestibulum leo a
                                            ultricies malesuada. Proin quis volutpat sem. Morbi consequat lacinia pulvinar.
                                        </p>
                                        <blockquote class="quote fw-quote-left fw-quote-md ">
                                            <p>Mauris lectus dolor, varius ut imperdiet nec, dignissim nec ligula. Cras
                                                posuere odio et finibus accumsan. Mauris in sem non arcu consectetur posuere
                                                sed quis justo. Sed turpis mauris, aliquet ac lacus nec, tempor condimentum
                                                justo.</p>
                                            <footer class="quote-author">
                                                <span>Edgar D. Wang</span>
                                            </footer>
                                        </blockquote>
                                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                            mus. Sed vestibulum mauris condimentum ultrices scelerisque. Fusce pulvinar
                                            cursus luctus. Cras dapibus placerat magna, quis euismod nisi consequat euismod.
                                            Curabitur finibus nisi at justo ultricies, nec congue metus rutrum. Quisque
                                            vulputate sollicitudin aliquam. Curabitur posuere auctor dapibus.</p>
                                        <p>Donec mollis a lacus a pharetra. Nam facilisis enim erat, in scelerisque eros
                                            mollis quis. Aliquam erat volutpat. Nam vel nibh justo. Nunc vestibulum leo a
                                            ultricies malesuada. Proin quis volutpat sem. Morbi consequat lacinia pulvinar.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-meta entry-meta-bottom">
                                <div class="date-author">
                                    <span class="entry-date">
                                        <a href="#" rel="bookmark">
                                            <i class="fas fa-clock"></i>
                                            <time class="entry-date" datetime="2020-04-04T08:29:37+00:00"> December 4,2020</time>
                                        </a>
                                    </span>
                                </div>
                                <div class="entry-share btn-group share-buttons">
                                    <a href="#" class="btn" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="btn" target="_blank" >
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="btn" >
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="post-tags">
                                <span class="tags">
                                    <a href="#" rel="tag">design</a>
                                    <a href="#" rel="tag">plugin</a>
                                    <a href="#" rel="tag">WordPress</a>
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection

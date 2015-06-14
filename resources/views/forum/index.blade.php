@extends('app')

@section('content')

    <div class="page-heading text-right">
        <div class="container">
            @include('_partials.searchForm')
            <h2>Forum</h2>
        </div>
    </div>

    <!-- General -->
    <div class="container">
        <hr class="with-shadow">
        <!-- Badge -->
        <div class="badge badge-primary">
            <span class="icon"><i class="fa fa-comments-o"></i></span>
            General
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="space-top padding-bottom">
        <div class="container">
            <div class="masonry-grid">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>

                <div class="item col-md-1">
                    <div class="post-tile">
                        <a href="/Blog/Post" class="post-thumb waves-effect">
                            <img src="/img/blog/post02.png" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Blog/Post"><h3>Lifetime Happines</h3></a>
                                <span>Summer mood</span>
                            </div>
                            <div class="post-meta">
                                <div class="column">
                                    <span>In </span><a href="#">Design</a>&nbsp;&nbsp;&nbsp;&nbsp;by <a href="#">Bedismo</a>
                                </div>
                                <div class="column text-right">
                                    <span>October 08, 2014</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item col-md-1">
                    <div class="post-tile">
                        <a href="/Blog/Post" class="post-thumb waves-effect">
                            <img src="/img/blog/post02.png" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Blog/Post"><h3>Lifetime Happines</h3></a>
                                <span>Summer mood</span>
                            </div>
                            <div class="post-meta">
                                <div class="column">
                                    <span>In </span><a href="#">Design</a>&nbsp;&nbsp;&nbsp;&nbsp;by <a href="#">Bedismo</a>
                                </div>
                                <div class="column text-right">
                                    <span>October 08, 2014</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="item col-md-2 col-sm-12">
                    <div class="post-tile">
                        <a href="/Forum/Category" class="post-thumb waves-effect">
                            <img src="/img/people/woman1-small.jpg" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Forum/Category"><h3>Forum Rules</h3></a>
                                <span>We like you, keep it that way.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="item col-md-2 col-sm-12">
                    <div class="post-tile">
                        <a href="/Forum/Category" class="post-thumb waves-effect">
                            <img src="/img/people/woman2-small.jpg" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Forum/Category"><h3>Announce</h3></a>
                                <span>Our awesome updates.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Blog Grid End -->

    <!-- Game -->
    <div class="container">
        <hr class="with-shadow">
        <!-- Badge -->
        <div class="badge badge-primary">
            <span class="icon"><i class="fa fa-comments-o"></i></span>
            Game
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="space-top padding-bottom">
        <div class="container">
            <div class="masonry-grid">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>

                <div class="item col-md-1">
                    <div class="post-tile">
                        <a href="/Blog/Post" class="post-thumb waves-effect">
                            <img src="/img/blog/post02.png" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Blog/Post"><h3>Lifetime Happines</h3></a>
                                <span>Summer mood</span>
                            </div>
                            <div class="post-meta">
                                <div class="column">
                                    <span>In </span><a href="#">Design</a>&nbsp;&nbsp;&nbsp;&nbsp;by <a href="#">Bedismo</a>
                                </div>
                                <div class="column text-right">
                                    <span>October 08, 2014</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item col-md-1">
                    <div class="post-tile">
                        <a href="/Blog/Post" class="post-thumb waves-effect">
                            <img src="/img/blog/post02.png" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Blog/Post"><h3>Lifetime Happines</h3></a>
                                <span>Summer mood</span>
                            </div>
                            <div class="post-meta">
                                <div class="column">
                                    <span>In </span><a href="#">Design</a>&nbsp;&nbsp;&nbsp;&nbsp;by <a href="#">Bedismo</a>
                                </div>
                                <div class="column text-right">
                                    <span>October 08, 2014</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="item col-md-2 col-sm-12">
                    <div class="post-tile">
                        <a href="/Forum/Category" class="post-thumb waves-effect">
                            <img src="/img/people/woman1-small.jpg" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Forum/Category"><h3>Forum Rules</h3></a>
                                <span>We like you, keep it that way.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="item col-md-2 col-sm-12">
                    <div class="post-tile">
                        <a href="/Forum/Category" class="post-thumb waves-effect">
                            <img src="/img/people/woman2-small.jpg" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Forum/Category"><h3>Announce</h3></a>
                                <span>Our awesome updates.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Blog Grid End -->
@stop
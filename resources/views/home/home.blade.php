@extends('app')

@section('page-title')
    One Secret Fantasy - Make your fantasies come to life
@stop

@section('page-description')
    Make your fantasies come to life with One Secret Fantasy
@stop

@section('page-keywords')
    One Secret Fantasy, dreams, fantasies
@stop

@section('content')


    <!-- NEWS -->
    <!-- Blog Posts -->
    <section class="fw-bg top-inner-shadow padding-top-3x padding-bottom-3x" id="posts" style="background-color: #181818;">
        <div class="container">
            <div class="row">
                @include('_partials.searchForm')
                <br>
                <div class="col-md-3 col-sm-4">
                    <div class="block-heading text-right light-color">
                        <h2>News</h2>
                        <span>All updates</span>
                    </div>
                    {{--<div class="text-right">
                        <a href="blog.html" class="text-smaller light-color">All Posts</a>
                    </div>--}}
                            <!-- Twitter Feed -->
                    <div class="twitter-feed">
                        @foreach($tweets as $tweet)
                        <div class="tweet tweet-float">
                            <a href="{{ \Thujohn\Twitter\Facades\Twitter::linkUser('@OSFtheGame') }}" target="_blank" class="author">@OSFtheGame</a>
                            <p>{!! $tweet->text !!}</p>
                        </div>
                        @endforeach


                        <div class="text-right">
                            <a href="{{ \Thujohn\Twitter\Facades\Twitter::linkUser('@OSFtheGame') }}" target="_blank" class="text-smaller light-color">Follow us on twitter</a>
                        </div>
                    </div>
                    <div class="space-bottom-2x visible-xs"></div>
                </div>


                <!-- Blog Posts -->
                <div class="col-lg-8 col-lg-offset-1 col-md-9 col-sm-8">
                    <div class="light-color posts">
                        @foreach ($blogs as $blog)
                        <div class="item col-md-4 col-sm-6">
                            <div class="post-tile home-blog-tile">
                                @if (isset($blog->image))
                                <a href="{{ route('blogs.show', $blog->slug) }}" class="post-thumb waves-effect" style="background:url({{ $blog->image }}); height:150px;">

                                </a>
                                @endif
                                <div class="post-body">
                                    <div class="post-title">
                                        <a href="{{ route('blogs.show', $blog->slug) }}"><h3>{{ $blog->title }}</h3></a>
                                        <span>{{ \Illuminate\Support\Str::words(strip_tags($blog->body), 20) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features -->
    <section class="fw-bg bg-align-bottom top-inner-shadow" style="background-color: #181818;" id="features">

        <!-- Feature Tabs -->
        <div class="feature-tabs">
            <!-- Heading when columns stack -->
            <div class="block-heading visible-when-stack">
                <h2>Why is it special?</h2>
                <span>Look what this app has to offer</span>
            </div>
            <div class="clearfix">
                <!-- Devices -->
                <div class="devices">
                    <div class="tablet">

                        <img src="/img/people/Home1.png" alt="Dating">

                        {{--<img class="reflection" src="/img/features/tablet-reflection.png" alt="Reflection">
                        <div class="mask">
                            <ul class="screens">
                                <li class="active in" id="ts01"><img src="/img/features/tablet/screen.png" alt="Screen 01"></li>
                                <li id="ts02"><img src="/img/features/tablet/screen.png" alt="Screen 02"></li>
                                <li id="ts03"><img src="/img/features/tablet/screen.png" alt="Screen 03"></li>
                                <li id="ts04"><img src="/img/features/tablet/screen.png" alt="Screen 04"></li>
                            </ul>
                        </div>--}}

                    </div>
                    <div class="phone">
                        <img src="/img/people/Home2.png" alt="Woman">

                        {{--
                        <div class="mask">
                            <ul class="screens">
                                <li class="active in" id="ps01"><img src="/img/features/phone/screen.png" alt="Screen 01"></li>
                                <li id="ps02"><img src="/img/features/phone/screen.png" alt="Screen 02"></li>
                                <li id="ps03"><img src="/img/features/phone/screen.png" alt="Screen 03"></li>
                                <li id="ps04"><img src="/img/features/phone/screen.png" alt="Screen 04"></li>
                            </ul>
                        </div>--}}

                    </div>
                </div>
                <!-- Tabs -->
                <div class="tabs text-center">
                    <div class="block-heading hidden-when-stack">
                        <h2>Why is it special?</h2>
                        <span>Look what this game has to offer</span>
                    </div>
                    <!-- Nav Tabs -->
                    <!-- Remove data-autoswitch="true" to disable automatic tabs change. -->
                    <ul class="nav-tabs" data-autoswitch="true" data-interval="3000">
                        <li class="active"><a href="#virtual-reality" data-toggle="tab" data-tablet="#ts01" data-phone="#ps01"><i class="fa fa-eye"></i></a></li>
                        <li><a href="#dynamic-game-world" data-toggle="tab" data-tablet="#ts02" data-phone="#ps02"><i class="fa fa-globe"></i></a></li>
                        <li><a href="#unparalleled-ai" data-toggle="tab" data-tablet="#ts03" data-phone="#ps03"><i class="fa fa-android"></i></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <!-- Use different transitions: 'scale', 'scaleup', 'top', 'bottom', 'left', 'right' and 'flip' -->
                    <div class="tab-content">
                        <div class="tab-pane transition scale fade in active" id="virtual-reality">
                            <h3>Full Virtual Reality support</h3>
                            <p>Enter the game world, be your character and live his life. Make your fantasies come true in a vast digital world, where you can do whatever you want to do and be whoever you want to be.</p>
                        </div>
                        <div class="tab-pane transition scale fade" id="dynamic-game-world">
                            <h3>Dynamic game world</h3>
                            <p>The game world changes every minute, no day will be the same. Every decision you make affects the world you life in and the people you live with.</p>
                        </div>
                        <div class="tab-pane transition scale fade" id="unparalleled-ai">
                            <h3>Unparalleled AI</h3>
                            <p>Every NPC has a very advanced AI system, where it learns and responds accordingly. They make there own decisions and experience their own fantasies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="with-shadow">

        <!-- Icon + Text + Link -->
        <div class="container padding-bottom-2x">
            <!-- Badge -->
            <div class="badge badge-success badge-reverse">
                No other game has this!
                <span class="icon"><i class="fa fa-bookmark"></i></span>
            </div>
            <!-- Content -->
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Icon block are very flexible. If you remove '.icon-block-horizontal' you'll get stacked version. There is als modofier classes for icon like '.icon-bigger', '.va-middle' for vertical alignment. -->
                            <div class="icon-block icon-block-horizontal">
                                <div class="text text-right">
                                    <h3>Date your fantasy partner</h3>
                                    <p>Ever dreamed of going on a date with someone, who you could never get in real life...?
                                        <br/>
                                        Yes, so did we.</p>
                                    <a href="{{ route('blogs.show', 'date-your-fantasy-partner') }}" class="link">See more</a>
                                </div>
                                <div class="icon icon-bigger va-middle">
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-block icon-block-horizontal">
                                <div class="icon icon-bigger va-middle">
                                    <i class="fa fa-star" style="width: 78px;"></i>
                                </div>
                                <div class="text">
                                    <h3>Become a superstar</h3>
                                    <p>Dreaming about standing on that stage, singing your heart out to thousands of fans?<br/>
                                        Now you can!</p>
                                    <a href="{{ route('blogs.show', 'become-a-superstar') }}" class="link">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="icon-block icon-block-horizontal">
                                <div class="text text-right">
                                    <h3>Visit locations you have never visited before</h3>
                                    <p>We have always wanted to visit Bali, new Zealand and a lot of other beautiful places.
                                        <br/>
                                        But face it, it is very expensive...</p>
                                    <a href="{{ route('blogs.show', 'visit-locations-you-have-never-visited-before') }}" class="link">See more</a>
                                </div>
                                <div class="icon icon-bigger va-middle">
                                    <i class="fa fa-plane" style="width: 73px;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-block icon-block-horizontal">
                                <div class="icon icon-bigger va-middle">
                                    <i class="fa fa-retweet"></i>
                                </div>
                                <div class="text">
                                    <h3>Every action has a reaction</h3>
                                    <p>No, we are not talking about physics here, but about YOU!
                                        Cause you can and will change the world u live and play in.</p>
                                    <a href="{{ route('blogs.show', 'every-action-has-a-reaction') }}" class="link">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Features End -->

    <!-- Gallery -->
    <section class="padding-bottom">
        <div class="container">
            <hr class="with-shadow">
            <!-- Badge -->
            <div class="badge badge-primary">
                <span class="icon"><i class="fa fa-camera"></i></span>
                Moments of our game
            </div>
            <div class="row">
                <!-- Heading -->
                <div class="col-lg-4 col-lg-push-8 col-md-5 col-md-push-7 col-sm-6 col-sm-push-6">
                    <div class="block-heading">
                        <h2>Our Gallery</h2>
                        <p>Special moments related to One Secret Fantasy.</p>
                    </div>
                </div>
                <!-- Filters -->
                <div class="col-lg-8 col-lg-pull-4 col-md-7 col-md-pull-5 col-sm-6 col-sm-pull-6">
                    <ul class="nav-filters text-right space-top-3x">
                        <li class="active"><a class="waves-effect waves-primary" data-filter="*" href="#">All</a></li>
                        <li><a class="waves-effect waves-primary" data-filter=".picture" href="#">Pictures</a></li>
                        <li><a class="waves-effect waves-primary" data-filter=".video" href="#">Videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="masonry-grid filter-grid space-top-2x">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>

                @foreach ($pictures as $picture)
                <!-- Item -->
                <div class="item picture">
                    <a href="{{ $picture->image }}" class="gallery-item image-item popup-image waves-effect">
                        <figure>
                            <img src="{{ $picture->image }}" alt="{{ $picture->title }}">
                            <figcaption>
                                <h3>{{ $picture->title }}</h3>
                                <p>{{ $picture->caption }}</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                @endforeach

                @foreach ($videos as $video)
                <!-- Item -->
                <div class="item video">
                    <a href="{{ $video->video }}" class="gallery-item video-item popup-video waves-effect">
                        <figure>
                            <img src="{{ $video->cover }}" alt="{{ $video->title }}">
                            <figcaption>
                                <h3>{{ $video->title }}</h3>
                                <p>{{ $video->caption }}</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- Gallery End -->
    
@endsection

@extends('app')

@section('content')

    <!-- NEWS -->
    <!-- Blog Posts -->
    <section class="fw-bg top-inner-shadow padding-top-3x padding-bottom-3x" id="posts" style="background-color: #181818;">
        <div class="container">
            <div class="row">
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
                        <div class="tweet tweet-float">
                            <a href="#" class="author">@@OneSecretFantasy</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod... <a href="#">#magna aliqua</a>.</p>
                        </div>
                        <div class="tweet tweet-float">
                            <a href="#" class="author">@@OneSecretFantasy</a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
                        </div>
                        <div class="text-right">
                            <a href="#" class="text-smaller light-color">Follow us on twitter</a>
                        </div>
                    </div>
                    <div class="space-bottom-2x visible-xs"></div>
                </div>


                {{--<section class="padding-bottom col-md-offset-3 col-md-9">--}}
                    {{--<div class="container col-md-offset-3 col-md-9">--}}
                        <div class="masonry-grid col-md-offset-3">
                            <div class="grid-sizer"></div>
                            <div class="gutter-sizer"></div>
                            <div class="item">
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
                            <div class="item w2">
                                <div class="post-tile">
                                    <a href="/Blog/Post" class="post-thumb waves-effect">
                                        <img src="/img/blog/post01.png" alt="Post 1">
                                    </a>
                                    <div class="post-body">
                                        <div class="post-title">
                                            <a href="/Blog/Post"><h3>Change Is Coming. No Regrets.</h3></a>
                                            <span>Our powers is unlimitless, faith is strong.</span>
                                        </div>
                                        <div class="post-meta">
                                            <div class="column">
                                                <span>In </span><a href="#">Design</a>&nbsp;&nbsp;&nbsp;&nbsp;by <a href="#">Bedismo</a>
                                            </div>
                                            <div class="column text-right">
                                                <span>January 14, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    {{--</div>--}}
                {{--</section>--}}
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

                        <img src="/img/people/banner1.jpg" alt="Tablet">

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
                        <img src="/img/people/post3.jpg" alt="iPhone">

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
                        <li class="active"><a href="#video-player" data-toggle="tab" data-tablet="#ts01" data-phone="#ps01"><i class="flaticon-black397"></i></a></li>
                        <li><a href="#settings" data-toggle="tab" data-tablet="#ts02" data-phone="#ps02"><i class="flaticon-settings49"></i></a></li>
                        <li><a href="#file-sharing" data-toggle="tab" data-tablet="#ts03" data-phone="#ps03"><i class="flaticon-share39"></i></a></li>
                        <li><a href="#chat" data-toggle="tab" data-tablet="#ts04" data-phone="#ps04"><i class="flaticon-chat75"></i></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <!-- Use different transitions: 'scale', 'scaleup', 'top', 'bottom', 'left', 'right' and 'flip' -->
                    <div class="tab-content">
                        <div class="tab-pane transition scale fade in active" id="video-player">
                            <h3>Feature #1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos iste distinctio sed architecto rem sapiente atque itaque soluta quisquam at ex praesentium sed exercitationem.</p>
                        </div>
                        <div class="tab-pane transition scale fade" id="settings">
                            <h3>Feature #2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos iste distinctio sed architecto rem sapiente atque itaque soluta quisquam at ex praesentium sed exercitationem.</p>
                        </div>
                        <div class="tab-pane transition scale fade" id="file-sharing">
                            <h3>Feature #3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos iste distinctio sed architecto rem sapiente atque itaque soluta quisquam at ex praesentium sed exercitationem.</p>
                        </div>
                        <div class="tab-pane transition scale fade" id="chat">
                            <h3>Feature #4</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos iste distinctio sed architecto rem sapiente atque itaque soluta quisquam at ex praesentium sed exercitationem.</p>
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
                <span class="icon"><i class="flaticon-bookmark45"></i></span>
            </div>
            <!-- Content -->
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Icon block are very flexible. If you remove '.icon-block-horizontal' you'll get stacked version. There is als modofier classes for icon like '.icon-bigger', '.va-middle' for vertical alignment. -->
                            <div class="icon-block icon-block-horizontal">
                                <div class="text text-right">
                                    <h3>USP #1</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas harum a aperiam pariatur totam impedit, sint quibusdam minus deserunt labore ipsum commodo.</p>
                                    <a href="#" class="link">See more</a>
                                </div>
                                <div class="icon icon-bigger va-middle">
                                    <i class="flaticon-screen47"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-block icon-block-horizontal">
                                <div class="icon icon-bigger va-middle">
                                    <i class="flaticon-magic20"></i>
                                </div>
                                <div class="text">
                                    <h3>USP #2</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas harum a aperiam pariatur totam impedit, sint quibusdam minus deserunt labore ipsum commodo.</p>
                                    <a href="#" class="link">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="icon-block icon-block-horizontal">
                                <div class="text text-right">
                                    <h3>USP #3</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas harum a aperiam pariatur totam impedit, sint quibusdam minus deserunt labore ipsum commodo.</p>
                                    <a href="#" class="link">See more</a>
                                </div>
                                <div class="icon icon-bigger va-middle">
                                    <i class="flaticon-cloud304"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-block icon-block-horizontal">
                                <div class="icon icon-bigger va-middle">
                                    <i class="flaticon-camera59"></i>
                                </div>
                                <div class="text">
                                    <h3>USP #4</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas harum a aperiam pariatur totam impedit, sint quibusdam minus deserunt labore ipsum commodo.</p>
                                    <a href="#" class="link">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Features End -->
    <!-- App Gallery -->
    <section class="fw-bg top-inner-shadow gallery padding-top-3x padding-bottom-3x" id="gallery" style="background-color: #181818;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="block-heading light-color text-right">
                        <h2>Gallery</h2>
                        <span>The best way to show off</span>
                    </div>
                    <div class="text-right">
                        <div class="padding-top-2x hidden-sm hidden-xs"></div>
                        <ul class="nav-tabs alt-tabs nav-vertical">
                            <li class="active"><a class="waves-effect" href="#screens" data-toggle="tab">Concept Art</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-lg-offset-1 col-md-9 col-sm-8">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="screens">
                            <div class="scroller app-gallery light-color">
                                <div class="item">
                                    <a href="/img/gallery/01.png" class="waves-effect">
                                        <img src="/img/people/parallax1.jpg" alt="Thumbnail">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="/img/gallery/02.png" class="waves-effect">
                                        <img src="/img/people/parallax3.jpg" alt="Thumbnail">
                                    </a>
                                    <a href="/img/gallery/02.png" class="waves-effect">
                                        <img src="/img/people/parallax3.jpg" alt="Thumbnail">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="/img/gallery/01.png" class="waves-effect">
                                        <img src="/img/people/parallax2.jpg" alt="Thumbnail">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="/img/gallery/02.png" class="waves-effect">
                                        <img src="/img/people/parallax3.jpg" alt="Thumbnail">
                                    </a>
                                    <a href="/img/gallery/02.png" class="waves-effect">
                                        <img src="/img/people/parallax3.jpg" alt="Thumbnail">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="video-prev">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//player.vimeo.com/video/113575647?title=0&amp;byline=0&amp;portrait=0&amp;color=008fed" width="500" height="281" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="proto">
                            {{--<img src="/img/gallery/prototype.png" alt="Prototype">--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- App Gallery End -->
    
@endsection

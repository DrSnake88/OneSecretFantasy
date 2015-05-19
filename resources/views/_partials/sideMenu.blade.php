<!-- Off-canvas Navigation -->
<div class="offcanvas-nav">
    <!-- Head (Fixed Part) -->
    <div class="nav-head">
        <div class="top-bar">
            <form class="search-box">
                <span class="search-toggle waves-effect waves-light"></span>
                <input type="text" id="search-field">
                <button type="submit" class="search-btn"><i class="flaticon-search100"></i></button>
            </form>
            <div class="nav-close waves-effect waves-light waves-circle" data-offcanvas="close"><i class="flaticon-close47"></i></div>
            <div class="social-buttons">
                <a href="#" class="sb-twitter"><i class="bi-twitter"></i></a>
                <a href="#" class="sb-google-plus"><i class="bi-gplus"></i></a>
                <a href="#" class="sb-facebook"><i class="bi-facebook"></i></a>
            </div>
        </div>
        <a href="index.html" class="offcanvas-logo">
            <div class="icon"><img src="/img/logo-big-ns.png" alt="One Secret Fantasy"></div>
            <div class="title">
                One Secret Fantasy
                <span>Life your dream!</span>
            </div>
        </a>
        <a href="#" data-toggle="modal" data-target="#signin-page" data-modal-form="sign-in" class="light-color nav-link">Sign In</a>
        <a href="#" data-toggle="modal" data-target="#signin-page" data-modal-form="sign-up" class="light-color nav-link">Sign Up</a>
        <a href="#" class="btn btn-flat btn-light icon-left waves-effect waves-light"><i class="flaticon-download164"></i> Download</a>
    </div>
    <!-- Body (Scroll Part) -->
    <div class="nav-body">
        <div class="overflow">
            <div class="inner">
                <!-- Navigation -->
                <nav class="nav-link">
                    <div class="scroll-nav" id="scroll-nav">
                        <ul>
                            <!-- Add ".scroll" class to anchor tag to enable smooth scrolling -->
                            <li class="active"><a class="scrollup" href="#">Home</a></li>

                            {{--@if ((string) ViewContext.RouteData.Values["action"] == "Index")--}}
                                {{--{--}}
                                {{--<li><a class="scroll" href="#posts" data-offset-top="100">Posts</a></li>--}}
                                {{--<li><a class="scroll" href="#features" data-offset-top="-5">Features</a></li>--}}
                                {{--<li><a class="scroll" href="#gallery" data-offset-top="100">Gallery</a></li>--}}
                                {{--}--}}
                                {{--else--}}
                                {{--{--}}
                                <li><a class="scroll" href="#posts" data-offset-top="100">Posts</a></li>
                                <li><a class="scroll" href="#features" data-offset-top="-5">Features</a></li>
                                <li><a class="scroll" href="#gallery" data-offset-top="100">Gallery</a></li>
                                {{--}--}}

                        </ul>

                        {{--<ul>--}}
                            {{--<li><a class="scroll" href="#versions" data-offset-top="100">Versions</a></li>--}}
                            {{--<li><a class="scroll" href="#figures" data-offset-top="100">Figures</a></li>--}}
                            {{--<li><a class="scroll" href="#reviews" data-offset-top="115">Reviews</a></li>--}}
                            {{--<li><a class="scroll" href="#team" data-offset-top="100">Team</a></li>--}}
                            {{--<li><a class="scroll" href="#pricing" data-offset-top="100">Pricing</a></li>--}}
                            {{--<li><a class="scroll" href="#web-app" data-offset-top="100">Web App</a></li>--}}
                        {{--</ul>--}}

                    </div>

                    <ul class="pages">
                        <li><a href="/Game">Game</a></li>
                        <li><a href="/Forum">Forum</a></li>
                        <li><a href="/Blog">Blog</a></li>
                        <li><a href="/Media">Media</a></li>
                        <li><a href="/Home/Contact">Contact</a></li>
                    </ul>
                </nav>


                <!-- Twitter/Blog Tabs -->
                <div class="offcanvas-tabs">
                    <ul class="nav-tabs clearfix">
                        <li class="active"><a class="waves-effect waves-primary" href="#twitter" data-toggle="tab">Twitter</a></li>
                        <li><a class="waves-effect waves-primary" href="#blog" data-toggle="tab">Blog</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="twitter">
                            <div class="twitter-feed">
                                <div class="tweet">
                                    <a href="#" class="author">@@OneSecretFantasy</a>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor et <a href="#">#magna aliqua</a>.
                                    </p>
                                </div>
                                <div class="tweet">
                                    <a href="#" class="author">@@OneSecretFantasy</a>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                                <a href="#" class="text-smaller">Follow us on twitter</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="blog">
                            <div class="offcanvas-posts">
                                <a href="/Blog/Post" class="post">
                                    Blog Title
                                    <span>Lorem ipsum dolor sit</span>
                                </a>
                                <a href="/Blog/Post" class="post">
                                    Blog Title
                                    <span>Tenetur omnis sit odit velit quaerat deserunt cupiditate.</span>
                                </a>
                                <a href="/Blog/Post" class="post">
                                    Blog Title
                                    <span>Sed ut perspiciatis unde omnis</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Instagram Posts -->
                <div class="offcanvas-instagram">
                    <div class="instgr-row clearfix">
                        <a class="waves-effect" href="#"><img src="/img/people/man1-small.jpg" alt="Thumbnail"></a>
                        <a class="waves-effect" href="#"><img src="/img/people/woman1-small.jpg" alt="Thumbnail"></a>
                        <a class="waves-effect" href="#"><img src="/img/people/man2-small.jpg" alt="Thumbnail"></a>
                    </div>
                    <div class="instgr-row clearfix">
                        <a class="waves-effect" href="#"><img src="/img/people/woman2-small.jpg" alt="Thumbnail"></a>
                        <a class="waves-effect" href="#"><img src="/img/people/man3-small.jpg" alt="Thumbnail"></a>
                        <a class="waves-effect" href="#"><img src="/img/people/woman3-small.jpg" alt="Thumbnail"></a>
                    </div>
                    <a href="#" class="text-smaller">Follow us on Instagram</a>
                </div>



            </div>
        </div>
    </div>
</div><!-- Off-canvas Navigation End -->
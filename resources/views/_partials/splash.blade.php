<!-- Intro / Promo Section -->
<section class="intro">
    <div class="container">
        <div class="column-wrap">

            <!-- Left Column -->
            <div class="column c-left">
                <div class="navi">
                    <div class="nav-toggle nav-toggle-float" data-offcanvas="open">
                    {{--<div class="nav-toggle nav-toggle-float" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">--}}
                        <span class="waves-effect waves-light">
                            <i class="fa fa-bars" style="margin-top:15px !important;"></i>
                        </span>
                    </div>
                    @if(Auth::user())
                        <a href="{{ \Illuminate\Support\Facades\URL::route('profile.index') }}">{{ Auth::user()->name }}</a>
                    @else
                        <a href="#" data-toggle="modal" data-target="#signin-page" data-modal-form="sign-in">Sign in</a>
                    @endif
                </div>

                <a href="#features" data-offset-top="690" class="scroll-more scroll">
                    <i class="icon"></i>
                    <span>Scroll for more</span>
                </a>
            </div>

            <!-- Middle Column -->
            <div class="column c-middle">
                <div class="logo-main">
                    <div class="logo-bg"></div>
                    {{--<img src="/img/logo/logo-rounded.png" alt="OneSecretFantasy" />--}}
                    <h1>One Secret Fantasy</h1>
                    <span>Make your dreams come true.</span>

                    @if(Session::get('subscribed') == null)
                    <!-- Sign up form -->
{{--                    {!! Form::open(['route' => 'subscriber.store', 'id' => 'subscribe-form']) !!}--}}
                    {!! Form::open(['url' => '//onesecretfantasy.us8.list-manage.com/subscribe/post?u=86ac611bda021b84f6a76d655&amp;id=b54a5005c6', 'id' => 'subscribe-form']) !!}
                        <div class="form-control">
                            <input type="email" name="EMAIL" id="subscribe_email" required aria-required="true">
                            <label for="subscribe_email">Email</label>
                            <span class="error-label"></span>
                            <span class="valid-label"></span>
                        </div>

                        <div class="clearfix">
                            <div class="form-switch">
                                    <button type="submit" class="btn btn-flat btn-primary waves-effect waves-primary">Subscribe</button>
                            </div>
                        </div>
                    </form>
                    @else
                        <span>{{ Session::get('subscribed') }}</span>
                    @endif
                </div>



                <div class="phone">
                    {{--<img src="/img/intro/screen.png" alt="App Screen">--}}
                </div>

            </div>

            <!-- Right Column-->
            <div class="column c-right">
                <!-- Social Buttons -->
                <div class="social-buttons text-right">
                    <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                    {{--<a href="#" class="sb-google-plus"><i class="fa fa-google"></i></a>--}}
                    <a href="#" class="sb-facebook"><i class="fa fa-facebook"></i></a>
                    <!-- <a href="#" class="sb-behance"><i class="bi-behance"></i></a> -->
                    <!-- <a href="#" class="sb-bitbucket"><i class="bi-bitbucket"></i></a> -->
                    <!-- <a href="#" class="sb-codepen"><i class="bi-codepen"></i></a> -->
                    <!-- <a href="#" class="sb-deviantart"><i class="bi-deviantart"></i></a> -->
                    <!-- <a href="#" class="sb-digg"><i class="bi-digg"></i></a> -->
                    <!-- <a href="#" class="sb-dribbble"><i class="bi-dribbble"></i></a> -->
                    <!-- <a href="#" class="sb-dropbox"><i class="bi-dropbox"></i></a> -->
                    <!-- <a href="#" class="sb-flickr"><i class="bi-flickr"></i></a> -->
                    <!-- <a href="#" class="sb-foursquare"><i class="bi-foursquare"></i></a> -->
                    <!-- <a href="#" class="sb-github"><i class="bi-github"></i></a> -->
                    <!-- <a href="#" class="sb-instagram"><i class="bi-instagram"></i></a> -->
                    <!-- <a href="#" class="sb-jsfiddle"><i class="bi-jsfiddle"></i></a> -->
                    <!-- <a href="#" class="sb-lastfm"><i class="bi-lastfm"></i></a> -->
                    <!-- <a href="#" class="sb-linkedin"><i class="bi-linkedin"></i></a> -->
                    <!-- <a href="#" class="sb-paypal"><i class="bi-paypal"></i></a> -->
                    <!-- <a href="#" class="sb-pinterest"><i class="bi-pinterest-circled"></i></a> -->
                    <!-- <a href="#" class="sb-reddit"><i class="bi-reddit"></i></a> -->
                    <!-- <a href="#" class="sb-skype"><i class="bi-skype"></i></a> -->
                    <!-- <a href="#" class="sb-soundcloud"><i class="bi-soundcloud"></i></a> -->
                    <!-- <a href="#" class="sb-stackoverflow"><i class="bi-stackoverflow"></i></a> -->
                    <!-- <a href="#" class="sb-steam"><i class="bi-steam"></i></a> -->
                    <!-- <a href="#" class="sb-stumbleupon"><i class="bi-stumbleupon"></i></a> -->
                    <!-- <a href="#" class="sb-trello"><i class="bi-trello"></i></a> -->
                    <!-- <a href="#" class="sb-tumblr"><i class="bi-tumblr"></i></a> -->
                    <!-- <a href="#" class="sb-twitch"><i class="bi-twitch"></i></a> -->
                    <!-- <a href="#" class="sb-vimeo"><i class="bi-vimeo-squared"></i></a> -->
                    <!-- <a href="#" class="sb-vine"><i class="bi-vine"></i></a> -->
                    <!-- <a href="#" class="sb-vk"><i class="bi-vkontakte"></i></a> -->
                    <!-- <a href="#" class="sb-wechat"><i class="bi-wechat"></i></a> -->
                    <!-- <a href="#" class="sb-wordpress"><i class="bi-wordpress"></i></a> -->
                    <!-- <a href="#" class="sb-xing"><i class="bi-xing"></i></a> -->
                    <!-- <a href="#" class="sb-yahoo"><i class="bi-yahoo"></i></a> -->
                    <!-- <a href="#" class="sb-yelp"><i class="bi-yelp"></i></a> -->
                    <a href="#" class="sb-youtube"><i class="fa fa-youtube"></i></a>
                </div>

                {{--<!-- Features -->--}}
                {{--<div class="intro-features">--}}
                    {{--<div class="icon-block icon-block-horizontal box-float" data-transition-delay="100">--}}
                        {{--<div class="icon va-middle"><i class="flaticon-favorite21"></i></div>--}}
                        {{--<div class="text">--}}
                            {{--<h3>Date anyone</h3>--}}
                            {{--<p>Find your secret fantasy partner and enjoy life!</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="icon-block icon-block-horizontal box-float" data-transition-delay="300">--}}
                        {{--<div class="icon va-middle"><i class="flaticon-cloud302"></i></div>--}}
                        {{--<div class="text">--}}
                            {{--<h3>NO Limits</h3>--}}
                            {{--<p>There is only one limit... your imagination!</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="icon-block icon-block-horizontal box-float" data-transition-delay="500">--}}
                        {{--<div class="icon va-middle"><i class="flaticon-visibility1"></i></div>--}}
                        {{--<div class="text">--}}
                            {{--<h3>Virtual Reality</h3>--}}
                            {{--<p>Full Virtual Reality, immerse into your fantasy!</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <!-- Download Button -->
                {{--<div class="download">--}}
                    {{--<p>Phone and tablet versions</p>--}}
                    {{--<a href="#" class="btn btn-default btn-float waves-effect btn-google-play">--}}
                        {{--<img src="/img/google-play.png" alt="Google Play">--}}
                        {{--<span>Get it on</span>--}}
                    {{--</a>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
</section>
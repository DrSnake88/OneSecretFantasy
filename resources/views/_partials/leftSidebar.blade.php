<!-- Sidebar -->
<div class="col-lg-3 col-lg-pull-9 col-sm-4 col-sm-pull-8">
    <div class="sidebar space-bottom-3x">

        {{--<!-- Categories -->--}}
        {{--<div class="categories with-grid-btn">--}}
            {{--<a href="/blog" class="grid-btn">--}}
                {{--<span></span>--}}
                {{--<span></span>--}}
            {{--</a>--}}
            {{--<ul>--}}
                {{--<li><a href="#">Menu Item</a></li>--}}
                {{--<li><a href="#">Menu Item</a></li>--}}
                {{--<li><a href="#">Menu Item</a></li>--}}
                {{--<li><a href="#">Menu Item</a></li>--}}
                {{--<li><a href="#">Menu Item</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<hr>--}}
        <!-- Twitter Feed -->
        <div class="twitter-feed space-bottom-2x">
            @foreach($tweets as $tweet)
                <div class="tweet">
                    <a href="{{ \Thujohn\Twitter\Facades\Twitter::linkUser('@OSFtheGame') }}" target="_blank" class="author">@OSFtheGame</a>
                    <p>{{ $tweet->text }}</p>
                </div>
            @endforeach
            <a href="{{ \Thujohn\Twitter\Facades\Twitter::linkUser('@OSFtheGame') }}" target="_blank" class="text-smaller">Follow us on twitter</a>
        </div>
        {{--<!-- Featured Posts -->--}}
        {{--<div class="box-float">--}}
            {{--<a href="#" class="featured-post bg-success waves-effect waves-light">--}}
                {{--<div class="content">--}}
                    {{--<div class="arrow"><i class="flaticon-right244"></i></div>--}}
                    {{--<h3>Featured Post #1</h3>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="#" class="featured-post bg-primary waves-effect waves-light">--}}
                {{--<div class="content">--}}
                    {{--<div class="arrow"><i class="flaticon-right244"></i></div>--}}
                    {{--<h3>Featured Post #2</h3>--}}
                    {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="#" class="featured-post bg-info waves-effect waves-light">--}}
                {{--<div class="content">--}}
                    {{--<div class="arrow"><i class="flaticon-right244"></i></div>--}}
                    {{--<h3>Featured Post #3</h3>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<a href="#" class="featured-post bg-warning waves-effect waves-light">--}}
                {{--<div class="content">--}}
                    {{--<div class="arrow"><i class="flaticon-right244"></i></div>--}}
                    {{--<h3>Featured Post #4</h3>--}}
                    {{--<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut.</p>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}

    </div>
</div>

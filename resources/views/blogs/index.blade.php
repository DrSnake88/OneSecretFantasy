@extends('app')

@section('page-title')
    Blog - OneSecretFantasy
@stop

@section('page-description')
    All messages related to our game and its development
@stop

@section('page-keywords')
    blog
@stop

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            @include('_partials.searchForm')
            <h2>Blog</h2>
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="space-top padding-bottom">
        <div class="container">
            <hr class="with-shadow">
            <!-- Badge -->
            <div class="badge badge-primary">
                <span class="icon"><i class="fa fa-rss"></i></span>
                Every update related to the game or the development team.
            </div>
            <div class="masonry-grid">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>

                <!-- Item -->
                {{--<div class="item w2">--}}
                    {{--<div class="post-tile">--}}
                        {{--<a href="/Blog/Post" class="post-thumb waves-effect">--}}
                            {{--<img src="/img/blog/post01.png" alt="Post 1">--}}
                        {{--</a>--}}
                        {{--<div class="post-body">--}}
                            {{--<div class="post-title">--}}
                                {{--<a href="/Blog/Post"><h3>Change Is Coming. No Regrets.</h3></a>--}}
                                {{--<span>Our powers is unlimitless, faith is strong.</span>--}}
                            {{--</div>--}}
                            {{--<div class="post-meta">--}}
                                {{--<div class="column">--}}
                                    {{--<span>In </span><a href="#">Design</a>&nbsp;&nbsp;&nbsp;&nbsp;by <a href="#">Bedismo</a>--}}
                                {{--</div>--}}
                                {{--<div class="column text-right">--}}
                                    {{--<span>January 14, 2015</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                @foreach($blogs as $blog)
                <!-- Item -->
                @if ($blog->highlight == 0)
                    <div class="item">
                @else
                    <div class="item w2">
                @endif
                    <div class="post-tile">
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="post-thumb waves-effect">
                            <img src="{{ $blog->image }}" alt="{{ $blog->title }}">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="{{ route('blogs.show', $blog->slug) }}"><h3>{{ $blog->title }}</h3></a>
                                <span>{{ \Illuminate\Support\Str::words(strip_tags($blog->body), 20) }}</span>
                            </div>
                            <div class="post-meta">
                                <div class="column">
                                    By {{ $blog->user->name }}
                                </div>
                                <div class="column text-right">
                                    <span>{{ $blog->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

            {{--<!-- Pagination -->--}}
            {{--<div class="pagination space-top-3x space-bottom-3x">--}}
                {{--<div class="controls">--}}
                    {{--<a href="#">Older</a>--}}
                    {{--<a href="#">Newer</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section><!-- Blog Grid End -->
@endsection
@extends('app')

@section('page-title')
    {{ $blog->title }} - OneSecretFantasy
@stop

@section('page-description')
    {{ $blog->title }}
{{--    {{ \Illuminate\Support\Str::words($blog->body, 20) }}--}}
@stop

@section('page-keywords')
    @foreach ($blog->tags as $tag)
        {{ $tag }},
    @endforeach
@stop

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            @include('_partials.searchForm')
            <h2>{{ $blog->title }}</h2>
        </div>
    </div>
    <!-- Single Post -->
    <section class="space-top padding-bottom-2x">
        <div class="container">

            <div class="row">

                <!-- Post Content -->
                <div class="col-lg-9 col-lg-push-3 col-sm-8 col-sm-push-4 padding-bottom">
                    <div itemscope itemtype="http://schema.org/Article" class="single-post box-float">
                        <div class="inner">
                            <h1 itemprop="name">{{ $blog->title }}</h1>
                            <img itemprop="image" src="{{ $blog->image }}" class="space-top space-bottom-2x" alt="{{ $blog->title }}">
                            <div class="row">
                                <span itemprop="articleBody">
                                    {!! $blog->body !!}
                                </span>
                            </div>
                        </div>
                        <div class="post-meta space-top-2x">
                            <div itemprop="datePublished" content="{{ $blog->created_at->formatLocalized("%Y-%m-%d") }}" class="column">{{ $blog->created_at->formatLocalized("%d %B %Y") }}</div>
                            <div class="column">
                                <div class="social-buttons text-right">
                                    <a href="#comments" class="comment-count scroll" data-offset-top="160"><i class="fa fa-comment"></i>{{ count($blog_comments) }}</a>
                                    <a href="#" class="sb-twitter"><i class="bi-twitter"></i></a>
                                    <a href="#" class="sb-google-plus"><i class="bi-gplus"></i></a>
                                    <a href="#" class="sb-facebook"><i class="bi-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta last-child space-bottom">
                            <div class="column">
                                By
                                <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                                    <span itemprop="name">
                                        <a href="#">{{$blog->user->name}}</a>
                                    </span>
                                </span>
                            </div>
                            <div class="column text-right">
                                @foreach ($blog->tags as $tag)
                                    <a href="#">#{{ $tag }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="inner">

                            <!-- Comments -->
                            <div class="space-top space-bottom-2x" id="comments">
                                <p class="text-gray text-right text-light" style="font-size: 24px;">Comments {{ count($blog_comments) }}</p>
                            </div>
                            <div class="space-bottom-2x">

                                @foreach($blog_comments as $comment)

                                <div class="comment">
                                    <div class="comment-meta">
                                        <div class="column">
                                            <div class="author">
                                                @if (isset($comment->email))
                                                    <a href="#" class="ava"><img src="/img/avatars/ava01.png" alt="Default avatar"></a>
                                                @else
                                                    <a href="#" class="ava"><img src="{{ $comment->user->avatar }}" alt="Avatar of {{ $comment->user->name }}<"></a>
                                                @endif
                                                <span>by</span>
                                                    @if (isset($comment->email))
                                                        <a href="#">
                                                        {{ $comment->name }}
                                                        </a>
                                                    @else
                                                        <a href="#">
                                                        {{ $comment->user->name }}
                                                        </a>
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="column text-right">
                                            <span>{{ $comment->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                    <p>{{ $comment->comment }}</p>
                                </div>

                                @endforeach



                            </div>
                        </div>
                        <div class="load-more waves-effect waves-light">
                        </div>
                    </div>

                    <!-- Comment Form -->
                    <div class="box-float comments space-top">
                        @if(Session::get('message') != null)
                            <h3 class="text-gray text-light">{{ Session::get('message') }}</h3>
                        @endif
                        <p class="text-gray text-right text-light" style="font-size: 24px">Leave a comment</p>
                        {!! Form::open(['route' => 'blog_comments.store', 'id' => 'comment-form', 'class' => 'space-top space-bottom']) !!}
                        {{--<form id="comment-form" class="space-top space-bottom">--}}
                        {!! Form::hidden('blog_id', $blog->id) !!}
                            @if (!Auth::user())
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-control">
                                            <input type="text" name="name" id="cf_name" required>
                                            <label for="cf_name">Name</label>
                                            <span class="error-label"></span>
                                            <span class="valid-label"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-control">
                                            <input type="email" name="email" id="cf_email" required>
                                            <label for="cf_email">Email</label>
                                            <span class="error-label"></span>
                                            <span class="valid-label"></span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        <div class="form-control">
                            <textarea name="comment" id="cf_comment" required></textarea>
                            <label for="cf_comment">Comment</label>
                            <span class="error-label"></span>
                            <span class="valid-label"></span>
                        </div>
                        <div class="row space-top">
                            <div class="col-sm-6">
                                <label class="checkbox space-top">
                                    <input type="checkbox" name="notify"> Get notified on comments
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-6 col-md-8 col-md-offset-4 col-sm-12">
                                        <button type="submit" class="btn btn-block btn-success btn-float waves-effect waves-light">Comment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form><!-- Comment Form End -->

                    </div>
                </div>

                @include('_partials.leftSidebar')
            </div>
        </div>
    </section><!-- Single Post End -->

    <meta itemprop="url" content="{{ \Illuminate\Support\Facades\Request::url() }}"></div>
@endsection
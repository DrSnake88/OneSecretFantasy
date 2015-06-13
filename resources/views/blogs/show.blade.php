@extends('app')

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            <form class="search-field form-control">
                <button type="submit" class="search-btn"><i class="flaticon-search100"></i></button>
                <input type="text" id="search-input">
                <label for="search-input">Search</label>
            </form>
            <h2>Blog</h2>
        </div>
    </div>
    <!-- Single Post -->
    <section class="space-top padding-bottom-2x">
        <div class="container">

            <div class="row">

                <!-- Post Content -->
                <div class="col-lg-9 col-lg-push-3 col-sm-8 col-sm-push-4 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <h1>{{ $blog->title }}</h1>
                            <img src="{{ $blog->image }}" class="space-top space-bottom-2x" alt="One Secret Fantasy">
                            <div class="row">
                                {!! $blog->body !!}

                            </div>
                        </div>
                        <div class="post-meta space-top-2x">
                            <div class="column">January 17, 2015</div>
                            <div class="column">
                                <div class="social-buttons text-right">
                                    <a href="#comments" class="comment-count scroll" data-offset-top="160"><i class="flaticon-chat75"></i>2</a>
                                    <a href="#" class="sb-twitter"><i class="bi-twitter"></i></a>
                                    <a href="#" class="sb-google-plus"><i class="bi-gplus"></i></a>
                                    <a href="#" class="sb-facebook"><i class="bi-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta last-child space-bottom">
                            <div class="column">
                                <span>In </span><a href="#">Design</a>&nbsp;&nbsp;&nbsp;&nbsp;by <a href="#">Bedismo</a>
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
                                <h3 class="text-gray text-right text-light">Comments {{ count($blog_comments) }}</h3>
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
                                                    @else
                                                        <a href="#">
                                                        {{ $comment->user->name }}
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                        <div class="column text-right">
                                            <span>{{ \Carbon\Carbon::createFromTimestamp(strtotime($comment->created_at))->diffForHumans() }}</span>
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
                        @else
                        <h3 class="text-gray text-right text-light">Leave a comment</h3>
                        {!! Form::open(['route' => 'blog_comments.store', 'id' => 'comment-form', 'class' => 'space-top space-bottom']) !!}
                        {{--<form id="comment-form" class="space-top space-bottom">--}}
                        {!! Form::hidden('blog_id', $blog->id) !!}
                            @if (!Auth::user())
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-control">
                                            <input type="text" name="name" id="cf_name" required>
                                            <label for="name">Name</label>
                                            <span class="error-label"></span>
                                            <span class="valid-label"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-control">
                                            <input type="email" name="email" id="cf_email" required>
                                            <label for="email">Email</label>
                                            <span class="error-label"></span>
                                            <span class="valid-label"></span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        <div class="form-control">
                            <textarea name="comment" id="cf_comment" required></textarea>
                            <label for="comment">Comment</label>
                            <span class="error-label"></span>
                            <span class="valid-label"></span>
                        </div>
                        <div class="row space-top">
                            <div class="col-sm-6">
                                <label class="checkbox space-top">
                                    <input type="checkbox" checked="checked"> Get notified on comments
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
                        @endif
                    </div>
                </div>

                @include('_partials.leftSidebar')
            </div>
        </div>
    </section><!-- Single Post End -->


@endsection
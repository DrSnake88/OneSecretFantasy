@extends('app')

@section('page-title')
    {{ $topic->name }} - One Secret Fantasy
@stop

@section('page-description')
    {{ \Illuminate\Support\Str::words($replies[0]->body, 20) }}
@stop

@section('page-keywords')
    topic, message, reply, post
@stop

@section('breadcrumbs')
    {!! Breadcrumbs::render('forum_topic', $topic) !!}
@stop

@section('content')
    @include('_partials.breadcrumbs')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            <hr class="with-shadow">
            <!-- Badge -->
            <div class="badge badge-primary">
                <span class="icon"><i class="fa fa-comments-o"></i></span>
                {{ $topic->name }}
            </div>
        </div>
    </div>

    <!-- Single Post -->
    <section class="space-top padding-bottom-2x">
        <div class="container">
            <div class="row">

                <!-- Post Content -->
                <div class="col-lg-12 col-sm-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <h1>{{ $topic->name }}</h1>

                            <a href="#" class="btn btn-flat btn-success waves-effect waves-primary btn-sm pull-right">ADD REPLY</a>

                            @foreach($replies as $reply)
                            {{--REPLY--}}
                            <div class="post-meta">
                                <div class="column">{{ $reply->created_at->formatLocalized("%d %B %Y") }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 hidden-sm padding-top hidden-xs">
                                    <div class="downloadable">
                                        <img src="{{ $reply->user->avatar }}" alt="{{ $reply->user->name }}">
                                        <h5><a href="#">{{ $reply->user->name }}</a></h5>
                                        {{--<p>CEO</p>--}}
                                        {{--<p>Posts: 103</p>--}}
                                    </div>
                                </div>
                                <div class="col-md-9 padding-top">
                                    <p>{!! nl2br(e($reply->body)) !!}</p>
                                </div>
                            </div>
                            @endforeach

                            <!-- Pagination -->
                            {!! $replies->render() !!}


                            <!-- Comment Form -->
                            <div class="box-float comments space-top">
                                @if(Auth::user())
                                    @if(Session::get('message') != null)
                                        <h3 class="text-gray text-light">{{ Session::get('message') }}</h3>
                                    @endif
                                    <h3 class="text-gray text-right text-light">Leave a reply</h3>
                                    {!! Form::open(['route' => 'reply.store', 'id' => 'comment-form', 'class' => 'space-top space-bottom']) !!}
                                    {!! Form::hidden('topic_id', $topic->id) !!}
                                        <div class="form-control topic">
                                            <textarea name="message" rows="5" id="cf_comment" required></textarea>
                                            <label for="message">Message</label>
                                            <span class="error-label"></span>
                                            <span class="valid-label"></span>
                                        </div>
                                        <div class="row space-top">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-lg-offset-6 col-md-8 col-md-offset-4 col-sm-12">
                                                        <button type="submit" class="btn btn-block btn-success btn-float waves-effect waves-light">Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- Comment Form End -->
                                @else
                                    <h3 class="text-gray text-light">Please <a href="#" data-toggle="modal" data-target="#signin-page" data-modal-form="sign-in" class="action-btn">sign in</a> or <a href="#" data-toggle="modal" data-target="#signin-page" data-modal-form="sign-up" class="action-btn">register</a> to leave a reply.</h3>
                                @endif
                            </div>
                                <br>
                        </div>

                        {{----}}
                        {{--<div class="inner">--}}

                            {{----}}
                            {{--<!-- Comments -->--}}
                            {{--<div class="space-top space-bottom-2x" id="comments">--}}
                                {{--<h3 class="text-gray text-right text-light">Comments (2)</h3>--}}
                            {{--</div>--}}
                            {{--<div class="space-bottom-2x">--}}
                                {{--<div class="comment">--}}
                                    {{--<div class="comment-meta">--}}
                                        {{--<div class="column">--}}
                                            {{--<div class="author">--}}
                                                {{--<a href="#" class="ava"><img src="/img/avatars/ava01.png" alt="Avatar"></a>--}}
                                                {{--<span>by</span> <a href="#">Bedismo</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="column text-right">--}}
                                            {{--<span>17 hours ago</span>&nbsp;&nbsp;&nbsp;--}}
                                            {{--<a href="#" class="reply-btn">Reply</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
                                {{--</div>--}}
                                {{--<div class="comment comment-reply">--}}
                                    {{--<div class="comment-meta">--}}
                                        {{--<div class="column">--}}
                                            {{--<div class="author">--}}
                                                {{--<a href="#" class="ava"><img src="/img/avatars/ava02.png" alt="Avatar"></a>--}}
                                                {{--<span>by</span> <a href="#">Anna Frank</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="column text-right">--}}
                                            {{--<span>12 hours ago</span>&nbsp;&nbsp;&nbsp;--}}
                                            {{--<a href="#" class="reply-btn">Reply</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="load-more waves-effect waves-light">--}}
                        {{--</div>--}}
                    </div>


                </div>
            </div>
        </div>
    </section><!-- Single Post End -->
@stop
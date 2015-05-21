@extends('app')

@section('content')
    @include('_partials.breadcrumbs')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            <h2>Thread Name</h2>
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
                            <h1>Title</h1>

                            <a href="#" class="btn btn-flat btn-success waves-effect waves-primary btn-sm pull-right">ADD REPLY</a>
                            <hr class="with-shadow"/>
                            <div class="row">
                                <div class="col-md-3 hidden-sm padding-top hidden-xs">
                                    <div class="downloadable">
                                        <img src="/img/people/woman1-small.jpg" alt="Universal">
                                        <h5><a href="#">OneSecretFantasy</a></h5>
                                        <p>CEO</p>
                                        <p>Posts: 103</p>
                                    </div>
                                </div>
                                <div class="col-md-9 padding-top">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                </div>
                            </div>
                        </div>
                        <div class="post-meta">
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
                                <span>In </span><a href="#">General</a>&nbsp;&nbsp;&nbsp;&nbsp;by <a href="#">OneSecretFantasy</a>
                            </div>
                            <div class="column text-right">
                                <a href="#">#iOS</a> <a href="#">#Apple</a> <a href="#">#Other tags</a>
                            </div>
                        </div>
                        <div class="inner">

                            <!-- Comments -->
                            <div class="space-top space-bottom-2x" id="comments">
                                <h3 class="text-gray text-right text-light">Comments (2)</h3>
                            </div>
                            <div class="space-bottom-2x">
                                <div class="comment">
                                    <div class="comment-meta">
                                        <div class="column">
                                            <div class="author">
                                                <a href="#" class="ava"><img src="/img/avatars/ava01.png" alt="Avatar"></a>
                                                <span>by</span> <a href="#">Bedismo</a>
                                            </div>
                                        </div>
                                        <div class="column text-right">
                                            <span>17 hours ago</span>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="reply-btn">Reply</a>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="comment comment-reply">
                                    <div class="comment-meta">
                                        <div class="column">
                                            <div class="author">
                                                <a href="#" class="ava"><img src="/img/avatars/ava02.png" alt="Avatar"></a>
                                                <span>by</span> <a href="#">Anna Frank</a>
                                            </div>
                                        </div>
                                        <div class="column text-right">
                                            <span>12 hours ago</span>&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="reply-btn">Reply</a>
                                        </div>
                                    </div>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="load-more waves-effect waves-light">
                        </div>
                    </div>

                    <!-- Comment Form -->
                    <div class="box-float comments space-top">
                        <h3 class="text-gray text-right text-light">Leave a comment</h3>
                        <form id="comment-form" class="space-top space-bottom">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-control">
                                        <input type="text" name="cf_name" id="cf_name" required>
                                        <label for="cf_name">Name</label>
                                        <span class="error-label"></span>
                                        <span class="valid-label"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-control">
                                        <input type="email" name="cf_email" id="cf_email" required>
                                        <label for="cf_email">Email</label>
                                        <span class="error-label"></span>
                                        <span class="valid-label"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-control">
                                <textarea name="cf_comment" id="cf_comment" required></textarea>
                                <label for="cf_comment">Comment</label>
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
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Single Post End -->
@stop
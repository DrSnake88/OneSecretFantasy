@extends('app')

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            <form class="search-field form-control">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                <input type="text" id="search-input">
                <label for="search-input">Search</label>
            </form>
            <h2>Blog</h2>
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="space-top padding-bottom">
        <div class="container">
            <div class="masonry-grid">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>
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

                @foreach($blogs as $blog)
                <!-- Item -->
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

                @endforeach
            </div>
            <!-- Pagination -->
            <div class="pagination space-top-3x space-bottom-3x">
                <div class="controls">
                    <a href="#">Older</a>
                    <a href="#">Newer</a>
                </div>
            </div>
        </div>
    </section><!-- Blog Grid End -->


@endsection
@extends('app')

@section('content')
    <!-- General -->
    <div class="page-heading text-right">
        <div class="container">
            <form class="search-field form-control">
                <button type="submit" class="search-btn"><i class="flaticon-search100"></i></button>
                <input type="text" id="search-input">
                <label for="search-input">Search</label>
            </form>
            <h2>Forum</h2>
        </div>
    </div>

    <div class="container">
        <h2>General</h2>
    </div>

    <!-- Blog Grid -->
    <section class="space-top padding-bottom">
        <div class="container">
            <div class="masonry-grid">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>
                <!-- Item -->
                <div class="item col-md-2 col-sm-12">
                    <div class="post-tile">
                        <a href="/Forum/Category" class="post-thumb waves-effect">
                            <img src="/img/people/woman1-small.jpg" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Forum/Category"><h3>Forum Rules</h3></a>
                                <span>We like you, keep it that way.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <div class="item col-md-2 col-sm-12">
                    <div class="post-tile">
                        <a href="/Forum/Category" class="post-thumb waves-effect">
                            <img src="/img/people/woman2-small.jpg" alt="Post 2">
                        </a>
                        <div class="post-body">
                            <div class="post-title">
                                <a href="/Forum/Category"><h3>Announce</h3></a>
                                <span>Our awesome updates.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Blog Grid End -->
@stop
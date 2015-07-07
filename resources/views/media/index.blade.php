@extends('app')

@section('page-title')
    Media - One Secret Fantasy
@stop

@section('page-description')
    All our pictures and videos.
@stop

@section('page-keywords')
    pictures, videos, media
@stop

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            @include('_partials.searchForm')
            <h2>Media</h2>
        </div>
    </div>

    <!-- Gallery -->
    <section class="padding-bottom">
        <div class="container">
            <hr class="with-shadow">
            <!-- Badge -->
            <div class="badge badge-primary">
                <span class="icon"><i class="fa fa-camera"></i></span>
                Moments of our game
            </div>
            <div class="row">
                <!-- Heading -->
                <div class="col-lg-4 col-lg-push-8 col-md-5 col-md-push-7 col-sm-6 col-sm-push-6">
                    <div class="block-heading">
                        <h2>Our Gallery</h2>
                        <p>Special moments related to One Secret Fantasy.</p>
                    </div>
                </div>
                <!-- Filters -->
                <div class="col-lg-8 col-lg-pull-4 col-md-7 col-md-pull-5 col-sm-6 col-sm-pull-6">
                    <ul class="nav-filters text-right space-top-3x">
                        <li class="active"><a class="waves-effect waves-primary" data-filter="*" href="#">All</a></li>
                        <li><a class="waves-effect waves-primary" data-filter=".picture" href="#">Pictures</a></li>
                        <li><a class="waves-effect waves-primary" data-filter=".video" href="#">Videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="masonry-grid filter-grid space-top-2x">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>

                @foreach ($pictures as $picture)
                <!-- Item -->
                <div class="item picture">
                    <a href="{{ $picture->image }}" class="gallery-item image-item popup-image waves-effect">
                        <figure>
                            <img src="{{ $picture->image }}" alt="{{ $picture->title }}">
                            <figcaption>
                                <h3>{{ $picture->title }}</h3>
                                <p>{{ $picture->caption }}</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                @endforeach
                @foreach ($videos as $video)
                <!-- Item -->
                <div class="item video">
                    <a href="{{ $video->video }}" class="gallery-item video-item popup-video waves-effect">
                        <figure>
                            <img src="{{ $video->cover }}" alt="{{ $video->title }}">
                            <figcaption>
                                <h3>{{ $video->title }}</h3>
                                <p>{{ $video->caption }}</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section><!-- Gallery End -->
@stop
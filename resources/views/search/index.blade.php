@extends('app')

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            @include('_partials.searchForm')
            <h2>Search Results</h2>
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="space-top padding-bottom">
        <div class="container">
            @if (!$blogs->isEmpty())

            <hr class="with-shadow">
            <!-- Badge -->
            <div class="badge badge-primary">
                <span class="icon"><i class="fa fa-rss"></i></span>
                Blog results
            </div>
            <div class="masonry-grid">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>

                @foreach($blogs as $blog)
                    <!-- Item -->
                    <div class="item">
                        <div class="post-tile">
                            <a href="{{ route('blogs.show', ['id' => $blog->id]) }}" class="post-thumb waves-effect">
                                <img src="{{ $blog->image }}" alt="{{ $blog->title }}">
                            </a>
                            <div class="post-body">
                                <div class="post-title">
                                    <a href="{{ route('blogs.show', ['id' => $blog->id]) }}"><h3>{{ $blog->title }}</h3></a>
                                    <span>{{ $blog->excerpt }}</span>
                                </div>
                                <div class="post-meta">
                                    <div class="column">
                                        <span>In </span><a href="#">Design</a>&nbsp;&nbsp;&nbsp;&nbsp;by <a href="#">{{ $blog->user->name }}</a>
                                    </div>
                                    <div class="column text-right">
                                        <span>{{ \Carbon\Carbon::createFromTimestamp(strtotime($blog->created_at))->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

            @endif

            @if (!$pictures->isEmpty())

                <hr class="with-shadow">
                <!-- Badge -->
                <div class="badge badge-primary">
                    <span class="icon"><i class="fa fa-photo"></i></span>
                    Picture results
                </div>
                <div class="masonry-grid">
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
                </div>

            @endif

            @if (!$videos->isEmpty())

                <hr class="with-shadow">
                <!-- Badge -->
                <div class="badge badge-primary">
                    <span class="icon"><i class="fa fa-video-camera"></i></span>
                    Video results
                </div>
                <div class="masonry-grid">
                    <div class="grid-sizer"></div>
                    <div class="gutter-sizer"></div>

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

            @endif

        </div>
    </section><!-- Blog Grid End -->


@endsection
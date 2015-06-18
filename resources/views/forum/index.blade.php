@extends('app')

@section('breadcrumb')
    {!! Breadcrumbs::render('forum') !!}
@stop

@section('content')

    <div class="page-heading text-right">
        <div class="container">
            @include('_partials.searchForm')
            <h2>Forum</h2>
        </div>
    </div>

    @foreach($sections as $section)
    <!-- General -->
    <div class="container">
        <hr class="with-shadow">
        <!-- Badge -->
        <div class="badge badge-primary">
            <span class="icon"><i class="fa fa-comments-o"></i></span>
            {{ $section->name }}
        </div>
    </div>

    <section class="space-top padding-bottom">
        <div class="container">
            <div class="masonry-grid">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>
                @foreach($categories as $category)
                        @if ($category->section_id == $section->id)

                            <div class="item col-md-1">
                                <div class="post-tile">
                                    <a href="/forum/{{ $category->name }}" class="post-thumb waves-effect">
                                        <img src="{{ $category->image }}" alt="{{ $category->name }}">
                                    </a>
                                    <div class="post-body">
                                        <div class="post-title">
                                            <a href="/forum/{{ $category->name }}"><h3>{{ $category->name }}</h3></a>
                                            <span>{{ $category->description }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                @endforeach
            </div>
        </div>
    </section><!-- Blog Grid End -->
    @endforeach

@stop
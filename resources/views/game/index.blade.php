@extends('app')

@section('content')
    <!-- Company Timeline -->
    <!-- Class ".partial-overlay" makes overlay takes up only part of the block width. Position it to the right by addin ".right-aligned" class -->
    <section class="fw-bg partial-overlay bottom-shadow" style="background-image: url(/img/wallpapers/military_girl_1.jpg);">
        <div class="container padding-top">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    @include('_partials.searchForm')
                    <br>
                    <h1>The Game</h1>
                    <p>Everything about this game.</p>
                    <div class="timeline space-top-2x space-bottom-3x">
                        @foreach ($game_information_categories as $category)
                        <div class="timeline-row">
                            <a href="#{{ $category->title }}">
                                <div class="date">{{ $category->title }}</div>
                                <div class="event">{{ $category->subtitle }}</div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Company Timeline End -->

    <!-- Single Post -->
    <section class="space-top padding-bottom-2x">
        <div class="container">
            <div class="row">

                <!-- General -->
                @foreach($game_information_categories as $category)
                <div class="col-md-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">
                            <a name="{{ $category->title }}"></a><h1>{{ $category->title }}</h1>
                            
                            <div class="row">
                                <div class="panel-group" id="accordion">
                                    @foreach ($game_information as $information)
                                        @if ($information->game_information_category_id == $category->id)
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#{{ $information->id }}">{{ $information->title }}</a>
                                                    </h4>
                                                </div>
                                                <div id="{{ $information->id }}" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        {!! $information->body !!}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section><!-- Single Post End -->
@stop
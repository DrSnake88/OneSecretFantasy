@extends('app')

@section('content')
    @include('_partials.breadcrumbs')

    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            @include('_partials.searchForm')
            <hr class="with-shadow">
            <!-- Badge -->
            <div class="badge badge-primary">
                <span class="icon"><i class="fa fa-comments-o"></i></span>
                {{ $category->name }}
            </div>
        </div>
    </div>

    <section class="space-top padding-bottom">
        <div class="container">
            <!-- Buttons -->
            @if(Auth::user())
            <div class="row">
                <div class="col-md-1 col-md-offset-10">
{{--                    <a href="{{ url('/forum/' . $category->name . '/create') }}" class="btn btn-flat btn-success waves-effect waves-primary btn-sm">NEW TOPIC</a>--}}
                    <a href="{{ route('topic.create', $category->name) }}" class="btn btn-flat btn-success waves-effect waves-primary btn-sm">NEW TOPIC</a>
                </div>
            </div>
            @endif

            <table class="table table-hover table-responsive forum">
                <thead>
                <tr>
                    <th class="col-md-1"></th>
                    <th class="col-md-5">Subject</th>
                    <th class="col-md-3">Author</th>
                    <th class="col-md-1">Replies</th>
                    <th class="col-md-1">Views</th>
                    <th class="col-md-1">Last Post</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($topics as $topic)
                    <tr>
                        <td></td>
                        <td><a href="/forum/{{ $category->name }}/{{ $topic->slug }}">{{ $topic->name }}</a></td>
                        <td><a href="#">{{ $topic->user->name }}</a></td>
                        <td>{{ $topic->replies }}</td>
                        <td>{{ $topic->views }}</td>
                        <td>{{ $topic->created_at->formatLocalized("%d %B %Y") }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            {!! $topics->render() !!}
        </div>
    </section>
@stop
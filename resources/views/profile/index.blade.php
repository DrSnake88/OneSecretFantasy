@extends('app')

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            @include('_partials.searchForm')
            <h2>{{ $user->name }}'s Profile</h2>
        </div>
    </div>


@endsection
@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/GameCategories</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>SUBTITLE</th>
                        <th>TAGS</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($gamecategories as $gamecategory)
                <tr>
                    <td>{{$gamecategory->id}}</td>
                    <td>{{$gamecategory->title}}</td>
                    <td>{{$gamecategory->subtitle}}</td>
                    <td>{{$gamecategory->tags}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.game.categories.show', $gamecategory->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.game.categories.edit', $gamecategory->id) }}">Edit</a>
                        <form action="{{ route('admin.game.categories.destroy', $gamecategory->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('admin.game.categories.create') }}">Create</a>
        </div>
    </div>


@endsection
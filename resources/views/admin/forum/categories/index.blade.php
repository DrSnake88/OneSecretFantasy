@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Forum/Categories</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>IMAGE</th>
                        <th>SECTION_ID</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->image}}</td>
                    <td>{{$category->section_id}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.forum.categories.show', $category->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.forum.categories.edit', $category->id) }}">Edit</a>
                        <form action="{{ route('admin.forum.categories.destroy', $category->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                        <a class="btn btn-info " href="{{ route('admin.forum.topic.index', $category->id) }}">Threads</a>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('admin.forum.categories.create') }}">Create</a>
        </div>
    </div>


@endsection
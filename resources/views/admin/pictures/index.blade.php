@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Pictures</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>TITLE</th>
                        <th>CAPTION</th>
                        <th>TAGS</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($pictures as $picture)
                <tr>
                    <td>{{$picture->id}}</td>
                    <td>{{$picture->image}}</td>
                    <td>{{$picture->title}}</td>
                    <td>{{$picture->caption}}</td>
                    <td>{{$picture->tags}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.media.pictures.show', $picture->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.media.pictures.edit', $picture->id) }}">Edit</a>
                        <form action="{{ route('admin.media.pictures.destroy', $picture->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('admin.media.pictures.create') }}">Create</a>
        </div>
    </div>


@endsection
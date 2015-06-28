@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Videos</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>VIDEO</th>
                        <th>COVER</th>
                        <th>TITLE</th>
                        <th>CAPTION</th>
                        <th>TAGS</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($videos as $video)
                <tr>
                    <td>{{$video->id}}</td>
                    <td>{{$video->video}}</td>
                    <td>{{$video->cover}}</td>
                    <td>{{$video->title}}</td>
                    <td>{{$video->caption}}</td>
                    <td>{{$video->tags}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.media.videos.show', $video->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.media.videos.edit', $video->id) }}">Edit</a>
                        <form action="{{ route('admin.media.videos.destroy', $video->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('admin.media.videos.create') }}">Create</a>
        </div>
    </div>


@endsection
@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Videos / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$video->id}}</p>
                </div>
                <div class="form-group">
                     <label for="video">VIDEO</label>
                     <p class="form-control-static">{{$video->video}}</p>
                </div>
                    <div class="form-group">
                     <label for="cover">COVER</label>
                     <p class="form-control-static">{{$video->cover}}</p>
                </div>
                    <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$video->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="caption">CAPTION</label>
                     <p class="form-control-static">{{$video->caption}}</p>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <p class="form-control-static">{{$video->tags}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.media.videos.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.media.videos.edit', $video->id) }}">Edit</a>
            <form action="#/$video->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection
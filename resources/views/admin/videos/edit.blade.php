@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Videos / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.media.videos.update', $video->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$video->id}}</p>
                </div>
                <div class="form-group">
                     <label for="video">VIDEO</label>
                     <input type="text" name="video" class="form-control" value="{{$video->video}}"/>
                </div>
                    <div class="form-group">
                     <label for="cover">COVER</label>
                     <input type="text" name="cover" class="form-control" value="{{$video->cover}}"/>
                </div>
                    <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value="{{$video->title}}"/>
                </div>
                    <div class="form-group">
                     <label for="caption">CAPTION</label>
                     <input type="text" name="caption" class="form-control" value="{{$video->caption}}"/>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <input type="text" name="tags" class="form-control" value="{{$video->tags}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.media.videos.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection
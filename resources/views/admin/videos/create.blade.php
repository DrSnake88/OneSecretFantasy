@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Videos / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.media.videos.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="video">VIDEO</label>
                     <input type="text" name="video" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="cover">COVER</label>
                     <input type="text" name="cover" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="caption">CAPTION</label>
                     <input type="text" name="caption" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <input type="text" name="tags" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.media.videos.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection
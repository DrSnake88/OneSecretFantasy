@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Pictures / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$picture->id}}</p>
                </div>
                <div class="form-group">
                     <label for="image">IMAGE</label>
                     <p class="form-control-static">{{$picture->image}}</p>
                </div>
                    <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$picture->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="caption">CAPTION</label>
                     <p class="form-control-static">{{$picture->caption}}</p>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <p class="form-control-static">{{$picture->tags}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.media.pictures.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.media.pictures.edit', $picture->id) }}">Edit</a>
            <form action="#/$picture->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection
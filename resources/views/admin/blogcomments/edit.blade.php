@extends('layout')

@section('content')
    <div class="page-header">
        <h1>admin.BlogComments / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.blogs.comments.update', $blogcomment->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$blogcomment->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">USERID</label>
                    <p class="form-control-static">{{$blogcomment->user->id}}</p>
                </div>
                <div class="form-group">
                     <label for="body">COMMENT</label>
                     <input type="text" name="comment" class="form-control" value="{{$blogcomment->comment}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.blogs.comments.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection
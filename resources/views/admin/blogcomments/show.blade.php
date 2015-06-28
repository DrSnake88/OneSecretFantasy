@extends('layout')

@section('content')
    <div class="page-header">
        <h1>BlogComments / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$blogcomment->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">USER</label>
                     <p class="form-control-static">
                         @if($blogcomment->user)
                            {{$blogcomment->user->name}}
                         @else
                            {{$blogcomment->email}}
                         @endif
                     </p>
                </div>
                    <div class="form-group">
                     <label for="body">COMMENT</label>
                     <p class="form-control-static">{{$blogcomment->comment}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.blogs.comments.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.blogs.comments.edit', $blogcomment->id) }}">Edit</a>
            <form action="#/$blogcomment->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection
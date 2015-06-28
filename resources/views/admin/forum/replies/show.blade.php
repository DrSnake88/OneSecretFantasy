@extends('layout')

@section('content')
    <div class="page-header">
        <h1>admin.forum.Replies / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$reply->id}}</p>
                </div>
                <div class="form-group">
                     <label for="body">BODY</label>
                     <p class="form-control-static">{{$reply->body}}</p>
                </div>
                    <div class="form-group">
                     <label for="topic_id">TOPIC_ID</label>
                     <p class="form-control-static">{{$reply->topic_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <p class="form-control-static">{{$reply->user_id}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.forum.replies.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.forum.replies.edit', $reply->id) }}">Edit</a>
            <form action="#/$reply->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection
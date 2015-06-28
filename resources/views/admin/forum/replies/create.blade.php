@extends('layout')

@section('content')
    <div class="page-header">
        <h1>admin.forum.Replies / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.forum.replies.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="body">BODY</label>
                     <input type="text" name="body" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="topic_id">TOPIC_ID</label>
                     <input type="text" name="topic_id" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <input type="text" name="user_id" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.forum.replies.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection
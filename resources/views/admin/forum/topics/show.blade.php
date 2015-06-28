@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Forum/Topics / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$topic->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$topic->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="category_id">CATEGORY_ID</label>
                     <p class="form-control-static">{{$topic->category_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <p class="form-control-static">{{$topic->user_id}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.forum.topics.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.forum.topics.edit', $topic->id) }}">Edit</a>
            <form action="#/$topic->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection
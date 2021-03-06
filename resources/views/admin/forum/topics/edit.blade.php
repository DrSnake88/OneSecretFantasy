@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Forum/Topics / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.forum.topics.update', $topic->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$topic->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value="{{$topic->name}}"/>
                </div>
                    <div class="form-group">
                     <label for="category_id">CATEGORY_ID</label>
                     <input type="text" name="category_id" class="form-control" value="{{$topic->category_id}}"/>
                </div>
                    <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <input type="text" name="user_id" class="form-control" value="{{$topic->user_id}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.forum.topics.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection
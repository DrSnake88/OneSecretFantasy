@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Users / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$user->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value="{{$user->name}}"/>
                </div>
                    <div class="form-group">
                     <label for="email">EMAIL</label>
                     <input type="text" name="email" class="form-control" value="{{$user->email}}"/>
                </div>
                    <div class="form-group">
                     <label for="password">PASSWORD</label>
                     <input type="text" name="password" class="form-control" value="{{$user->password}}"/>
                </div>
                    <div class="form-group">
                     <label for="avatar">AVATAR</label>
                     <input type="text" name="avatar" class="form-control" value="{{$user->avatar}}"/>
                </div>
                    <div class="form-group">
                     <label for="level">LEVEL</label>
                     <input type="text" name="level" class="form-control" value="{{$user->level}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.users.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection
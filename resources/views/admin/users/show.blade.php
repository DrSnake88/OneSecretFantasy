@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Users / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$user->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$user->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="email">EMAIL</label>
                     <p class="form-control-static">{{$user->email}}</p>
                </div>
                    <div class="form-group">
                     <label for="password">PASSWORD</label>
                     <p class="form-control-static">{{$user->password}}</p>
                </div>
                    <div class="form-group">
                     <label for="avatar">AVATAR</label>
                     <p class="form-control-static">{{$user->avatar}}</p>
                </div>
                    <div class="form-group">
                     <label for="level">LEVEL</label>
                     <p class="form-control-static">{{$user->level}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.users.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
            <form action="#/$user->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection
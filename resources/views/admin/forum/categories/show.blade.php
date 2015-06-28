@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Forum/Categories / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$category->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$category->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$category->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="image">IMAGE</label>
                     <p class="form-control-static">{{$category->image}}</p>
                </div>
                    <div class="form-group">
                     <label for="section_id">SECTION_ID</label>
                     <p class="form-control-static">{{$category->section_id}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.forum.categories.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.forum.categories.edit', $category->id) }}">Edit</a>
            <form action="#/$category->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection
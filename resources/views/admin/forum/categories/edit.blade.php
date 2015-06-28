@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Forum/Categories / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.forum.categories.update', $category->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$category->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value="{{$category->name}}"/>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <input type="text" name="description" class="form-control" value="{{$category->description}}"/>
                </div>
                    <div class="form-group">
                     <label for="image">IMAGE</label>
                     <input type="text" name="image" class="form-control" value="{{$category->image}}"/>
                </div>
                    <div class="form-group">
                     <label for="section_id">SECTION_ID</label>
                     <input type="text" name="section_id" class="form-control" value="{{$category->section_id}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.forum.categories.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection
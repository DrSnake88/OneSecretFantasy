@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Forum/Categories / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            {!! Form::open(array('route'=>'admin.forum.categories.store','method'=>'POST', 'files'=>true)) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <input type="text" name="description" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="image">SECTION ID</label>
                     <input type="text" name="section_id" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="body">IMAGE</label>
                    <input type="file" name="image" id="image" />
                </div>



            <a class="btn btn-default" href="{{ route('admin.forum.categories.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection
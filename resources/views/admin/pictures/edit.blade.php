@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Pictures / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            {!! Form::open(array('route'=>['admin.media.pictures.store', $picture->id], 'files'=>true)) !!}
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$picture->id}}</p>
                </div>
                <div class="form-group">
                    <label for="body">IMAGE</label>
                    <input type="file" name="image" id="image" />
                </div>
                    <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value="{{$picture->title}}"/>
                </div>
                    <div class="form-group">
                     <label for="caption">CAPTION</label>
                     <input type="text" name="caption" class="form-control" value="{{$picture->caption}}"/>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <input type="text" name="tags" class="form-control" value="{{$picture->tags}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.media.pictures.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection
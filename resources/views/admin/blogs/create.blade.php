@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Blogs / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            {!! Form::open(array('route'=>'admin.blogs.store','method'=>'POST', 'files'=>true)) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value=""/>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="title">EXCERPT</label>--}}
                    {{--<input type="text" name="excerpt" class="form-control" value=""/>--}}
                {{--</div>--}}
                <div class="form-group">
                     <label for="body">BODY</label>
                     <textarea rows="10" name="body" class="form-control" value=""></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'body' );
                    </script>
                </div>
                <div class="form-group">
                    <label for="body">IMAGE</label>
                    <input type="file" name="image" id="image" />
                </div>
                <div class="form-group">
                    <label for="tags">TAGS</label>
                    <input type="text" name="tags" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.blogs.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection
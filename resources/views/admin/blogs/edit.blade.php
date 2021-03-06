@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Blogs / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('route'=>['admin.blogs.update', $blog->id], 'files'=>true)) !!}
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$blog->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value="{{$blog->title}}"/>
                </div>
                {{--<div class="form-group">--}}
                    {{--<label for="title">EXCERPT</label>--}}
                    {{--<input type="text" name="excerpt" class="form-control" value="{{$blog->excerpt}}"/>--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="body">BODY</label>
                    <textarea rows="10" name="body" class="form-control" value="">{{$blog->body}}</textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'body', {
                            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
//                            filebrowserUploadUrl: '/laravel-filemanager?type=Files',
                            filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
                        });
                    </script>
                </div>

                <div class="form-group">
                    <label for="body">IMAGE</label>
                    <input type="file" name="image" id="image" />
                </div>
                <div class="form-group">
                    <label for="tags">TAGS</label>
                    <input type="text" name="tags" class="form-control" value="{{$blog->tags}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.blogs.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection
@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/GameCategories / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.game.categories.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="subtitle">SUBTITLE</label>
                     <input type="text" name="subtitle" class="form-control" value=""/>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <input type="text" name="tags" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.game.categories.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection
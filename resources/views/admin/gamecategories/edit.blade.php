@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/GameCategories / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.game.categories.update', $gamecategory->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$gamecategory->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value="{{$gamecategory->title}}"/>
                </div>
                    <div class="form-group">
                     <label for="subtitle">SUBTITLE</label>
                     <input type="text" name="subtitle" class="form-control" value="{{$gamecategory->subtitle}}"/>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <input type="text" name="tags" class="form-control" value="{{$gamecategory->tags}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.game.categories.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection
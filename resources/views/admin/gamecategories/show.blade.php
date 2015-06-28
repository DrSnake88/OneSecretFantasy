@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/GameCategories / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$gamecategory->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$gamecategory->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="subtitle">SUBTITLE</label>
                     <p class="form-control-static">{{$gamecategory->subtitle}}</p>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <p class="form-control-static">{{$gamecategory->tags}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.game.categories.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.game.categories.edit', $gamecategory->id) }}">Edit</a>
            <form action="#/$gamecategory->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection
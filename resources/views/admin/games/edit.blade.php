@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Games / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.game.information.update', $game->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$game->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value="{{$game->title}}"/>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <input type="text" name="body" class="form-control" value="{{$game->body}}"/>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <input type="text" name="tags" class="form-control" value="{{$game->tags}}"/>
                </div>
                    <div class="form-group">
                     <label for="category">CATEGORY</label>
                     <input type="text" name="category" class="form-control" value="{{$game->game_information_category_id}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.game.information.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection
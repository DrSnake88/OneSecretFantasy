@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Games / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$game->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$game->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <p class="form-control-static">{{$game->body}}</p>
                </div>
                    <div class="form-group">
                     <label for="tags">TAGS</label>
                     <p class="form-control-static">{{$game->tags}}</p>
                </div>
                    <div class="form-group">
                     <label for="category">CATEGORY</label>
                     <p class="form-control-static">{{$game->game_information_category_id}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.game.information.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.game.information.edit', $game->id) }}">Edit</a>
            <form action="#/$game->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection
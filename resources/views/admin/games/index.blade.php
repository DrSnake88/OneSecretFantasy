@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Games</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>BODY</th>
                        <th>TAGS</th>
                        <th>CATEGORY</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($games as $game)
                <tr>
                    <td>{{$game->id}}</td>
                    <td>{{$game->title}}</td>
                    <td>{{$game->body}}</td>
                    <td>{{$game->tags}}</td>
                    <td>{{$game->game_information_category_id}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.game.information.show', $game->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.game.information.edit', $game->id) }}">Edit</a>
                        <form action="{{ route('admin.game.information.destroy', $game->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('admin.game.information.create') }}">Create</a>
        </div>
    </div>


@endsection
@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/Forum/Topics</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>CATEGORY_ID</th>
                        <th>USER_ID</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($topics as $topic)
                <tr>
                    <td>{{$topic->id}}</td>
                    <td>{{$topic->name}}</td>
                    <td>{{$topic->category_id}}</td>
                    <td>{{$topic->user_id}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.forum.topics.show', $topic->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.forum.topics.edit', $topic->id) }}">Edit</a>
                        <form action="{{ route('admin.forum.topics.destroy', $topic->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                        <a class="btn btn-info" href="{{ route('admin.forum.reply.index', $topic->id) }}">Replies</a>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('admin.forum.topics.create') }}">Create</a>
        </div>
    </div>


@endsection
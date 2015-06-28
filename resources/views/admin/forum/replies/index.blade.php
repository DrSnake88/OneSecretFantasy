@extends('layout')

@section('content')
    <div class="page-header">
        <h1>admin.forum.Replies</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>BODY</th>
                        <th>TOPIC_ID</th>
                        <th>USER_ID</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($replies as $reply)
                <tr>
                    <td>{{$reply->id}}</td>
                    <td>{{$reply->body}}</td>
                    <td>{{$reply->topic_id}}</td>
                    <td>{{$reply->user_id}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.forum.replies.show', $reply->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.forum.replies.edit', $reply->id) }}">Edit</a>
                        <form action="{{ route('admin.forum.replies.destroy', $reply->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('admin.forum.replies.create') }}">Create</a>
        </div>
    </div>


@endsection
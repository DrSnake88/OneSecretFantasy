@extends('layout')

@section('content')
    <div class="page-header">
        <h1>{{ $blog->title }} Comments</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>USER</th>
                        <th>COMMENT</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($blogcomments as $blogcomment)
                <tr>
                    <td>{{$blogcomment->id}}</td>
                    @if($blogcomment->user)
                        <td>{{$blogcomment->user->name}}</td>
                    @else
                        <td>{{$blogcomment->email}}</td>
                    @endif
                        <td>{{$blogcomment->comment}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.blogs.comments.show', $blogcomment->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.blogs.comments.edit', $blogcomment->id) }}">Edit</a>
                        <form action="{{ route('admin.blogs.comments.destroy', $blogcomment->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

{{--            <a class="btn btn-success" href="{{ route('admin.blogs.comments.create') }}">Create</a>--}}
        </div>
    </div>


@endsection
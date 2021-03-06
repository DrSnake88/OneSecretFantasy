@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin/ForumSections</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($sections as $section)
                <tr>
                    <td>{{$section->id}}</td>
                    <td>{{$section->name}}</td>
                    <td>{{$section->description}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.forum.sections.show', $section->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.forum.sections.edit', $section->id) }}">Edit</a>
                        <form action="{{ route('admin.forum.sections.destroy', $section->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('admin.forum.sections.create') }}">Create</a>
        </div>
    </div>


@endsection
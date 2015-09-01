@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Admin</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            What's New:
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            FORUM:
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>TOPIC</th>
                    <th>BODY</th>
                    <th>USER</th>
                </tr>
                </thead>

                <tbody>

                @foreach($forums as $forum)
                    <tr>
                        <td>{{$forum->id}}</td>
                        <td>{{$forum->topic_id}}</td>
                        <td>{{$forum->body}}</td>
                        <td>{{$forum->user_id}}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            BLOG:
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>BLOG</th>
                    <th>COMMENT</th>
                    <th>USER_ID</th>
                    <th>EMAIL</th>
                </tr>
                </thead>

                <tbody>

                @foreach($blogs as $blog)
                    <tr>
                        <td>{{$blog->id}}</td>
                        <td>{{$blog->blog_id}}</td>
                        <td>{{$blog->comment}}</td>
                        <td>{{$blog->user_id}}</td>
                        <td>{{$blog->email}}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            CONTACT:
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>MESSAGE</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                </tr>
                </thead>

                <tbody>

                @foreach($contact as $cnt)
                    <tr>
                        <td>{{$cnt->id}}</td>
                        <td>{{$cnt->message}}</td>
                        <td>{{$cnt->name}}</td>
                        <td>{{$cnt->email}}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>

@endsection
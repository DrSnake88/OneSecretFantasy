@extends('app')

@section('page-title')
    {{ $user->name }}'s Profile - OneSecretFantasy
@stop

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            <h2>{{ $user->name }}'s Profile</h2>
        </div>
    </div>

    <!-- Single Post -->
    <section class="space-top padding-bottom-2x">
        <div class="container">

            <div class="row">

                <!-- Post Content -->
                <div class="col-lg-12 padding-bottom">
                    <div class="single-post box-float">
                        <div class="inner">

                            @if(Session::get('message') != null)
                                <div class="alert alert-success">
                                    <h3>{{ Session::get('message') }}</h3>
                                </div>
                            @endif
                            @if(Session::get('error') != null)
                                <div class="alert alert-danger">
                                    <h3>{{ Session::get('error') }}</h3>
                                </div>
                            @endif


                    {!! Form::model($user, ['route' => ['profile.update', 'update'], 'files' => true, 'method' => 'PUT']) !!}
                            <div class="col-md-4">

                                <div class="row">
                                    <img src="{{ $user->avatar }}" class="img-rounded img-responsive" style="height: 125px; margin-bottom: 12px;" alt=""/>
                                    {!! Form::label('avatar', 'Avatar') !!}
                                    {!! Form::file('avatar') !!}
                                </div>
                                <div class="row">
                                    <div class="form-control">
                                        {!! Form::text('name', null, ['required']) !!}
                                        {!! Form::label('name', 'Name') !!}
                                        <span class="error-label"></span>
                                        <span class="valid-label"></span>
                                    </div>
                                    <div class="form-control">
                                        {!! Form::text('email', null, ['required']) !!}
                                        {!! Form::label('email', 'Email') !!}
                                        <span class="error-label"></span>
                                        <span class="valid-label"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="alert alert-info">
                                        <h3><b>Welcome {{ $user->name }}</b></h3>
                                        <p>
                                            You can edit your profile here, this information will be used all through the site.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Change Your Password</h3>
                                    <div class="form-control col-md-6">
                                        {!! Form::password('password', null, ['required']) !!}
                                        {!! Form::label('password', 'Password') !!}
                                        <span class="error-label"></span>
                                        <span class="valid-label"></span>
                                    </div>
                                    <div class="form-control col-md-6">
                                        {!! Form::password('password_again', null, ['required']) !!}
                                        {!! Form::label('password_again', 'Password Again') !!}
                                        <span class="error-label"></span>
                                        <span class="valid-label"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row space-top">

                                <div class="col-sm-6 pull-right">
                                    <div class="row">
                                        <div class="col-lg-6 col-lg-offset-6 col-md-8 col-md-offset-4 col-sm-12">
                                            <button type="submit" class="btn btn-block btn-success btn-float waves-effect waves-light">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('app')

@section('content')
    <!-- Page Heading -->
    <div class="page-heading text-right">
        <div class="container">
            <h2>Login</h2>
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="space-top padding-bottom">
        <div class="container">
            <hr class="with-shadow">
            <div class="col-lg-12 padding-bottom">
                <div class="single-post box-float">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="tab-pane transition scale fade in active" id="signin-form" autocomplete="off" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">



                    <div class="form-control space-top-2x">
                        <input type="email" name="email" id="si_email" value="{{ old('email') }}" readonly onfocus="$(this).removeAttr('readonly');" required>
                        <label for="email">Email</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>


                    <div class="form-control">
                        <input type="password" name="password" id="si-password" readonly onfocus="$(this).removeAttr('readonly');" required>
                        <label for="password">Password</label>
                        <a class="helper-link" href="#">Forgot password?</a>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>


                    <label class="checkbox space-top-2x">
                        <input type="checkbox" name="remember"> Remember me
                    </label>

                    <div class="clearfix modal-buttons">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-block btn-success btn-float waves-effect waves-light">Sign In</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
	    </div>
    </section>
@endsection

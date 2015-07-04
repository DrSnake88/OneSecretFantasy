<!--Modal (Signin/Signup Page)-->
<div class="modal fade" id="signin-page">
    <div class="modal-dialog">
        <div class="modal-form">
            <div class="tab-content">
                <!-- Sign in form -->
                <form class="tab-pane transition scale fade in active" id="signin-form" autocomplete="off" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <p style="font-size: 24px" class="modal-title">Sign In</p>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-control space-top-2x">
                        <input type="email" name="email" id="si_email" value="{{ old('email') }}" readonly onfocus="$(this).removeAttr('readonly');" required>
                        <label for="si_email">Email</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <div class="form-control">
                        <input type="password" name="password" id="si-password" readonly onfocus="$(this).removeAttr('readonly');" required>
                        <label for="si-password">Password</label>
                        <div class="form-switch"><a class="helper-link" href="#form-3">Forgot password?</a></div>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <label class="checkbox space-top-2x">
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <div class="clearfix modal-buttons">
                        <div class="pull-right">
                            <button type="button" class="btn btn-flat btn-default waves-effect" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-flat btn-secondary waves-effect waves-primary">Sign In</button>
                        </div>
                        <!-- Switching forms (Fake nav tab) -->
                        <div class="form-switch pull-left"><a class="btn btn-flat btn-secondary waves-effect waves-primary" href="#form-1">Sign Up</a></div>
                    </div>
                    
                    <div class="social-login">
                        <ul>
                            <li><a href="/login/facebook" class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook</a></li>
                            {{--<li><a href="/login/twitter" class="btn btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i> Sign in with Twitter</a></li>--}}
                            <li><a href="/login/google" class="btn btn-block btn-social btn-google"><i class="fa fa-google"></i> Sign in with Google</a></li>
                        </ul>
                    </div>
                </form>

                <!-- Sign up form -->
                <form class="tab-pane transition scale fade" id="signup-form" method="POST" action="{{ url('/auth/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <p style="font-size: 24px" class="modal-title">Sign Up</p>
                    <div class="form-control space-top-2x">
                        <input type="email" name="email" id="su-email" value="{{ old('email') }}" required>
                        <label for="su-email">Email</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <div class="form-control">
                        <input type="password" name="password" id="su-password" required>
                        <label for="su-password">Password</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <div class="form-control">
                        <input type="password" name="password_confirmation" id="su-password-repeat" required>
                        <label for="su-password-repeat">Repeat password</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    {{--<label class="checkbox space-top-2x">--}}
                        {{--<input type="checkbox"> Subscribe for our news--}}
                    {{--</label>--}}
                    <div class="clearfix modal-buttons">
                        <div class="pull-right">
                            <button type="button" class="btn btn-flat btn-default waves-effect" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-flat btn-secondary waves-effect waves-primary">Sign Up</button>
                        </div>
                        <!-- Switching forms (Fake nav tab) -->
                        <div class="form-switch pull-left"><a class="btn btn-flat btn-secondary waves-effect waves-primary" href="#form-2">Sign In</a></div>
                    </div>
                </form>

                <!-- Password Forget form -->
                <form class="tab-pane transition scale fade" id="password-forget-form" method="POST" action="{{ url('/password/email') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <p style="font-size: 24px" class="modal-title">Reset Password</p>
                    <div class="form-control space-top-2x">
                        <input type="email" name="email" id="pf-email" value="{{ old('email') }}" required>
                        <label for="pf-email">Email</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <div class="clearfix modal-buttons">
                        <div class="pull-right">

                            <button type="submit" class="btn btn-flat btn-secondary waves-effect waves-primary">Send Password Reset Link</button>
                        </div>
                        <!-- Switching forms (Fake nav tab) -->
                        <button type="button" class="btn btn-flat btn-default waves-effect" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
            <!-- Hidden real nav tabs -->
            <ul class="nav-tabs hidden">
                <li id="form-1"><a href="#signup-form" data-toggle="tab">Sign up</a></li>
                <li id="form-2"><a href="#signin-form" data-toggle="tab">Sign in</a></li>
                <li id="form-3"><a href="#password-forget-form" data-toggle="tab">Password Forget?</a></li>
            </ul>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
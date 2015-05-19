<!--Modal (Signin/Signup Page)-->
<div class="modal fade" id="signin-page">
    <div class="modal-dialog">
        <div class="modal-form">
            <div class="tab-content">
                <!-- Sign in form -->
                <form class="tab-pane transition scale fade in active" id="signin-form" autocomplete="off">
                    <h3 class="modal-title">Sign In</h3>
                    <div class="form-control space-top-2x">
                        <input type="email" name="si_email" id="si_email" readonly onfocus="$(this).removeAttr('readonly');" required>
                        <label for="si_email">Email</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <div class="form-control">
                        <input type="password" name="si-password" id="si-password" readonly onfocus="$(this).removeAttr('readonly');" required>
                        <label for="si-password">Password</label>
                        <a class="helper-link" href="#">Forgot password?</a>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <label class="checkbox space-top-2x">
                        <input type="checkbox"> Remember me
                    </label>
                    <div class="clearfix modal-buttons">
                        <div class="pull-right">
                            <button type="button" class="btn btn-flat btn-default waves-effect" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-flat btn-secondary waves-effect waves-primary">Sign In</button>
                        </div>
                        <!-- Switching forms (Fake nav tab) -->
                        <div class="form-switch pull-left"><a class="btn btn-flat btn-secondary waves-effect waves-primary" href="#form-1">Sign Up</a></div>
                    </div>
                </form>

                <!-- Sign up form -->
                <form class="tab-pane transition scale fade" id="signup-form">
                    <h3 class="modal-title">Sign Up</h3>
                    <div class="form-control space-top-2x">
                        <input type="email" name="su-email" id="su-email" required>
                        <label for="su-email">Email</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <div class="form-control">
                        <input type="password" name="su-password" id="su-password" required>
                        <label for="su-password">Password</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <div class="form-control">
                        <input type="password" name="su-password-repeat" id="su-password-repeat" required>
                        <label for="su-password-repeat">Repeat password</label>
                        <span class="error-label"></span>
                        <span class="valid-label"></span>
                    </div>
                    <label class="checkbox space-top-2x">
                        <input type="checkbox"> Subscribe for our news
                    </label>
                    <div class="clearfix modal-buttons">
                        <div class="pull-right">
                            <button type="button" class="btn btn-flat btn-default waves-effect" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-flat btn-secondary waves-effect waves-primary">Sign Up</button>
                        </div>
                        <!-- Switching forms (Fake nav tab) -->
                        <div class="form-switch pull-left"><a class="btn btn-flat btn-secondary waves-effect waves-primary" href="#form-2">Sign In</a></div>
                    </div>
                </form>
            </div>
            <!-- Hidden real nav tabs -->
            <ul class="nav-tabs hidden">
                <li id="form-1"><a href="#signup-form" data-toggle="tab">Sign up</a></li>
                <li id="form-2"><a href="#signin-form" data-toggle="tab">Sign in</a></li>
            </ul>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
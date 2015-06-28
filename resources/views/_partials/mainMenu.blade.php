<!-- Navbar -->
<!-- Add '.navbar-sticky' to make navbar stuck to top on document scroll -->
<header class="navbar navbar-sticky">
    <div class="container">

        <!-- Nav Toggle -->
        <div class="nav-toggle waves-effect waves-light waves-circle" data-target="#sidemenu" data-offcanvas="open">
            <i class="fa fa-bars" style="margin-top:10px;"></i>
        </div>



        <!-- Logo -->
        <a href="/" class="logo">
            <img src="/img/logo/logo-square.png" alt="One Secret Fantasy">
            One Secret Fantasy
        </a>
        <!-- Toolbar -->
        <div class="toolbar">
            <span class="main-menu">
                <a href="/game" class="btn btn-flat btn-light icon-left waves-effect waves-light"><i class="fa fa-gamepad"></i> Game</a>
                <a href="/forum" class="btn btn-flat btn-light icon-left waves-effect waves-light"><i class="fa fa-comments-o"></i> Forum</a>
                <a href="/blogs" class="btn btn-flat btn-light icon-left waves-effect waves-light"><i class="fa fa-rss"></i> Blog</a>
                <a href="/media" class="btn btn-flat btn-light icon-left waves-effect waves-light"><i class="fa fa-photo"></i> Media</a>
                <a href="/contact" class="btn btn-flat btn-light icon-left waves-effect waves-light"><i class="fa fa-phone"></i> Contact</a>
            </span>

            <span class="profile-buttons">
                @if(Auth::user())
                    <a href="{{ \Illuminate\Support\Facades\URL::route('profile.index') }}" class="action-btn"><i class="fa fa-user"></i>
                        @if(strpos(Auth::user()->name, " ") == 0)
                            {{ Auth::user()->name }}
                        @else
                            {{ substr(Auth::user()->name, 0, strpos(Auth::user()->name, " ")) }}
                        @endif
                    </a>
                    <a href="{{ \Illuminate\Support\Facades\URL::route('account.sign-out') }}" class="action-btn"><i class="fa fa-sign-out"></i></a>
                @else
                    <a href="#" data-toggle="modal" data-target="#signin-page" data-modal-form="sign-in" class="action-btn"><i class="fa fa-sign-in"></i> Sign in</a>
                @endif
            </span>

            <!-- Social Buttons -->
            <div class="social-buttons text-right">
                <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="sb-youtube"><i class="fa fa-youtube"></i></a>
                <a href="#" class="sb-facebook"><i class="fa fa-facebook"></i></a>
            </div>
        </div>
    </div>
</header><!-- Navbar End -->
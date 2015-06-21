<!doctype html>
<html lang="en">
    @include('_partials.header')
    <body class="fixed-footer">
        <!-- Preloader -->
        <div id="preloader">
            <div class="logo">
                <img src="/img/logo/logo-rounded.png" alt="OneSecretFantasy"/>
                <span>OneSecretFantasy</span>
            </div>
        </div>

        @include('_partials.sideMenu')
        @include('_partials.modals')


        @if(Request::is('/'))
            @include('_partials.splash')
        @endif


        <!-- Content Wrap -->
        <div class="content-wrap" style="background-color: #181818">

            @include('_partials.mainMenu')
            @yield('content')

            <hr class="with-shadow">
        </div><!-- Content Wrap End -->

    @include('_partials.footer')

    @if(Session::get('error_code') != null && Session::get('error_code') == 5)
        <script>
            $(function() {
                $('#signin-page').modal('show');
            });
        </script>
    @endif
    </body>
</html>
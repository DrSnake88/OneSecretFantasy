<!doctype html>
<html lang="en">
    @include('_partials.header')
    <body class="fixed-footer">
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
    </body>
</html>
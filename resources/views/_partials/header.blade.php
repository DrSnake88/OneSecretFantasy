<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('page-title')</title>

    <!-- TODO: Fix Description and Keywords -->
    <!-- SEO Meta tags -->
    <meta name="description" content="@yield('page-description')" />
    <meta name="keywords" content="@yield('page-keywords')" />
    <meta name="author" content="OneSecretFantasy" />

    <!-- Mobile specific meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-touch-icon-57x57.png?v=A0vQ0kpxbR">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-touch-icon-60x60.png?v=A0vQ0kpxbR">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png?v=A0vQ0kpxbR">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-touch-icon-76x76.png?v=A0vQ0kpxbR">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png?v=A0vQ0kpxbR">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-touch-icon-120x120.png?v=A0vQ0kpxbR">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-touch-icon-144x144.png?v=A0vQ0kpxbR">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-touch-icon-152x152.png?v=A0vQ0kpxbR">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png?v=A0vQ0kpxbR">
    <link rel="icon" type="image/png" href="/img/favicon/favicon-32x32.png?v=A0vQ0kpxbR" sizes="32x32">
    <link rel="icon" type="image/png" href="/img/favicon/android-chrome-192x192.png?v=A0vQ0kpxbR" sizes="192x192">
    <link rel="icon" type="image/png" href="/img/favicon/favicon-96x96.png?v=A0vQ0kpxbR" sizes="96x96">
    <link rel="icon" type="image/png" href="/img/favicon/favicon-16x16.png?v=A0vQ0kpxbR" sizes="16x16">
    <link rel="manifest" href="/img/favicon/manifest.json?v=A0vQ0kpxbR">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico?v=A0vQ0kpxbR">
    <meta name="msapplication-TileColor" content="#b72025">
    <meta name="msapplication-TileImage" content="/img/favicon/mstile-144x144.png?v=A0vQ0kpxbR">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml?v=A0vQ0kpxbR">
    <meta name="theme-color" content="#ffffff">

    <script src="//load.sumome.com/" data-sumo-site-id="c8a0b68d0ade5666969636d0bb71ac0d99fb0040ff6b7b4e2c567322d7399e80" async="async"></script>



    {{--@if(Request::is('/'))--}}
        {{--<!-- Preloader (Pace.js) -->--}}
        {{--<script src="/js/pace.min.js"></script>--}}
    {{--@endif--}}

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    @yield('page-scripts')
</head>
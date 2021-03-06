<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>One Secret Fantasy CMS</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->

    <script src="//cdn.ckeditor.com/4.5.2/full/ckeditor.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>



<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">One Secret Fantasy CMS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="{{ route('admin.blogs.index') }}">Blog</a></li>
                {{--<li><a href="{{ route('admin.forum.index') }}">Forum</a></li>--}}
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Game <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.game.categories.index') }}">Categories</a></li>
                        <li><a href="{{ route('admin.game.information.index') }}">Information</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Media <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.media.pictures.index') }}">Pictures</a></li>
                        <li><a href="{{ route('admin.media.videos.index') }}">Videos</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Forum <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.forum.sections.index') }}">Sections</a></li>
                        <li><a href="{{ route('admin.forum.categories.index') }}">Categories</a></li>
{{--                        <li><a href="{{ route('admin.forum.category.index') }}">Videos</a></li>--}}
{{--                        <li><a href="{{ route('admin.forum.thread.index') }}">Videos</a></li>--}}
                    </ul>
                </li>
                <li><a href="{{ route('admin.users.index') }}">Users</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>








<div class="container">
    <div class="row">
        <div class="col-md-12">@yield('content')</div>
    </div>
</div><!-- /.container -->





<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
</body>
</html>

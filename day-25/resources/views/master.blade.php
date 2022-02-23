<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <div class="navbar-nav">
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Add Student</a></li>
                <li><a href="" class="nav-link">Manage Student</a></li>
                <li><a href="{{route('blog')}}" class="nav-link">Add Blog</a></li>
                <li><a href="" class="nav-link">login</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('body')

<script src="{{asset('/')}}js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
<footer class="bg-dark text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 text-white text-muted h-80">
                This is preserved by Faiyaz_Fahim&copy;
            </div>
        </div>
    </div>
</footer>
</body>
</html>

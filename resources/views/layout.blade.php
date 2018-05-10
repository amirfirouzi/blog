<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

@include('layouts.nav')

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8">
            @yield('content')
        </div>
        <div class="col-md-4">
            @include('layouts.sidebar')
        </div>
    </div>

</main>

<footer>
    <p>Copyright &copy; 2018, rBlog | <a href="{{route('home')}}">Admin Login</a></p>
</footer>

</body>
</html>

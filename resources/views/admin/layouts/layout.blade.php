<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link rel="stylesheet" href="{{asset('css/admin/app.css')}}">
</head>

<body>
@include('admin.layouts.nav-top')

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    @include('admin.layouts.nav-sidebar')
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">{{$title}}</h1>
            </div>
            <div class="row">
                <div class="card card-body bg-light">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/admin/app.js')}}"></script>
</body>
</html>

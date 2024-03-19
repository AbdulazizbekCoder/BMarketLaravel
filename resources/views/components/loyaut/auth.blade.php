<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body style="background: rgba(184,184,184,0.48)">
<div class="main d-flex align-items-center justify-content-center min-vh-100">
    <div class="container bg-white  w-25 rounded-3">

@yield('content')
    </div>
</div>
<script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>

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
        <div class="text text-center text-primary fs-2 mt-3 fw-bold">Login</div>
        <hr>
        <div class="input">
            <form action="{{route('loginStore')}}" method="post">
                @csrf
                <input name="phone" class="form-control mt-3 " type="number" placeholder="Phone number..." required>
                <input name="password" class="form-control mt-3 " type="password" placeholder="Password..." required>
                <button class="btn btn-primary mt-3 mb-2  w-100" type="submit">Kirish</button>
                <a href="{{route('home')}}" class="btn btn-dark  mb-4  w-100">Orqaga</a>
            </form>
        </div>

    </div>
</div>
</body>
</html>

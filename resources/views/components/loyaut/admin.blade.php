<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-icons.min.css')}}">
{{--    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>--}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="icon" href="{{asset('assets/imgs/img_6.png')}}">
</head>
<body>

<div class="topbar shadow-lg bg-light d-flex align-items-center ">
    <div class="row w-100 mx-0">
        <div class="col fs-1 fw-bold">
            <a href="{{route('home')}}">{{config('app.name')}}</a>
        </div>
        <div class="col d-flex align-items-center justify-content-end">
            <div class="row w-75 fs-5 fw-normal">
                <div class="col text-center">
                    <a class="{{request()->is('/*') ? 'active' : ''}} " href="{{route('admin.dashboard')}}">Dashboard</a>
                </div>
                <div class="col text-center">
                    <a class="{{request()->is('about') ? 'active' : ''}} " href="{{route('admin.order')}}">Orders</a>
                </div>
                <div class="col text-center">
                    <a class="{{request()->is('products') ? 'active' : ''}} " href="{{route('products.index')}}">Product</a>
                </div>
            <div class="col text-center">
                    <a class="btn btn-primary " href="{{route('logout')}}" >Logout</a>
                </div>
            </div>
        </div>
    </div>

</div>

{{$slot}}

<script src="{{asset('bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>

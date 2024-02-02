<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>

<div class="topbar shadow-lg bg-light d-flex align-items-center ">
    <div class="row w-100 mx-0">
        <div class="col fs-1 fw-bold">
            <a href="{{route('home')}}">{{config('app.name')}}</a>
        </div>
        <div class="col d-flex align-items-center justify-content-end">
            <div class="row w-75 fs-5 fw-normal">
                <div class="col">
                    <a href="{{route('home')}}">Home</a>
                </div>
                <div class="col">
                    <a href="{{route('about')}}">About</a>
                </div>
                <div class="col">
                    <a href="{{route('products')}}">Product</a>
                </div>
                <div class="col">
                    <a href="{{route('card')}}" class="btn btn-danger">Card (0)</a>
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

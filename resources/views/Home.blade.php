@extends('components.loyaut.header')

@section('content')
    <div class="container ">
        <div class="row mt-5">
            <div class="col-7 py-3">
                <h1 class="py-3">Online shopping simplified</h1>
                <p>Order your groceries from SuperM with our easy to use app, and get your products delivered straight
                    to your doorstep.</p>
                <a href="{{route('products')}}" class="btn btn-default">
                    Start shopping
                </a>
            </div>
            <div class="col-5">
                <img src="{{asset('assets/imgs/img.png')}}" style="width: 350px; height: 240px; border-radius: 10%"  alt="">
            </div>
        </div>
    </div>
@endsection

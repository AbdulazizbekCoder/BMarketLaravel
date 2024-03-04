@extends('components.loyaut.header')

@section('content')
    <div class="container mt-5">
        <div class="my-4">
            <h1  class="my-4">Products</h1>
            <p>Take a look at our products</p>
        </div>
        <div class="products-grid my-5">
           @foreach ($products as $product)
           <div class="product">
            <div class="product-image-container">

                <img src="{{asset('storage/' . $product->photo)}}" style="width: 120px; height: 124px" alt="">
                <div class="product-quantity-container">
                    <div class="product-quantity">0</div>
                </div>
            </div>

            <div class="product-info">
                <h3>{{$product->name}}</h3>
                <p>{{$product->count . $product->unit . ' ' . $product->name}}</p>
            </div>
            <div class="product-checkout">
                <div>
                    <button class="product-delete btn-outline btn1 btn-outline-danger btn2">x</button>
                </div>
                <div>
                    <a href="{{route('addProduct', $product)}}" class="btn1 btn-outline btn-success">${{$product->price}}</a>
                </div>
            </div>

        </div>
           @endforeach
        </div>
    </div>

@endsection

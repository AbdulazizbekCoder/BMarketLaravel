<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('Home');
    }

    public function about()
    {
        return view('About');
    }

    public function products(Request $request)
    {
//        dd($request->cookie('user'));

        $products = Product::all();
        $cart = Cart::all();
        return view('Products', [
            'products' => $products,
            'cart' => $cart
        ]);
    }

    public function card()
    {
        return view('Card');
    }


}

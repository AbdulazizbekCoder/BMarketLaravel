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
        $uuid = $request->cookie('user');
        $products = Product::all();
        $carts = Cart::all()->where('uuid', $uuid);
        return view('Products', [
            'products' => $products,
            'carts' => $carts
        ]);
    }

    public function card()
    {
        return view('Card');
    }


}

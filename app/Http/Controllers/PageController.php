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
        $carts = Cart::where('uuid', $uuid)->get()->all();

        $totalquantity = 0;
        foreach($carts as $cart){
            $totalquantity += $cart->quanity;
        }
        return view('Products', [
            'products' => $products,
            'carts' => $carts,
            'total' => $totalquantity
        ]);
    }

    public function card(Request $request)
    {
        $uuid = $request->cookie('user');
        $carts = Cart::where('uuid', $uuid)->get()->all();
        $products = Product::all();
        $totalquantity = 0;
        foreach($carts as $cart){
            $totalquantity += $cart->quanity;
        }
        return view('Card', [
            'carts' => $carts,
            'total' => $totalquantity,
            'products' => $products
        ]);
    }


}

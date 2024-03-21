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
        $date = [];
        $totalprice = 0;
        foreach($carts as $cart){
                $product = Product::where('id', $cart->product_id)->select('name', 'photo', 'price')->first();

                $data[] = [
                    'products' => [
                        'name' => $product->name,
                        'photo' => $product->photo,
                        'price' => $product->price
                    ],
                    'quantity' => $cart->quanity,
                    'total' => $cart->quanity * $product->price
                ];
                $totalprice += $cart->quanity * $product->price;
        }


        $products = Product::all();
        $totalquantity = 0;
        foreach($carts as $cart){
            $totalquantity += $cart->quanity;
        }
        return view('Card', [
            'carts' => $carts,
            'total' => $totalquantity,
            'data' => $data,
            'totalprice' => $totalprice
        ]);
    }


}

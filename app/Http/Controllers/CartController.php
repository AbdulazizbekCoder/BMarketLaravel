<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{

    public function addProduct(Request $request, Product $product)
    {
        $uuid = $request->cookie('user');
        if (isset($uuid)) {
            $cart = Cart::create([
                'product_id' => $product->id,
                'quanity' => 1,
                'uuid' => $uuid
            ]);
            return redirect()->route('products');
        } else {
            $cookie = cookie('user', Str::random(), 60);
            Cart::create([
                'product_id' => $product->id,
                'quanity' => 1,
                'uuid' => $cookie->getValue()
            ]);
            return redirect()->route('products')->withCookie($cookie);
        }


    }

}

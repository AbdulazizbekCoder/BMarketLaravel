<?php

namespace App\Http\Controllers;

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

    public function products()
    {
        $products = Product::all();
        return view('Products', [
            'products' => $products
        ]);
    }

    public function card()
    {
        return view('Card');
    }


}

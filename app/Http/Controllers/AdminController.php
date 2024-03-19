<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Admin.dashboard', [
            'products' => $products
        ]);
    }

    public function order()
    {
        return view('Admin.orders');
    }

    public function product()
    {
        
        return view('Admin.products');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}

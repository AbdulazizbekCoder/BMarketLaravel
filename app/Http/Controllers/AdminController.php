<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard');
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

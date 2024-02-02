<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('Home');
    }
    public function about(){
        return view('About');
    }
    public function products(){
        return view('Products');
    }
    public function card(){
        return view('Card');
    }
}

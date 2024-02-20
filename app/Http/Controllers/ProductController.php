<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Admin.Product.index', ['products' => $products]);
    }

    public function create()
    {
        return view('Admin.Product.create');
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->count = $request->count;
        $product->unit = $request->unit;
        $product->photo = $request->photo;
        $product->description = $request->description;

        $product->save();
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {

    }

    public function edit(Product $product)
    {

        return view('Admin.Product.edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {

    }

    public function destroy(Product $product)
    {
        //
    }
}

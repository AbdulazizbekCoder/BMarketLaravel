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

    public function store(StoreProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'count' => $request->count,
            'unit' => $request->unit,
            'photo' => $request->photo,
            'description' => $request->description
        ]);

        $product->save();
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('Admin.Product.show', [
            'product' => $product
        ]);
    }

    public function edit(Product $product)
    {

        return view('Admin.Product.edit', [
            'product' => $product,
        ]);
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'count' => $request->count,
            'unit' => $request->unit,
            'photo' => $request->photo,
            'description' => $request->description
        ]);
        $product->save();
        return redirect()->route('products.show',[
            'product' => $product
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

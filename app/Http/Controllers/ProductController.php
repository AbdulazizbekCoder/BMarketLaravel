<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

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
        $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('products_photos', $name);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'count' => $request->count,
            'unit' => $request->unit,
            'photo' => $path,
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

    public function update(UpdateProductRequest $request, Product $product)
    {
        if(isset($request->photo)){
       if (isset($request->photo)){
           Storage::delete($product->photo);
       }
       $name = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('products_photos', $name);

    }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'count' => $request->count,
            'unit' => $request->unit,
            'photo' => $path ?? $product->photo ,
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
        Storage::delete($product->photo);
        return redirect()->route('products.index');
    }
}

@extends('components.loyaut.admin')

@section('content')

    <div class="container py-5 d-flex justify-content-center">
        <div class="card border-0 w-50 shadow-lg p-3">
            <div class="row ">
                <div class="col fs-3 fw-bold">
                    Edit Product
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{route('products.index')}}" class="btn btn-dark px-5">Back</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <form action="{{route('products.update',['product' => $product->id])}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <h2 class="text-success text-center">Create Product</h2>
                    <label class="form-label mt-3 fw-bold fs-5" for="name">Name</label>
                    <input value="{{$product->name}}" type="text" id="name" name="name" placeholder="Name..." class=" mt-1 form-control">
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="price">Price</label>
                    <input value="{{$product->price}}" type="number" id="price" name="price" placeholder="Price" class=" mt-1 form-control">
                    @error('price')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="Count">Count</label>
                    <input value="{{$product->count}}" type="number" id="Count" name="count" placeholder="Count" class=" mt-1 form-control">
                    @error('count')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="Unit">Unit</label>
                    <select class="form-select" name="unit" id="Unit">
                        <option value=""></option>
                        <option {{($product->unit === 'kg') ? 'selected' : ''}} value="kg"  >kg</option>
                        <option {{($product->unit === 'litr') ? 'selected' : ''}} value="litr" >litr</option>
                        <option {{($product->unit === 'dona') ? 'selected' : ''}} value="dona" >dona</option>
                        <option {{($product->unit === 'sm') ? 'selected' : ''}} value="sm" >sm</option>
                      </select>
                    @error('unit')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="Photo">Photo</label>
                    <input value="{{$product->photo}}" type="file" id="Photo" name="photo"  class="mt-1 form-control">
                    @error('photo')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="Description">Description</label>
                    <textarea class="form-control" name="description">{{$product->description}}</textarea>
                    <button type="submit" class="btn btn-outline-success w-100 mt-4">Saqlash</button>
                </form>
            </div>

        </div>
    </div>

    @endsection


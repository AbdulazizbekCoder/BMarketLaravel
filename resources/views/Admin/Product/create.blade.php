@extends('components.loyaut.admin')

@section('content')



<div class="container py-5 d-flex justify-content-center">
        <div class="card border-0 w-50 shadow-lg p-3">
            <div class="row ">
                <div class="col fs-3 fw-bold">
                    Create Product
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{route('products.index')}}" class="btn btn-dark px-5">Back</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h2 class="text-success text-center">Create </h2>

             <label class="form-label mt-3 fw-bold fs-5" for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name..." class=" mt-1 form-control" value="{{old('name')}}">
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="price">Price</label>
                    <input type="number" id="price" name="price" placeholder="Price" class=" mt-1 form-control"  value="{{old('price')}}">
                    @error('price')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="Count">Count</label>
     <input type="number" id="Count" name="count" placeholder="Count" class=" mt-1 form-control" value="{{old('count')}}" >
                    @error('count')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="Unit">Unit</label>
                    <select class="form-select" name="unit" id="Unit">
                        <option value="{{ old('unit') }}"></option>
                        <option value="kg">kg</option>
                        <option value="litr">litr</option>
                        <option value="dona">dona</option>
                        <option value="sm">sm</option>
                    </select>
                    @error('unit')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="Photo">Photo</label>
                    <input type="file" id="Photo" name="photo" class="mt-1 form-control"   value="{{old('photo')}}">
                    @error('photo')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label class="form-label mt-3 fw-bold fs-5" for="Description">Description</label>
                    <textarea class="form-control" name="description">{{ old('description') }}</textarea>

                    <button type="submit" class="btn btn-outline-success w-100 mt-4">Saqlash</button>
                </form>
            </div>

        </div>
    </div>
@endsection

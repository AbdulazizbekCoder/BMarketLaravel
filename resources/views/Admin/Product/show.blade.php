<x-loyaut.admin>

    <div class="container py-3 d-flex justify-content-center">
        <div class="card border-0 shadow-lg p-4 w-75">
            <div class="row">
                <div class="col-4 d-flex justify-content-center">
                    <img src="{{asset('storage/'. $product->photo)}}" alt="" style="width: 300px; height: 250px">
                </div>
                <div class="col-5 mt-3 fs-4 fw-bold">
                    <div class="row flex-column ">
                        <div class="col">
                            Nomi - {{$product->name}}
                        </div>
                        <div class="col">
                            Narxi - {{$product->price}}$
                        </div>
                        <div class="col">
                            Miqdori - {{$product->count}} {{$product->unit}}
                        </div>
                        <div class="col fs-5 fw-normal mt-2 ">
                            {{$product->created_at}}
                        </div>
                        <div class="col fs-5 fw-normal ">
                            {{$product->updated_at}}
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex  justify-content-end align-items-start ">
                        <a href="{{route('products.edit', $product)}}" class="mx-1 btn btn-success">Edit</a>

                        <form action="{{route('products.destroy', $product)}}" method="post" onsubmit="return confirm('Are you sure you wish to delete?');">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn mx-1  btn-danger">Delete</button>
                        </form>

                        <a href="{{route('products.index')}}" class=" mx-1 btn btn-dark">Back</a>
                </div>
            </div>
            <div class="mt-5 fw-normal fs-4">
                {{$product->description}}
            </div>
        </div>
    </div>

</x-loyaut.admin>

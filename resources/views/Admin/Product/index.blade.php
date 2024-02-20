<x-loyaut.admin>

    <div class="container py-5">
        <div class="card border-0 shadow-lg p-3">
            <div class="row">
                <div class="col fs-3 fw-bold">
                    Products
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{route('products.create')}}" class="btn btn-success px-4">Add new products</a>
                </div>
            </div>

            <table class="table m-3">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">price</th>
                    <th scope="col">count</th>
                    <th scope="col">unit</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->count}}</td>
                            <td>{{$product->unit}}</td>
                            <td style="width: 170px">
                                <div class="row " >
                                    <div class="col">
                                        <i class="bi bi-eye"></i>
                                    </div>
                                    <div class="col">
                                        <a href="{{route('products.edit', $product->id)}}">  <i class="bi bi-pen"></i></a>
                                    </div>
                                    <div class="col">
                                        <i class="bi bi-trash3"></i>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-loyaut.admin>

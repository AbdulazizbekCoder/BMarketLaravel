<x-loyaut.admin>

    <div class="container py-5">
        <h1>Dashboard Page</h1>
        <div class="row mt-5">
            <div class="col-3 mb-4">
                <div class="cart border-0 shadow-lg bg-white p-3 fs-3 rounded-5 text-success">
                    <i class="bi bi-box2"></i>
                    <h3>Products</h3>
                    <h5>{{$products->count()}}</h5>
                </div>
            </div >
            <div class="col-3 mb-4">
                <div class="cart border-0 shadow-lg bg-white p-3 fs-3 rounded-5 text-success">
                    <i class="bi bi-cart3"></i>
                    <h3>Orders</h3>
                    <h5>324</h5>
                </div>
            </div>
            <div class="col-3 mb-4">
                <div class="cart border-0 shadow-lg bg-white p-3 fs-3 rounded-5 text-success">
                    <i class="bi bi-person"></i>
                    <h3>Users</h3>
                    <h5>12</h5>
                </div>
            </div>

        </div>

    </div>

</x-loyaut.admin>

@extends('components.loyaut.header')

@section('content')
    <div class="container mt-5">
        <div><h1>Your Cart</h1>
            <table class="table1 table-cart">
                <thead>
                <tr>
                    <th width="25%" class="th-product">Product</th>
                    <th width="20%">Unit price</th>
                    <th width="10%">Quanity</th>
                    <th width="25%">Total</th>
                </tr>
                </thead>
                @foreach($carts as $cart)
                    <tbody>
                    <tr>
                        <td><img
                                src="https://res.cloudinary.com/dbfn5lnvx/image/upload/q_auto/v1607769454/react-tutorial/products/final/cheese.png"
                                width="30" height="30" alt=""> Cheese
                        </td>
                        <td>$10</td>
                        <td>1</td>
                        <td><strong>$10</strong></td>
                    </tr>

                    </tbody>
                @endforeach
                <tfoot>
                <tr>
                    <th colspan="2"></th>
                    <th class="cart-highlight">Total</th>
                    <th class="cart-highlight">$21</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

@endsection

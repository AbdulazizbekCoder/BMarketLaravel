@extends('components.loyaut.header')

@section('content')
    <div class="container mt-5">
        <div><h1>Your Cart</h1>
            <table class="table table-cart">
                <thead>
                <tr>
                    <th width="25%" class="th-product">Product</th>
                    <th width="20%">Unit price</th>
                    <th width="10%">Quanity</th>
                    <th width="25%">Total</th>
                </tr>
                </thead>
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
                <tfoot>
                <tr>
                    <th colspan="2"></th>
                    <th class="cart-highlight">Total</th>
                    <th class="cart-highlight">$21</th>
                </tr>
                </tfoot>
            </table>
            <form class="pay-form"><p>Enter your email and then click on pay and your products will be delivered to you
                    on the same day!<br><em>Enter your own Stripe Publishable Key in Cart.js for the checkout to
                        work</em></p><label class="label">Email<span class="input-required">*</span>
                    <div><input type="email" placeholder="Email" class="input" required="" value=""></div>
                </label>
                <button class="btn btn-default" type="submit">Pay</button>
            </form>
        </div>
    </div>
@endsection

@extends('components.loyaut.header')

@section('content')
    <div class="container mt-5">
        <div><h1>Your Cart</h1>
            @if($carts)
                <table class="table1 table-cart">
                    <thead>
                    <tr>
                        <th width="25%" class="th-product">Product</th>
                        <th width="20%">Unit price</th>
                        <th width="10%">Quanity</th>
                        <th width="25%">Total</th>
                    </tr>
                    </thead>
                    @endif
                    @foreach($data as $item)
                        <tbody>
                        <tr>
                            <td class="fs-4"><img class="float-start ms-3 fs-2" src="{{asset('storage/' . $item['products']['photo'])}}"
                                    width="30" height="30" alt=""> {{$item['products']['name']}}
                            </td>
                            <td>{{$item['products']['price']}}</td>
                            <td>{{$item['quantity']}}</td>
                            <td><strong>{{$item['total']}}</strong></td>
                        </tr>

                        </tbody>
                    @endforeach
                    @if($carts)
                        <tfoot>
                        <tr>
                            <th colspan="2"></th>
                            <th class="cart-highlight">Total</th>
                            <th class="cart-highlight">{{$totalprice}}</th>
                        </tr>
                        </tfoot>
                </table>
            @endif
        </div>
    </div>

@endsection

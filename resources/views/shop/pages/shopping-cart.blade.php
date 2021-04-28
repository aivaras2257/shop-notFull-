{{--@extends('shop/main')--}}
{{--@section('content')--}}
{{--    @if(Session::has('cart'))--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-6 col-md-6">--}}
{{--            <ul class="list-group">--}}
{{--                @foreach($products as $product)--}}
{{--                    <li class="list-group">--}}
{{--                        <span class="badge">{{$product['qty']}}</span>--}}
{{--                        <strong>{{$product['item']['title']}}</strong>--}}
{{--                        <span class="label label-success">{{$product['price']}}</span>--}}
{{--                        <div class="btn-group">--}}
{{--                            <button class="btn btn-primary btn-xd dropdown-toogle" data-toogle="dropdown">Action <span class="caret"></span> </button>--}}
{{--                            <ul class="dropdown menu">--}}
{{--                                <li><a href="#">Reduce by 1</a> </li>--}}
{{--                                <li><a href="#">Reduce All</a> </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endforeach--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-6 col-md-6">--}}
{{--                <strong>Total: {{ $totalPrice }}</strong>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-6 col-md-6">--}}
{{--            <button type="button" class="btn btn-success">Checkout</button>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @else--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-6 col-md-6">--}}
{{--                <h2>No items in cart</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}


{{--@endsection--}}


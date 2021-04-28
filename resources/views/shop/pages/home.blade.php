@extends('shop/main')
@section('content')
<div class=" row align-items-center container-fluid">
    @foreach($products as $product)
    <div class="item-bottom">
        <ul class="products-grid">
            <li class="item">
            <h2 class="card">{{$product->title}}</h2>
            <h5 class="card">{{$product->category['name']}}</h5>
            <h3 class="card-body text-hide">{{$product->content}}</h3>
            <h4 class="card-columns">{{$product->price}}</h4>
        <div>
            <img src="{{asset($product->path)}} " alt="">
        </div>
            </li>
        </ul>
{{--        <a href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn btn-success">Prideti i krepseli</a>--}}
        <li class="item"><a href="/delete/{{$product->id}}">Salinti</a> </li>
        <li class="item"><a href="/update/{{$product->id}}">Keisti</a> </li>

    </div>
    @endforeach
</div>
@endsection

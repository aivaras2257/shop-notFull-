@extends('shop/main')
@section('content')
    @if ($products->category_id==1)
        @foreach($products as $product)
        <div class="bg-dark container">
            <a href="shop.html"></a>
            <h2 class="card">{{$product->title}}</h2>
            <h2 class="card">{{$product->category['name']}}</h2>
            <h3 class="card-body">{{$product->content}}</h3>
            <h4 class="card-columns">{{$product->price}}</h4>
            <h5 class="card-footer">{{$product->quantity}}</h5>
            <p>
                Posted by
                <a href="#">Aivaras</a>
                {{$product->created_at}}
            </p>
        </div>

        @endforeach
    @endif

@endsection


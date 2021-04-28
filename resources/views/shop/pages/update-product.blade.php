@extends('shop/main')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @include('shop/_partials/errors')
            <form action="/storeupdate/{{$product->id}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <input class="form-control" type="text" name="title" value="{{$product->title}}" placeholder="Pavadinimas">
                </div>
                <div class="form-group">
                    <select class="form-control" name="category_id">
                        @foreach($cat as $key => $value)
                            <option  value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="text" name="content" placeholder="aprasymas">{{{$product->content}}}</textarea>
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="quantity" placeholder="kiekis" value="{{$product->quantity}}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="price" placeholder="kaina" value="{{$product->price}}">
                </div>
                <div class="form-group custom-file offset-md-3 col-md-6 mb-3 mb-md-0">
                    <input type="file" class="custom-file-input text-black" name="path" id="productpath" lang="lt">
                    <label class="custom-file-label text-black" for="listingImage">{{$product->path}}</label>
                </div>
                <button class="btn btn-primary" type="submit">Keisti preke</button>
            </form>
        </div>
    </div>

@endsection

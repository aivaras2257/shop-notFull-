@extends('shop/main')

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="">
            <h2 class="mx-auto">Kategorijos:</h2>
            @foreach($cat as $key => $value)
                <option class="btn-outline-black" value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @include('shop/_partials/errors')
            <form action="/storeCategory" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Kategorijos pavadinimas">
                </div>
                <button type="submit " class="btn btn-dark">Prideti kategorija</button>
            </form>
        </div>
    </div>

@endsection

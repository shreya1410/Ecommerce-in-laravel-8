@extends('master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}">
            </div>
            <div class="col-sm-6">
                <a href="/">Go back</a>
                <h2>{{$product['name']}}</h2>
                <h3>Price :{{$product['price']}}</h3>
                <h3>Description :{{$product['description']}}</h3>
                <h3>Category :{{$product['category']}}</h3>
                <br><br>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-primary">Add To Cart</button>
                </form>
                  <br><br>
                <button class="btn btn-warning">Buy Now</button>
            </div>
        </div>

    </div>

@endsection

@extends('master')
@section('content')

    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>Result for products</h3>
                <a class="btn btn-success" href="ordernow">Order Now</a><br>
                @foreach($products as $item)
                    <div class="searched-item">
                       <div class="row searched-item cart-list-devider">
                           <div class="col-sm-3">
                               <a href="detail/{{$item->id}}">
                                   <img class="trending-image" src="{{$item->gallery}}">
                               </a>
                           </div>
                           <div class="col-sm-4">
                                   <div class="">
                                       <h2>{{$item->name}}</h2>
                                       <h4>{{$item->description}}</h4>
                                   </div>
                           </div>
                           <div class="col-sm-3">
                              <a  href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove From cart</a>
                           </div>
                       </div>
                    </div>
                @endforeach
            </div>
            <a class="btn btn-success" href="ordernow">Order Now</a><br>
        </div>
    </div>

@endsection

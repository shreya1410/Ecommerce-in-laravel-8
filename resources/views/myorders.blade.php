@extends('master')
@section('content')

    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>my orders</h3>
                @foreach($orders as $item)
                    <div class="searched-item">
                        <div class="row searched-item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="detail/{{$item->id}}">
                                    <img class="trending-image" src="{{$item->gallery}}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <div class="">
                                    <h2>Name :{{$item->name}}</h2>
                                    <h4>Delivery status :{{$item->status}}</h4>
                                    <h4>Address :{{$item->address}}</h4>
                                    <h4>Payment status :{{$item->payment_status}}</h4>
                                    <h4>Payment method :{{$item->payment_method}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

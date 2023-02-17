@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            @foreach ($myorders as $item)
            <div class="row searched-item class-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img src="{{ $item->gallery }}" alt="trending image" class="trending-image">
                    </a>
                </div>
                <div class="col-sm-3">
                    <div>
                        <h2>Name : {{ $item->name }}</h2>
                        <h5>Delivery Status : {{ $item->status }}</h5>
                        <h5>Address : {{ $item->address }}</h5>
                        <h5>Payment Status : {{ $item->payment_status }}</h5>
                        <h5>Payment Method : {{ $item->payment_method }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
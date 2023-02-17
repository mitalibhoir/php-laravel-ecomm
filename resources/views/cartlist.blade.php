@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="ordernow">Order now</a><br><br>
            @foreach ($products as $item)
            <div class="row searched-item class-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{ $item->id }}">
                        <img src="{{ $item->gallery }}" alt="trending image" class="trending-image">
                    </a>
                </div>
                <div class="col-sm-3">
                    <div>
                        <h2>{{ $item->name }}</h2>
                        <h5>{{ $item->description }}</h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="/remove-from-cart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
                </div>
            </div>
            @endforeach
        </div>
        <a class="btn btn-success" href="ordernow">Order now</a><br><br>
    </div>
</div>
@endsection
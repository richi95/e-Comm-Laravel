@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            @foreach ($orders as $item)
                <div class="row order-items">
                    <div class="col-sm-3">
                        <a href="/detail/{{ $item->id }}">
                            <img class="trending-image" src="{{ $item->gallery }}" alt="gallery">
                        </a>
                    </div>
                    <div class="col-sm-6">
                            <h2>{{ $item->name }}</h2>
                            <h5>Delivery Status : {{ $item->status }}</h5>
                            <h5>Address : {{ $item->address }}</h5>
                            <h5>Payment Status : {{ $item->payment_status }}</h5>
                            <h5>Payment Method : {{ $item->payment_method }}</h5>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection

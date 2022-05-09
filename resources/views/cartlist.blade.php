@extends('layouts.app')
@section('content')
    <div class="container custom-cartlist-content">
        <div class="trending-wrapper">
            <h4>Cart List</h4>
            @foreach ($products as $item)
                <div class="cart-items">
                    <div class="col-sm-4">
                        <a href="/detail/{{ $item->id }}">
                            <img class="trending-image" src="{{ $item->gallery }}" alt="gallery">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h3>{{ $item->name }}</h3>
                            <h5>{{ $item->description }}</h5>
                        </div>
                    </div>
                    <div class="col-sm-4 cart-delete">
                        <a href="/cartdelete/{{ $item->id }}" class="btn btn-danger">Remove to Cart</a>
                    </div>
                </div>
                @endforeach
                <a href="/ordernow" class="btn btn-success">Order Now</a>
        </div>
    </div>
@endsection

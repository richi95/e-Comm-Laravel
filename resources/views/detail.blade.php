@extends('layouts.app')
@section('content')
    <div class="container custom-detail-content">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product->gallery }}" alt="gallery">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <br>
                <h2>{{ $product->name }}</h2>
                <br>
                <p>{{ $product->description }}</p>
                <span>Category: {{ $product->category }}</span>
                <br>
                <br>
                <h4>Price: {{ $product->price }}</h4>
                <br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-primary">Add cart</button>
                </form>
                <br>
                <button class="btn btn-success">Buy Now</button>
            </div>
    </div>
@endsection

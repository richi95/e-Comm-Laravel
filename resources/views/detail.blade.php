@extends('master')
@section('content')
    <div class="container">
        <div class="row custom-detail">
            <div class="col-sm-6" >
                <img class="detail-img" src="{{$product->gallery}}" alt="gallery">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <br>
                <h2>{{$product->name}}</h2>
                <br>
                <p>{{$product->description}}</p>
                <span>Category: {{$product->category}}</span>
                <br>
                <br>
                <h4>Price: {{$product->price}}</h4>
                <br>
                <button class="btn btn-primary">Add cart</button>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container custom-search-content">
        <div class="trending-wrapper ">
            <h3>Result for Products</h3>
            @foreach ($products as $item)
                <div class="searched-item">
                    <a href="/detail/{{ $item->id }}">
                        <img class="trending-image" src="{{ $item->gallery }}" alt="gallery">
                        <div class="">
                            <h3>{{ $item->name }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

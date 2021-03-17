@extends('template')

@section('title','Showcase')

@section('content')
@include('navbar.index')

<main>
    <div class="container">
        <h1>SHOWCASE FOR OUR WORK !</h1>
    </div>
</main>

<div class="page1">
    <div class="container text-center">
        @foreach ($products as $product)
            <div class="row service">
                <div class="col-lg-6 col-md-7 mb-4 nopadding">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('produkListJasa') }}/{{$product->image}}" alt="{{$product->name}}">
                        <div class="card-body">
                            <p class="card-text">{{$product->name}}</p>
                            <div class="wrap-price"><span class="product-price">{{$product->harga}}</span></div>
                            <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->harga}})">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
</div>
@endsection
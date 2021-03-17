@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/showcase.css') }}">
@endsection

@section('title','Showcase')

@section('content')
@include('navbar.index')

<main>
    <div class="container">
        <h1>SHOWCASE FOR OUR WORK !</h1>
    </div>
</main>

<div class="page1">
    <div class="row">
        <div class="container text-center">
            @foreach ($products as $product)
            
            <div class="service">
                <div class="col-lg-6 col-md-7 mb-4 col-xs-6">
                    <div class="card">
                        <figure><img class="card-img-top" src="{{ asset('produkListJasa') }}/{{$product->image}}" alt="{{$product->name}}"></figure>
                        <div class="card-body">
                            <p class="card-text"><span>{{$product->name}}</span></p>
                            <div class="card-text wrap-price"><span class="product-price">Harga : {{$product->harga}}</span></div>
                            <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->harga}})">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
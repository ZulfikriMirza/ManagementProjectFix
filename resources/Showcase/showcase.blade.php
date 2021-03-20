@extends('template')

@section('title','Showcase')

@section('content')
@include('navbar.index')

<main>
    <div class="container">
        <h1>SHOWCASE FOR OUR WORK !</h1>
    </div>
</main>

<div class="container project-items mt-4 mb-5">
    <div class="row justify-content-center">
        @foreach ($products as $product)

        <div class="col-lg-6 col-md-7 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('produkListJasa') }}/{{$product->image}}" alt="{{$product->name}}">
                <div class="card-body">
                    <p class="text-center font-weight-bold card-text">{{$product->name}}</p>
                    <div class="text-center font-weight-bold wrap-price"><span class="product-price">Rp. {{$product->harga}}</span></div>
                    <!-- Buttonnya percobaan doang  -->
                    <button wire:click="addItem({{$product->id}})" class="btn btn-primary btn-sm btn-block">Add To Cart</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>


@endsection
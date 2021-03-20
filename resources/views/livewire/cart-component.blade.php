@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
@endsection

@section('title','Checkout')

@section('content')
@include('navbar.index')

@if (Cart::count() > 0)
<div class="container">
    <div class="products-cart">
        @foreach (Cart::content() as $item)
        <li class="pr-cart-item">
            <div class="product image">
                <figure><img class="card-img-top" src="{{ asset('produkListJasa') }}/{{$item->image}}" alt="{{$item->name}}"></figure>
            </div>
            <div class="product-name">
                <p class="text-center font-weight-bold card-text">{{$item->name}}</p>
            </div>
            <div class="price-field product-price">
                <p class="price">Rp. {{$item->harga}} </p>
            </div>
        </li>
        @endforeach
    </div>
    @else
    <p>no item in cart</p>
</div>
@endif
@endsection
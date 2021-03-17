@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
@endsection

@section('title','Checkout')

@section('content')
@include('navbar.index')
<main id="main" class="main-site">
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Cart</span></li>
            </ul>
        </div>

        <div class="main-content-area">
            <div class="wrap-item-in-cart">
                @if(Session::has('success_message'))
                    <div class="alert alert-success">
                        <strong>Success</strong> {{Session::get('success_message')}}
                    </div>
                @endif
                @if(Cart::count() > 0)
                <h3 class="box-title">Products Name</h3>
                <ul class="products-cart">
                    @foreach (Cart::content() as $item)
                        <div>
                            <img src="{{ asset('produkListJasa') }}/{{$item->model->image}}" alt="{{$item->model->name}}">
                            <div>
                                <a>{{$item->model->name}}</p>
                                <div class="wrap-price"><span class="product-price">{{$item->model->harga}}</span></div>
                            </div>
                            <div class="price-field sub-total"><p class="price">{{$item->subtotal}}</p></div>
                        </div>
                    @endforeach
                </ul>
                @else
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2 class="text-center mt-5">Tidak ada item</h2>
                    </div>
                </div>
                <div class="image d-flex mt-5 justify-content-center">
                    <img src="foto/cart_empty.png" alt="cart visual">
                </div>
                </div>
                @endif
            </div>
        </div>

        <div class="summary">
            <div class="order-summary">
                <h4 class="tittle-box">Order Summary</h4>
                <p class="summary-info"><span class="title">Subtotal</span><b class="index">{{Cart::subtotal()}}</b></p>
                <p class="summary-info"><span class="title">Tax</span><b class="index">{{Cart::tax()}}</b></p>
                <p class="summary-info"><span class="title">total</span><b class="index">{{Cart::total()}}</b></p>
            </div>
        </div>
    </div>
@endsection
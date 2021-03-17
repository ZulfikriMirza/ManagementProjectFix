@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
@endsection

@section('title','Checkout')

@section('content')
@include('navbar.index')

<div class="container">
  @if(Session::has('success_message'))
    <div class="alert alert-success">
      <strong>Success</strong> {{Session::get('success_message')}}
    </div>
  @endif
  @if(Cart::count() > 0)
  <h3 class="box-title">Product Name</h3>
  <ul class="products-cart">
    @foreach (Cart::content() as $item)
      <div class="service">
        <div class="card">
          <figure><img class="card-img-top" src="{{ asset('produkListJasa') }}/{{$item->image}}" alt="{{$item->name}}"></figure>
          <div class="card-body">
              <p class="card-text"><span>{{$item->name}}</span></p>
              <div class="card-text wrap-price"><span class="product-price">Harga : ${{$item->harga}}</span></div>
              </div>
          </div>
        </div>
        <div class="price-field sub-total"><p class="price">${{$item->subtotal}}</p></div>
        <div class="delete">
          <a href="#" class="btn btn-delete" title="">
            <span>Delete From your cart</span>
            <i class="fa fa-times-circle" aria-hidden="true"></i>
          </a>
        </div>
    @endforeach
    @else
  <div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <h2 class="text-center mt-5">Tidak ada item</h2>
    </div>
  </div>
    @endif

</div>

<div class="summary">
  <div class="order-summary">
    <h4 class="title-box">Order Summary</h4>
    <p class="summary-info"><span class="title">Subtotal</span><b class="index>">${{Cart::subtotal()}}</b></p>
  </div>
</div>
@endsection
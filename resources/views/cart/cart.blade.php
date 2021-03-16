@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
@endsection

@section('title','Checkout')

@section('content')
@include('navbar.index')

<div class="container">
  <h1 style="text-align: center">Checkout your order here !</h1>

  <div class="row">
    <div class="card">
      <div class="col-md-4 order-md-2 mb-4 ">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span>Daftar Pesanan</span>
        </h4>
        <ul class="list-group mb-3 ">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0"></h6>
              <small class="text-muted">Jumlah Produk yang dipesan : ------------------------------- </small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Harga Total : ---------------------------------------------------------------</span>
            <strong></strong>
          </li>
        </ul>
        <li class="list-group-item d-flex justify-content-between">
          <strong>Tidak Ada Item</strong>
        </li>

      </div>
    </div>
  </div>



</div>


@endsection
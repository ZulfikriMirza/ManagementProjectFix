@extends('template')
@section('title','Keranjang Belanja')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cart.css') }}">
@endsection


@section('content')
@include('navbar.index')

<div class="container mt-5">

  <div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 ">
      <div class="table-responsive-sm">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Produk Name</th>
              <th scope="col">Estimasi Harga(Rp)</th>
            </tr>
          </thead>
          <!-- {{$number=1}} jgn dihapus-->
          @foreach($carts as $cart)
          <tbody>
            <tr>
              <th scope="row">{{$number++}}</th>
              <td>{{$cart->name}}</td>
              <td>{{ number_format($cart['harga'],0,",",".")}}</td>
              <td>
                <a href="{{route('remove',['id'=>$cart->id])}}"> <i class="far fa-trash-alt"></i></a>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>

      </ul>
    </div>
  </div>
  <div class="row d-flex justify-content-center">

  </div>
  <hr>
  <div class="row d-flex justify-content-center">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
    </div>
  </div>
  <br>
  <!-- image -->
  <div class="image img-fluid d-flex mt-5 justify-content-center">
    <img src="img/cart_visual.png" alt="cart visual">
  </div>

  @endsection

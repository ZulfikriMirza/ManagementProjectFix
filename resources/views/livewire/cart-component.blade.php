@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
@endsection

@section('title','Checkout')

@section('content')
@include('navbar.index')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h2 class="font-weight-bold text-center">Cart</h2>
                <table class="table table-sm table-bordered table-striped table-hovered">
                    <thread>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                    </thread>
                </table>
                <tbody>
                    @forelse($carts as $index=>$cart)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$cart['name']}}</td>
                            <td>{{$cart['harga']}}</td>
                        </tr>
                    @empty
                        <td colspan="3"><h6 class="text-center font-weight-bold">Empty Cart</h6></td>
                        <div class="image d-flex mt-5 justify-content-center">
                            <img src="foto/cart_empty.png" alt="cart visual" width="1200" height="800">
                        </div>
                    @endforelse
                </tbody>
            </div>
        </div>
    </div>
</div>

@endsection
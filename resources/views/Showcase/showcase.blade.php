@extends('template')

@section('title','Showcase')

@include('navbar.index')


<div class="container project-items mt-4 mb-5">
    <div class="row justify-content-center">
        @foreach ($products as $product)
        <div class="col-lg-6 col-md-7 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('storage/produkListJasa/' . $product->image) }}" alt="{{$product->name}}">
                <div class="card-body">
                    <p class="text-center font-weight-bold card-text">{{$product->name}}</p>
                    <!-- <div class="text-center font-weight-bold wrap-price"><span class="product-price">Rp. {{$product->harga}}</span></div> -->
                    <!-- Buttonnya percobaan doang  -->
                    <a href="{{ route('add-item',['id'=>$product->id]) }}" class="btn btn-primary btn-sm btn-block">Add To Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('Home.footer')
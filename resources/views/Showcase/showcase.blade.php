@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/showcase.css') }}">
@endsection

@section('title','Showcase')

@section('content')
@include('navbar.navbar')

<main>
    <div class="container">
        <h1>SHOWCASE FOR OUR WORK !</h1>
    </div>
</main>

<div class="page1">
    <div class="container text-center">
        <div class="row service">
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0003_Arsitektur-Bangunan.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Residential Architecture</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Books Photography</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Commercial Architecture</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Exhibitions</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0002_Desain_Furniture.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Furniture Design</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0003_Arsitektur-Bangunan.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Residential Architecture</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Commercial Architecture</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-7 mb-4 nopadding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('produkListJasa/material_0001_Desain_Produk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Product Design</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
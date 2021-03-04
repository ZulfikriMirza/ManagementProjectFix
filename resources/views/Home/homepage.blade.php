@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}">
@endsection

@section('title','Home')

@section('content')
@include('navbar.navbar')

<div class="jumbotron">
	<img class= "img-circle" src="{{ asset('produkListJasa/bapak.png') }}">
    <h1> udin hajat</h1>
    <p>maker of the opera house and many more</p>
</div>

<section class= "work" id = "work">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
        <h2 class="text-center"> Recent Works </h2>
        <hr>
        <br></br>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-4">
        <img src="{{ asset('produkListJasa/home1.png') }}" class="img-thumbnail">
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Kategori </h3>
        <h3>judul</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Fugiat vero, aperiam voluptates sapiente quasi quaerat molestiae,
        beatae omnis mollitia aliquid nobis? Eveniet nulla aliquid perferendis
        illum excepturi fugiat maxime ipsum?</p>
        <a href="www.google.com/">Pelajari Lebih Lanjut</a>
        <div>
        
        </div>
    </div>
    <br></br>
    <div class="container">
        

        <div class="row">
        <div class="col-sm-4">
        <img src="{{ asset('produkListJasa/home1.png') }}" class="img-thumbnail">
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Kategori </h3>
        <h3>judul</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Fugiat vero, aperiam voluptates sapiente quasi quaerat molestiae,
        beatae omnis mollitia aliquid nobis? Eveniet nulla aliquid perferendis
        illum excepturi fugiat maxime ipsum?</p>
        <a href="www.google.com/">Pelajari Lebih Lanjut</a>
        <div>
        
        </div>
    </div>
    <br></br>
    <div class="container">
        

        <div class="row">
        <div class="col-sm-4">
        <img src="{{ asset('produkListJasa/home1.png') }}" class="img-thumbnail">
        <br></br>
        </div>

        <div class="col-sm-8">
        <h3>Kategori </h3>
        <h3>judul</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Fugiat vero, aperiam voluptates sapiente quasi quaerat molestiae,
        beatae omnis mollitia aliquid nobis? Eveniet nulla aliquid perferendis
        illum excepturi fugiat maxime ipsum?</p>
        <a href="www.google.com/">Pelajari Lebih Lanjut</a>
        <div>
        
        </div>
    </div>

</section>



<footer>
    <div class="container">
        <div class="row">
        <h2>footer</h2>
        </div>
    </div>
</footer>
@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
@endsection

@section('title','Checkout')

@section('content')
@include('navbar.index')

<main>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 text-center">
                <img src="{{ URL::asset('img/iconDuduk.webp') }}">
            </div>
            <div class="col-md-6">
              <h1>Produk dari UntukMasarin</h1>
              <hr>
              <p>Membutuhkan Bantuan?</p>
              <a href="/contact"> <button type="button" class="btn btn-danger">Hubungi kami</button> </a>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 320">
        <path fill="#ffffff" fill-opacity="1"
            d="M0,224L60,192C120,160,240,96,360,85.3C480,75,600,117,720,144C840,171,960,181,1080,186.7C1200,192,1320,192,1380,192L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>

</main>

<div class="fotoProduk fp1 mb-5" id="kol-1">
  <div class="container">
    @foreach($jasa->chunk(4) as $jasaChunks)
      <div class="row mb-5 mr-3" >
          @foreach($jasaChunks as $jasa)
            <div class="col-lg-3 col-md-6 mb-5 text-center">
              <img class="img-fluid" src="{{$jasa->imagePath}}" class="img-fluid">
              <a href="{{route('Cart.TambahKeranjang',['id'=>$jasa->id])}}" class="add-cart"> <button type="button" class="btn btn-danger" id="btn">PESAN</button> </a>
            </div>
          @endforeach
      </div>
    @endforeach
  </div>
</div>


<script>
var x = document.getElementById("kol-1");
var y = document.getElementById("kol-2");
x.style.display = "block";

function myFunction() {
  var x = document.getElementById("kol-1");
  var y = document.getElementById("kol-2");
  x.style.display = "block";
  y.style.display = "none";
}

function btn2Function(){
  var x = document.getElementById("kol-1");
  var y = document.getElementById("kol-2");
  x.style.display = "none";
  y.style.display = "block";
}
</script>


@endsection
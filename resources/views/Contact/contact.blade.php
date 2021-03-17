@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_footer.css') }}"/>
@endsection

@section('title','Contact')

@section('content')
@include('navbar.index')

<body>
<div class="container mt-5" >
  <h1 style="text-align: center">Contact</h1>

  <div style="display: inline-block; margin: 5%;  width: auto; background-color: #abb1ba;">
    <img src="foto/interior-cozy-light-living-room-with-deadwood-decoration-min.jpg" style="width:50%; height:100%; display:inline-block;"><section class="form" style="padding-top: 6%" >
    <div class="container form-card-body">

      <div class="kotak">
        <i class="card-icon far fa-envelope"></i>
        <p style="padding-top: 10px;">paramore@gmail.com</p>
      </div> 
      <br>
      <div class="kotak"> 
        <i class="card-icon fas fa-phone"></i>
        <p style="padding-top: 10px;">+62 896-6331-9099</p>
      </div>
      <br>
      <div class="kotak">  
        <a style="color: inherit;" target="_blank" href="https://www.google.com/maps/place/Largo+di+Torre+Argentina/@41.8959207,12.4768096,2468m/data=!3m1!1e3!4m5!3m4!1s0x132f604e8cd6f343:0xb57a25aa06db03cf!8m2!3d41.8954073!4d12.4768585"><i class="card-icon fas fa-map-marker-alt"></i></a>
        <p style="padding-top: 10px;">Largo di Torre Argentina <br> 00186 Roma, Italy</p>
      </div>      

    </div>
  </section>
</div>
</div>
</body>  
@include('Home.footer')

@endsection
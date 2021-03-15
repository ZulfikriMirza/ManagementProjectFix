@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_footer.css') }}"/>
@endsection

@section('title','Contact')

@section('content')
@include('navbar.index')

<div class="container mt-5">
  <h1 style="text-align: center">Contact</h1>

  <div style="display: inline-block; margin: 5%; padding: 20px; width: auto; background-color: #fff;">
    <img src="foto/interior-cozy-light-living-room-with-deadwood-decoration.jpg" style="width:50%; height:100%; display:inline-block;"><section class="form" style="padding-top: 8%" >
    <div class="container form-card">
      <p>Contact Information</p>
    </div>
    <div class="container form-card-body">
      <br>
      <img src="foto/phone-call.png" style="width: 10%; float: left;">
      <p>+62 896-6331-9099</p>
      <br>
      <img src="foto/gmail.png" style="width: 10%; float: left;">
      <p>udinhajat@gmail.com</p>
      <br>
      <img src="foto/placeholder.png" style="width: 10%; float: left;">
      <p>Largo di Torre Argentina <br> 00186 Roma, Italy</p>
      <br>    
    </div>
  </section>
</div>
</div>
@include('Home.footer')

@endsection
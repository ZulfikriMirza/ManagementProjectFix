@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/aboutus.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_footer.css') }}" />
@endsection

@section('title','About Us')

@section('content')
@include('navbar.index')
<main>
  <div class="container mt-5">
    <h1 style="text-align: center;">About Us</h1>
  </div>
</main>

<div class="container">
  <div class="row">
    <div class="column">
      <h2>What We Are About</h2>
    </div>
    <div class="column">
      <p>We're here to show you some our masterpiece...Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur dipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Proin gravida nibh
        vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
        nec sagittis.</p>
    </div>
  </div>
</div>
<br>
<div class="jumbotron"></div>
<div class="container">
  <hr><br><br><br>
  <div class="row">
    <div class="column2">
      <div class="box">
        <div class="imgBx">
          <img src="foto/about-image.jpg">
        </div>
        <div class="content" style="text-align: center;">
          <h2 style="color: white;">Hayley Williams<br><span>The Proprietor</span><br><br><span style="font-size: 15px">Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur dipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Proin gravida nibh</span></h2>
        </div>
      </div>
    </div>
  </div>

</div>

@include('Home.footer')



@endsection
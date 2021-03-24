@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_footer.css') }}" />
@endsection

@section('title','Contact')

@section('content')
@include('navbar.index')
<div class="jumbotron-fluid contact">
  <img src="{{ asset('foto/Contact.jpg') }}" alt="Photo by Thought Catalog on Unsplash">
</div>
<div class="container kontak">
  <div class="row no-gutters form-contact">
    <div class="col-sm-6 contactForm">
      <h5>Reach Us!</h5>
      <div class="row">
        <div class="col-sm-6 mt-4">
          <label for="fullname">Full Name</label><br>
          <input type="text" id="fullname" placeholder="Your Name...">
        </div>
        <div class="col-sm-6 mt-4">
          <label for="fullname">Email</label><br>
          <input type="email" id="fullname" placeholder="Your Email...">
        </div>
      </div>
      <label class="mt-4" for="message">Message</label><br>
      <textarea id="message"></textarea>
      <i class="fas fa-paper-plane"></i>
    </div>
    <div class="col-sm-6 contactInformation">
      <h3>Contact Information</h3>
      <p><i class="fas fa-envelope mr-3"></i>paramore@gmail.com</p>
      <p><i class="fas fa-phone-square-alt mr-3"></i>+62 896-6331-9099</p>
      <p><i class="fas fa-map-marker-alt mr-3"></i>Largo di Torre Argentina 00186 Roma, Italy</p>
      <div class="contact-icon">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
      </div>
    </div>
  </div>
</div>
<object data="{{ asset('foto/contact_footer.svg') }}" type="image/svg+xml">
  <img src="{{ asset('foto/contact_footer.svg') }}" />
</object>
@endsection
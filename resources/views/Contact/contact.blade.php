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
      <form method="post" action="{{ route('contact.post') }}">
        @csrf
        <h5>Reach Us!</h5>
        <div class="row">
          <div class="col-sm-6 mt-4">
            <label for="fullname">Full Name</label><br>
            <input type="text" id="fullname" placeholder="Your Name..." name="contactName">
          </div>
          <div class="col-sm-6 mt-4">
            <label for="email">Email</label><br>
            @auth
            <input type="email" id="email" value="{{ Auth::user()->email }}" name="contactEmail" readonly>
            @endauth
            @guest
            <input type="email" id="email" placeholder="Your Email..." name="contactEmail">
            @endguest
          </div>
        </div>
        <label class="mt-4" for="message">Message</label><br>
        <textarea id="message" name="contactComment"></textarea>
        @auth
        @if(Auth::user()->level == 'admin')
        <span>Admin Can't Comment</span>
        @else
        <button type="submit" class="fas fa-paper-plane"></button>
        @endif
        @endauth
        @guest
        <button type="submit" class="fas fa-paper-plane"></button>
        @endguest
      </form>
    </div>
    <div class="col-sm-6 contactInformation">
      <h3>Contact Information</h3>
      <p><i class="fas fa-envelope mr-3"></i>paramore@gmail.com</p>
      <p><i class="fas fa-phone-square-alt mr-3"></i>+62 896-6331-9099</p>
      <p><i class="fas fa-map-marker-alt mr-3"></i>Largo di Torre Argentina 00186 Roma, Italy</p>
      <div class="contact-icon">
        <a href="https://www.facebook.com/mahesa.a.negara" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/mahesanegara/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/AJMBSF" target="_blank"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>
</div>
<object data="{{ asset('foto/contact_footer.svg') }}" type="image/svg+xml">
  <img src="{{ asset('foto/contact_footer.svg') }}" />
</object>
@endsection
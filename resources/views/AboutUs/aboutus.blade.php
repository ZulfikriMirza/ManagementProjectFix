@extends('template')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/aboutus.css') }}">
@endsection

@section('title','About Us')

@section('content')
@include('navbar.navbar')
<main>
<div class="container">
        <h1>About Us</h1>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</main>
<br></br>
    
<div class="container text-center">
    <hr></hr>
    <div class="container text-center">
        <h2> What We Are About</h2>
        <p>We're here to show you some our masterpiece...Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur dipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Proin gravida nibh
            vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
            nec sagittis.</p> 
    </div>
</div>
<br></br>

<div class="container text-center">
    <h2> Meet Us</h2>
    <div class="row">

          <div class="column">
            <div class="card">
              <img src="../foto/man-icon.png" alt="Jane" style="width:100%;">
              <div class="container">
                <h2>Udin hajat</h2>
                <p class="title">CEO & Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="../foto/man-icon.png" alt="Jane" style="width: 100%">
              <div class="container">
                <h2>Despacito</h2>
                <p class="title">CEO & Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="../foto/man-icon.png" alt="Jane" style="width:100%;">
              <div class="container">
                <h2>Connor Diaz</h2>
                <p class="title">Art Director</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="../foto/man-icon.png" alt="Jane" style="width:100%;">
              <div class="container">
                <h2>Nate McGreggor</h2>
                <p class="title">Designer</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              </div>
            </div>
          </div>

        </div>    

        <footer>
            <hr></hr>
            <div class="site-footer-below-section-1 site-footer-section site-footer-section-1">
                <div class="ast-builder-layout-element ast-flex site-footer-focus-item ast-footer-copyright" data-section="section-footer-builder">
                <div class="ast-footer-copyright"><div class="ast-footer-html-inner"><p>Copyright © 2021 - <a href="https://www.2k.com/en-US/" target="_blank">2K Sports</a></p>
                </div></div> </div>
                <div class="footer-widget-area widget-area site-footer-focus-item ast-footer-html-1" data-section="section-fb-html-1">
                <div class="ast-header-html inner-link-style-"><div class="ast-builder-html-element"><p>Powered by GFuel</p>
                </div></div> </div>
                </div>
        </footer>
    </div>
</div>



@endsection
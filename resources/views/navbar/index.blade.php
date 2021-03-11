<div class="navbars">
    <h1><a href="{{ route('home') }}">Home</a></h1>
    <div class="navbars-middle">
        <p><a href="{{ route('aboutus') }}"><span></span>About Us<span></span></a></p>
        <p><a href="{{ route('showcase') }}"><span></span>Showcase<span></span></a></p>
        <p><a href="{{ route('contact') }}"><span></span>Contact<span></span></a></p>
        <p><a href="{{ route('checkout') }}"><span></span>Checkout<span></span></a></p>
    </div>
    <div class="navbars-rights">
        <i class="fas fa-shopping-cart"></i>
        <div class="cart-show" id="cart-show-id">
            <p class="mt-2">Yet! Cart is empty!</p>
            <img src="{{ asset('Home/Materials/3298067.jpg')}}">
        </div>
        <h4><a href="#">LOGIN</a> | <a href="#">REGISTER</a></h4>
    </div>
    <div class="hamburger-menu">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="isi-hamburger-menu">
    <div class="row">
        <div class="col-7">
            <p><a href="{{ route('aboutus') }}"><span></span>About Us<span></span></a></p>
            <p><a href="{{ route('showcase') }}"><span></span>Showcase<span></span></a></p>
            <p><a href="{{ route('contact') }}"><span></span>Contact<span></span></a></p>
            <p><a href="{{ route('checkout') }}"><span></span>Checkout<span></span></a></p>
            <h4><a href="#">LOGIN</a> | <a href="#">REGISTER</a></h4>
        </div>
        <div class="col-5 ham-right">
            <i class="fas fa-shopping-cart"></i>
            <div class="cart-show" id="cart-show-id">
                <p class="mt-2" style="color: #282828;">Yet! Cart is empty!</p>
                <img src="{{ asset('Home/Materials/3298067.jpg')}}">
            </div>
        </div>
    </div>
</div>
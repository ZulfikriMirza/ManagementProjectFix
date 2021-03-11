<div class="navbars">
    <h1><a href="{{ route('home') }}">Home</a></h1>
    <div class="navbars-middle">
        <p><a href="{{ route('aboutus') }}"><span></span>About Us<span></span></a></p>
        <p><a href="{{ route('showcase') }}"><span></span>Showcase<span></span></a></p>
        <p><a href="{{ route('contact') }}"><span></span>Contact<span></span></a></p>
        <p><a href="#"><span></span>Cart<span></span></a></p>
    </div>
    <div class="navbars-rights">
        <i class="fas fa-shopping-cart"></i>
        <div class="cart-show" id="cart-show-id">
            <p class="mt-2">Yet! Cart is empty!</p>
            <img src="{{ asset('Home/Materials/3298067.jpg')}}">
        </div>
        <h4><a href="#">LOGIN</a> | <a href="#">REGISTER</a></h4>
    </div>
</div>
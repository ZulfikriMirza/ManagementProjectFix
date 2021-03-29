<div class="navbars">
    <h1><a href="{{ route('home') }}">Home</a></h1>
    <div class="navbars-middle">
        <p><a href="{{ route('aboutus') }}"><span></span>About Us<span></span></a></p>
        <p><a href="{{ route('showcase') }}"><span></span>Showcase<span></span></a></p>
        <p><a href="{{ route('contact') }}"><span></span>Contact<span></span></a></p>
    </div>
    <div class="navbars-rights">
        <div class="btn-group mr-5">
            @auth
            @if(count(auth()->user()->cart) > 0)
            <i type="button" class="fas fa-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>{{ count(auth()->user()->cart) }}</span></i>
            @else
            <i type="button" class="fas fa-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
            @endif
            @endauth
            @guest
            <i type="button" class="fas fa-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
            @endguest
            <div class="dropdown-menu dropdown-menu-right cart-item text-center">
                @auth
                @if(count(auth()->user()->cart) > 0)
                <div class="table-responsive-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Produk Name</th>
                                <th scope="col">Estimasi Harga(Rp)</th>
                            </tr>
                        </thead>
                        <!-- {{$number=1}} jgn dihapus-->
                        @foreach(auth()->user()->cart as $cart)
                        <tbody>
                            <tr>
                                <th scope="row">{{$number++}}</th>
                                <td>{{$cart->name}}</td>
                                <td>{{ number_format($cart['harga'],0,",",".")}}</td>
                                <td>
                                    <a href="{{route('remove',['id'=>$cart->id])}}"> <i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <p><a href="{{ route('cart') }}">cart</a></p>
                @else
                <p class="mt-2">Yet! Cart is empty!</p>
                <img src="{{ asset('Home/Materials/3298067.jpg')}}">
                <p><a href="{{ route('cart') }}">cart</a></p>
                @endif
                @endauth
                @guest
                <p class="mt-2">Yet! Cart is empty!</p>
                <img src="{{ asset('Home/Materials/3298067.jpg')}}">
                <p><a href="{{ route('cart') }}">cart</a></p>
                @endguest
            </div>
        </div>
        @guest
        <h4><a href="{{ route('login') }}">LOGIN | REGISTER</a></h4>
        @endguest
        @auth
        <div class="btn-group authentication">

            @if (Auth::user()->profile_photo_url)
            <img type="button" class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="{{  Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            @else
            <img type="button" class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&color=7F9CF5&background=EBF4FF" alt="{{ Auth::user()->name }}" />
            @endif
            <div class="dropdown-menu dropdown-menu-right">
                <p class="dropdown-header">Manage Account</p>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('dashboard') }}">Pemesanan</a>
                <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-dropdown-link>
                </form>
            </div>
        </div>
        @endauth
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
            @guest
            <h4><a href="{{ route('login') }}">LOGIN</a> | <a href="{{ route('register') }}">REGISTER</a></h4>
            @endguest
            @auth
            <div class="btn-group mt-3 authentication">
                @if (Auth::user()->profile_photo_url)
                <img type="button" class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="{{  Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                @else
                <img type="button" class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&color=7F9CF5&background=EBF4FF" alt="{{ Auth::user()->name }}" />
                @endif
                <div class="dropdown-menu dropdown-menu-right">
                    <h6 class="dropdown-header">Manage Account</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('dashboard') }}">Pemesanan</a>
                    <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-dropdown-link>
                    </form>
                </div>
            </div>
            @endauth
        </div>
        <div class="col-5 ham-right">
            <div class="btn-group">
                @auth
                @if(count(auth()->user()->cart) > 0)
                <i type="button" class="fas fa-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>{{ count(auth()->user()->cart) }}</span></i>
                @endauth
                @else
                <i type="button" class="fas fa-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                @endif
                @guest
                <i type="button" class="fas fa-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                @endguest
                <div class="dropdown-menu dropdown-menu-right cart-item text-center">
                    @auth
                    @if(auth()->user()->cart)
                    <div class="table-responsive-sm">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Produk Name</th>
                                    <th scope="col">Estimasi Harga(Rp)</th>
                                </tr>
                            </thead>
                            <!-- {{$number=1}} jgn dihapus-->
                            @foreach(auth()->user()->cart as $cart)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$number++}}</th>
                                    <td>{{$cart->name}}</td>
                                    <td>{{ number_format($cart['harga'],0,",",".")}}</td>
                                    <td>
                                        <a href="{{route('remove',['id'=>$cart->id])}}"> <i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <p><a href="{{ route('cart') }}">cart</a></p>
                    @else
                    <p class="mt-2">Yet! Cart is empty!</p>
                    <img src="{{ asset('Home/Materials/3298067.jpg')}}">
                    <p><a href="{{ route('cart') }}">cart</a></p>
                    @endif
                    @endauth
                    @guest
                    <p class="mt-2">Yet! Cart is empty!</p>
                    <img src="{{ asset('Home/Materials/3298067.jpg')}}">
                    <p><a href="{{ route('cart') }}">cart</a></p>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
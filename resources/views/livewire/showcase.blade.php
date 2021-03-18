@extends('template')

@section('title','Showcase')

@section('content')
@include('navbar.index')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/slick/slick-theme.css') }}" />

    <!--===============================
        FONT AWESOME FILE
        ===============================-->
    <link href="{{ asset('Home/fontawesome_css/all.css') }}" rel="stylesheet" type="text/css" />

    <!--===============================
        AOS JS CDN
        ===============================-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container">
            <h1>SHOWCASE FOR OUR WORK !</h1>
        </div>
    </main>

    <div class="container project-items mt-4 mb-5">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-lg-6 col-md-7 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('produkListJasa') }}/{{$product->image}}" alt="{{$product->name}}">
                        <div class="card-body">
                            <p class="text-center font-weight-bold card-text">{{$product->name}}</p>
                            <!-- <div class="text-center font-weight-bold wrap-price"><span class="product-price">Rp. {{$product->harga}}</span></div> -->
                            <!-- Buttonnya percobaan doang  -->
                            <!-- <button wire:click="addItem({{$product->id}})" class="btn btn-primary btn-sm btn-block">Add To Cart</a> -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--===============================
        SLICK JS FILE -> For Image Carousel
        ===============================-->
    <script src="{{ asset('Home/slick/slick.min.js') }}"></script>
    <!--===============================
        AOS JS -> Animate On Scroll
        ===============================-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>


@endsection
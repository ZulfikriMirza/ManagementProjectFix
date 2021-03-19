@extends('template')

@section('title','Showcase')

@section('content')
@include('navbar.index')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('Home/css/home_footer.css') }}"/>


</head>
    <main>
        <div class="container">
            <h1>SHOWCASE FOR OUR WORK !</h1>
        </div>
    </main>
    
    <div class="container project-items mt-4 mb-5">
        <div class="row justify-content-center">
            @foreach ($products->chunk(4) as $productChunks)
                <div class="col-lg-6 col-md-7 mb-4">
                    @foreach($productChunks as $product)
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('produkListJasa') }}/{{$product->image}}" alt="{{$product->name}}">
                            <div class="card-body">
                                <p class="text-center font-weight-bold card-text">{{$product->name}}</p>
                                <div class="text-center font-weight-bold wrap-price"><span class="product-price">Rp. {{$product->harga}}</span></div>
                                <!-- Buttonnya percobaan doang  -->
                            </div>
                        </div>
                        <a href="{{route('add.item',$product->id)}}"><button type="button" class="btn btn-primary btn-sm btn-block" id="btn">Add To Cart</button></a>
                    @endforeach
                </div>
            @endforeach
                    
        </div>
    </div>

@include('Home.footer')

@endsection
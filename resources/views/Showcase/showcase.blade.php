@extends('template')

@section('title','Showcase')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/showcase.css') }}">
<!-- Splide Slider CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('splide/css/themes/splide-sea-green.min.css') }}">
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('splide/js/splide-core.min.css') }}"> -->
@endsection

@section('content')
@include('navbar.index')

<div id="primary-slider" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach($products[$cat] as $image)
            <li class="splide__slide">
                <img src="{{ asset('storage/produkListJasa/' . $image) }}">
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div id="secondary-slider" class="splide kedua">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach($products[$cat] as $image)
            <li class="splide__slide">
                <img src="{{ asset('storage/produkListJasa/' . $image) }}">
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="container showcase mt-5 mb-5">
    <div class="row justify-content-center">
        @foreach ($products as $product)
        <div class="col-lg-6 col-md-7 mb-4">
            @if($loop->iteration == $cat)
            <div class="card active">
                <div class="black-wrapper">
                    <a href="{{ route('showcase',['cat'=>$loop->iteration]) }}"><i class="fas fa-search-plus"></i></a>
                    <p>See More</p>
                </div>
                <img class="card-img-top" src="{{ asset('storage/produkListJasa/' . $product[0]) }}" alt="{{ $product[0] }}">
                <div class="card-body">
                </div>
            </div>
            @else
            <div class="card">
                <div class="black-wrapper">
                    <a href="{{ route('showcase',['cat'=>$loop->iteration]) }}"><i class="fas fa-search-plus"></i></a>
                    <p>See More</p>
                </div>
                <img class="card-img-top" src="{{ asset('storage/produkListJasa/' . $product[0]) }}" alt="{{ $product[0] }}">
                <div class="card-body">
                </div>
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
@include('Home.footer')
@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var secondarySlider = new Splide('#secondary-slider', {
            fixedWidth: 100,
            height: 60,
            gap: 10,
            cover: true,
            arrows: false,
            isNavigation: true,
            breakpoints: {
                '600': {
                    fixedWidth: 66,
                    height: 40,
                    arrows: true,
                }
            },
        }).mount();

        var primarySlider = new Splide('#primary-slider', {
            type: 'loop',
            heightRatio: 0.4,
            pagination: false,
            arrows: false,
            cover: true,
            focus: 'center',
        });

        primarySlider.sync(secondarySlider).mount();
    });
</script>
@endsection
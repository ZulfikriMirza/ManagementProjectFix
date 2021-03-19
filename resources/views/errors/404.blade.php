@extends('errors.layout')

@section('title','Aristek - PageNotFound!')

@section('message')
<div class="container PageNotFound">
    <div class="row">
        <div class="col-sm-7">
            <img src="{{ asset('errorsImage/404.jpg') }}" alt="404 - Page Not Found!">
        </div>
        <div class="col-sm-5">
            <h2>Oops! Page Not Found!</h2>
            <a href="{{ route('home') }}">Back to Home</a>
        </div>
    </div>
</div>
@endsection
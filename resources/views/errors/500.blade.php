@extends('errors.layout')

@section('title','Aristek - PageNotFound!')

@section('message')
<div class="container PageNotFound">
    <div class="row justify-content-center">
        <div class="col-sm-7">
            <img src="{{ asset('errorsImage/500.jpg') }}" alt="500 - Server Error">
        </div>
        <div class="col-sm-5">
            <h2>Oops! Server Error!</h2>
            <a href="{{ route('home') }}">Back to Home</a>
        </div>
    </div>
</div>
@endsection
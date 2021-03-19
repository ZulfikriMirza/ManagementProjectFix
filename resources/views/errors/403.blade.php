@extends('errors.layout')

@section('title','Aristek - Forbidden!')

@section('message')
<div class="container Forbidden">
    <img src="{{ asset('errorsImage/403.jpg') }}" alt="403 - Forbidden!">
    <h2>Oops! Forbidden</h2>
    <p>Sorry, but you're not authorized to this page</p>
    <a href="{{ route('home') }}">Back to Home</a>
</div>
@endsection
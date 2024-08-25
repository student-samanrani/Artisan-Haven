@extends('template.main')
@section('title','About-ArtisanHaven') 
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">
@endsection
@section('content')

    <div class="col-md-11">
        <div class="container">
        <h2 class="text-center my-4">Trending</h2>
        <img src="{{asset('assets/image/product3.jpg')}}" alt="">
        <img src="{{asset('assets/image/product4.jpg')}}" alt="">
    </div>
    </div>
    <br>

@endsection
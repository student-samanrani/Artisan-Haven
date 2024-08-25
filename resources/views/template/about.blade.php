@extends('template.main')
@section('title','About-ArtisanHaven') 
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
@endsection
@section('content')


<div class="heading">
    <h2>About Us</h2>
    <p>Artisan Haven showcases handcrafted art from talented creators, bringing you unique and inspiring pieces. </p>
</div>
<div class="row">
<div class="about">
<div class="contentWrapper">
    <div class="content">
        <span class="textWrapper">
           Artisan Haven
        </span>
        <h2>Explore Magistic Product</h2>
        <p>At Artisan's Haven, we are dedicated to showcasing a diverse array of high-quality, handcrafted artworks, including paintings, sculptures, sketches, calligraphy, and photography. Our team of passionate experts is committed to providing exceptional service to both art enthusiasts and collectors. Our goal is to ensure that your journey with us is seamless.</p>
        <a href="/collection" class="btn">Discover More</a>
    </div>
</div>
<div class="imgWrapper">
    <img src="{{asset('assets/image/about/about1.jpg')}}" alt="">
</div>
</div>
</div>

<div class="artist-info">
    <h2>OUR ARTISTS</h2>
    <p>We actively support the artists we represent, focusing on promoting their work and facilitating their professional development. Our goal is to not only present art but also to contribute to the thriving art community by fostering connections between artists and audiences.</p>
</div>
<div class="artist-images">
    <div class="image-container">
        <img src="{{asset('assets/image/about/about3.jpg')}}" alt="Artist 1">
    </div>
    <div class="image-container">
        <img src="{{asset('assets/image/about/about4.jpg')}}" alt="Artist 2">
    </div>
</div>

    
@endsection

@extends('template.main')
@section('title','ArtisanHaven') 
@section('style')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection



@section('content')
{{-- hero section  --}}
<section class="home" id="home">
    <div class="content">
        <h3>Art is the wordwhile</h3>
        <p>Discover with us  new creations</p>
        <a href="/collection" class="btn">Discover More</a>
    </div>
    <div class="controls">
        <span class="vid-btn active" data-src ="{{asset('assets/image/hero-8.mp4')}}"></span>
        <span class="vid-btn " data-src ="{{asset('assets/image/hero-7.mp4')}}"></span>
        <span class="vid-btn" data-src ="{{asset('assets/image/hero-6.mov')}}"></span>
        <span class="vid-btn" data-src ="{{asset('assets/image/hero-10.mp4')}}"></span>
        <span class="vid-btn" data-src ="{{asset('assets/image/hero-3.mov')}}"></span>
    </div>
    <div class="video-container">
        <video src="{{asset('assets/image/hero-8.mp4')}}" id ="video-slider" loop autoplay muted></video>
    </div>
</section>

{{-- new section --}}
<div class="container section">
    <div class="row">
    <div class="col-md-12">
      <p class="section-head">DO WHAT YOU WANT. NOT WHAT'S EXPECTED.<p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    <h2 class="section-head"><strong> A UNIQUE ART GALLERY </strong></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    <h1 class="section-head"> <strong> In the Gallery </strong></h1>
    </div>
</div>
</div>
<div class="new">
<div class="row">
    <div class="col-md-12">
    <div class="gallery-wrap">
    <img src="{{asset('assets/image/back.jpg')}}" id="backBtn">
    <div class="gallery">
<div>
<span><img src="{{asset('assets/image/artists/artist1.jpg')}}" ></span>
<span><img src="{{asset('assets/image/artists/artist2.jpg')}}" ></span>
<span><img src="{{asset('assets/image/artists/artist3.jpg')}}" ></span>
</div>
<div>
<span><img src="{{asset('assets/image/hero-9.jpeg')}}" ></span>
<span><img src="{{asset('assets/image/new6.jpg')}}" ></span>
<span><img src="{{asset('assets/image/new7.jpg')}}" ></span>
</div>
<div>
    <span><img src="{{asset('assets/image/butterfly2.jpg')}}" ></span>
    <span><img src="{{asset('assets/image/butterfly2.jpg')}}" ></span>
    <span><img src="{{asset('assets/image/butterfly2.jpg')}}" ></span>
    </div>
</div>
<img src="{{asset('assets/image/next.jpg')}}" id="nextBtn">
</div>
</div>
</div>
</div>


{{-- dis --}}
<div class="container section">
    <div class="row">
        <div class="col-md-12">
            <h2 class="section-head">Discover Our Artistry</h2>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="service-box">
                <i class="fa fa-paint-brush"></i>
                <h3>Unique Paintings</h3>
                <p>Explore a collection of unique and beautiful paintings crafted by talented artists. Each piece tells a story and adds a touch of elegance to your space.</p>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="service-box">
                <i class="fa fa-pencil"></i>
                <h3>Beautiful Calligraphy</h3>
                <p>Discover the art of calligraphy with stunning works that blend traditional techniques with modern flair. Perfect for personal and professional settings.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="service-box">
                <i class="fa fa-scissors"></i>
                <h3>Handmade Crafts</h3>
                <p>Find a variety of handmade crafts that showcase the creativity and skill of our artisans. From home decor to accessories, there's something for everyone.</p>
            </div>
        </div>
    </div>
</div>

{{-- artist section --}}

<div class="artist">
    <div class="row">
        <div class="col-md-12">
            <div class="section-header text-center pb-5">
                <h2>Our Artists</h2>
                <p>A maestro of form, Grindrod crafts abstract works with a vibrant, geometric finesse.</p>
            </div>
        </div>
    </div>
</div>
<section id="team" class="team section-padding">
    <div class="member">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{asset('assets/image/artists/artist1.jpg')}}" alt="" class="img-fluid">
                        <h3 class="card-title py-2">Nick Grindrod</h3>
                        <p class="card-title">A maestro of form, Grindrod crafts abstract works with a vibrant, geometric finesse.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{asset('assets/image/artists/artist2.jpg')}}" alt="" class="img-fluid">
                        <h3 class="card-title py-2">Salvita De Corte</h3>
                        <p class="card-title">Sylvie Kettle, an artist from Australia, Byron Bay, skilfully blends feminine landscapes, bold mark-making, and dreamlike colours in her work.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{asset('assets/image/artists/artist3.jpg')}}" alt="" class="img-fluid">
                        <h3 class="card-title py-2">Sylvie Kettle</h3>
                        <p class="card-title">A maestro of form, Grindrod crafts abstract works with a vibrant, geometric finesse.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{asset('assets/image/artists/artist4.jpg')}}" alt="" class="img-fluid">
                        <h3 class="card-title py-2">Kate Florence</h3>
                        <p class="card-title">Kate Florence, UK-born and Australia based, captures human moments and emotions with distinct lines, colour and dynamic composition.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
            <a href="#" class="btn">View All</a>
            </div>
        </div>
    </div>
</section>
  

 {{-- Testimonial section    --}}
<div class="feedback">
    <div class=" header">
    <h1>Customer Review </h1>
    <p>What our clients say about us! </p>
    </div>
    <div class="slide-track">
    <div class="slide">
    <img src="{{asset('assets/image/feedback2.png')}}">
    <hr>
    <p class="name">Allan Collins<p>
    <span> ⭐⭐⭐⭐⭐</span>
    <p>I've been exploring different online platforms for unique art pieces, and my experience with [Artisan Haven] has been exceptional. The website offers an impressive collection of paintings, calligraphy, and other artistic items, showcasing diverse styles and artists.</p>
    </div>
    <div class="slide">
    <img src="{{asset('assets/image/feedback1.png')}}">
    <hr>
    <p class="name">Tanya Grant<p>
    <span> ⭐⭐⭐⭐⭐</span>
    <p>I've been exploring different online platforms for unique art pieces, and my experience with [Artisan Haven] has been exceptional. The website offers an impressive collection of paintings, calligraphy, and other artistic items, showcasing diverse styles and artists.</p>
    </div>
    <div class="slide">
    <img src="{{asset('assets/image/feedback3.png')}}">
    <hr>
    <p class="name">Clay Washington<p>
    <span> ⭐⭐⭐⭐⭐</span>
    <p>I've been exploring different online platforms for unique art pieces, and my experience with [Artisan Haven] has been exceptional. The website offers an impressive collection of paintings, calligraphy, and other artistic items, showcasing diverse styles and artists.</p>
    </div>
    </div>
    </div>


{{-- newsletter section  --}}

<div class="newsletter">
    <div class="row">
        <div class="col-md-12">
            <h1 class="section-head"><strong>Newsletter</strong></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="section-head">Subscribing will ensure that you're among the first to know when new work is released.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
            <div class="notification success">
                {{ session('success') }}
            </div>
        @endif
            <form action="{{ route('subscribe') }}" method="POST" class="newsletter-form">
                @csrf
                <input type="email" id="email" name="email" placeholder="Email" required>
                <button type="submit" class="btn">Subscribe</button>
            </form>
        </div>
        <div class="notification hide">
            Notification message here.
        </div>    
    </div>
</div>


@endsection
@section('script')
       <script src="{{asset('assets/js/home.js')}}"></script>
       <script src="{{asset('assets/js/gallery.js')}}"></script>
@endsection
  
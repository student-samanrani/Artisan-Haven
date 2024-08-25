@extends('template.main')
@section('title','About-ArtisanHaven') 
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/collection.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 {{-- jquery cdn link --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{-- magnific css cdn link --}}
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
@endsection
@section('content')
<div class="collection">
<div class=" header1">
<h1>Collection Page</h1>
</div>
<ul class="controls1">
   <li class ="buttons active" data-filter="all">All</li>
    <li class ="buttons" data-filter="Calligaraphy">Calligraphy</li>
    <li class ="buttons" data-filter="painting">painting</li>
    <li class ="buttons" data-filter="sketching">sketching</li>
    <li class ="buttons" data-filter="poetry">poetry</li>
    <li class ="buttons" data-filter="Embodriey">Embodriey</li>
</ul>
<div class="image-container">
<a href="{{asset('assets/image/butterfly2.jpg')}}"  class="image Calligaraphy">
  <img src="{{asset('assets/image/butterfly2.jpg')}}"  alt=" ">
  </a>
  <a href="{{asset('assets/image/butterfly1.jpeg')}}"  class="image painting">
  <img src="{{asset('assets/image/butterfly1.jpeg')}}"  alt=" ">
  </a>
<a href="{{asset('assets/image/box3.jpeg')}}"  class="image sketching">
  <img src="{{asset('assets/image/box3.jpeg')}}"  alt=" ">
  </a>

<a href="{{asset('assets/image/box4.jpg')}}"  class="image poetry">
  <img src="{{asset('assets/image/box4.jpg')}}"  alt=" ">
  </a>
<a href="{{asset('assets/image/box5.jpg')}}"  class="image Embodriey">
  <img src="{{asset('assets/image/box5.jpg')}}"  alt=" ">
  </a>
<a href="{{asset('assets/image/box6.jpeg')}}"  class="image  Embodriey">
  <img src="{{asset('assets/image/box6.jpeg')}}"  alt=" ">
  </a>
<a href="{{asset('assets/image/box7.jpeg')}}"  class="image Calligaraphy">
  <img src="{{asset('assets/image/box7.jpeg')}}"  alt=" ">
  </a>
  <a href="{{asset('assets/image/box8.jpg')}}"  class="image painting">
  <img src="{{asset('assets/image/box8.jpg')}}"  alt=" ">
  </a>
<a href="{{asset('assets/image/box9.jpg')}}"  class="image sketching">
  <img src="{{asset('assets/image/box9.jpg')}}"  alt=" ">
  </a>
<a href="{{asset('assets/image/box10.jpg')}}"  class="image poetry">
  <img src="{{asset('assets/image/box10.jpg')}}"  alt=" ">
  </a>
<a href="{{asset('assets/image/box11.jpg')}}"  class="image  poetry">
  <img src="{{asset('assets/image/box11.jpg')}}"  alt=" ">
  </a>
  <a href="{{asset('assets/image/hero-9.jpg')}}"  class="image  poetry">
    <img src="{{asset('assets/image/hero-9.jpg')}}"  alt=" ">
    </a>
    <a href="{{asset('assets/image/about/about.jpg')}}"  class="image  poetry">
        <img src="{{asset('assets/image/about/about.jpg')}}"  alt=" ">
        </a>
<a href="{{asset('assets/image/about/about1.jpg')}}"  class="image  poetry">
    <img src="{{asset('assets/image/about/about1.jpg')}}"  alt=" ">
</a>
<a href="{{asset('assets/image/about/about2.jpg')}}"  class="image  poetry">
     <img src="{{asset('assets/image/about/about2.jpg')}}"  alt=" ">
</a>
<a href="{{asset('assets/image/new1.jpg')}}"  class="image  poetry">
    <img src="{{asset('assets/image/new1.jpg')}}"  alt=" ">
</a>
<a href="{{asset('assets/image/new6.jpg')}}"  class="image  poetry">
    <img src="{{asset('assets/image/new6.jpg')}}"  alt=" ">
</a>
<a href="{{asset('assets/image/new7.jpg')}}"  class="image  poetry">
    <img src="{{asset('assets/image/new7.jpg')}}"  alt=" ">
</a>
  </div>
  <button onclick="myFunction()"  class="load-more">see more </button>
</div>
@endsection
@section('script')
<script src="{{asset('assets/js/collection.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
@endsection
@extends('template.main')
@section('title', 'Service Page - Calligraphy Item 1')
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/service.css')}}">
@endsection
@section('content')
<div class="service-page">
    <h1>Calligraphy Item 1</h1>
    <div class="service-details">
        <img src="{{asset('assets/image/butterfly2.jpg')}}" alt="Calligraphy Item 1">
        <p><strong>Artist:</strong> Jane Doe</p>
        <p><strong>Price:</strong> $200</p>
        <p><strong>Description:</strong> A beautiful calligraphy piece by renowned artist Jane Doe.</p>
        <a href="/abt"><button class="add-to-cart">Add to Cart</button></a>
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/js/service.js')}}"></script>
@endsection

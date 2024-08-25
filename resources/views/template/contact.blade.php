@extends('template.main')
@section('title','contact-ArtisanHaven') 
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">
@endsection
@section('content')


    <div class="Contact">
        <h2 class="text-center my-4">Contact Us</h2>
        <p class="text-center">General inquiries, sales, and orders: artisanhaven@Gmail.Com</p>
    </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="form-group mb-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-block">Submit</button>
                </form>
            </div>
        </div>
@endsection

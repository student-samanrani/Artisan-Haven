<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;

// Route::get('/', function () {
//     return view('navbar');
// });

Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

Route::get('/product', function () {
    return view('product');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/',[HomeController::class,'home']);
Route::get('/abt',[HomeController::class,'about']);
Route::view('/contact','template/contact');
Route::view('/collection','collection');
Route::view('/product','template/product');
Route::view('/trending','template/trending');
Route::view('/new','template/new');
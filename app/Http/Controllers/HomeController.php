<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view("template.home");
     }
     public function about() {
        return view("template.about");
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:emails,email',
        ]);

        Email::create(['email' => $request->email]);

        return redirect()->back()->with('success', 'Subscribed successfully!');
    }
}


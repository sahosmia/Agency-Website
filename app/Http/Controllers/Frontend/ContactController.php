<?php

namespace App\Http\Controllers\Frontend;

use App\Http/Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.contact');
    }

    public function contact_submit(Request $request)
    {
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contactPage = PageSetting::where('page_name', 'contact')->first();
        $contactSettings = $contactPage ? $contactPage->settings : [];

        return view('frontend.contact', compact('contactSettings'));
    }

    public function contact_submit(Request $request)
    {
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}

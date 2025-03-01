<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class AuthController extends Controller
{ // Show login page
    public function login()
    {
        return view('auth.login');
    }

    // Show registration page
    public function register()
    {
        return view('auth.register');
    }

    // Show registration success page
    public function registerSuccessfull()
    {
        return view('auth.register-successfull');
    }

    // Show OTP verification page
    public function otpVerification()
    {
        return view('auth.otp-verification');
    }

    // Show forget password page
    public function forgetPassword()
    {
        return view('auth.forget-password');
    }
}

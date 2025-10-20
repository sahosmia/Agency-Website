@extends('frontend.layouts.app')
@section('title', 'Register')

@section('content')
<div class="container mx-auto px-4">
    <div class="text-center pt-16 md:pt-20">
        <h1 class="heading-text-bold-large text-secondary-950">Create an Account</h1>
        <p class="sub-title-medium-regular text-secondary-600 pt-6 md:pt-8">
            Join us today! It's quick and easy.
        </p>
        <p class="sub-title-medium-regular text-secondary-600">
            Fill in your details to create your account.
        </p>
    </div>

    <form action="{{ route('register') }}" method="POST" class="mt-8 mb-20">
        @csrf
        <div
            class="flex flex-col gap-6 border border-secondary-400 rounded-2xl p-6 sm:p-8 w-full sm:w-10/12 md:w-8/12 lg:w-6/12 xl:w-5/12 mx-auto">

            {{-- Google Button --}}
            <button type="button"
                class="button-label px-6 py-3 label-text-bold-large flex items-center justify-center gap-2 border border-gray-300 rounded-md hover:bg-gray-100 transition">
                <i class="fa-brands fa-google"></i>
                <span>Continue with Google</span>
            </button>

            {{-- Apple Button --}}
            <button type="button"
                class="button-label px-6 py-3 label-text-bold-large flex items-center justify-center gap-2 border border-gray-300 rounded-md hover:bg-gray-100 transition">
                <i class="fa-brands fa-apple"></i>
                <span>Continue with Apple</span>
            </button>

            {{-- OR Divider --}}
            <div class="flex items-center justify-center gap-2 w-full">
                <hr class="flex-1 h-px bg-secondary-400 border-0">
                <p class="px-2 text-secondary-600">OR</p>
                <hr class="flex-1 h-px bg-secondary-400 border-0">
            </div>

            {{-- Name Field --}}
            <div class="flex flex-col gap-2">
                <label class="inpul-label" for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your full name" value="{{ old('name') }}"
                    class="border border-secondary-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            {{-- Email Field --}}
            <div class="flex flex-col gap-2">
                <label class="inpul-label" for="email">Your e-mail</label>
                <input type="email" name="email" id="email" placeholder="Enter your e-mail" value="{{ old('email') }}"
                    class="border border-secondary-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            {{-- Phone Field --}}
            <div class="flex flex-col gap-2">
                <label class="inpul-label" for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                    value="{{ old('phone') }}"
                    class="border border-secondary-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            {{-- Password Field --}}
            <div class="flex flex-col gap-2">
                <label class="inpul-label" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                    class="border border-secondary-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            {{-- Confirm Password Field --}}
            <div class="flex flex-col gap-2">
                <label class="inpul-label" for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Confirm your password"
                    class="border border-secondary-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            {{-- Terms Agreement --}}
            <div class="flex items-start gap-2">
                <input type="checkbox" name="terms" id="terms"
                    class="h-4 w-4 mt-1 text-primary-600 border-gray-300 rounded" required>
                <label for="terms" class="text-sm text-secondary-600 leading-relaxed">
                    I agree to the
                    <a href="{{ route('privacy-policy') }}" class="text-primary-400 hover:underline">Privacy Policy</a>
                    and
                    <a href="{{ route('terms-conditions') }}" class="text-primary-600 hover:underline">Terms of Use</a>.
                </label>
            </div>

            {{-- Submit Button --}}
            <button type="submit"
                class="btn-outline-full bg-primary-600 text-white font-semibold py-3 rounded-lg hover:bg-primary-700 transition">
                Register
            </button>

            {{-- Login Redirect --}}
            <div class="text-center">
                <p class="label-text-regular-small text-secondary-600">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-primary-600 font-semibold hover:underline">
                        Log in
                    </a>
                </p>
            </div>
        </div>
    </form>
</div>
@endsection

@extends('frontend.layouts.app')
@section('title', 'Login')

@section('content')
<div class="container mx-auto px-4">
    <div class="text-center pt-16 md:pt-20">
        <h1 class="heading-text-bold-large text-secondary-950">Log in Account</h1>
        <p class="sub-title-medium-regular text-secondary-600 pt-6 md:pt-8">
            Welcome back! Good to see you again.
        </p>
        <p class="sub-title-medium-regular text-secondary-600">
            Enter your details to sign in to your account.
        </p>
    </div>

    <form action="{{ route('login') }}" method="POST" class="mt-8 mb-20">
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

            {{-- Email Field --}}
            <div class="flex flex-col gap-2">
                <label class="inpul-label" for="email">Your e-mail</label>
                <input type="email" name="email" id="email" placeholder="Enter your e-mail" value="{{ old('email') }}"
                    class="border border-secondary-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            {{-- Password Field --}}
            <div class="flex flex-col gap-2">
                <label class="inpul-label" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                    class="border border-secondary-400 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            {{-- Forget Password --}}
            <div class="text-right">
                <a href="{{ route('password.request') }}"
                    class="text-sm text-indigo-600 hover:text-indigo-800 transition">
                    Forget password?
                </a>
            </div>

            {{-- Remember Me --}}
            <div class="flex items-center gap-2">
                <input type="checkbox" name="remember" id="remember"
                    class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                <label for="remember" class="label-text-regular-medium text-secondary-600">Remember Me</label>
            </div>

            {{-- Policy Info --}}
            <p class="text-sm text-secondary-600 leading-relaxed">
                By signing in you agree to the
                <a href="{{ route('privacy-policy') }}" class="text-[#230BFF] hover:underline">Privacy Policy</a>
                and
                <a href="{{ route('terms-conditions') }}" class="text-[#230BFF] hover:underline">Terms of Use</a>.
            </p>

            {{-- Submit Button --}}
            <button type="submit"
                class="btn-outline-full bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700 transition">
                Sign in
            </button>

            {{-- Register Info --}}
            <div class="text-center">
                <p class="label-text-regular-small text-secondary-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-[#230BFF] font-semibold hover:underline">
                        Create an account
                    </a>
                </p>
            </div>
        </div>
    </form>
</div>
@endsection

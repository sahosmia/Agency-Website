@extends('frontend.layouts.app')
@section('title', 'Register')

@section('content')
   <div class="container">
    <div class="w-8/12 text-center m-auto pt-20">
        <h1 class="heading-text-bold-large text-secondary-950">Log in Account</h1>
        <p class="sub-title-medium-regular text-secondary-600 pt-8">Welcome back! Good to see you again.
        </p>
        <p class="sub-title-medium-regular text-secondary-600 ">
            Enter your details to get sign in to your account </p>

    </div>

    <form action="">
        <div class="flex w-6/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">
            <div class="flex gap-2 flex-col">
                <button class="button-label  px-6 py-3 label-text-bold-large "> <span class="mr-2"><i
                            class="fa-brands fa-google"></i></span> Continue with Google</button>
            </div>
            <div class="flex gap-2 flex-col">
                <button class="button-label  px-6 py-3 label-text-bold-large "> <span class="mr-2"><i
                            class="fa-brands fa-apple"></i></span> Continue with Google</button>
            </div>

            <div class="flex items-center justify-center gap-2 w-full">
                <hr class="flex-1 h-px bg-secondary-400 border-0">
                <p class="px-2 text-secondary-600">OR</p>
                <hr class="flex-1 h-px bg-secondary-400 border-0">
            </div>

            <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your e-mail</label><input type="email"
                    name="" id="" placeholder="Enter your e-mail" value="">
            </div>
            <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Password</label><input type="text"
                    name="" id="" placeholder="Enter your password" value="">
                <span></span>
            </div>
            <a href="{{ route('forget-password') }}" class=" text-right ">Forget password</a>


            <div class="flex  gap-2 ">
                <input type="checkbox" name="" id="">
                <span class="label-text-regular-medium text-secondary-600">Remember Me</span>
            </div>
            <p class="text-sm text-secondary-600">By signing in you agree to the Yeasin Arena <span
                    class="text-[#230BFF]">Privacy
                    Policy</span> and <span class="text-[#230BFF]">Terms of Use</span></p>

            <button class="btn-outline-full">Sign in</button>

            <div class="flex gap-2 flex-col text-center">
                <p class="label-text-regular-small text-secondary-600">Don't have an account? <span
                        class="label-text-bold-small text-secondary-600">Purchase
                        our services or software,
                    </span></p>
                <p class="label-text-bold-small text-secondary-600 ">Purchase our services or software,</p>
            </div>

            <p></p>

        </div>
    </form>

</div>


@endsection

@extends('frontend.layouts.app')
@section('title', 'login')

@section('content')
    <div class="container">
        <div class="w-8/12 text-center m-auto pt-20">
            <h1 class="heading-text-bold-large text-secondary-950">Forget Passwords</h1>
            <p class="body-text-regular-medium text-secondary-600  mt-2">
                Enter your E-mail we'll help you reset your passwords </p>

        </div>

        <form action="">
            <div class="flex w-6/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">



                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your e-mail</label><input
                        type="email" name="" id="" placeholder="Enter your e-mail" value="">
                </div>

                <button class="btn-outline-full ">Continue</button>

            </div>
        </form>

    </div>

@endsection

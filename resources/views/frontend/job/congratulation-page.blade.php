@extends('frontend.layouts.app')
@section('title', 'Congratulation-page')

@section('content')
    <div class="container">
        <div class="w-8/12 text-center m-auto pt-20">

            <img class="w-[184px] h-[184px]  mx-auto " src="{{ asset('upload/articles/congratulation/confetti.svg') }}" alt="">
            <h1 class="heading-text-bold-large text-secondary-950 mt-7"><span class=" text-primary-600">Congratulations! </span> Thank You for Applying </h1>

            <p class="title-text-regular-x-large text-secondary-600 ">
                We will respond to you within 24 hours
            </p>
        </div>

        <div class="mt-[60px] flex gap-4 justify-center items-center">
            <button class="button-label px-6 py-3 label-text-bold-large">Update your application</button>
            <button class="button-label px-6 py-3 bg-primary-600 label-text-bold-large">Explore about us</button>
        </div>



    </div>

@endsection

@extends('frontend.layouts.app')
@section('title', 'Confirmation')

@section('content')
    <div class="container">

            <div class="w-6/12 flex justify-center flex-col gap-6 p-6 text-center  border border-secondary-400 rounded-2xl m-auto mt-20 mb-20">

                <img class="w-[184px] h-[184px]  mx-auto " src="{{ asset('upload/mail-heart.svg') }}" alt="">
                <h1 class="heading-text-bold-large text-secondary-950 my-2">Thanks you for choosing Us </h1>

                <p class="title-text-regular-x-large text-secondary-900 ">
                    We will respond to you within 1 hours
                </p>
                <button class="btn-outline-full">Back to home</button>
                <p class=" label-text-bold-small text-secondary-900 mt-2">We have sent a reply to your inbox at yourmail@gmail.com</p>
            </div>




    </div>

@endsection

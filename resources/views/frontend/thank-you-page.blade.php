@extends('frontend.layouts.app')
@section('title', 'Thank-you')

@section('content')
<div class="container">
    <div class="w-8/12 h-[600px] flex flex-col justify-center text-center m-auto pt-20 mb-20">

        <img class="w-28   mx-auto " src="{{ asset('upload/mail-heart.svg') }}" alt="">
        <h1 class="heading-text-bold-large text-secondary-950 mt-7">Thanks for Your Enquiry </h1>

        <p class="title-text-regular-x-large text-secondary-600 ">
            We will respond to you within 24 hours
        </p>
    </div>


</div>

@endsection

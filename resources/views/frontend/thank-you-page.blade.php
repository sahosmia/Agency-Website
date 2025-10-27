@extends('frontend.layouts.app')
@section('title', $thankYouSettings['page_title'] ?? 'Thank You')

@section('content')
    <div class="container">
        <div class="w-8/12 text-center m-auto pt-20 mb-[80px]">

            <img class="w-[184px] h-[184px]  mx-auto " src="{{ asset('upload/mail-heart.svg') }}" alt="">
            <h1 class="heading-text-bold-large text-secondary-950 mt-7">{{ $thankYouSettings['title'] ?? '' }}</h1>

            <p class="title-text-regular-x-large text-secondary-600 ">
                {{ $thankYouSettings['subtitle'] ?? '' }}
            </p>
        </div>


    </div>

@endsection

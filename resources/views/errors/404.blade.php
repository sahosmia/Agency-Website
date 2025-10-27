@extends('frontend.layouts.app')
@section('title', $notFoundSettings['page_title'] ?? 'Not Found')

@section('content')
    <div class="container">
        <div class="w-8/12 text-center m-auto pb-16 lg:pb-20">
        <h1 class="heading-text-regular-large text-secondary-950 my-14 lg:my-20 ">{{ $notFoundSettings['404_title'] ?? '' }}</h1>
        <p>{{ $notFoundSettings['404_description'] ?? '' }}</p>
        <img class="w-full lg:w-10/12 m-auto  " src="{{ asset('storage/' . ($notFoundSettings['404_image'] ?? '')) }}" alt="">
        </div>
    </div>


@endsection

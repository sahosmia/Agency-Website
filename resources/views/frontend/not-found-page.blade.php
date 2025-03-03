@extends('frontend.layouts.app')
@section('title', 'Not-found')

@section('content')
<div class="container">
    <div class="w-8/12 text-center m-auto pt-20">
        <h1 class="heading-text-regular-large text-secondary-950 my-20 ">
            Whoops, that page is gone.
        </h1>
        <img class="w-[1224px] h-[641px] pt-20" src="{{ asset('upload/notfoundimg.png') }}" alt="">
    </div>
</div>


@endsection

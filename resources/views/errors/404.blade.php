@extends('frontend.layouts.app')
@section('title', 'Not-found')

@section('content')
    <div class="container">
        <div class="w-8/12 text-center m-auto pb-16 lg:pb-20">
            <h1 class="heading-text-regular-large text-secondary-950 my-14 lg:my-20 "> Whoops, that page is gone. </h1>
            <img class="w-full lg:w-10/12 m-auto  " src="{{ asset('upload/notfoundimg.png') }}" alt="">
        </div>
    </div>


@endsection

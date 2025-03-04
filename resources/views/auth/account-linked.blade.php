@extends('frontend.layouts.app')
@section('title', 'Account Linked')

@section('content')
<div class="container">
    <div class="w-8/12 text-center m-auto pt-20">
        <h1 class="heading-text-bold-large text-secondary-950">Account linked Successfully</h1>
        <p class="sub-title-medium-regular text-secondary-600 pt-8">Your email has been linked successfully
        </p>


    </div>

    <form action="">
        <div class="flex w-6/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">

            <div class="flex flex-col gap-2 justify-center items-center">
               <img class="h-4/12" src="{{asset('upload/circle-check.svg')}}" alt="">

                <p class="label-text-regular-large text-secondary-600">Now you can access your dashboard</p>
            </div>

            <div class="flex  gap-2">

            <button class="btn-outline-full">Back home</button>

            <button class="btn-primary-full  ">Go to dashboard</button>
            </div>

            <p></p>

        </div>
    </form>

</div>

@endsection

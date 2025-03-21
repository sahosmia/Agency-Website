@extends('frontend.layouts.app')
@section('title', 'lets-discuss')

@section('content')
    <div class="container">
        <div class="w-8/12 text-center m-auto pt-20">
            <h1 class="heading-text-bold-large text-secondary-950">Let's discuss with US</h1>
            <p class="sub-title-medium-regular text-secondary-600 pt-8">Get your information so we can contact you</p>
        </div>

        <form action="" method="POST">

            <input type="hidden" name="step" value="1">
            <div class="flex w-6/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your name</label><input type="text" name="" id="" placeholder="e.g.  Jhon brgke" value=""></div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your e-mail</label><input type="email" name="" id="" placeholder="e.g.  jhonbrgke@gmail.com" value=""></div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Select Your Service</label>
                    <div class="flex  gap-6">
                        <div class="w-24">
                            <img class=" w-24" src="{{ asset('upload/mail-heart.svg') }}" alt="">
                        </div>
                        <div class="mt-4">
                            <h1 class="label-text-bold-large text-secondary-600">Advanced</h1>
                            <h1 class="label-text-bold-large text-secondary-800">Custom Software Solution</h1>
                            <h1 class="title-text-bold-x-large text-secondary-950">Contract price</h1>
                        </div>
                    </div>
                </div>

                <div>
                    <button class="button-g py-3 px-6 text-secondary-800 label-text-bold-large"><span><i class="fa-solid fa-plus"></i></span> Add more</button>
                </div>

                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Project description</label>
                    <textarea rows="4" name="" id="" placeholder="Write your message here"></textarea>
                </div>

                <hr class="h-px  bg-secondary-400 border-0 ">
                <button type="submit" class="btn-outline-full">Submit Now <span> <i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
        </form>

    </div>

@endsection

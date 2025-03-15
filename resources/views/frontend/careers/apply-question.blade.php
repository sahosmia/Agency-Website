@extends('frontend.layouts.app')
@section('title', 'Job-Apply-Question')

@section('content')
    <div class="container">
        <div class="w-8/12 text-center m-auto pt-20">
            <h1 class="heading-text-bold-large text-secondary-950">Job Title: <span class=" text-primary-600">UI/UX Designer</span></h1>

            <p class="sub-title-medium-regular text-secondary-600 pt-8">
                we value expertise and problem-solving skills. Please answer the following skill-based questions based on the role you're applying for. This helps us evaluate your knowledge, experience, and ability to handle real-world challenges.
            </p>
        </div>

        <form action="{{ route('front.careers.apply.submit', $slug) }}" method="POST">
            @csrf

            <div class="flex w-[808px] flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">

                <input type="hidden" name="step" value="2">

                <div class="flex gap-7 flex-col "><label class="input-label" for="">What is your typical UI/UX design workflow, from research to final implementation?</label>
                    <textarea rows="4" name="" id="" placeholder="Write your answer here"></textarea>
                </div>

                <div class="flex gap-7 flex-col"><label class="input-label" for="">How do you balance creativity with usability and business objectives?</label>
                    <textarea rows="4" name="" id="" placeholder="Write your answer here"></textarea>
                </div>

                <div class="flex gap-7 flex-col"><label class="input-label" for="">What methods do you use for user research and gathering insights?</label>
                    <textarea rows="4" name="" id="" placeholder="Write your answer here"></textarea>
                </div>

                <div class="flex gap-7 flex-col"><label class="input-label" for="">How do you validate and test design decisions before final implementation?</label>
                    <textarea rows="4" name="" id="" placeholder="Write your answer here"></textarea>
                </div>



                <hr class="h-px  bg-secondary-400 border-0 ">
                <button type="submit" class="btn-outline-full">Submit job application
                    <span class="
                    "> <i class="fa-solid fa-arrow-right"></i></span>
                </button>

            </div>
        </form>

    </div>

@endsection

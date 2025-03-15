@extends('frontend.layouts.app')
@section('title', 'Career Apply')

@section('content')
    <div class="container">
        <div class="w-8/12 text-center m-auto pt-20">
            <h1 class="heading-text-bold-large text-secondary-950">Job Title: <span class=" text-primary-600">UI/UX Designer</span></h1>
            <p class="sub-title-medium-regular text-secondary-600 pt-8">If you have exceptional skills in development, design, marketing, or any other relevant field, we’d love to hear from you! We encourage you to submit your resume. We’ll keep your
                details on file and reach out when a suitable opportunity arises. </p>
        </div>

        <form action="{{ route('front.careers.apply.submit', $slug) }}" method="POST">
            @csrf

            <input type="hidden" name="step" value="1">
            <div class="flex w-6/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your name</label><input type="text" name="" id="" placeholder="e.g.  Jhon brgke" value=""></div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your e-mail</label><input type="email" name="" id="" placeholder="e.g.  jhonbrgke@gmail.com" value=""></div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your phone number</label><input type="text" name="" id="" placeholder="e.g.  0123456789" value=""></div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Expected Salary</label><input type="text" name="" id="" placeholder="e.g.  12K-25k Monthly" value=""></div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">About yourself</label>
                    <textarea rows="5" name="" id="" placeholder="Write your message here"></textarea>
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your portfolio</label><input type="text" name="" id="" placeholder="e.g.  GitHub portfolio or Dribble portfolio or Linkndin" value="">
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Upload your resume</label><input type="file" name="" id="" placeholder="" value=""></div>
                <hr class="h-px  bg-secondary-400 border-0 ">
                <button type="submit" class="btn-outline-full">Save & Continue</button>
            </div>
        </form>

    </div>

@endsection

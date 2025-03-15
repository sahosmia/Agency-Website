@extends('frontend.layouts.app')
@section('title', 'Article Not Found')

@section('content')
    <div class="container mx-auto">
        <div class="w-8/12 text-center m-auto pt-20">
            <h3 class="heading-text-regular-large text-secondary-800 m-auto text-center">Oops, No current job openings </h3>
            <p class="sub-title-medium-regular text-secondary-600 pt-8">
                If you have exceptional skills in development, design, marketing, or any other relevant field, we’d love to hear from you! We encourage you to submit your resume. We’ll keep your details on file and reach out when a suitable opportunity
                arises.
            </p>
        </div>

        <form action="">
            <div class="flex w-6/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your name</label>
                    <input type="text" name="" id="" placeholder="e.g.  Jhon brgke" value="">
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your e-mail</label>
                    <input type="email" name="" id="" placeholder="e.g.  jhonbrgke@gmail.com" value="">
                </div>

                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your desired job</label><input type="text" name="" id="" placeholder="e.g.  Web development or UI/UX designer" value="">
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">About yourself</label>
                    <textarea rows="5" name="" id="" placeholder="Write your message here"></textarea>
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your portfolio</label><input type="text" name="" id="" placeholder="e.g.  GitHub portfolio or Dribble portfolio or Linkndin" value="">
                </div>

                <hr class="h-px  bg-secondary-400 border-0 ">
                <button class="btn-outline-full">Save & Continue <span class="
                    "> <i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
        </form>
    </div>

@endsection

@extends('frontend.layouts.app')
@section('title', 'Career-page-no-jobs')

@section('content')
    <div class="container">
        <div class="w-8/12 text-center m-auto pt-20">
            <h1 class="heading-text-bold-large text-secondary-950">Oops, No current job openings </h1>

            <p class="sub-title-medium-regular text-secondary-600 pt-8">
                If you have exceptional skills in development, design, marketing, or any other relevant field, we’d love to
                hear from you! We encourage you to submit your resume. We’ll keep your details on file and reach out when a
                suitable opportunity arises.
            </p>
        </div>

        <form action="">
            <div class="flex w-6/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your name</label>
                    <input type="text" name="" id="" placeholder="e.g.  Jhon brgke" value="">
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your e-mail</label>
                    <input type="email" name="" id="" placeholder="e.g.  jhonbrgke@gmail.com"
                        value="">
                </div>

                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your desired job</label><input
                        type="text" name="" id="" placeholder="e.g.  Web development or UI/UX designer" value="">
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">About yourself</label>
                    <textarea rows="5" name="" id="" placeholder="Write your message here"></textarea>
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your portfolio</label><input
                        type="text" name="" id=""
                        placeholder="e.g.  GitHub portfolio or Dribble portfolio or Linkndin" value="">
                </div>

                <hr class="h-px  bg-secondary-400 border-0 ">
                <button class="btn-outline-full">Save & Continue  <span class="
                    "> <i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
        </form>

        {{-- why work with us --}}

        <div>
            <h1 class="heading-text-regular-medium  text-center">Why Work With Us?</h1>
            <div class="flex items-center justify-center gap-7 flex-wrap mx-auto mt-8 mb-[80px] ">
                <div class="card w-[600px] h-[248px] p-7 ">
                    <h1 class="title-text-bold-medium">Competitive Salary & Growth Opportunities</h1>
                    <span class="border w-full stroke-secondary-400"></span>
                    <p class="body-text-regular-large">
                        We believe in rewarding talent and hard work. Our competitive salary packages ensure that you are fairly compensated for your expertise and contributions.
                    </p>
                </div>
                <div class="card w-[600px] h-[248px] p-7 ">
                    <h1 class="title-text-bold-medium">Flexible Work Options – Remote & Hybrid</h1>
                    <span class="border w-full stroke-secondary-400"></span>
                    <p class="body-text-regular-large">
                        Work from wherever you're most productive! We offer remote, hybrid, and on-site work arrangements based on role and preference.
                    </p>
                </div>
                <div class="card w-[600px] h-[248px] p-7 ">
                    <h1 class="title-text-bold-medium">Exciting & International Projects</h1>
                    <span class="border w-full stroke-secondary-400"></span>
                    <p class="body-text-regular-large">
                        We collaborate with global clients across multiple industries, giving you exposure to diverse challenges and opportunities to work on high-impact projects.
                    </p>
                </div>
                <div class="card w-[600px] h-[248px] p-7 ">
                    <h1 class="title-text-bold-medium">Supportive & Innovative Work Environment</h1>
                    <span class="border w-full stroke-secondary-400"></span>
                    <p class="body-text-regular-large">
                        We foster a positive, inclusive, and collaborative workplace where every idea is valued.
                    </p>
                </div>


            </div>
        </div>

        {{-- why work with us --}}

    </div>

@endsection

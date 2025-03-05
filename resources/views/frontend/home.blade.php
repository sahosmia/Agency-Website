@extends('frontend.layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="text-center mt-20">
            <h1 class="heading-text-regular-large text-secondary-950">Your idea make in Realty</h1>
            <h1 class="heading-text-regular-large text-secondary-950">We provide <span
                    class=" text-primary-600 heading-text-bold-large">Digital Marketing</span></h1>

            <dir class="flex items-center justify-center mt-7">
                <div class="w-7/12 flex justify-center  gap-4 flex-wrap">
                    <button class="hero-badge-desktop">Business partner</button>
                    <button class="hero-badge-desktop">Tech partner</button>
                    <button class="hero-badge-desktop">Problem solver</button>
                    <button class="hero-badge-desktop">Visionary thinker</button>
                    <button class="hero-badge-desktop">Strategic planner</button>

                    <button class="hero-badge-desktop">Design partner</button>
                    <button class="hero-badge-desktop">Digital marketer</button>
                    <button class="hero-badge-desktop">Security provider</button>
                    <button class="hero-badge-desktop">Data researcher</button>
                </div>
            </dir>

            <div class="flex justify-center items-center mt-14">
                <button class="button-label px-7 py-3 bg-primary-600 text-white label-text-bold-large "> Get started
                    <span><i class="fa-solid fa-arrow-right"></i></span></button>
            </div>

        </div>

        {{-- hero card  --}}

        <div class="flex   justify-center   gap-6  m-[120px]">
            <div class="w-3/12 flex items-center text-left">
                <p class="body-text-regular-medium text-secondary-800">We specialize in digital solutions to help your
                    business grow and thrive in the digital landscape.</p>
            </div>
            <div class="hero-card">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-900 ">95%</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">Satisfied Customers</h2>
                </div>
                <div>
                    <p class="body-text-regular-small text-secondary-800">We are committed to providing the best
                        solutions to build happy relationships with our customers.</p>
                </div>

            </div>
            <div class="hero-card">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-900 ">80+</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">Projects Completed</h2>
                </div>
                <div>
                    <p class="body-text-regular-small text-secondary-800">Consistently innovating and delivering
                        excellence.</p>
                </div>

            </div>
            <div class="hero-card">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-900 ">17+</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">Industries Served</h2>
                </div>
                <div>
                    <p class="body-text-regular-small text-secondary-800">Expertise tailored to your unique
                        needs—because we’ve done it all.</p>
                </div>

            </div>

        </div>
        {{-- hero card  --}}

        {{-- reviewer card  --}}

        <div class=" flex ">
            <div class="reviewer-card">
                <img class="" src="{{ asset('upload/reviewer/google.svg') }}" alt="">
                <div>
                    <div class="flex gap-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>
                    <p class="title-text-bold-medium text-secondary-800">5/5</p>
                </div>

            </div>
            <div class="reviewer-card">
                <img src="{{ asset('upload/reviewer/Frame 101.svg') }}" alt="">
                <div>
                    <div class="flex gap-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>
                    <p class="title-text-bold-medium text-secondary-800">5/5</p>
                </div>

            </div>
            <div class="reviewer-card">
                <img src="{{ asset('upload/reviewer/Frame 100.svg') }}" alt="">
                <div>
                    <div class="flex gap-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>
                    <p class="title-text-bold-medium text-secondary-800">5/5</p>
                </div>

            </div>
            <div class="reviewer-card">
                <img src="{{ asset('upload/reviewer/Frame 101.svg') }}" alt="">
                <div>
                    <div class="flex gap-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>
                    <p class="title-text-bold-medium text-secondary-800">5/5</p>
                </div>

            </div>


        </div>

        {{-- reviewer card  --}}

        {{-- Searching section  --}}
        <div class="my-20">
            <h1 class="text-center heading-text-regular-medium text-secondary-900">Find the Perfect Service for Your
                Needs</h1>

            <div>

            </div>
        </div>
        {{-- Searching section  --}}

        {{-- values we live by  --}}
        <div class="my-20">

            <div class="flex justify-center items-center flex-wrap gap-6">
                <div class=" viewer-card  w-5/12">
                    <h1 class="title-text-bold-medium text-secondary-950">Building Trust</h1>
                    <hr class=" w-full stroke-secondary-400">
                    <p class="body-text-regular-large text-secondary-800 text-justify">
                        By embodying ethical business practices, we weave trustworthiness and integrity into every
                        connection we forge. This commitment paves the way for enduring and rewarding partnerships
                    </p>
                </div>

                <div class=" viewer-card  w-5/12">
                    <h1 class="title-text-bold-medium text-secondary-950">Building Trust</h1>
                    <hr class=" w-full stroke-secondary-400">
                    <p class="body-text-regular-large text-secondary-800 text-justify">
                        By embodying ethical business practices, we weave trustworthiness and integrity into every
                        connection we forge. This commitment paves the way for enduring and rewarding partnerships
                    </p>
                </div>

                <div class=" viewer-card  w-5/12">
                    <h1 class="title-text-bold-medium text-secondary-950">Building Trust</h1>
                    <hr class=" w-full stroke-secondary-400">
                    <p class="body-text-regular-large text-secondary-800 text-justify">
                        By embodying ethical business practices, we weave trustworthiness and integrity into every
                        connection we forge. This commitment paves the way for enduring and rewarding partnerships
                    </p>
                </div>

                <div class=" viewer-card  w-5/12">
                    <h1 class="title-text-bold-medium text-secondary-950">Building Trust</h1>
                    <hr class=" w-full stroke-secondary-400">
                    <p class="body-text-regular-large text-secondary-800 text-justify">
                        By embodying ethical business practices, we weave trustworthiness and integrity into every
                        connection we forge. This commitment paves the way for enduring and rewarding partnerships
                    </p>
                </div>
            </div>

            <div class="flex justify-center items-center mt-14">
                <button class="button-label px-7 py-3 bg-primary-600 text-white label-text-bold-large "> Get started
                    <span><i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
        </div>

        {{-- values we live by  --}}


        {{-- lets discuss your project --}}


        <div class="w-8/12 text-center m-auto pt-20">
            <h1 class="heading-text-regular-large text-secondary-950">Let's Discuss Your Project!</h1>
            <p class="sub-title-medium-regular text-secondary-600 pt-8">We understand that every business is unique, and
                finding the right digital solution can be challenging. That’s why we offer a FREE first-time consultation to
                help you get started!
            </p>


        </div>

        <form action="">
            <div class="flex w-6/12 flex-col p-6 gap-7 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">


                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your name</label><input
                        type="text" name="" id="" placeholder="e.g Jhon brgke" value="">
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your e-mail</label><input
                        type="email" name="" id="" placeholder="e.g jhonbrgke@gmail.com value="">
                </div>
                <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your question to this
                        booking</label>
                    <textarea rows="5" name="" id="" placeholder="Write your message here"></textarea>
                </div>

                <hr class=" w-full stroke-secondary-400">

                <button class="btn-outline-full"> Submit now <span><i class="fa-solid fa-arrow-right"></i></span>
                </button>

                <p></p>

            </div>
        </form>

    </div>
    {{-- lets discuss your project --}}


    </div>


@endsection

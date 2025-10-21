@extends('frontend.layouts.app')

@section('content')
    <div class="container my-10 md:my-20">
        <div class="flex flex-col justify-center items-center gap-8 md:gap-10">
            <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">Leading the Way in <span class="text-primary-600">Digital Solutions</span></h1>
            <img src="{{ asset('upload/aboutus.png') }}" alt="" class="w-full md:w-10/12 lg:w-8/12">
            <p class="w-full md:w-10/12 lg:w-8/12 sub-title-large-regular text-secondary-900 text-center">
                short story about we're company. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                <br class="hidden md:block">
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially changed.
            </p>
        </div>

        {{-- Our Achievements --}}
        <div class="my-10 md:my-15">
            <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">Our Achievements</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 justify-center gap-6 py-10 md:py-15">
                <div class="flex items-center">
                    <p class="body-text-regular-medium text-secondary-800">We specialize in digital solutions to help your business grow and thrive in the digital landscape.</p>
                </div>
                <div class="hero-card">
                    <h1 class="title-text-bold-medium text-secondary-900">95%</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">Client Satisfaction</h2>
                </div>
                <div class="hero-card">
                    <h1 class="title-text-bold-medium text-secondary-900">80+</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">Projects Completed</h2>
                </div>
                <div class="hero-card">
                    <h1 class="title-text-bold-medium text-secondary-900">17+</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">Industries Served</h2>
                </div>
            </div>
        </div>
        {{-- Our Achievements --}}

        {{-- Our Journey --}}
        <div class="my-10 md:my-15 flex flex-col justify-center items-center gap-8">
            <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">Our Journey</h1>
            <p class="w-full md:w-10/12 sub-title-large-regular text-secondary-900 text-center">Our story is one of passion, innovation, and relentless dedication to delivering exceptional digital solutions. From humble beginnings to a global presence, we have grown into a trusted name in website development, custom software solutions, UI/UX design, digital marketing, and IT services.</p>
            <div class="w-full md:w-10/12 lg:w-8/12 mt-8">
                <div class="relative">
                    <div class="border-l-2 border-primary-600 absolute h-full top-0 left-1/2 -translate-x-1/2"></div>
                    <div class="space-y-12">
                        <!-- Timeline Item -->
                        <div class="flex items-center">
                            <div class="w-1/2 pr-8">
                                <div class="p-6 bg-white rounded-lg border border-secondary-400">
                                    <h2 class="title-text-bold-medium text-secondary-950">2018</h2>
                                    <p class="body-text-regular-medium text-secondary-800 mt-2">Founded with a vision to revolutionize the digital landscape, our agency started its journey with a small team of passionate innovators.</p>
                                </div>
                            </div>
                            <div class="w-6 h-6 bg-primary-600 rounded-full absolute left-1/2 -translate-x-1/2"></div>
                            <div class="w-1/2"></div>
                        </div>
                        <!-- Timeline Item -->
                        <div class="flex items-center">
                            <div class="w-1/2"></div>
                            <div class="w-6 h-6 bg-primary-600 rounded-full absolute left-1/2 -translate-x-1/2"></div>
                            <div class="w-1/2 pl-8">
                                <div class="p-6 bg-white rounded-lg border border-secondary-400">
                                    <h2 class="title-text-bold-medium text-secondary-950">2020</h2>
                                    <p class="body-text-regular-medium text-secondary-800 mt-2">Expanded our services to include custom software development and UI/UX design, helping businesses create seamless digital experiences.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Timeline Item -->
                        <div class="flex items-center">
                            <div class="w-1/2 pr-8">
                                <div class="p-6 bg-white rounded-lg border border-secondary-400">
                                    <h2 class="title-text-bold-medium text-secondary-950">2022</h2>
                                    <p class="body-text-regular-medium text-secondary-800 mt-2">Achieved a global presence by serving clients from over 17 countries, delivering innovative solutions that drive success worldwide.</p>
                                </div>
                            </div>
                            <div class="w-6 h-6 bg-primary-600 rounded-full absolute left-1/2 -translate-x-1/2"></div>
                            <div class="w-1/2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Our Journey --}}

        {{-- Our Team --}}
        <div class="my-10 md:my-15 flex flex-col justify-center items-center gap-8">
            <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">Our Team</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                @foreach ($teams as $team)
                    <div class="flex flex-col gap-4">
                        <img class="rounded-md" src="{{ asset('upload/teams/' . $team->avatar) }}" alt="{{ $team->name }}">
                        <div>
                            <h1 class="title-text-bold-medium text-secondary-950">{{ $team->name }}</h1>
                            <p class="body-text-bold-large text-secondary-800">{{ $team->designation->title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Our Team --}}

        {{-- Client Reviews --}}
        <div class="my-10 md:my-20">
            <h1 class="text-center heading-text-regular-medium text-3xl md:text-4xl">Client Reviews</h1>
            <div class="flex flex-col md:flex-row justify-between items-center my-8 gap-5">
                <p class="body-text-regular-medium text-secondary-800 w-full md:w-6/12">Hear from our satisfied clients! Their feedback highlights our commitment to delivering exceptional digital solutions that drive results and build trust.</p>
                <div class="button-group flex gap-4">
                    <button class="button-label w-9 px-3 py-2 border-secondary-600">
                        <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i>
                    </button>
                    <button class="button-label w-9 px-3 py-2 border-secondary-600">
                        <i class="w-5 h-5 fa-solid fa-circle-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400">
                    <div class="flex gap-1 item-center justify-center">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="body-text-regular-large text-secondary-800">Working with this agency has been a game-changer for our business. They revamped our website and managed our digital marketing campaigns, resulting in a 60% increase in leads.</p>
                    <hr class="stroke-secondary-400">
                    <div class="flex items-center gap-4">
                        <span><i class="text-6xl fa-regular fa-circle-user"></i></span>
                        <div>
                            <h1 class="sub-title-large-bold text-secondary-950">Harper Jackson</h1>
                            <p class="body-text-regular-large text-secondary-800">Founder & CEO & Decode agency</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400">
                    <div class="flex gap-1 item-center justify-center">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="body-text-regular-large text-secondary-800">Working with this agency has been a game-changer for our business. They revamped our website and managed our digital marketing campaigns, resulting in a 60% increase in leads.</p>
                    <hr class="stroke-secondary-400">
                    <div class="flex items-center gap-4">
                        <span><i class="text-6xl fa-regular fa-circle-user"></i></span>
                        <div>
                            <h1 class="sub-title-large-bold text-secondary-950">Harper Jackson</h1>
                            <p class="body-text-regular-large text-secondary-800">Founder & CEO & Decode agency</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400">
                    <div class="flex gap-1 item-center justify-center">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="body-text-regular-large text-secondary-800">Working with this agency has been a game-changer for our business. They revamped our website and managed our digital marketing campaigns, resulting in a 60% increase in leads.</p>
                    <hr class="stroke-secondary-400">
                    <div class="flex items-center gap-4">
                        <span><i class="text-6xl fa-regular fa-circle-user"></i></span>
                        <div>
                            <h1 class="sub-title-large-bold text-secondary-950">Harper Jackson</h1>
                            <p class="body-text-regular-large text-secondary-800">Founder & CEO & Decode agency</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Client Reviews --}}

        {{-- FaQ --}}
        <x-frontend.faq />
        {{-- FaQ --}}

    </div>
@endsection

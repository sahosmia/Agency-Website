@extends('frontend.layouts.app')

@section('content')
<div class="container my-10 md:my-20">
    <div class="flex flex-col justify-center items-center gap-8 md:gap-10">
        <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">Leading the Way in
            <span class="text-primary-600">Digital Solutions</span>
        </h1>
        <img src="{{ asset('upload/aboutus.png') }}" alt="" class="w-full md:w-10/12 lg:w-8/12">
        <p class="w-full md:w-10/12 lg:w-8/12 sub-title-large-regular text-secondary-900 text-center">
            short story about we're company. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            <br class="hidden md:block">
            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
            not only five centuries, but also the leap into electronic typesetting, remaining essentially changed.
        </p>
    </div>

    {{-- Our Achievements --}}
    <div class="my-10 md:my-15 w-full md:w-10/12 m-auto">
        <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">Our Achievements</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 justify-center gap-6 py-10 md:py-15">
            <div class="flex items-center">
                <p class="body-text-regular-medium text-secondary-800">We specialize in digital solutions to help your
                    business grow and thrive in the digital landscape.</p>
            </div>
            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900">95%</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Satisfied Customers</h2>
                <p class="body-text-regular-small text-secondary-800">We are committed to providing the best solutions
                    to
                    build happy relationships with our customers.</p>
            </div>
            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900">80+</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Projects Completed</h2>
                <p class="body-text-regular-small text-secondary-800">We are committed to providing the best solutions
                    to
                    build happy relationships with our customers.</p>
            </div>
            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900">17+</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Industries Served</h2>
                <p class="body-text-regular-small text-secondary-800">We are committed to providing the best solutions
                    to
                    build happy relationships with our customers.</p>
            </div>
            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900">450+</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Customized Solutions Delivered</h2>
                <p class="body-text-regular-small text-secondary-800">We are committed to providing the best solutions
                    to
                    build happy relationships with our customers.</p>
            </div>
            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900">200+</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Exceptional In-house Employees</h2>
                <p class="body-text-regular-small text-secondary-800">We are committed to providing the best solutions
                    to
                    build happy relationships with our customers.</p>
            </div>
            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900">17+</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Industries Served</h2>
                <p class="body-text-regular-small text-secondary-800">We are committed to providing the best solutions
                    to
                    build happy relationships with our customers.</p>
            </div>
            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900">12+</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Services served</h2>
                <p class="body-text-regular-small text-secondary-800">We are committed to providing the best solutions
                    to
                    build happy relationships with our customers.</p>
            </div>
        </div>
    </div>
    {{-- Our Achievements --}}

    {{-- Our Journey --}}
 
    {{-- Our Journey --}}

   


<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 text-center relative">
        <!-- Heading -->
        <h2 class="text-3xl font-semibold text-gray-900 mb-4">Our Journey</h2>
        <p class="text-gray-600 max-w-3xl mx-auto mb-16">
            Our story is one of passion, innovation, and relentless dedication to delivering exceptional digital
            solutions.
        </p>

        <!-- Timeline Wrapper -->
        <div class="relative">
            <!-- Center Line -->
            <div class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-300"></div>

            <div class="relative flex justify-between items-center">
                <!-- Timeline Item -->
                <div class="relative w-1/5">
                    <!-- Card (Top) -->
                    <div
                        class="absolute -top-44 left-1/2 -translate-x-1/2 bg-white border rounded-xl shadow-sm p-5 w-64">
                        <h3 class="font-semibold text-gray-900 mb-1">The Beginning</h3>
                        <p class="text-sm text-gray-600">
                            Every great journey starts with a vision to help businesses embrace digital transformation.
                        </p>
                    </div>
                    <!-- Circle -->
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center bg-white border-2 border-gray-800 rounded-full text-gray-800 font-medium">
                        2016
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="relative w-1/5">
                    <!-- Card (Bottom) -->
                    <div
                        class="absolute top-20 left-1/2 -translate-x-1/2 bg-white border rounded-xl shadow-sm p-5 w-64">
                        <h3 class="font-semibold text-gray-900 mb-1">Growth & Expansion</h3>
                        <p class="text-sm text-gray-600">
                            Expanded services to include SEO, digital marketing, and mobile app development.
                        </p>
                    </div>
                    <!-- Circle -->
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center bg-white border-2 border-gray-800 rounded-full text-gray-800 font-medium">
                        2017
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="relative w-1/5">
                    <!-- Card (Top) -->
                    <div
                        class="absolute -top-44 left-1/2 -translate-x-1/2 bg-white border rounded-xl shadow-sm p-5 w-64">
                        <h3 class="font-semibold text-gray-900 mb-1">Going Global</h3>
                        <p class="text-sm text-gray-600">
                            Expanded into international markets, serving businesses worldwide.
                        </p>
                    </div>
                    <!-- Circle -->
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center bg-white border-2 border-gray-800 rounded-full text-gray-800 font-medium">
                        2018
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="relative w-1/5">
                    <!-- Card (Bottom) -->
                    <div
                        class="absolute top-20 left-1/2 -translate-x-1/2 bg-white border rounded-xl shadow-sm p-5 w-64">
                        <h3 class="font-semibold text-gray-900 mb-1">Innovation & Excellence</h3>
                        <p class="text-sm text-gray-600">
                            Became a leader in digital transformation with 100+ global clients.
                        </p>
                    </div>
                    <!-- Circle -->
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center bg-white border-2 border-gray-800 rounded-full text-gray-800 font-medium">
                        2022
                    </div>
                </div>

                <!-- Timeline Item -->
                <div class="relative w-1/5">
                    <!-- Card (Top) -->
                    <div
                        class="absolute -top-44 left-1/2 -translate-x-1/2 bg-white border rounded-xl shadow-sm p-5 w-64">
                        <h3 class="font-semibold text-gray-900 mb-1">The Future</h3>
                        <p class="text-sm text-gray-600">
                            Focused on continuous growth and delivering impactful digital solutions.
                        </p>
                    </div>
                    <!-- Circle -->
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center bg-white border-2 border-gray-800 rounded-full text-gray-800 font-medium">
                        2025
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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
            <p class="body-text-regular-medium text-secondary-800 w-full md:w-6/12">Hear from our satisfied clients!
                Their feedback highlights our commitment to delivering exceptional digital solutions that drive results
                and build trust.</p>
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
                <p class="body-text-regular-large text-secondary-800">Working with this agency has been a game-changer
                    for our business. They revamped our website and managed our digital marketing campaigns, resulting
                    in a 60% increase in leads.</p>
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
                <p class="body-text-regular-large text-secondary-800">Working with this agency has been a game-changer
                    for our business. They revamped our website and managed our digital marketing campaigns, resulting
                    in a 60% increase in leads.</p>
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
                <p class="body-text-regular-large text-secondary-800">Working with this agency has been a game-changer
                    for our business. They revamped our website and managed our digital marketing campaigns, resulting
                    in a 60% increase in leads.</p>
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

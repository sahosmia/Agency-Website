@extends('frontend.layouts.app')
@section('title', $aboutSettings['page_title'] ?? 'About Us')

@section('content')
    <div class="container my-10 md:my-20">
        <div class="flex flex-col justify-center items-center gap-8 md:gap-10">
        <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">{{ $aboutSettings['about_us_title'] ?? '' }}</h1>
            <img src="{{ asset('storage/' . ($aboutSettings['about_us_image'] ?? '')) }}" alt="" class="w-full md:w-10/12 lg:w-8/12">
            <p class="w-full md:w-10/12 lg:w-8/12 sub-title-large-regular text-secondary-900 text-center">
                {{ $aboutSettings['about_us_description'] ?? '' }}
            </p>
        </div>

        {{-- Our Achievements --}}
        <div class="my-10 md:my-15">
            <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">{{ $aboutSettings['achievement_title'] ?? '' }}</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 justify-center gap-6 py-10 md:py-15">
                <div class="flex items-center">
                    <p class="body-text-regular-medium text-secondary-800">{{ $aboutSettings['achievement_description'] ?? '' }}</p>
                </div>
                <div class="hero-card">
                    <h1 class="title-text-bold-medium text-secondary-900">{{ $aboutSettings['achievement_one_value'] ?? '' }}</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">{{ $aboutSettings['achievement_one_title'] ?? '' }}</h2>
                </div>
                <div class="hero-card">
                    <h1 class="title-text-bold-medium text-secondary-900">{{ $aboutSettings['achievement_two_value'] ?? '' }}</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">{{ $aboutSettings['achievement_two_title'] ?? '' }}</h2>
                </div>
                <div class="hero-card">
                    <h1 class="title-text-bold-medium text-secondary-900">{{ $aboutSettings['achievement_three_value'] ?? '' }}</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">{{ $aboutSettings['achievement_three_title'] ?? '' }}</h2>
                </div>
            </div>
        </div>
        {{-- Our Achievements --}}

        {{-- Our Journey --}}
        <div class="my-10 md:my-15 flex flex-col justify-center items-center gap-8">
            <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">{{ $aboutSettings['journey_title'] ?? '' }}</h1>
            <p class="w-full md:w-10/12 sub-title-large-regular text-secondary-900 text-center">{{ $aboutSettings['journey_description'] ?? '' }}</p>
            <div class="w-full md:w-10/12 lg:w-8/12 mt-8">
                <div class="relative">
                    <div class="border-l-2 border-primary-600 absolute h-full top-0 left-1/2 -translate-x-1/2"></div>
                    <div class="space-y-12">
                        <!-- Timeline Item -->
                        <div class="flex items-center">
                            <div class="w-1/2 pr-8">
                                <div class="p-6 bg-white rounded-lg border border-secondary-400">
                                    <h2 class="title-text-bold-medium text-secondary-950">{{ $aboutSettings['journey_one_title'] ?? '' }}</h2>
                                    <p class="body-text-regular-medium text-secondary-800 mt-2">{{ $aboutSettings['journey_one_description'] ?? '' }}</p>
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
                                    <h2 class="title-text-bold-medium text-secondary-950">{{ $aboutSettings['journey_two_title'] ?? '' }}</h2>
                                    <p class="body-text-regular-medium text-secondary-800 mt-2">{{ $aboutSettings['journey_two_description'] ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Timeline Item -->
                        <div class="flex items-center">
                            <div class="w-1/2 pr-8">
                                <div class="p-6 bg-white rounded-lg border border-secondary-400">
                                    <h2 class="title-text-bold-medium text-secondary-950">{{ $aboutSettings['journey_three_title'] ?? '' }}</h2>
                                    <p class="body-text-regular-medium text-secondary-800 mt-2">{{ $aboutSettings['journey_three_description'] ?? '' }}</p>
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
            <h1 class="heading-text-regular-large text-secondary-950 text-center text-3xl md:text-5xl">{{ $aboutSettings['team_title'] ?? '' }}</h1>
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

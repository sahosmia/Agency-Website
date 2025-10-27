@extends('frontend.layouts.app')
@section('title', $homeSettings['page_title'] ?? 'Home')

@section('content')

<div class="container">
    <div class="text-center py-10 md:py-20">
        <h1 class="heading-text-regular-large text-secondary-950 text-2xl md:text-4xl lg:text-5xl">{{ $homeSettings['hero_title'] ?? '' }} <br> <span class="heading-text-regular-large text-secondary-950 text-2xl md:text-4xl lg:text-5xl">{{ $homeSettings['hero_subtitle'] ?? '' }}</span></h1>

        <div class="flex justify-center items-center mt-8 md:mt-14">
            <button class="button-label px-5 py-2 md:px-7 md:py-3 bg-primary-600 text-white label-text-bold-large">{{ $homeSettings['hero_button_text'] ?? '' }}
                <span><i class="fa-solid fa-arrow-right"></i></span></button>
        </div>
    </div>

    {{-- hero card --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 justify-center gap-6 py-10 md:py-15">
        <div class="flex items-center">
            <p class="body-text-regular-medium text-secondary-800">{{ $homeSettings['hero_card_description'] ?? '' }}</p>
        </div>
        <div class="hero-card">
            <h2 class="title-text-bold-medium text-secondary-900">{{ $homeSettings['hero_card_one_value'] ?? '' }}</h2>
            <h3 class="sub-title-large-regular text-secondary-900">{{ $homeSettings['hero_card_one_title'] ?? '' }}</h3>
            <p class="body-text-regular-small text-secondary-800">{{ $homeSettings['hero_card_one_description'] ?? '' }}</p>
        </div>
        <div class="hero-card">
            <h2 class="title-text-bold-medium text-secondary-900">{{ $homeSettings['hero_card_two_value'] ?? '' }}</h2>
            <h3 class="sub-title-large-regular text-secondary-900">{{ $homeSettings['hero_card_two_title'] ?? '' }}</h3>
            <p class="body-text-regular-small text-secondary-800">{{ $homeSettings['hero_card_two_description'] ?? '' }}</p>
        </div>
        <div class="hero-card">
            <h2 class="title-text-bold-medium text-secondary-900">{{ $homeSettings['hero_card_three_value'] ?? '' }}</h2>
            <h3 class="sub-title-large-regular text-secondary-900">{{ $homeSettings['hero_card_three_title'] ?? '' }}</h3>
            <p class="body-text-regular-small text-secondary-800">{{ $homeSettings['hero_card_three_description'] ?? '' }}</p>
        </div>
    </div>
    {{-- hero card --}}

    {{-- reviewer card --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 py-10 md:py-20">
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
                <p class="title-text-bold-medium text-secondary-800 text-center">5/5</p>
            </div>
        </div>
        <div class="reviewer-card">
            <img src="{{ asset('upload/reviewer/Frame 99.svg') }}" alt="">
            <div>
                <div class="flex gap-1">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p class="title-text-bold-medium text-secondary-800 text-center">5/5</p>
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
                <p class="title-text-bold-medium text-secondary-800 text-center">5/5</p>
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
                    <i class="fa-solid fa-star-half-alt"></i>
                </div>
                <p class="title-text-bold-medium text-secondary-800 text-center">4.9/5</p>
            </div>
        </div>
    </div>
    {{-- reviewer card --}}

    {{-- Searching section start --}}
    <div class="pt-10 md:pt-15 pb-10 md:pb-20">
        <h2 class="text-center heading-text-regular-medium text-secondary-900 text-2xl md:text-3xl">{{ $homeSettings['search_title'] ?? '' }}</h2>
        <div
            class="flex flex-col sm:flex-row w-full sm:w-8/12 md:w-6/12 m-auto items-center mt-8 p-2 sm:p-4 gap-2 border border-secondary-400 rounded-lg">
            <input type="text" name="search" value="{{ request('search') }}"
                class="label-text-regular-large w-full sm:flex-1 p-2 border-none ring-0 outline-0"
                placeholder="What's Your Need?">
            <button type="submit"
                class="flex items-center justify-center text-white bg-primary-600 rounded-md px-3 py-2 gap-2 w-full sm:w-auto">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <span class="text-lg font-semibold">Search</span>
            </button>
        </div>
    </div>
    {{-- Searching section end --}}

    {{-- values we live by start --}}
    <div class="pt-10 md:pt-15 pb-10 md:pb-20">
        <h2 class="text-center heading-text-regular-medium text-secondary-900 text-2xl md:text-3xl">{{ $homeSettings['values_title'] ?? '' }}
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 justify-center items-center flex-wrap gap-6 mt-8">
            @foreach ($values as $value)
                <div class="viewer-card">
                    <h3 class="title-text-bold-medium text-secondary-950">{{ $value->title }}</h3>
                    <hr class="w-full h-px bg-secondary-400 border-0">
                    <p class="body-text-regular-large text-secondary-800 text-justify">
                        {{ $value->description }}
                    </p>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center items-center mt-14">
            <button class="button-label px-7 py-3 bg-primary-600 text-white label-text-bold-large">Get started <span><i
                        class="fa-solid fa-arrow-right"></i></span></button>
        </div>
    </div>
    {{-- values we live by end --}}

    {{-- lets discuss your project start --}}
    <div class="w-full md:w-10/12 lg:w-9/12 m-auto pt-10 md:pt-15 pb-10 md:pb-20">
        <h2 class="heading-text-regular-large text-secondary-950 text-center text-2xl md:text-4xl">Let's Discuss Your
            Project!</h2>
        <p class="sub-title-medium-regular text-secondary-600 pt-8 text-center w-full md:w-10/12 lg:w-8/12 mx-auto">We
            understand that every business is unique, and finding the right digital solution can be challenging. That’s
            why we offer a FREE first-time consultation to help you get started!</p>

        <div class="mt-8 border border-secondary-400 rounded-2xl p-4 sm:p-6">
            <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
                <h3 class="title-text-bold-medium text-secondary-900 mb-4 sm:mb-0">US Appointment</h3>
                <div class="flex items-center gap-4">
                    <button class="text-secondary-600 hover:text-primary-600"><i
                            class="fas fa-chevron-left"></i></button>
                    <span>October 2024</span>
                    <button class="text-secondary-600 hover:text-primary-600"><i
                            class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-7 gap-4">
                <!-- Day 1 -->
                <div class="text-center">
                    <p class="body-text-bold-medium text-secondary-900">Mon</p>
                    <p class="title-text-bold-medium text-secondary-900 mt-2">8</p>
                    <div class="mt-4 space-y-2">
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">09:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">10:00
                            AM</button>
                        <button
                            class="w-full py-2 bg-secondary-200 text-secondary-500 rounded-md cursor-not-allowed text-sm">11:00
                            AM</button>
                        <p class="text-xs text-secondary-500">Booked</p>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">01:00
                            PM</button>
                    </div>
                </div>
                <!-- Day 2 -->
                <div class="text-center">
                    <p class="body-text-bold-medium text-secondary-900">Tue</p>
                    <p class="title-text-bold-medium text-secondary-900 mt-2">9</p>
                    <div class="mt-4 space-y-2">
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">09:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">10:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">11:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">01:00
                            PM</button>
                    </div>
                </div>
                <!-- Day 3 -->
                <div class="text-center">
                    <p class="body-text-bold-medium text-secondary-900">Wed</p>
                    <p class="title-text-bold-medium text-secondary-900 mt-2">10</p>
                    <div class="mt-4 space-y-2">
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">09:00
                            AM</button>
                        <button
                            class="w-full py-2 bg-secondary-200 text-secondary-500 rounded-md cursor-not-allowed text-sm">10:00
                            AM</button>
                        <p class="text-xs text-secondary-500">Booked</p>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">11:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">01:00
                            PM</button>
                    </div>
                </div>
                <!-- Day 4 -->
                <div class="text-center">
                    <p class="body-text-bold-medium text-secondary-900">Thu</p>
                    <p class="title-text-bold-medium text-secondary-900 mt-2">11</p>
                    <div class="mt-4 space-y-2">
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">09:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">10:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">11:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">01:00
                            PM</button>
                    </div>
                </div>
                <!-- Day 5 -->
                <div class="text-center">
                    <p class="body-text-bold-medium text-secondary-900">Fri</p>
                    <p class="title-text-bold-medium text-secondary-900 mt-2">12</p>
                    <div class="mt-4 space-y-2">
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">09:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">10:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">11:00
                            AM</button>
                        <button class="w-full py-2 border border-primary-600 text-primary-600 rounded-md text-sm">01:00
                            PM</button>
                    </div>
                </div>
                <!-- Day 6 -->
                <div class="text-center">
                    <p class="body-text-bold-medium text-secondary-900">Sat</p>
                    <p class="title-text-bold-medium text-secondary-900 mt-2">13</p>
                    <div class="mt-4 space-y-2">
                        <button
                            class="w-full py-2 bg-secondary-200 text-secondary-500 rounded-md cursor-not-allowed text-sm">Not
                            Available</button>
                    </div>
                </div>
                <!-- Day 7 -->
                <div class="text-center">
                    <p class="body-text-bold-medium text-secondary-900">Sun</p>
                    <p class="title-text-bold-medium text-secondary-900 mt-2">14</p>
                    <div class="mt-4 space-y-2">
                        <button
                            class="w-full py-2 bg-secondary-200 text-secondary-500 rounded-md cursor-not-allowed text-sm">Not
                            Available</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- lets discuss your project end --}}

    {{-- Our least projects start --}}
    <div class="slider-container mt-10 md:mt-15 mb-10 md:mb-20 overflow-hidden">
        <h2 class="text-center heading-text-regular-medium text-2xl md:text-3xl">{{ $homeSettings['projects_title'] ?? '' }}</h2>
        <div class="flex flex-col md:flex-row justify-between my-8 gap-5">
            <p class="body-text-regular-medium text-secondary-800 w-full md:w-1/2">{{ $homeSettings['projects_description'] ?? '' }}</p>
            <div class="button-group flex justify-center md:justify-end gap-4">
                <button class="prev-btn-project button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                        class="w-5 h-5 fa-solid fa-circle-chevron-left"></i></button>
                <button class="next-btn-project button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                        class="w-5 h-5 fa-solid fa-circle-chevron-right"></i></button>
            </div>
        </div>

        <div class="project-container flex gap-10">
            @forelse ($projects as $project)
            <div class="project-item">
                <x-frontend.project-card :project="$project" />
            </div>
            @empty
            <div class="w-full text-center py-12">
                <p class="text-secondary-600">No projects found.</p>
            </div>
            @endforelse
        </div>
        <div class="flex justify-center items-center mt-14">
            <a href="{{ route('projects') }}" class="button-label px-7 py-3 label-text-bold-large">Explore
                More</a>
        </div>
    </div>
    {{-- Our least projects end --}}

    {{-- our services --}}
    <div class="slider-container mt-10 md:mt-15 mb-10 md:mb-20 overflow-hidden">
        <h2 class="text-center heading-text-regular-medium text-2xl md:text-3xl">{{ $homeSettings['services_title'] ?? '' }}</h2>
        <div class="flex flex-col md:flex-row justify-between my-8 gap-5">
            <p class="body-text-regular-medium text-secondary-800 w-full md:w-1/2">{{ $homeSettings['services_description'] ?? '' }}</p>
            <div class="button-group flex justify-center md:justify-end gap-4">
                <button class="prev-btn-service button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                        class="w-5 h-5 fa-solid fa-circle-chevron-left"></i></button>
                <button class="next-btn-service button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                        class="w-5 h-5 fa-solid fa-circle-chevron-right"></i></button>
            </div>
        </div>

        <div class="service-container flex gap-6">
            @for ($i = 0; $i < 4; $i++) <div class="service-item">
                <div class="flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400">
                    <div class="w-full">
                        <img class="rounded w-full" src="{{ asset('upload/service-img.png') }}" alt="">
                    </div>
                    <div class="gap-2">
                        <h3 class="title-text-bold-medium text-secondary-600">Web Design & Development</h3>
                        <p class="body-text-regular-medium text-secondary-600">
                            We create visually stunning and responsive websites tailored to your brand, ensuring
                            seamless user experiences and high performance across all devices.
                        </p>
                    </div>
                    <div class="w-full flex justify-center mt-8">
                        <button class="button-label px-4 py-2">See plan</button>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    <div class="flex justify-center items-center mt-14">
        <a href="{{ route('services') }}" class="button-label px-7 py-3 label-text-bold-large">See all
            service</a>
    </div>
</div>
{{-- our services --}}

{{-- Software's Solution --}}
<div class="slider-container mt-10 md:mt-15 mb-10 md:mb-20 overflow-hidden">
    <h2 class="text-center heading-text-regular-medium text-2xl md:text-3xl">{{ $homeSettings['software_title'] ?? '' }}</h2>
    <div class="flex flex-col md:flex-row justify-between my-8 gap-5">
        <p class="body-text-regular-medium text-secondary-800 w-full md:w-1/2">{{ $homeSettings['software_description'] ?? '' }}</p>
        <div class="button-group flex justify-center md:justify-end gap-4">
            <button class="prev-btn-software button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                    class="w-5 h-5 fa-solid fa-circle-chevron-left"></i></button>
            <button class="next-btn-software button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                    class="w-5 h-5 fa-solid fa-circle-chevron-right"></i></button>
        </div>
    </div>

    <div class="software-container flex gap-6">
        @for ($i = 0; $i < 4; $i++) <div class="softwer-item">
            <div class="flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400">
                <div class="w-full">
                    <img class="rounded w-full" src="{{ asset('upload/softwer-img.png') }}" alt="">
                </div>
                <div class="gap-2">
                    <h3 class="title-text-bold-medium text-secondary-600">Custom made Software for Your Needs</h3>
                    <p class="body-text-regular-medium text-secondary-600">
                        Our custom software development services are designed to create solutions that align perfectly
                        with your business objectives. Whether you need to enhance efficiency, improve customer
                        experiences, or scale operations, we’re here to deliver.
                    </p>
                </div>
                <div class="w-full flex justify-center mt-8">
                    <button class="button-label px-4 py-2">See plan</button>
                </div>
            </div>
    </div>
    @endfor
</div>
<div class="flex justify-center items-center mt-14">
    <a href="{{ route('softwares') }}" class="button-label px-7 py-3 label-text-bold-large">See details</a>
</div>
</div>
{{-- Software's Solution --}}

{{-- Working process start --}}
<div class="mt-10 md:mt-15 mb-10 md:mb-20">
    <h2 class="heading-text-regular-medium text-center text-secondary-900 text-2xl md:text-3xl">{{ $homeSettings['working_process_title'] ?? '' }}</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
        @foreach ($working_processes as $process)
            <div class="working-process-card">
                <div class="w-12 h-12 bg-primary-100 rounded-full flex justify-center items-center">
                    <span class="title-text-bold-medium text-primary-600">{{ $loop->iteration }}</span>
                </div>
                <h3 class="title-text-bold-medium text-secondary-950 mt-4">{{ $process->title }}</h3>
                <p class="body-text-regular-medium text-secondary-600 mt-2">{{ $process->description }}</p>
            </div>
        @endforeach
    </div>
</div>
{{-- Working process end --}}

{{-- Contact us start --}}
<div class="mt-10 md:mt-15 mb-10 md:mb-20">
    <h2 class="heading-text-regular-medium text-center text-secondary-900 mb-8 text-2xl md:text-3xl">{{ $homeSettings['contact_title'] ?? '' }}</h2>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="flex flex-col gap-6">
            <div>
                <p class="body-text-regular-medium text-secondary-600">Email</p>
                <p class="body-text-bold-large text-secondary-900">{{ $contactSettings['contact_email'] ?? '' }}</p>
            </div>
            <div>
                <p class="body-text-regular-medium text-secondary-600">Phone</p>
                <p class="body-text-bold-large text-secondary-900">{{ $contactSettings['contact_phone'] ?? '' }}</p>
            </div>
            <div>
                <p class="body-text-regular-medium text-secondary-600">Office location</p>
                <p class="body-text-bold-large text-secondary-900">{{ $contactSettings['contact_address'] ?? '' }}</p>
            </div>
        </div>
        <div>
            <form action="" class="p-6 border border-secondary-400 rounded-2xl space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="inpul-label" for="name">Your name</label>
                        <input type="text" id="name" placeholder="e.g Jhon brgke" class="w-full">
                    </div>
                    <div>
                        <label class="inpul-label" for="email">Your e-mail</label>
                        <input type="email" id="email" placeholder="e.g jhonbrgke@gmail.com" class="w-full">
                    </div>
                </div>

                <div>
                    <label class="inpul-label">What services you want</label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                        <label class="flex items-center"><input type="checkbox" class="mr-2"> Web Design &
                            Development</label>
                        <label class="flex items-center"><input type="checkbox" class="mr-2"> Mobile App
                            Development</label>
                        <label class="flex items-center"><input type="checkbox" class="mr-2"> UX/UI Design</label>
                        <label class="flex items-center"><input type="checkbox" class="mr-2"> Digital Marketing &
                            SEO</label>
                    </div>
                </div>

                <div>
                    <label class="inpul-label">What software's you want</label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                        <label class="flex items-center"><input type="checkbox" class="mr-2"> Custom Made
                            Software</label>
                        <label class="flex items-center"><input type="checkbox" class="mr-2"> Restaurant
                            Management</label>
                        <label class="flex items-center"><input type="checkbox" class="mr-2"> School Management</label>
                        <label class="flex items-center"><input type="checkbox" class="mr-2"> NGO Management</label>
                    </div>
                </div>

                <div>
                    <label class="inpul-label" for="description">Project description</label>
                    <textarea id="description" rows="4" placeholder="Write your message here" class="w-full"></textarea>
                </div>

                <hr class="w-full h-px bg-secondary-400 border-0">
                <button class="btn-outline-full w-full">Submit now <span><i
                            class="fa-solid fa-arrow-right"></i></span></button>
            </form>
        </div>
    </div>
</div>
{{-- Contact us end --}}

{{-- Companies who trust us start --}}
<div class="mt-10 md:mt-15 mb-10 md:mb-20">
    <h2 class="heading-text-regular-medium text-center text-secondary-900 text-2xl md:text-3xl">Companies who Trust Us
    </h2>
    <p class="sub-title-medium-regular text-center text-secondary-600 w-full md:w-8/12 lg:w-7/12 mx-auto mt-4">We are
        proud to serve businesses and organizations across multiple countries and industries. We helped clients
        worldwide achieve success in the digital landscape.</p>
    <div class="flex flex-wrap justify-center items-center gap-10 sm:gap-20 mt-8">
        <img src="{{ asset('upload/fiverr.svg') }}" alt="Fiverr">
        <img src="{{ asset('upload/envato.svg') }}" alt="Envato">
        <img src="{{ asset('upload/upwork-2.svg') }}" alt="Upwork">
        <img src="{{ asset('upload/peopleperhour.svg') }}" alt="PeoplePerHour">
    </div>
</div>
{{-- Companies who trust us end --}}

{{-- Clients around the world start --}}
<div class="mt-10 md:mt-15 mb-10 md:mb-20">
    <h2 class="heading-text-regular-medium text-center text-secondary-900 text-2xl md:text-3xl">Clients Around the World
    </h2>
    <p class="sub-title-medium-regular text-center text-secondary-600 w-full md:w-8/12 lg:w-7/12 mx-auto mt-4">We are
        proud to serve businesses and organizations across multiple countries and industries. We helped clients
        worldwide achieve success in the digital landscape.</p>
    <div class="flex flex-wrap justify-center items-center gap-10 mt-8">
        <img src="{{ asset('upload/Bangladesh Flag.svg') }}" alt="Bangladesh">
        <img src="{{ asset('upload/usa-flag.svg') }}" alt="USA">
        <img src="{{ asset('upload/canada-flag.svg') }}" alt="Canada">
        <img src="{{ asset('upload/uk-flag.svg') }}" alt="UK">
        <img src="{{ asset('upload/australia-flag.svg') }}" alt="Australia">
    </div>
</div>
{{-- Clients around the world end --}}

{{-- Client Reviews start --}}
<div class="slider-container mt-10 md:mt-20 mb-10 md:mb-20 overflow-hidden">
    <h2 class="heading-text-regular-medium text-center text-secondary-900 text-2xl md:text-3xl">{{ $homeSettings['client_reviews_title'] ?? '' }}</h2>
    <div class="flex flex-col md:flex-row justify-between my-8 gap-5">
        <p class="body-text-regular-medium text-secondary-800 w-full md:w-1/2">{{ $homeSettings['client_reviews_description'] ?? '' }}</p>
        <div class="button-group flex justify-center md:justify-end gap-4">
            <button
                class="prev-btn-client-reviews button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                    class="w-5 h-5 fa-solid fa-circle-chevron-left"></i></button>
            <button
                class="next-btn-client-reviews button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                    class="w-5 h-5 fa-solid fa-circle-chevron-right"></i></button>
        </div>
    </div>

    <div class="client-reviews-container flex gap-6">
        @foreach ($client_reviews as $client_review)
        <div class="client-reviews-item">
            <x-frontend.client-review :review="$client_review" />
        </div>
        @endforeach
    </div>
</div>
{{-- Client Reviews end --}}

{{-- FAQ start --}}
<div class="mt-10 md:mt-15 mb-10 md:mb-20" x-data="{ open: 0 }">
    <h2 class="heading-text-regular-medium text-center text-secondary-900 text-2xl md:text-3xl">{{ $homeSettings['faq_title'] ?? '' }}</h2>
    <div class="mt-8 space-y-4">
        @foreach ($faqs as $faq)
            <div class="border border-secondary-400 rounded-lg">
                <div class="flex justify-between items-center p-4 cursor-pointer" @click="open = (open === {{ $loop->iteration }} ? 0 : {{ $loop->iteration }})">
                    <h3 class="title-text-bold-medium text-secondary-950">{{ $faq->question }}</h3>
                    <i class="fa-solid" :class="open === {{ $loop->iteration }} ? 'fa-minus' : 'fa-plus'"></i>
                </div>
                <div x-show="open === {{ $loop->iteration }}" class="p-4 border-t border-secondary-400"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2">
                    <p class="body-text-regular-medium text-secondary-600">{{ $faq->answer }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
{{-- FAQ end --}}

{{-- Articles start --}}
<div class="slider-container mt-10 md:mt-15 mb-10 md:mb-20 overflow-hidden">
    <h2 class="heading-text-regular-medium text-center text-secondary-900 text-2xl md:text-3xl">{{ $homeSettings['articles_title'] ?? '' }}</h2>
    <div class="flex flex-col md:flex-row justify-between my-8 gap-5">
        <p class="body-text-regular-medium text-secondary-800 w-full md:w-1/2">{{ $homeSettings['articles_description'] ?? '' }}</p>
        <div class="button-group flex justify-center md:justify-end gap-4">
            <button class="prev-btn-article button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                    class="w-5 h-5 fa-solid fa-circle-chevron-left"></i></button>
            <button class="next-btn-article button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"><i
                    class="w-5 h-5 fa-solid fa-circle-chevron-right"></i></button>
        </div>
    </div>

    <div class="articles-container flex gap-10">
        @foreach ($articles as $article_data)
        <div class="article-item">
            <img class="max-h-72 w-full object-cover rounded-xl self-start"
                src="{{ asset('upload/articles/card img.png') }}" alt="Article Image" />
            <div class="mt-4">
                <button
                    class="px-4 py-2 border rounded-full border-secondary-200 label-text-regular-small text-secondary-800">{{
                    $article_data->article_category->title }}</button>
                <h3 class="title-text-bold-medium text-secondary-950 pt-2">{{ $article_data->title }}</h3>
                <p class="body-text-regular-medium text-secondary-600 pt-1">{{ $article_data->short_text }}</p>
            </div>
            <a href="{{ route('articles.show', $article_data->slug) }}"
                class="inline-block px-3 py-2 rounded-sm border border-secondary-800 label-text-bold-small text-secondary-800 mt-4">Read
                more</a>
        </div>
        @endforeach
    </div>
</div>
{{-- Articles end --}}
</div>


@endsection

@section('extra-js')
<script>
    $(document).ready(function() {
        // project Slider
        let project_visible = 2;
        function updateProjectVisible() {
            if (window.innerWidth <= 640) {
                project_visible = 1;
            } else {
                project_visible = 2;
            }
        }
        updateProjectVisible();
        $('.project-container').slick({
            slidesToShow: project_visible,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '.prev-btn-project',
            nextArrow: '.next-btn-project',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
        $(window).resize(function() {
            updateProjectVisible();
            $('.project-container').slick('slickSetOption', 'slidesToShow', project_visible, true);
        });

        // service  Slider
        let service_visible = 2;
        function updateServiceVisible() {
            if (window.innerWidth <= 640) {
                service_visible = 1;
            } else {
                service_visible = 2;
            }
        }
        updateServiceVisible();
        $('.service-container').slick({
            slidesToShow: service_visible,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '.prev-btn-service',
            nextArrow: '.next-btn-service',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
        $(window).resize(function() {
            updateServiceVisible();
            $('.service-container').slick('slickSetOption', 'slidesToShow', service_visible, true);
        });

        // software Slider
        let software_visible = 2;
        function updateSoftwareVisible() {
            if (window.innerWidth <= 640) {
                software_visible = 1;
            } else {
                software_visible = 2;
            }
        }
        updateSoftwareVisible();
        $('.software-container').slick({
            slidesToShow: software_visible,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '.prev-btn-software',
            nextArrow: '.next-btn-software',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
        $(window).resize(function() {
            updateSoftwareVisible();
            $('.software-container').slick('slickSetOption', 'slidesToShow', software_visible, true);
        });

        // Client Reviews Slider
        let reviews_visible = 3;
        function updateReviewsVisible() {
            if (window.innerWidth <= 640) {
                reviews_visible = 1;
            } else if (window.innerWidth <= 1024) {
                reviews_visible = 2;
            } else {
                reviews_visible = 3;
            }
        }
        updateReviewsVisible();
        $('.client-reviews-container').slick({
            slidesToShow: reviews_visible,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '.prev-btn-client-reviews',
            nextArrow: '.next-btn-client-reviews',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
        $(window).resize(function() {
            updateReviewsVisible();
            $('.client-reviews-container').slick('slickSetOption', 'slidesToShow', reviews_visible, true);
        });

        // article Slider
        let article_visible = 3;
        function updateArticleVisible() {
            if (window.innerWidth <= 640) {
                article_visible = 1;
            } else if (window.innerWidth <= 1024) {
                article_visible = 2;
            } else {
                article_visible = 3;
            }
        }
        updateArticleVisible();
        $('.articles-container').slick({
            slidesToShow: article_visible,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '.prev-btn-article',
            nextArrow: '.next-btn-article',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
        $(window).resize(function() {
            updateArticleVisible();
            $('.articles-container').slick('slickSetOption', 'slidesToShow', article_visible, true);
        });
    });
</script>
@endsection

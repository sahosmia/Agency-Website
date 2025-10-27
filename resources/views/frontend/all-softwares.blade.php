@extends('frontend.layouts.app')
@section('title', $allSoftwaresSettings['page_title'] ?? 'All Softwares')

@section('content')
    <div class="container mx-auto">

        <h1 class="heading-text-regular-large text-center mt-20">
            {{ $allSoftwaresSettings['title'] ?? '' }}
        </h1>

        <div class=" flex flex-col items-center my-8">
            <div class="w-8/12">
                <p class=" body-text-regular-large text-secondary-800 text-wrap">{{ $allSoftwaresSettings['description'] ?? '' }}</p>
            </div>

            <div class="my-20">
                <button class="btn-primary-full  px-6 ">Contact us</button>
            </div>

        </div>
         {{-- All softwares  --}}

         <div class="my-15">
            <h1 class=" heading-text-regular-medium text-center text-secondary-950 mt-15 mb-8"> {{ $allSoftwaresSettings['section_title'] ?? '' }}</h1>

            <div class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8 justify-center items-center p-6">
                <!-- Service Card -->
                <div class="service-item h-full">
                    <div class="flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400 shadow-lg">
                        <img class="rounded object-cover w-full " src="{{ asset('upload/software.png') }}" alt="">
                        <div class="gap-2">
                            <h1 class="text-left md:text-left title-text-regular-x-large text-secondary-900">Custom made Software for Your Needs</h1>
                            <p class="sub-title-medium-regular text-secondary-600 text-left">Our custom software development services are designed to create solutions that align perfectly with your business objectives. Whether you need to enhance efficiency, improve customer experiences, or scale operations, we’re here to deliver.</p>
                        </div>
                        <div>
                            <button class="label-text-bold-medium button-g">
                                See plan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service Card -->
                <div class="service-item h-full">
                    <div class="flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400 shadow-lg">
                        <img class="rounded object-cover w-full " src="{{ asset('upload/software.png') }}" alt="">
                        <div class="gap-2">
                            <h1 class="text-left md:text-left title-text-regular-x-large text-secondary-900">NGO Management System</h1>
                            <p class="sub-title-medium-regular text-secondary-600 text-left">Optimize your NGO's operations with our comprehensive solution. Manage donations, volunteers, projects, and reporting seamlessly, all in one place.</p>
                        </div>
                        <div>
                            <button class="label-text-bold-medium button-g">
                                See plan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service Card -->
                <div class="service-item">
                    <div class="flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400 shadow-lg">
                        <img class="rounded object-cover w-full " src="{{ asset('upload/software.png') }}" alt="">
                        <div class="gap-2">
                            <h1 class="text-left md:text-left title-text-regular-x-large text-secondary-900">School Management System</h1>
                            <p class="sub-title-medium-regular text-secondary-600 text-left">Streamline school administration with features for managing students, teachers, schedules, fees, and exams efficiently. Empower educators and enhance the learning experience.</p>
                        </div>
                        <div>
                            <button class="label-text-bold-medium button-g">
                                See plan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service Card -->
                <div class="service-item">
                    <div class="flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400 shadow-lg">
                        <img class="rounded object-cover w-full" src="{{ asset('upload/software.png') }}" alt="">
                        <div class="gap-2">
                            <h1 class="text-left md:text-left title-text-regular-x-large text-secondary-900">Restaurant Management System</h1>
                            <p class="sub-title-medium-regular text-secondary-600 text-left">Revolutionize your restaurant’s operations with tools for order management, inventory tracking, staff scheduling, and customer engagement, ensuring smooth day-to-day management.</p>
                        </div>
                        <div>
                            <button class="label-text-bold-medium button-g">
                                See plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center my-10">
                <button class="button-label text-center px-6 py-3 label-text-bold-large ">
                    See more
                </button>
            </div>

        </div>
        {{-- software section --}}


    </div>

    <x-frontend.faq />


@endsection


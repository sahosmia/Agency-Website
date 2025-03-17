@extends('frontend.layouts.app')
@section('title', 'Single-Software-Page')

@section('content')
    <div class="container">

        <h1 class="mt-20 heading-text-regular-large text-center text-secondary-950 ">NGO Management System</h1>

        <div class=" flex justify-between items-center my-8">
            <div class="w-6/12">
                <p class=" body-text-regular-large text-secondary-800 text-wrap">Our NGO Management System is a robust, all-in-one solution designed to streamline operations, improve transparency, and maximize impact for non-governmental organizations (NGOs).</p>
            </div>

            <div>
                <button class="btn-primary-full  px-6 ">Contact us</button>
            </div>

        </div>

        {{-- images section  --}}
        <div>
            <div class="flex justify-center mt-14">
                <img src="{{asset('upload/software.png')}}" alt="">
            </div>

            <div class=" w-full flex justify-center gap-6  mt-7">
                <img class="w-3/12" src="{{asset('upload/software2.png')}}" alt="">
                <img class="w-3/12" src="{{asset('upload/software2.png')}}" alt="">
                <img class="w-3/12" src="{{asset('upload/software2.png')}}" alt="">
                <img class="w-3/12" src="{{asset('upload/software2.png')}}" alt="">
            </div>
        </div>
        {{-- images section  --}}


        {{-- Benefits  --}}

        <div class="slider-container mt-15 mb-20 overflow-hidden">
            <div>
                <h1 class="heading-text-regular-medium text-center text-secondary-900">Key Benefits</h1>
                <div class="flex justify-between my-8 gap-5">
                    <p class="body-text-regular-medium text-secondary-800 w-full  md:w-1/2"> Our NGO Management System is a robust, all-in-one solution designed to streamline operations, improve transparency, and maximize impact for non-governmental organizations (NGOs). </p>
                    <div class="button-group ">
                        <button class="prev-btn-article button-label w-9 px-3 py-2  border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i> </button>
                        <button class="next-btn-article button-label w-9 px-3 py-2  border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-right"></i> </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-6 ">

                    <div class=" viewer-card">
                        <h1 class="title-text-bold-medium text-secondary-950">Building Trust</h1>
                        <hr class=" w-full h-px bg-secondary-400 border-0">
                        <p class="body-text-regular-large text-secondary-800 text-justify">
                            By embodying ethical business practices, we weave trustworthiness and integrity into every
                            connection we forge. This commitment paves the way for enduring and rewarding partnerships
                        </p>
                    </div>
                    <div class=" viewer-card">
                        <h1 class="title-text-bold-medium text-secondary-950">Building Trust</h1>
                        <hr class=" w-full h-px bg-secondary-400 border-0">
                        <p class="body-text-regular-large text-secondary-800 text-justify">
                            By embodying ethical business practices, we weave trustworthiness and integrity into every
                            connection we forge. This commitment paves the way for enduring and rewarding partnerships
                        </p>
                    </div>
                    <div class=" viewer-card">
                        <h1 class="title-text-bold-medium text-secondary-950">Building Trust</h1>
                        <hr class=" w-full h-px bg-secondary-400 border-0">
                        <p class="body-text-regular-large text-secondary-800 text-justify">
                            By embodying ethical business practices, we weave trustworthiness and integrity into every
                            connection we forge. This commitment paves the way for enduring and rewarding partnerships
                        </p>
                    </div>

            </div>
        </div>
        {{-- Benefits  --}}


        {{-- Software key Features  --}}
        <div class="mt-15 mb-20">
            <h1 class=" heading-text-regular-medium text-secondary-900 text-center">Software Key Features</h1>

            <div class="w-10/12">
                <div class="flex gap-15 my-8 item-center justify-around ">
                    <h3 class=" label-text-regular-medium text-secondary-600 text-center hover:text-secondary-950 label-text-bold-medium">Donation Management </h3>
                    <h3 class=" label-text-regular-medium text-secondary-600 text-center">Volunteer Management </h3>
                    <h3 class=" label-text-regular-medium text-secondary-600 text-center">Donation Management </h3>
                    <h3 class=" label-text-regular-medium text-secondary-600 text-center">Donation Management </h3>
                    <h3 class=" label-text-regular-medium text-secondary-600 text-center">Donation Management </h3>
                </div>

                <div class="flex  gap-6 ">
                    <img src="{{asset('upload/software-keys.png')}}" alt="">
                    <div class="flex  flex-col items-center">
                        <p class=" body-text-regular-large text-secondary-900 mb-6">Efficiently track and manage donations with tools that streamline the process.</p>
                        <p class=" body-text-regular-large text-secondary-950 my-4">
                            <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Automated Receipts: Generate and email tax-compliant receipts instantly.
                        </p>
                        <p class=" body-text-regular-large text-secondary-950 my-4">
                            <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Recurring Donations: Enable donors to set up automated monthly contributions.</p>
                        <p class=" body-text-regular-large text-secondary-950 my-4">
                            <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Donor History Tracking: Maintain detailed records of donor contributions.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Software key Features  --}}


        {{-- Software Plans  --}}
        <div>
            <h1 class=" heading-text-regular-medium text-center text-secondary-950 my-15"> Software Plans</h1>
            <div class="grid grid-cols-4 gap-6 ">

                <div class=" viewer-card h-fit gap-4">

                    <div>
                        <h3 class="body-text-regular-large text-secondary-600"><span><i class="fa-solid fa-play p-1"></i> </span> Stater</h3>
                        <h1 class="body-text-regular-large text-secondary-800"> <span class=" heading-text-bold-large  text-secondary-950 ">$500</span> / one time buy</h1>
                    </div>

                    <hr class=" w-full h-px bg-secondary-400 border-0 ">
                    <div class="flex flex-col gap-2 ">
                        <p>Why should you take this</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span>Donation tracking</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span>Volunteer management</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Basic project oversight</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Financial reporting</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> 2 user accounts</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Email support</p>
                    </div>
                    <hr class=" w-full h-px bg-secondary-400 border-0">

                    <div class=" w-full flex  items-center justify-between">
                        <button class="">Learn more </button>
                        <button class="button-label py-2 px-4">Add to cart </button>
                    </div>
                </div>

                <div class=" viewer-card gap-4 h-fit">
                    <div class="w-full flex justify-between items-center gap-2">
                        <button class="  text-secondary-600 body-text-bold-large">Basic</button>
                        <button class="p-2 body-text-regular-large text-secondary-800 rounded-l-lg border border[#82848E]">Save 20%</button>
                    </div>
                    <div>
                        <h1 class="body-text-regular-large text-secondary-800"> <span class=" heading-text-bold-large  text-secondary-950 ">$1000</span> / one time buy</h1>
                    </div>

                    <hr class=" w-full h-px bg-secondary-400 border-0">
                    <div class="flex flex-col gap-2 my-4">
                        <p>Why should you take this</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span>All features from Standard Plan</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span>Advanced project management</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Custom report generation</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span>Multi-user access (up to 10 users)</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> SMS integration</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Priority support</p>
                    </div>

                    <hr class=" w-full h-px bg-secondary-400 border-0">

                    <div class=" w-full flex  items-center justify-between">
                        <button class="">Learn more </button>
                        <button class="button-label py-2 px-4">Add to cart </button>
                    </div>
                </div>
                <div class=" viewer-card gap-4 h-fit">
                    <div class="w-full flex justify-between items-center gap-2">
                        <button class=" bg-blue-700 text-white rounded-lg px-3 font-bold">Popular</button>
                        <button class="p-2 body-text-regular-large text-secondary-800 rounded-l-lg border border[#82848E]">Save 20%</button>
                    </div>
                    <div>
                        <h3 class="body-text-regular-large text-secondary-600">Standard</h3>
                        <h1 class="body-text-regular-large text-secondary-800"> <span class=" heading-text-bold-large  text-secondary-950 ">$1000</span> / one time buy</h1>
                    </div>

                    <hr class=" w-full h-px bg-secondary-400 border-0">
                    <div class="flex flex-col gap-2 my-4">
                        <p>Why should you take this</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span>All features from Standard Plan</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span>Impact analysis tools</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Unlimited user accounts</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> API integration for third-party tools</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Cloud storage for documents</p>
                        <p class="body-text-regular-large text-secondary-600 "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Dedicated account manager</p>
                    </div>

                    <hr class=" w-full h-px bg-secondary-400 border-0">

                    <div class=" w-full flex  items-center justify-between">
                        <button class="">Learn more </button>
                        <button class="button-label py-2 px-4">Add to cart </button>
                    </div>
                </div>
                <div class=" viewer-card bg-primary-600 ">
                    <div class="w-full flex justify-between items-center ">
                        <button class=" bg-white text-black rounded-lg px-3 font-bold">Popular</button>
                        <button class="p-2 bg-white body-text-regular-large text-secondary-800 rounded-l-lg border border[#82848E]">limited offer</button>
                    </div>
                    <div>
                        <h3 class="body-text-regular-large  text-white">Advanced</h3>
                        <h1 class="body-text-regular-large text-secondary-800"> <span class=" heading-text-bold-large  text-white ">Contact now</h1>
                    </div>

                    <hr class=" w-full h-px bg-secondary-400 border-0">
                    <div class="flex flex-col gap-2 my-4 text-white">
                        <p>Why should you take this</p>
                        <p class="body-text-regular-large text-white "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span>Fully customizable features based on your organization's needs</p>
                        <p class="body-text-regular-large text-white "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span>Impact analysis tools</p>
                        <p class="body-text-regular-large text-white "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Integration with your existing tools and systems</p>
                        <p class="body-text-regular-large text-white "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Custom dashboards, workflows, and modules</p>
                        <p class="body-text-regular-large text-white "> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Dedicated development team for a personalized solution</p>
                        <p class="body-text-regular-large text-white"> <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Ongoing maintenance and support packages</p>
                    </div>

                    <hr class=" w-full h-px bg-secondary-400 border-0">


                    <div class=" w-full flex  items-center ">

                        <button class="w-full button-label py-2 px-4 text-black bg-white">Add to cart </button>
                    </div>
                </div>

            </div>

            <div class="flex justify-center  items-center my-15">
                <button class="button-label text-center px-6 py-3 label-text-bold-large">See comparison</button>
            </div>

        </div>
        {{-- Software Plans  --}}

        {{-- Technologies in the system  --}}

        <div class="my-15">
            <h1 class=" heading-text-regular-medium text-center text-secondary-950 mt-15 mb-8"> Technologies in the System</h1>

            <div class="grid grid-cols-3 gap-6 justify-center">
                <div class="service-item">
                    <div class=" flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                        <div class="w-full ">
                            <img class="rounded " src="{{ asset('upload/service-img.png') }}" alt="">
                        </div>
                        <div class="  gap-2">
                            <h1 class="title-text-bold-medium text-secondary-600">Front-End Technologies</h1>
                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                <span> <i class="fa-regular fa-circle-check p-1"></i> </span> React.js: For intuitive and responsive user interfaces.</p>
                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class=" flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                        <div class="w-full ">
                            <img class="rounded " src="{{ asset('upload/service-img.png') }}" alt="">
                        </div>
                        <div class="  gap-2">
                            <h1 class="title-text-bold-medium text-secondary-600">Back-End Technologies</h1>
                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p><p class=" body-text-regular-large text-secondary-800 my-4">
                                    <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>

                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class=" flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                        <div class="w-full ">
                            <img class="rounded " src="{{ asset('upload/service-img.png') }}" alt="">
                        </div>
                        <div class="  gap-2">
                            <h1 class="title-text-bold-medium text-secondary-600">Web Design & Development</h1>
                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>

                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                    <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>
                        </div>

                    </div>
                </div>
                <div class="service-item">
                    <div class=" flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                        <div class="w-full ">
                            <img class="rounded " src="{{ asset('upload/service-img.png') }}" alt="">
                        </div>
                        <div class="  gap-2">
                            <h1 class="title-text-bold-medium text-secondary-600">Web Design & Development</h1>
                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>

                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                    <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>
                        </div>

                    </div>
                </div>
                <div class="service-item">
                    <div class=" flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                        <div class="w-full ">
                            <img class="rounded " src="{{ asset('upload/service-img.png') }}" alt="">
                        </div>
                        <div class="  gap-2">
                            <h1 class="title-text-bold-medium text-secondary-600">Web Design & Development</h1>
                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>

                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                    <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>
                        </div>

                    </div>
                </div>
                <div class="service-item">
                    <div class=" flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                        <div class="w-full ">
                            <img class="rounded " src="{{ asset('upload/service-img.png') }}" alt="">
                        </div>
                        <div class="  gap-2">
                            <h1 class="title-text-bold-medium text-secondary-600">Web Design & Development</h1>
                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>

                            <p class=" body-text-regular-large text-secondary-800 my-4">
                                    <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: Ensures mobile-friendly and clean design..</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="flex justify-center  items-center my-15">
                <button class="button-label text-center px-6 py-3 label-text-bold-large">See more details</button>
            </div>
        </div>
        {{-- Technologies in the system  --}}

        {{-- FAQ's  --}}

        <div class="my-15">
            <x-frontend.faq />
        </div>


        {{-- FAQ's  --}}

    </div>

@endsection

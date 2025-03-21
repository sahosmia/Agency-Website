@extends('frontend.layouts.app')
@section('title', 'Softwares')

@section('content')
    <div class="container mx-auto">

        <h1 class="heading-text-regular-large text-center mt-20">
            Empowering Your Vision with Tailored Solutions</h1>

        <div class=" flex flex-col items-center my-8">
            <div class="w-8/12">
                <p class=" body-text-regular-large text-secondary-800 text-wrap text-center">Our custom software development services are designed to create solutions that align perfectly with your business objectives. Whether you need to enhance efficiency, improve customer experiences, or scale operations, we’re here to deliver.</p>
            </div>

            <div class="my-20">
                <button class="btn-primary-full  px-6 ">Contact us</button>
            </div>
        </div>

         {{--Custom Software  --}}

         <div class="slider-container mt-15 mb-20 overflow-hidden">
            <div>
                <h1 class="heading-text-regular-medium text-center text-secondary-900">Why Choose Custom Software?</h1>
                <div class="flex justify-between my-8 gap-5">
                    <p class="body-text-regular-medium text-secondary-800 w-full  md:w-1/2"> Custom software empowers your business with the tools to succeed. Contact us today to discuss your vision and explore how we can make it a reality. </p>
                    <div class="button-group ">
                        <button class="prev-btn-article button-label w-9 px-3 py-2  border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i> </button>
                        <button class="next-btn-article button-label w-9 px-3 py-2  border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-right"></i> </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-6 ">

                    <div class=" viewer-card">
                        <h1 class="title-text-bold-medium text-secondary-950">Tailored to Your Business</h1>
                        <hr class=" w-full h-px bg-secondary-400 border-0">
                        <p class="body-text-regular-large text-secondary-800 text-justify">
                            Every feature is built specifically to meet your unique requirements, ensuring maximum relevance and impact.
                        </p>
                    </div>
                    <div class=" viewer-card">
                        <h1 class="title-text-bold-medium text-secondary-950">Scalable for Growth</h1>
                        <hr class=" w-full h-px bg-secondary-400 border-0">
                        <p class="body-text-regular-large text-secondary-800 text-justify">
                            Custom software evolves with your business, supporting future expansions and increased demands.
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
        {{-- Custom Software  --}}


         {{-- Software key Features  --}}
         <div class="mt-15 mb-20">
            <h1 class=" heading-text-regular-medium text-secondary-900 text-center">Software Key Features</h1>

            <div class="w-10/12">

                <div class="flex gap-15 my-8 item-center justify-around ">
                    <button class="tab-link inline-block pb-2 border-b-2 border-black text-secondary-950 label-text-bold-medium" data-tab="donation">Integration with Existing Tools</button>
                    <button class="tab-link inline-block pb-2 border-b-2 border-transparent text-secondary-600 label-text-bold-medium hover:text-secondary-950" data-tab="volunteer">User-Friendly Interfaces</button>
                    <button class="tab-link inline-block pb-2 border-b-2 border-transparent text-secondary-600 label-text-bold-medium hover:text-secondary-950" data-tab="project">Robust Security</button>

                </div>
                <div class="mt-6">
                    <!-- Donation Management -->
                    <div class="tab-content" id="donation">
                        <div class="flex space-x-6">
                            <img src="{{asset('upload/software-keys.png')}}" alt="">
                                <div class="flex  flex-col items-center">
                                    <p class=" body-text-regular-large text-secondary-900 mb-6">Key features of custom software include: scalability, tailored functionality to specific needs, seamless integration with existing systems, high security measures. Integration with Existing Tools</p>
                                    <p class=" body-text-regular-large text-secondary-950 my-4">
                                        <span> <i class="fa-regular fa-circle-check p-1"></i> </span>Third-Party Tools: Connect with CRMs, ERPs, and payment gateways effortlessly.
                                    </p>
                                    <p class=" body-text-regular-large text-secondary-950 my-4">
                                        <span> <i class="fa-regular fa-circle-check p-1"></i> </span> API Development: Custom APIs for smooth data exchange between platforms.</p>
                                    <p class=" body-text-regular-large text-secondary-950 my-4">
                                        <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Legacy System Integration: Modernize and integrate older systems without disruption.</p>
                                </div>
                        </div>
                    </div>

                    <!-- Volunteer Management -->
                    <div class="tab-content hidden" id="volunteer">
                        <div class="flex space-x-6">
                            <img src="{{asset('upload/software-keys.png')}}" alt="">
                                <div class="flex  flex-col items-center">
                                    <p class=" body-text-regular-large text-secondary-900 mb-6">Efficiently track and manage donations with tools that streamline the process. User-Friendly Interfaces</p>
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

                    <!-- Project Oversight -->
                    <div class="tab-content hidden" id="project">
                        <div class="flex space-x-6">
                            <img src="{{asset('upload/software-keys.png')}}" alt="">
                                <div class="flex  flex-col items-center">
                                    <p class=" body-text-regular-large text-secondary-900 mb-6">Efficiently track and manage donations with tools that streamline the process. Robust Security</p>
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


            </div>
        </div>
        {{-- Software key Features  --}}


        {{-- Software Plans  --}}
        <div>
            <h1 class=" heading-text-regular-medium text-center text-secondary-950 my-15"> Custom Software Plans</h1>
            <div class="flex items-center justify-center">

                <div class="w-4/12 viewer-card bg-primary-600 ">
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

    </div>

    <x-frontend.faq />


@endsection

@section('extra-js')
<!-- jQuery Script -->
<script>
   $(document).ready(function () {
    $(".tab-link").click(function () {
        // Remove active styles from all tabs
        $(".tab-link").removeClass("border-black text-black")
                      .addClass("text-gray-500 border-transparent");

        // Add active styles to the clicked tab
        $(this).addClass("border-black text-black")
               .removeClass("text-gray-500 border-transparent");

        // Hide all tab contents
        $(".tab-content").addClass("hidden");

        // Show the selected tab content
        $("#" + $(this).data("tab")).removeClass("hidden");
    });
});
</script>
@endsection

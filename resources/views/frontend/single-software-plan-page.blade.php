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

        {{-- View comparsion  --}}
        <div>
            <h1 class=" heading-text-regular-medium text-center text-secondary-950"> View comparsion</h1>
            <p class="my-8  text-wrap  text-center sub-title-large-regular">This table provides a clear and detailed comparison, helping potential customers understand the value and differences between each plan. Let me know if you’d like additional adjustments!</p>

            <div class=" flex items-center">
               <table class="w-full  border border-secondary-400 border-collapse rounded-lg ">
                <thead class=" ">
                    <tr>
                        <th class="p-4 body-text-bold-large text-left">Features</th>
                        <th class="p-4 body-text-bold-large text-center"><i class="fa-solid fa-play"></i> Starter</th>
                        <th class="p-4 body-text-bold-large text-center"><i class="fa-solid fa-headset"></i> Basic</th>
                        <th class="p-4 body-text-bold-large text-center"><i class="fa-solid fa-chart-line"></i> Standard</th>
                        <th class="p-4 body-text-bold-large text-center"><i class="fa-solid fa-building"></i> Advanced</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Donation Management</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Basic Tracking</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Advanced Tracking</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Advanced + Recurring Donations</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Fully Customized</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Volunteer Management</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Registration & Logs</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Advanced Tracking</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Advanced Reports</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Fully Customized</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Project Oversight</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Basic Monitoring</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Detailed Dashboards</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Gantt Charts & Resource Allocation </td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Fully Customized</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Financial Reporting</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Basic Reports</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Budgeting Tools</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Audit-Ready Statements</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Fully Customized</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Communication Tools</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Email Updates</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">SMS Integration</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Multi-channel Notifications</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Tailored to Needs</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Custom Reports</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center"><i class="fa-regular fa-square"></i></td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></i></td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></i></td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large ">Multi-User Access</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">2 Users</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Up to 10 Users</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Unlimited Users</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Flexible User Roles</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                         <td class="p-4 text-secondary-800 body-text-regular-large ">Impact Analysis</td>
                        <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-regular fa-square"></i></td>
                        <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-regular fa-square"></i></td>
                        <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></td>
                        <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                         <td class="p-4 text-secondary-800 body-text-regular-large ">API Integration</td>
                        <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-regular fa-square"></i></td>
                        <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-regular fa-square"></i></td>
                        <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></td>
                        <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large ">Cloud Storage</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large  text-center">No</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large  text-center">10 GB</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large  text-center">Unlimited </td>
                        <td class="p-4 text-secondary-800 body-text-regular-large  text-center">Custom Storage Options</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Role-Based Permissions</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Basic</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Advance</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Advance </td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Fully Configurable</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Mobile Accessibility</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Basic</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Mobile-Optimized Dashboard</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Fully Mobile-Responsive </td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Custom Mobile App</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Training & Onboarding</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">No</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Basic Training</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Comprehensive Training </td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Ongoing Support</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large">Support Duration</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">1 Month Post-Launch</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">3 Months Post-Launch</td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">6 Months Post-Launch </td>
                        <td class="p-4 text-secondary-800 body-text-regular-large text-center">Long-Term Support</td>
                    </tr>
                    <tr class=" border  border-secondary-400">
                        <td class="p-4 text-secondary-800 body-text-regular-large ">Integration with Payment Gateways</td>
                       <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-regular fa-square"></i></td>
                       <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-regular fa-square"></i></td>
                       <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></td>
                       <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></td>
                   </tr>
                   <tr class=" border  border-secondary-400">
                    <td class="p-4 text-secondary-800 body-text-regular-large ">Event Management</td>
                   <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-regular fa-square"></i></td>
                   <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-regular fa-square"></i></td>
                   <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></td>
                   <td class="p-4  text-secondary-800 body-text-regular-large text-center"><i class="fa-solid fa-square-check"></i></td>
                </tr>
                <tr class=" border  border-secondary-400">
                    <td class="p-4 text-secondary-800 body-text-regular-large">Support Duration</td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">1 Month Post-Launch</td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">3 Months Post-Launch</td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">6 Months Post-Launch </td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">Long-Term Support</td>
                </tr>
                <tr class=" border  border-secondary-400">
                    <td class="p-4 text-secondary-800 body-text-regular-large">Support Duration</td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">1 Month Post-Launch</td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">3 Months Post-Launch</td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">6 Months Post-Launch </td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">Long-Term Support</td>
                </tr>
                 <tr class=" border  border-secondary-400">
                    <td class="p-4  text-secondary-800  body-text-regular-large">Support Duration</td>
                    <td class="p-4  text-secondary-800 body-text-regular-large text-center">1 Month Post-Launch</td>
                    <td class="p-4  text-secondary-800 body-text-regular-large text-center">3 Months Post-Launch</td>
                    <td class="p-4  text-secondary-800 body-text-regular-large text-center">6 Months Post-Launch </td>
                    <td class="p-4  text-secondary-800 body-text-regular-large text-center">Long-Term Support</td>
                </tr> <tr class=" border  border-secondary-400">
                    <td class="p-4 text-secondary-800 body-text-regular-large">Support Duration</td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">1 Month Post-Launch</td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">3 Months Post-Launch</td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">6 Months Post-Launch </td>
                    <td class="p-4 text-secondary-800 body-text-regular-large text-center">Long-Term Support</td>
                </tr>
                </tbody>
               </table>
            </div>


        </div>
        {{-- View comparsion  --}}

        {{-- Technologies in the system  --}}


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

                <div class=" w-10/12 flex gap-6  ">
                    <div class="w-fit ">
                        <img class="rounded bg-white" src="{{ asset('upload/service-img.png') }}" alt="">
                    </div>
                    <div class="  gap-2">
                        <h1 class="title-text-bold-medium text-secondary-900">Front-End Developments</h1>
                        <p class="body-text-regular-large text-secondary-900">
                            HTML, CSS, JavaScript: Core web technologies for structuring, styling, and adding interactivity to websites.
                        </p>
                        <p class=" body-text-regular-large text-secondary-800 my-4">
                            <span> <i class="fa-regular fa-circle-check p-1"></i> </span>React.js: For building dynamic user interfaces and single-page applications.</p>
                        <p class=" body-text-regular-large text-secondary-800 my-4">
                            <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Vue.js: Lightweight and flexible for responsive web apps.</p>
                        <p class=" body-text-regular-large text-secondary-800 my-4">
                            <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Bootstrap: A popular CSS framework for mobile-first and responsive designs.</p>
                        <p class=" body-text-regular-large text-secondary-800 my-4">
                            <span> <i class="fa-regular fa-circle-check p-1"></i> </span> Tailwind CSS: Utility-first CSS for custom design solutions.</p>
                    </div>
                </div>
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

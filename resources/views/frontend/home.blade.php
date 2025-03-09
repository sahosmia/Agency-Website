@extends('frontend.layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="text-center py-20">
            <h1 class="heading-text-regular-large text-secondary-950">Your idea make in Realty</h1>
            <h1 class="heading-text-regular-large text-secondary-950">We provide <span class=" text-primary-600 ">Digital Marketing</span></h1>

            <dir class="flex items-center justify-center mt-7">
                <div class="w-10/12 md:w-7/12 grid grid-cols-2 items-center md:flex justify-center  gap-4 flex-wrap">
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
                <button class="button-label px-7 py-3 bg-primary-600 text-white label-text-bold-large "> Get started <span><i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
        </div>

        {{-- hero card  --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4   justify-center   gap-6  py-15">
            <div class=" flex items-center">
                <p class="body-text-regular-medium text-secondary-800">We specialize in digital solutions to help your business grow and thrive in the digital landscape.</p>
            </div>
            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900 ">95%</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Satisfied Customers</h2>
                <p class="body-text-regular-small text-secondary-800">We are committed to providing the best solutions to build happy relationships with our customers.</p>
            </div>


            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900 ">80+</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Projects Completed</h2>
                <p class="body-text-regular-small text-secondary-800">Consistently innovating and delivering excellence.</p>
            </div>
            <div class="hero-card">
                <h1 class="title-text-bold-medium text-secondary-900 ">17+</h1>
                <h2 class="sub-title-large-regular text-secondary-900">Industries Served</h2>
                <p class="body-text-regular-small text-secondary-800">Expertise tailored to your unique needs—because we’ve done it all.</p>
            </div>

        </div>
        {{-- hero card  --}}

        {{-- reviewer card  --}}
        <div class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 py-20">
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
                <img src="{{ asset('upload/reviewer/Frame 101.svg') }}" alt="">
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
            <div class="reviewer-card ">
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
            <div class="reviewer-card ">
                <img src="{{ asset('upload/reviewer/Frame 101.svg') }}" alt="">
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
        </div>
        {{-- reviewer card  --}}

        {{-- Searching section  --}}
        <div class="pt-15 pb-20">
            <h1 class="text-center heading-text-regular-medium text-secondary-900">Find the Perfect Service for Your Needs</h1>
            <div class="flex w-6/10 m-auto items-center mt-8 p-4 pl-0 gap-2 border border-secondary-400 rounded-lg place-content-between">
                <input type="text" name="search" value="{{ request('search') }}" class="label-text-regular-large p-0 flex-1 border-none ring-0 outline-0" placeholder="What's Your Need? We’ve Got You Covered!">
                <button type="submit" class="flex items-center justify-center text-white bg-primary-600 rounded-md px-3 py-2 gap-2">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <span class="text-lg font-semibold"> Search</span>
                </button>
            </div>
        </div>
        {{-- Searching section  --}}

        {{-- values we live by  --}}
        <div class="pt-15 pb-20">
            <h1 class="text-center heading-text-regular-medium text-secondary-900">Values we live by</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 justify-center items-center flex-wrap gap-6 mt-8">
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
                <div class=" viewer-card">
                    <h1 class="title-text-bold-medium text-secondary-950">Building Trust</h1>
                    <hr class=" w-full h-px bg-secondary-400 border-0">
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


        <div class="w-full md:w-7/10 lg:w-5/10  m-auto pt-15 pb-20">
            <h1 class="heading-text-regular-large text-secondary-950 text-center">Let's Discuss Your Project!</h1>
            <p class="sub-title-medium-regular text-secondary-600 pt-8 text-center">We understand that every business is unique, and
                finding the right digital solution can be challenging. That’s why we offer a FREE first-time consultation to
                help you get started!
            </p>


            <form action="">
                <div class="flex  flex-col p-6 gap-7 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">


                    <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your name</label><input type="text" name="" id="" placeholder="e.g Jhon brgke" value="">
                    </div>
                    <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your e-mail</label><input type="email" name="" id="" placeholder="e.g jhonbrgke@gmail.com value="">
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


        <x-frontend.faq />


        {{-- Article Slider Section start ================================================== --}}
        <div class="slider-container mt-20 xl:mb-20 overflow-hidden">
            <div>
                <h1 class="heading-text-regular-medium text-center text-secondary-900">Articles</h1>
                <div class="flex justify-between my-8 gap-5">
                    <p class="body-text-regular-medium text-secondary-800 w-full  md:w-1/2"> Stay informed with our expert insights! Explore articles on the latest trends, tips, and strategies in web design, digital marketing, and more. </p>
                    <div class="button-group border-secondary-600">
                        <button class="prev-btn button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i> </button>
                        <button class="next-btn button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-right"></i> </button>
                    </div>
                </div>
            </div>

            {{-- slider  --}}
            <div class="articles-container flex gap-10">
                @foreach ($articles as $article_data)
                    <div class="article-item w-1/3">
                        <img class=" max-h-72 w-full object-cover rounded-xl self-start" src="{{ asset('upload/articles/card img.png') }}" alt="Article Image" />
                        <div class="mt-4">
                            <button class="px-4 py-2   border rounded-full border-secondary-200 label-text-regular-small text-secondary-800"> {{ $article_data->article_category->title }} </button>
                            <h2 class="title-text-bold-medium text-secondary-950 pt-2"> {{ $article_data->title }} </h2>
                            <p class="body-text-regular-medium text-secondary-600 pt-1"> {{ $article_data->short_text }} </p>
                        </div>

                        <a href="{{ route('front.articles.show', $article_data->slug) }}" class="inline-block px-3 py-2 rounded-sm border border-secondary-800 label-text-bold-small text-secondary-800 mt-4"> Read more </a>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Article Slider Section end ================================================== --}}


        {{-- lets discuss your project --}}


        {{-- Our least projects --}}

        <div class="my-20">
            <h1 class="text-center heading-text-regular-medium">Our Least Projects</h1>
            <div class="flex justify-between my-8 ">
                <div class="w-6/12">
                    <p class="body-text-regular-medium text-secondary-800 ">Explore how we’ve helped businesses achieve
                        their goals with tailored digital solutions. Our latest projects highlight creativity, strategy, and
                        measurable success in action.</p>
                </div>
                <div class="button-group  border-secondary-600 ">
                    <button class="button-label w-9 px-3 py-2 border-secondary-600 ">
                        <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i>

                    </button>
                    <button class="button-label w-9 px-3 py-2 border-secondary-600">
                        <i class=" w-5 h-5 fa-solid fa-circle-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="flex  gap-6">
                <div class="flex flex-col gap-4 w-4/12">
                    <img class="rounded-md" src="{{ asset('upload/Project thumbnail.png') }}" alt="">

                    <div class="">
                        <h1 class="title-text-bold-medium text-secondary-600">Bertóoz - E-commerce Website</h1>
                        <div class="flex gap-1 justify-center items-center mt-2">
                            <p class="w-8/12 body-text-regular-medium text-secondary-600 ">E-commerce is constantly
                                evolving, and so is the design of e-commerce websites and apps. </p>
                            <button class="w-4/12 button-label">See live preview <span> <i class="fa-solid fa-arrow-up-right-from-square"></i></span> </button>
                        </div>

                    </div>
                </div>
                <div class="flex flex-col gap-4 w-4/12">
                    <img class="rounded-md" src="{{ asset('upload/Project thumbnail.png') }}" alt="">

                    <div class="">
                        <h1 class="title-text-bold-medium text-secondary-600">Bertóoz - E-commerce Website</h1>
                        <div class="flex gap-1 justify-center items-center mt-2">
                            <p class="w-8/12 body-text-regular-medium text-secondary-600 ">E-commerce is constantly
                                evolving, and so is the design of e-commerce websites and apps. </p>
                            <button class="w-4/12 button-label">See live preview <span> <i class="fa-solid fa-arrow-up-right-from-square"></i></span> </button>
                        </div>

                    </div>
                </div>
                <div class="flex flex-col gap-4 w-4/12">
                    <img class="rounded-md" src="{{ asset('upload/Project thumbnail.png') }}" alt="">

                    <div class="">
                        <h1 class="title-text-bold-medium text-secondary-600">Bertóoz - E-commerce Website</h1>
                        <div class="flex gap-1 justify-center items-center mt-2">
                            <p class="w-8/12 body-text-regular-medium text-secondary-600">E-commerce is constantly
                                evolving, and so is the design of e-commerce websites and apps. </p>
                            <button class="w-4/12 button-label">See live preview <span> <i class="fa-solid fa-arrow-up-right-from-square"></i></span> </button>
                        </div>

                    </div>
                </div>

            </div>

            <div class="flex justify-center items-center mt-14">
                <button class="button-label px-7 py-3   label-text-bold-large "> Explore more
                    <span class="ml-2"><i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
        </div>

        {{-- Our least projects --}}

        {{-- our services  --}}

        <div class="my-20">
            <h1 class="text-center heading-text-regular-medium">Our Services</h1>
            <div class="flex justify-between my-8 ">
                <div class="w-6/12">
                    <p class="body-text-regular-medium text-secondary-800 ">We offer a wide range of digital solutions
                        tailored to meet your business needs. We provide innovative and impactful services to help you
                        succeed in the digital age.</p>
                </div>
                <div class="button-group  border-secondary-600 ">
                    <button class="button-label w-9 px-3 py-2 border-secondary-600 ">
                        <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i>

                    </button>
                    <button class="button-label w-9 px-3 py-2 border-secondary-600">
                        <i class=" w-5 h-5 fa-solid fa-circle-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="flex gap-6">

                <div class="w-4/12  flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                    <div class="w-full ">
                        <img class="rounded" src="{{ asset('upload/service-img.png') }}" alt="">
                    </div>
                    <div class="  gap-2">
                        <h1 class="title-text-bold-medium text-secondary-600">Web Design & Development</h1>
                        <p class="body-text-regular-medium text-secondary-600">
                            We create visually stunning and responsive websites tailored to your brand, ensuring seamless
                            user experiences and high performance across all devices.
                        </p>
                    </div>
                    <div class="w-full flex justify-center mt-8 ">
                        <button class="button-label px-4 py-2">See plan</button>
                    </div>
                </div>
                <div class="w-4/12  flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                    <div class="w-full ">
                        <img class="rounded" src="{{ asset('upload/service-img.png') }}" alt="">
                    </div>
                    <div class="  gap-2">
                        <h1 class="title-text-bold-medium text-secondary-600">Web Design & Development</h1>
                        <p class="body-text-regular-medium text-secondary-600">
                            We create visually stunning and responsive websites tailored to your brand, ensuring seamless
                            user experiences and high performance across all devices.
                        </p>
                    </div>
                    <div class="w-full flex justify-center mt-8 ">
                        <button class="button-label px-4 py-2">See plan</button>
                    </div>
                </div>
                <div class="w-4/12  flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                    <div class="w-full ">
                        <img class="rounded" src="{{ asset('upload/service-img.png') }}" alt="">
                    </div>
                    <div class="  gap-2">
                        <h1 class="title-text-bold-medium text-secondary-600">Web Design & Development</h1>
                        <p class="body-text-regular-medium text-secondary-600">
                            We create visually stunning and responsive websites tailored to your brand, ensuring seamless
                            user experiences and high performance across all devices.
                        </p>
                    </div>
                    <div class="w-full flex justify-center mt-8 ">
                        <button class="button-label px-4 py-2">See plan</button>
                    </div>
                </div>


            </div>
            <div class="flex justify-center items-center mt-14">
                <button class="button-label px-7 py-3   label-text-bold-large "> See all service
                </button>
            </div>

        </div>
        {{-- our services  --}}


        {{-- Software's Solution  --}}
        <div class="my-20">
            <h1 class="text-center heading-text-regular-medium">Software's Solution</h1>
            <div class="flex justify-between my-8 ">
                <div class="w-6/12">
                    <p class="body-text-regular-medium text-secondary-800 ">Simplify your operations with our ready-made
                        software solutions designed to streamline workflows and improve efficiency. Each system is built
                        with cutting-edge technology.</p>
                </div>
                <div class="button-group  border-secondary-600 ">
                    <button class="button-label w-9 px-3 py-2 border-secondary-600 ">
                        <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i>

                    </button>
                    <button class="button-label w-9 px-3 py-2 border-secondary-600">
                        <i class=" w-5 h-5 fa-solid fa-circle-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="flex gap-6">

                <div class="w-4/12  flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                    <div class="w-full ">
                        <img class="rounded" src="{{ asset('upload/softwer-img.png') }}" alt="">
                    </div>
                    <div class="  gap-2">
                        <h1 class="title-text-bold-medium text-secondary-600">Custom made Software for Your Needs</h1>
                        <p class="body-text-regular-medium text-secondary-600">
                            Our custom software development services are designed to create solutions that align perfectly
                            with your business objectives. Whether you need to enhance efficiency, improve customer
                            experiences, or scale operations, we’re here to deliver.
                        </p>
                    </div>
                    <div class="w-full flex justify-center mt-8 ">
                        <button class="button-label px-4 py-2">See plan</button>
                    </div>
                </div>
                <div class="w-4/12  flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                    <div class="w-full ">
                        <img class="rounded" src="{{ asset('upload/softwer-img.png') }}" alt="">
                    </div>
                    <div class="  gap-2">
                        <h1 class="title-text-bold-medium text-secondary-600">Custom made Software for Your Needs</h1>
                        <p class="body-text-regular-medium text-secondary-600">
                            Our custom software development services are designed to create solutions that align perfectly
                            with your business objectives. Whether you need to enhance efficiency, improve customer
                            experiences, or scale operations, we’re here to deliver.
                        </p>
                    </div>
                    <div class="w-full flex justify-center mt-8 ">
                        <button class="button-label px-4 py-2">See plan</button>
                    </div>
                </div>
                <div class="w-4/12  flex flex-col gap-5  p-6 bg-white border rounded-md border-secondary-400">
                    <div class="w-full ">
                        <img class="rounded" src="{{ asset('upload/softwer-img.png') }}" alt="">
                    </div>
                    <div class="  gap-2">
                        <h1 class="title-text-bold-medium text-secondary-600">Custom made Software for Your Needs</h1>
                        <p class="body-text-regular-medium text-secondary-600">
                            Our custom software development services are designed to create solutions that align perfectly
                            with your business objectives. Whether you need to enhance efficiency, improve customer
                            experiences, or scale operations, we’re here to deliver.
                        </p>
                    </div>
                    <div class="w-full flex justify-center mt-8 ">
                        <button class="button-label px-4 py-2">See plan</button>
                    </div>
                </div>



            </div>
            <div class="flex justify-center items-center mt-14">
                <button class="button-label px-7 py-3   label-text-bold-large "> See details
                </button>
            </div>

        </div>

        {{-- Software's Solution  --}}


        {{-- Contact us  --}}
        <div class="mt-[60px]">
            <h1 class="heading-text-regular-medium  text-secondary-900 text-center mb-8">Contact Us</h1>

            <div class="flex ">
                <div class="w-4/12 flex flex-col gap-7">
                    <div>
                        <p class="body-text-regular-medium text-secondary-600">Email</p>
                        <p class="body-text-bold-large text-secondary-900">info@yeasin-arena.com</p>
                    </div>
                    <div>
                        <p class="body-text-regular-medium text-secondary-600">Phone</p>
                        <p class="body-text-bold-large text-secondary-900">BD (880) 01961007253</p>
                    </div>
                    <div>
                        <p class="body-text-regular-medium text-secondary-600">Office location</p>
                        <p class="body-text-bold-large text-secondary-900">Ground Floor, Rupchaniane, Dhaka</p>
                    </div>

                    <div>

                        <h4 class="body-text-bold-large text-secondary-900">Follow us</h4>

                        <div class="pt-2 flex flex-wrap gap-x-6 gap-y-4">

                            <a class="flex justify-center items-center gap-2 rounded-sm border border-secondary-800 min-w-[184px] h-9 group" href="#">
                                <img src="{{ asset('/frontend/images/social/Linkedin.svg') }}" alt="">
                                <span class=" text-secondary-800 label-text-bold-small group-hover:text-secondary-950">Linkedin</span>
                            </a>
                            <a class="flex justify-center items-center gap-2 rounded-sm border border-secondary-800 min-w-[184px] h-9 group" href="#">
                                <img src="{{ asset('/frontend/images/social/Instagram.svg') }}" alt="">
                                <span class=" text-secondary-800 label-text-bold-small group-hover:text-secondary-950">Instagram</span>
                            </a>
                            <a class="flex justify-center items-center gap-2 rounded-sm border border-secondary-800 min-w-[184px] h-9 group" href="#">
                                <img src="{{ asset('/frontend/images/social/Twitter X.svg') }}" alt="">
                                <span class=" text-secondary-800 label-text-bold-small group-hover:text-secondary-950">Twitter
                                    / X</span>
                            </a>
                            <a class="flex justify-center items-center gap-2 rounded-sm border border-secondary-800 min-w-[184px] h-9 group" href="#">
                                <img src="{{ asset('/frontend/images/social/Twitter X.svg') }}" alt="">
                                <span class=" text-secondary-800 label-text-bold-small group-hover:text-secondary-950">Twitter
                                    / X</span>
                            </a>
                            <a class="flex justify-center items-center gap-2 rounded-sm border border-secondary-800 min-w-[184px] h-9 group" href="#">
                                <img src="{{ asset('/frontend/images/social/Twitter X.svg') }}" alt="">
                                <span class=" text-secondary-800 label-text-bold-small group-hover:text-secondary-950">Twitter
                                    / X</span>
                            </a>
                            <a class="flex justify-center items-center gap-2 rounded-sm border border-secondary-800 min-w-[184px] h-9 group" href="#">
                                <img src="{{ asset('/frontend/images/social/Twitter X.svg') }}" alt="">
                                <span class=" text-secondary-800 label-text-bold-small group-hover:text-secondary-950">Twitter
                                    / X</span>
                            </a>
                            <a class="flex justify-center items-center gap-2 rounded-sm border border-secondary-800 min-w-[184px] h-9 group" href="#">
                                <img src="{{ asset('/frontend/images/social/Twitter X.svg') }}" alt="">
                                <span class=" text-secondary-800 label-text-bold-small group-hover:text-secondary-950">Twitter
                                    / X</span>
                            </a>
                            <a class="flex justify-center items-center gap-2 rounded-sm border border-secondary-800 min-w-[184px] h-9 group" href="#">
                                <img src="{{ asset('/frontend/images/social/Twitter X.svg') }}" alt="">
                                <span class=" text-secondary-800 label-text-bold-small group-hover:text-secondary-950">Twitter
                                    / X</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="w-6/12">
                    <form action="">
                        <div class="flex  flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto  mb-20">


                            <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your
                                    name</label><input type="text" name="" id="" placeholder="eg. Jhon brgke" value="">
                            </div>
                            <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your
                                    email</label><input type="email" name="" id="" placeholder="eg.jhonbrgke@gmail.com" value="">
                            </div>

                            <!-- Services -->
                            <div>
                                <label class="block label-text-regular-medium text-secondary-800">What services you want</label>
                                <div class="grid grid-cols-2 gap-6 mt-2 label-text-regular-medium text-secondary-950">
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Web Design &
                                        Development</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Mobile App
                                        Development</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> UX/UI
                                        Design</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Digital
                                        Marketing & SEO</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Data Analysis
                                        & Engineering</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Software
                                        Architecting</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Machine
                                        Learning Model Implementation</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Business
                                        Consultation</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> IT
                                        Audit</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Cyber
                                        Security</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Video
                                        Editing</label>
                                </div>
                            </div>

                            <!-- Software -->
                            <div>
                                <label class="block label-text-regular-medium text-secondary-800">What software's you want</label>
                                <div class="grid grid-cols-2 gap-2 mt-2 label-text-regular-medium text-secondary-950">
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Custom Made
                                        Software</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> Restaurant
                                        Management System</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> School
                                        Management System</label>
                                    <label class="flex items-center"><input type="checkbox" class="mr-2"> NGO
                                        Management System</label>
                                </div>
                            </div>

                            <div class="flex gap-2 flex-col"><label class="inpul-label label-text-regular-medium text-secondary-800" for="">Project description</label>
                                <textarea rows="4" class="label-text-regular-medium text-secondary-950" name="" id="" placeholder="Write your message here"></textarea>
                            </div>

                            <hr class=" stroke-secondary-600">

                            <button class="btn-outline-full ">Submit now <span class="ml-2"><i class="fa-solid fa-arrow-right"></i></span> </button>


                            <p></p>

                        </div>
                    </form>
                </div>

            </div>

        </div>


        {{-- Contact us  --}}

        {{-- Companies  --}}
        <div class="flex flex-col gap-8 justify-center items-center mt-15 mb-20">
            <div>
                <h1 class="heading-text-regular-medium text-secondary-900">Companies who Trust Us</h1>
            </div>
            <div class="w-7/12 ">
                <p class="sub-title-medium-regular text-secondary-600  text-center text-wrap">we are proud to serve businesses and organizations across multiple countries and industries. We helped clients worldwide achieve success in the digital
                    landscape.</p>
            </div>
            <div class="flex  items-center gap-[120px]">
                <img src="{{ asset('upload/fiverr.svg') }}" alt="">
                <img src="{{ asset('upload/fiverr.svg') }}" alt="">
                <img src="{{ asset('upload/fiverr.svg') }}" alt="">
                <img src="{{ asset('upload/fiverr.svg') }}" alt="">
                <img src="{{ asset('upload/fiverr.svg') }}" alt="">
            </div>

        </div>
        {{-- Companies  --}}

        {{-- Clients  --}}
        <div class="flex flex-col gap-8 justify-center items-center mt-15 mb-20">
            <div>
                <h1 class="heading-text-regular-medium text-secondary-900">Clients Around the World</h1>
            </div>
            <div class="w-7/12 ">
                <p class="sub-title-medium-regular text-secondary-600  text-center text-wrap">we are proud to serve businesses and organizations across multiple countries and industries. We helped clients worldwide achieve success in the digital
                    landscape.</p>
            </div>
            <div class="flex  items-center justify-center gap-[120px]">
                <img src="{{ asset('upload/Bangladesh Flag.svg') }}" alt="">
                <img src="{{ asset('upload/Bangladesh Flag.svg') }}" alt="">
                <img src="{{ asset('upload/Bangladesh Flag.svg') }}" alt="">
                <img src="{{ asset('upload/Bangladesh Flag.svg') }}" alt="">
                <img src="{{ asset('upload/Bangladesh Flag.svg') }}" alt="">

            </div>

        </div>
        {{-- Clients  --}}

        {{-- Client Reviews  --}}

        {{-- Software's Solution  --}}
        <div class="my-20">
            <h1 class="text-center heading-text-regular-medium">Client Reviews</h1>
            <div class="flex justify-between my-8 ">
                <div class="w-6/12">
                    <p class="body-text-regular-medium text-secondary-800 ">Hear from our satisfied clients! Their feedback highlights our commitment to delivering exceptional digital solutions that drive results and build trust.</p>
                </div>
                <div class="button-group  border-secondary-600 ">
                    <button class="button-label w-9 px-3 py-2 border-secondary-600 ">
                        <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i>

                    </button>
                    <button class="button-label w-9 px-3 py-2 border-secondary-600">
                        <i class=" w-5 h-5 fa-solid fa-circle-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="flex gap-6">

                <div class="w-4/12  flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400">

                    <div class="flex gap-1 item-center justify-center">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>

                    <p class="body-text-regular-large text-secondary-800">Working with this agency has been a game-changer for our business. They revamped our website and managed our digital marketing campaigns, resulting in a 60% increase in leads.</p>

                    <hr class=" stroke-secondary-400">

                    <div class="flex items-center gap-4">
                        <span class=""><i class=" text-6xl fa-regular fa-circle-user"></i></span>

                        <div>
                            <h1 class="sub-title-large-bold text-secondary-950">Harper Jackson</h1>
                            <p class=" body-text-regular-large text-secondary-800">Founder & CEO & Decode agency</p>
                        </div>
                    </div>


                </div>

                <div class="w-4/12  flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400">

                    <div class="flex gap-1 item-center justify-center">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>

                    <p class="body-text-regular-large text-secondary-800">Working with this agency has been a game-changer for our business. They revamped our website and managed our digital marketing campaigns, resulting in a 60% increase in leads.</p>

                    <hr class=" stroke-secondary-400">

                    <div class="flex items-center gap-4">
                        <span class=""><i class=" text-6xl fa-regular fa-circle-user"></i></span>

                        <div>
                            <h1 class="sub-title-large-bold text-secondary-950">Harper Jackson</h1>
                            <p class=" body-text-regular-large text-secondary-800">Founder & CEO & Decode agency</p>
                        </div>
                    </div>


                </div>

                <div class="w-4/12  flex flex-col gap-5 p-6 bg-white border rounded-md border-secondary-400">

                    <div class="flex gap-1 item-center justify-center">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>

                    <p class="body-text-regular-large text-secondary-800">Working with this agency has been a game-changer for our business. They revamped our website and managed our digital marketing campaigns, resulting in a 60% increase in leads.</p>

                    <hr class=" stroke-secondary-400">

                    <div class="flex items-center gap-4">
                        <span class=""><i class=" text-6xl fa-regular fa-circle-user"></i></span>

                        <div>
                            <h1 class="sub-title-large-bold text-secondary-950">Harper Jackson</h1>
                            <p class=" body-text-regular-large text-secondary-800">Founder & CEO & Decode agency</p>
                        </div>
                    </div>


                </div>



            </div>
        </div>

        {{-- Client Reviews  --}}
    </div>


    </div>


@endsection


@section('extra-js')
    <script>
        $(document).ready(function() {
            let total = $('.article-item').length;
            let visible = 3;

            function updateVisible() {
                if (window.innerWidth <= 640) {
                    visible = 1;
                } else if (window.innerWidth <= 1024) {
                    visible = 2;
                } else {
                    visible = 3;
                }
            }

            updateVisible();

            $('.articles-container').slick({
                slidesToShow: visible,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                prevArrow: '.prev-btn',
                nextArrow: '.next-btn',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
            $(window).resize(function() {
                updateVisible();
                $('.articles-container').slick('slickSetOption', 'slidesToShow', visible, true);
            });
        });
    </script>
@endsection

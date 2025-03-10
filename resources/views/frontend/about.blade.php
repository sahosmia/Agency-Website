@extends('frontend.layouts.app')

@section("content")
<div class="container my-20">
    <div class="flex flex-col justify-center items-center gap-10">
        <h1 class="heading-text-regular-large text-secondary-950 text-center">Leading the Way in <span class=" text-primary-600">Digital Solutions</span></h1>
        <img src="{{asset('upload/aboutus.png')}}" alt="">

        <p class="w-8/12 sub-title-large-regular text-secondary-900 text-wrap text-center">
            short story about we're company. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
<br>
when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially hanged.
        </p>
    </div>

    {{-- Our Achievements  --}}
    <div class="my-15">
        <h1 class="heading-text-regular-large text-secondary-950 text-center">Our Achievements</h1>

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
        <div class="hero-card">
            <h1 class="title-text-bold-medium text-secondary-900 ">17+</h1>
            <h2 class="sub-title-large-regular text-secondary-900">Industries Served</h2>
            <p class="body-text-regular-small text-secondary-800">Expertise tailored to your unique needs—because we’ve done it all.</p>
        </div>
        <div class="hero-card">
            <h1 class="title-text-bold-medium text-secondary-900 ">17+</h1>
            <h2 class="sub-title-large-regular text-secondary-900">Industries Served</h2>
            <p class="body-text-regular-small text-secondary-800">Expertise tailored to your unique needs—because we’ve done it all.</p>
        </div>
        <div class="hero-card">
            <h1 class="title-text-bold-medium text-secondary-900 ">17+</h1>
            <h2 class="sub-title-large-regular text-secondary-900">Industries Served</h2>
            <p class="body-text-regular-small text-secondary-800">Expertise tailored to your unique needs—because we’ve done it all.</p>
        </div>
        <div class="hero-card">
            <h1 class="title-text-bold-medium text-secondary-900 ">17+</h1>
            <h2 class="sub-title-large-regular text-secondary-900">Industries Served</h2>
            <p class="body-text-regular-small text-secondary-800">Expertise tailored to your unique needs—because we’ve done it all.</p>
        </div>

    </div>
    {{-- hero card  --}}
    </div>
    {{-- Our Achievements  --}}

    {{-- Our Journey  --}}
    <div class="my-15 flex flex-col justify-center items-center gap-8 ">
        <h1 class="heading-text-regular-large text-secondary-950 text-center" >Our Journey</h1>
        <p class="w-10/12 sub-title-large-regular text-secondary-900 text-wrap text-center">Our story is one of passion, innovation, and relentless dedication to delivering exceptional digital solutions. From humble beginnings to a global presence, we have grown into a trusted name in website development, custom software solutions, UI/UX design, digital marketing, and IT services.</p>

        <div>
            <p class=" text-primary-600">ei part  ta korte hobe.</p>
        </div>

    </div>


{{-- Our Journey --}}

    {{-- Our Team  --}}
    <div class="my-15 flex flex-col justify-center items-center gap-8 ">
        <h1 class="heading-text-regular-large text-secondary-950 text-center" >Our Team</h1>

        <div class=" grid grid-cols-3 gap-6 mt-8">
            <div class="flex flex-col gap-4">
                <img class=" rounded-md" src="{{asset('upload/teamMamber.png')}}" alt="">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-950">Jaydon Lubin</h1>
                    <p class="body-text-bold-large text-secondary-800">Founder, CEO</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <img src="{{asset('upload/teamMamber.png')}}" alt="">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-950">Jaydon Lubin</h1>
                    <p class="body-text-bold-large text-secondary-800">Founder, CEO</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <img src="{{asset('upload/teamMamber.png')}}" alt="">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-950">Jaydon Lubin</h1>
                    <p class="body-text-bold-large text-secondary-800">Founder, CEO</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <img src="{{asset('upload/teamMamber.png')}}" alt="">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-950">Jaydon Lubin</h1>
                    <p class="body-text-bold-large text-secondary-800">Founder, CEO</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <img src="{{asset('upload/teamMamber.png')}}" alt="">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-950">Jaydon Lubin</h1>
                    <p class="body-text-bold-large text-secondary-800">Founder, CEO</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <img src="{{asset('upload/teamMamber.png')}}" alt="">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-950">Jaydon Lubin</h1>
                    <p class="body-text-bold-large text-secondary-800">Founder, CEO</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <img src="{{asset('upload/teamMamber.png')}}" alt="">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-950">Jaydon Lubin</h1>
                    <p class="body-text-bold-large text-secondary-800">Founder, CEO</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <img src="{{asset('upload/teamMamber.png')}}" alt="">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-950">Jaydon Lubin</h1>
                    <p class="body-text-bold-large text-secondary-800">Founder, CEO</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <img src="{{asset('upload/teamMamber.png')}}" alt="">
                <div>
                    <h1 class="title-text-bold-medium text-secondary-950">Jaydon Lubin</h1>
                    <p class="body-text-bold-large text-secondary-800">Founder, CEO</p>
                </div>
            </div>
        </div>

    </div>
    {{-- Our Team  --}}

     {{-- Client Reviews  --}}
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

    {{-- FaQ --}}
    <x-frontend.faq />
    {{-- FaQ --}}

</div>
@endsection


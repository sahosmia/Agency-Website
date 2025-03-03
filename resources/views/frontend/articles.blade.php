@extends('frontend.layouts.app')
@section('title', 'Articles')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-[52px] font-medium leading-[68px] text-center mt-5">
            Explore our least <span class=" text-primary-600"> Ariticles</span>
        </h1>
        <!-- search  -->

        <div class="flex justify-center gap-6 mt-14">
            <div class="flex w-[496px] items-center p-4 gap-4 border border-[#82848E] rounded-lg place-content-between">
                <p class="text-[22px] font-normal leading-7 w-auto mr-5">
                    Search by any niche
                </p>
                <button class="flex items-center justify-center text-white bg-[#EA380C] rounded-md px-3 py-2 gap-2">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>

                    <span class="text-lg font-semibold"> Search</span>
                </button>
            </div>

            <div class="flex w-[288px] items-center p-4 gap-4 border border-[#82848E] rounded-lg place-content-between">
                <p class="text-[22px] font-normal leading-7 w-auto mr-5">
                    All projects
                </p>
                <button id="dropdownButton"
                    class="flex items-center justify-center text-black border border-[#424348] rounded-md px-3 py-2 gap-2">
                    <span><i class="fa-solid fa-arrow-down"></i></span>
                </button>
            </div>
        </div>



        <!-- dropdown button  -->
        <div id="dropdownMenu"
            class="hidden flex-wrap w-[836px] p-4 my-4 items-center justify-center rounded-2xl border border-[#82848E] mx-auto">
            <ul class="grid grid-cols-3 gap-4">
                <li class="flex gap-2 w-[268px] px-2 py-4 items-center shrink">
                    <span><i class="fa-regular fa-circle"></i></span>
                    <span class="text-lg font-normal leading-6">Web Design & Development</span>
                </li>
                <li class="flex gap-2 w-[268px] px-2 py-4 items-center shrink">
                    <span><i class="fa-regular fa-circle"></i></span>
                    <span class="text-lg font-normal leading-6">Web Design & Development</span>
                </li>
                <li class="flex gap-2 w-[268px] px-2 py-4 items-center shrink">
                    <span><i class="fa-regular fa-circle"></i></span>
                    <span class="text-lg font-normal leading-6">Web Design & Development</span>
                </li>
                <li class="flex gap-2 w-[268px] px-2 py-4 items-center shrink">
                    <span><i class="fa-regular fa-circle"></i></span>
                    <span class="text-lg font-normal leading-6">Web Design & Development</span>
                </li>
                <li class="flex gap-2 w-[268px] px-2 py-4 items-center shrink">
                    <span><i class="fa-regular fa-circle"></i></span>
                    <span class="text-lg font-normal leading-6">Web Design & Development</span>
                </li>
                <li class="flex gap-2 w-[268px] px-2 py-4 items-center shrink">
                    <span><i class="fa-regular fa-circle"></i></span>
                    <span class="text-lg font-normal leading-6">Web Design & Development</span>
                </li>
                <li class="flex gap-2 w-[268px] px-2 py-4 items-center shrink">
                    <span><i class="fa-regular fa-circle"></i></span>
                    <span class="text-lg font-normal leading-6">Web Design & Development</span>
                </li>
                <li class="flex gap-2 w-[268px] px-2 py-4 items-center shrink">
                    <span><i class="fa-regular fa-circle"></i></span>
                    <span class="text-lg font-normal leading-6">Web Design & Development</span>
                </li>
                <li class="flex gap-2 w-[268px] px-2 py-4 items-center shrink">
                    <span><i class="fa-regular fa-circle"></i></span>
                    <span class="text-lg font-normal leading-6">Web Design & Development</span>
                </li>
            </ul>
        </div>


        <div class="w-[715px] h-[64px] mt-[140px] flex justify-center mx-auto">
            <p class="sub-title-medium-regular  leading-8 text-secondary-800">
                where we share the latest trends, insights, and best practices in
                technology, digital transformation, and business solutions.
            </p>
        </div>


        {{-- article item  --}}

        <div class="flex items-center justify-center content-center gap-x-[60px] gap-y-6 flex-wrap mt-[56px]">
             {{-- article item start   --}}
            <div class="flex flex-col w-[392px] items-start gap-4">
                <img class="h-[240px] w-full rounded-xl self-start" src="{{ asset('upload/articles/card img.png') }}"
                    alt="" />
                <button
                    class="mt-4 flex justify-center items-center px-4 py-2 gap-2 border rounded-[99px] border-[#CECFD3] text-[16px] font-normal leading-5">
                    Business
                </button>
                <h1 class="text-[28px] font-semibold leading-9">
                    Code Crafting: Mastering web Development
                </h1>
                <p class="w-full text-[16px] font-normal leading-5">
                    They Report concept the we of packed, place service well commas,
                    wait instead.
                </p>

                <a href="{{ route('articlesSinglePage') }}"
                    class="flex justify-center items-center gap-2 px-3 py-2 rounded-[4px] border border-[#424348] mt-4">
                    Read more
                </a>
            </div>
            <div class="flex flex-col w-[392px] items-start gap-4">
                <img class="h-[240px] w-full rounded-xl self-start" src="{{ asset('upload/articles/card img.png') }}"
                    alt="" />
                <button
                    class="mt-4 flex justify-center items-center px-4 py-2 gap-2 border rounded-[99px] border-[#CECFD3] text-[16px] font-normal leading-5">
                    Business
                </button>
                <h1 class="text-[28px] font-semibold leading-9">
                    Code Crafting: Mastering web Development
                </h1>
                <p class="w-full text-[16px] font-normal leading-5">
                    They Report concept the we of packed, place service well commas,
                    wait instead.
                </p>

                <a href="{{ route('articlesSinglePage') }}"
                    class="flex justify-center items-center gap-2 px-3 py-2 rounded-[4px] border border-[#424348] mt-4">
                    Read more
                </a>
            </div>
            <div class="flex flex-col w-[392px] items-start gap-4">
                <img class="h-[240px] w-full rounded-xl self-start" src="{{ asset('upload/articles/card img.png') }}"
                    alt="" />
                <button
                    class="mt-4 flex justify-center items-center px-4 py-2 gap-2 border rounded-[99px] border-[#CECFD3] text-[16px] font-normal leading-5">
                    Business
                </button>
                <h1 class="text-[28px] font-semibold leading-9">
                    Code Crafting: Mastering web Development
                </h1>
                <p class="w-full text-[16px] font-normal leading-5">
                    They Report concept the we of packed, place service well commas,
                    wait instead.
                </p>

                <a href="{{ route('articlesSinglePage') }}"
                    class="flex justify-center items-center gap-2 px-3 py-2 rounded-[4px] border border-[#424348] mt-4">
                    Read more
                </a>
            </div>
            <div class="flex flex-col w-[392px] items-start gap-4">
                <img class="h-[240px] w-full rounded-xl self-start" src="{{ asset('upload/articles/card img.png') }}"
                    alt="" />
                <button
                    class="mt-4 flex justify-center items-center px-4 py-2 gap-2 border rounded-[99px] border-[#CECFD3] text-[16px] font-normal leading-5">
                    Business
                </button>
                <h1 class="text-[28px] font-semibold leading-9">
                    Code Crafting: Mastering web Development
                </h1>
                <p class="w-full text-[16px] font-normal leading-5">
                    They Report concept the we of packed, place service well commas,
                    wait instead.
                </p>

                <a href="{{ route('articlesSinglePage') }}"
                    class="flex justify-center items-center gap-2 px-3 py-2 rounded-[4px] border border-[#424348] mt-4">
                    Read more
                </a>
            </div>
            <div class="flex flex-col w-[392px] items-start gap-4">
                <img class="h-[240px] w-full rounded-xl self-start" src="{{ asset('upload/articles/card img.png') }}"
                    alt="" />
                <button
                    class="mt-4 flex justify-center items-center px-4 py-2 gap-2 border rounded-[99px] border-[#CECFD3] text-[16px] font-normal leading-5">
                    Business
                </button>
                <h1 class="text-[28px] font-semibold leading-9">
                    Code Crafting: Mastering web Development
                </h1>
                <p class="w-full text-[16px] font-normal leading-5">
                    They Report concept the we of packed, place service well commas,
                    wait instead.
                </p>

                <a href="{{ route('articlesSinglePage') }}"
                    class="flex justify-center items-center gap-2 px-3 py-2 rounded-[4px] border border-[#424348] mt-4">
                    Read more
                </a>
            </div>
            <div class="flex flex-col w-[392px] items-start gap-4">
                <img class="h-[240px] w-full rounded-xl self-start" src="{{ asset('upload/articles/card img.png') }}"
                    alt="" />
                <button
                    class="mt-4 flex justify-center items-center px-4 py-2 gap-2 border rounded-[99px] border-[#CECFD3] text-[16px] font-normal leading-5">
                    Business
                </button>
                <h1 class="text-[28px] font-semibold leading-9">
                    Code Crafting: Mastering web Development
                </h1>
                <p class="w-full text-[16px] font-normal leading-5">
                    They Report concept the we of packed, place service well commas,
                    wait instead.
                </p>

                <a href="{{ route('articlesSinglePage') }}"
                    class="flex justify-center items-center gap-2 px-3 py-2 rounded-[4px] border border-[#424348] mt-4">
                    Read more
                </a>
            </div>

             {{-- article item end  --}}

            <div class="inline-flex justify-center items-center gap-2 px-6 py-3">
                <button
                    class="px-6 py-3 rounded-lg border border-gray-600 text-xl font-semibold leading-7 transition duration-200 hover:bg-gray-700 hover:text-white active:scale-95">
                    See more
                </button>
            </div>
        </div>
         {{-- article item  --}}


    </div>
    </div>

@endsection
@section('extra-js')
    <script>
        const dropdownButton = document.getElementById("dropdownButton");
        const dropdownMenu = document.getElementById("dropdownMenu");

        dropdownButton.addEventListener("click", () => {
            dropdownMenu.classList.toggle("hidden");
        });
    </script>
@endsection

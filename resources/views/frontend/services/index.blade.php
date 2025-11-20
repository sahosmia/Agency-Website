@extends('frontend.layouts.app')
@section('page_title', $servicesSettings['page_title'] ?? 'Services')
@section('meta_title', $servicesSettings['meta_title'] ?? 'Our Services')
@section('meta_description', $servicesSettings['meta_description'] ?? 'Explore our range of services.')


@section('content')
<div class="container mx-auto">
    <div class="w-full md:w-10/12 lg:w-8/12 mt-16 md:mt-20 mx-auto">
        <x-frontend.cusotm-heading :text="$servicesSettings['title'] ?? ''" />

        <p class="sub-title-medium-regular leading-8 text-secondary-800 text-center">
            {{ $servicesSettings['description'] ?? '' }}
        </p>
    </div>

    <!-- Search & Category Filter -->
    <form action="{{ route('services') }}" method="GET" class="mt-8 md:mt-14">
        <div class="flex flex-col md:flex-row justify-center items-center gap-4 md:gap-6">

            <!-- Search Input -->
            <div class="flex w-full md:w-[496px] items-center p-3 md:p-4 border border-secondary-400 rounded-lg">
                <input type="text" name="search" value="{{ request('search') }}"
                    class="label-text-regular-large p-0 flex-1 border-none ring-0 outline-0"
                    placeholder="Search by any niche">
                <button type="submit"
                    class="flex items-center justify-center text-white bg-primary-600 rounded-md px-3 py-2 gap-2">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                    <span class="text-lg font-semibold">Search</span>
                </button>
            </div>


        </div>


    </form>



    <!-- Service List -->
    <div class="mt-14">
        @if ($services->count() > 0)

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10 md:gap-y-[60px] ">
            @foreach ($services as $service)
            <div class="border border-secondary-400 rounded-xl p-6">

                <img class="max-h-72 w-full object-cover rounded" src="{{ $service->image_url }}"
                    alt="{{ $service->name }}" />
                <div class="mt-4">
                    <button
                        class="px-4 py-2 border rounded-full border-secondary-200 label-text-regular-small text-secondary-800">
                        {{ $service->category->title }}
                    </button>
                    <h2 class="title-text-bold-medium text-secondary-950 pt-2">
                        {{ $service->name }}
                    </h2>
                    <p class="body-text-regular-medium text-secondary-600 pt-1">
                        {{ $service->description }}
                    </p>
                </div>

                <a href="{{ route('services.show', $service->slug) }}"
                    class="inline-block px-3 py-2 rounded-sm border border-secondary-800 label-text-bold-small text-secondary-800 mt-4">
                    Read more
                </a>
            </div>
            @endforeach
        </div>
        @else


        <h3 class="heading-text-regular-large text-secondary-800 m-auto">
            This service is not available on our website!
        </h3>
        @endif
    </div>


</div>

<!-- FAQ Section -->
<div class="mt-10 md:mt-16 mb-10 md:mb-20 max-w-[95%] md:max-w-3xl lg:max-w-5xl mx-auto px-4" x-data="{ open: 1 }">
    <!-- Section Title -->
    <h2
        class="heading-text-regular-medium text-center text-secondary-900 text-2xl md:text-3xl lg:text-4xl font-semibold">
        {{ $homeSettings['faq_title'] ?? 'Frequently Asked Questions' }}
    </h2>

    <x-frontend.faq-accordion :faqs="$faqs" />
</div>
{{-- FaQ --}}
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
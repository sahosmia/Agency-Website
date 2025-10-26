@extends('frontend.layouts.app')
@section('title', 'Services')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl md:text-[52px] font-medium leading-tight md:leading-[68px] text-center mt-5">
            Explore our least <span class="text-primary-600">Services</span>
        </h1>
        <!-- Search Form -->
        <form action="{{ route('services') }}" method="GET" class="mt-8 md:mt-14">
            <div class="flex flex-col md:flex-row justify-center items-center gap-4 md:gap-6">
                <!-- Search Input -->
                <div class="flex w-full md:w-[496px] items-center p-3 md:p-4 border border-secondary-400 rounded-lg">
                    <input type="text" name="search" value="{{ request('search') }}" class="label-text-regular-large p-0 flex-1 border-none ring-0 outline-0" placeholder="Search by any niche">
                    <button type="submit" class="flex items-center justify-center text-white bg-primary-600 rounded-md px-3 py-2 gap-2">
                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        <span class="text-lg font-semibold">Search</span>
                    </button>
                </div>
                <!-- Category Filter Button -->
                <div class="flex w-full md:w-[288px] items-center p-3 md:p-4 gap-4 border border-secondary-400 rounded-lg justify-between cursor-pointer" id="dropdownButton">
                    <p class="label-text-regular-large truncate">
                        {{ request('category') ? $service_categories->firstWhere('id', request('category'))->title : 'All Category' }}
                    </p>
                    <span><i class="fa-solid fa-arrow-down"></i></span>
                </div>
            </div>
            <!-- Category Filter Dropdown -->
            <div id="dropdownMenu" class="hidden w-full md:w-10/12 mt-4 mx-auto border border-secondary-400 rounded-2xl">
                <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-4 md:p-8">
                    <li class="flex items-center gap-2">
                        <input type="radio" id="category_all" name="category" value="" onchange="this.form.submit()" {{ request('category') == '' ? 'checked' : '' }} />
                        <label for="category_all" class="text-base md:text-lg font-normal leading-6">All Projects</label>
                    </li>
                    @foreach ($service_categories as $item)
                        <li class="flex items-center gap-2">
                            <input type="radio" id="category_{{ $item->id }}" name="category" value="{{ $item->id }}" onchange="this.form.submit()" {{ request('category') == $item->id ? 'checked' : '' }} />
                            <label for="category_{{ $item->id }}" class="text-base md:text-lg font-normal leading-6">{{ $item->title }}</label>
                        </li>
                    @endforeach
                </ul>
            </div>
        </form>

        @if ($services->count() != 0)
            <div class="w-full md:w-8/12 lg:w-6/12 mt-16 md:mt-20 flex justify-center mx-auto">
                <p class="sub-title-medium-regular leading-8 text-secondary-800 text-center">
                    where we share the latest trends, insights, and best practices in
                    technology, digital transformation, and business solutions.
                </p>
            </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10 md:gap-y-[60px] mt-14">
            @forelse ($services as $service)
                <div>
                    <img class="max-h-72 w-full object-cover rounded-xl" src="{{ asset('upload/services/card img.png') }}" alt="{{ $service->title }}" />
                    <div class="mt-4">
                        <button class="px-4 py-2   border rounded-full border-secondary-200 label-text-regular-small text-secondary-800"> {{ $service->service_category->title }} </button>
                        <h2 class="title-text-bold-medium text-secondary-950 pt-2"> {{ $service->title }} </h2>
                        <p class="body-text-regular-medium text-secondary-600 pt-1"> {{ $service->short_text }} </p>
                    </div>

                    <a href="{{ route('services.show', $service->slug) }}" class="inline-block px-3 py-2 rounded-sm border border-secondary-800 label-text-bold-small text-secondary-800 mt-4"> Read more </a>
                </div>
            @empty
                <h3 class="heading-text-regular-large text-secondary-800 m-auto">No service available this area!</h3>
            @endforelse
        </div>
        @if ($services->hasMorePages())
            <div class="inline-flex justify-center items-center gap-2 px-6 py-3">
                <button type="button" class="px-6 py-3 rounded-lg border border-gray-600 text-xl font-semibold leading-7 transition duration-200 hover:bg-gray-700 hover:text-white active:scale-95">
                    See more
                </button>
            </div>
        @endif
    </div>

    <x-frontend.faq />

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

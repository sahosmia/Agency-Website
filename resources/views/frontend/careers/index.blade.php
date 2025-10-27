@extends('frontend.layouts.app')
@section('title', $careersSettings['page_title'] ?? 'Careers')

@section('content')
    <div class="container mx-auto">
        <h1 class="heading-text-regular-large text-center mt-20">{{ $careersSettings['title'] ?? '' }}</h1>

        <!-- search  -->
        <!-- Search Form -->
        <form action="{{ route('careers.index') }}" method="GET">

            <div class="flex justify-center gap-6 mt-14">

                <!-- Search Input -->
                <div class="flex w-[496px] items-center p-4 pl-0 gap-2 border border-secondary-400 rounded-lg place-content-between">
                    <input type="text" name="search" value="{{ request('search') }}" class="label-text-regular-large p-0 flex-1 border-none ring-0 outline-0" placeholder="Search by job title">
                    <button type="submit" class="flex items-center justify-center text-white bg-primary-600 rounded-md px-3 py-2 gap-2">
                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        <span class="text-lg font-semibold"> Search</span>
                    </button>
                </div>


                <!-- Category Filter Button -->
                <div class="flex w-[288px] items-center p-4 gap-4 border border-secondary-400 rounded-lg place-content-between cursor-pointer" id="dropdownButton">
                    <p class="hidden md:block label-text-regular-large w-auto mr-5 truncate">
                        {{ request('category') ? $vacancy_categories->firstWhere('id', request('category'))->title : 'All Category' }}
                    </p>
                    <span><i class="fa-solid fa-arrow-down"></i></span>
                </div>
            </div>

            <!-- Category Filter Dropdown -->
            <div id="dropdownMenu" class="hidden flex-wrap w-full md:w-10/12 mt-4 items-center justify-center rounded-2xl border border-secondary-400 mx-auto">
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 py-8">
                    <li class="flex gap-2 px-2 items-center shrink">
                        <input type="radio" id="category_all" name="category" value="" onchange="this.form.submit()" {{ request('category') == '' ? 'checked' : '' }} />
                        <label for="category_all" class="text-lg font-normal leading-6">All Projects</label>
                    </li>
                    @foreach ($vacancy_categories as $item)
                        <li class="flex gap-2 px-2 items-center shrink">
                            <input type="radio" id="category_{{ $item->id }}" name="category" value="{{ $item->id }}" onchange="this.form.submit()" {{ request('category') == $item->id ? 'checked' : '' }} />
                            <label for="category_{{ $item->id }}" class="text-lg font-normal leading-6 ">{{ $item->title }}</label>
                        </li>
                    @endforeach
                </ul>
            </div>
        </form>




        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-y-[60px] gap-x-6 mt-14">
            @foreach ($vacancies as $vacancy)
                <div class="border border-secondary-400 rounded-xl p-6 flex flex-col gap-6">
                    <div>
                        <h2 class="sub-title-large-regular text-secondary-950 "> {{ $vacancy->title }} </h2>
                        <button class="px-4 py-2  mt-2  border rounded-full border-secondary-200 label-text-regular-small text-secondary-800"> {{ $vacancy->vacancy_category->title }} </button>
                    </div>

                    <div class="flex flex-col gap-4">
                        <div class="flex gap-2 items-center body-text-regular-large text-secondary-600">
                            <img src="{{ asset('/frontend/images/icons/Time.svg') }}" alt="">
                            <p>{{ $vacancy->type }}</p>
                        </div>
                        <div class="flex gap-2 items-center body-text-regular-large text-secondary-600">
                            <img src="{{ asset('/frontend/images/icons/location.svg') }}" alt="">
                            <p>{{ $vacancy->location }}</p>
                        </div>
                        <div class="flex gap-2 items-center body-text-regular-large text-secondary-600">
                            <img src="{{ asset('/frontend/images/icons/Calendar.svg') }}" alt="">
                            <p>Date line: {{ \Carbon\Carbon::parse($vacancy->end_date)->format('d F, Y') }}</p>
                        </div>
                    </div>

                    <div class="flex  items-center justify-between gap-4">
                        <a href="{{ route('careers.show', $vacancy->slug) }}" class="flex-1 label-text-bold-medium text-secondary-600 text-center">Learn More</a>
                        <a class=" px-3 py-2 rounded-sm border border-secondary-800 label-text-bold-small text-secondary-800 flex-1 flex justify-center" href="{{ route('careers.apply', $vacancy->slug) }}"> Apply Now </a>
                    </div>
                </div>
            @endforeach
        </div>


        @if ($vacancies->count() == 0)
            <div class="w-8/12 text-center m-auto pt-20">
                <h2 class="heading-text-regular-large text-secondary-800 m-auto text-center">No vacancy available this area!</h2>
                <p class="sub-title-medium-regular text-secondary-600 pt-8">
                    If you have exceptional skills in development, design, marketing, or any other relevant field, we’d love to
                    hear from you! We encourage you to submit your resume. We’ll keep your details on file and reach out when a
                    suitable opportunity arises.
                </p>
            </div>

            <form action="">
                <div class="flex w-6/12 flex-col p-6 gap-6 border border-secondary-400 rounded-2xl m-auto mt-8 mb-20">
                    <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your name</label>
                        <input type="text" name="" id="" placeholder="e.g.  Jhon brgke" value="">
                    </div>
                    <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your e-mail</label>
                        <input type="email" name="" id="" placeholder="e.g.  jhonbrgke@gmail.com" value="">
                    </div>

                    <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your desired job</label><input type="text" name="" id="" placeholder="e.g.  Web development or UI/UX designer" value="">
                    </div>
                    <div class="flex gap-2 flex-col"><label class="inpul-label" for="">About yourself</label>
                        <textarea rows="5" name="" id="" placeholder="Write your message here"></textarea>
                    </div>
                    <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your portfolio</label><input type="text" name="" id="" placeholder="e.g.  GitHub portfolio or Dribble portfolio or Linkndin"
                            value="">
                    </div>

                    <hr class="h-px  bg-secondary-400 border-0 ">
                    <button class="btn-outline-full">Save & Continue <span class="
                    "> <i class="fa-solid fa-arrow-right"></i></span></button>
                </div>
            </form>
        @endif


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

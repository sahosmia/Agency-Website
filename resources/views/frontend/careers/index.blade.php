@extends('frontend.layouts.app')
@section('title', 'Career')

@section('content')
    <div class="container mx-auto">
        <h1 class="heading-text-regular-large text-center mt-20">Join our team best Opportunity <span class=" text-primary-600"> Opportunity</span> </h1>

        <!-- search  -->
        <!-- Search Form -->
        <form action="{{ route('front.careers.index') }}" method="GET">

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


        @if ($vacancies->count() != 0)
            <div class="w-full md:w-6/12 mt-20 md:mt-32 flex justify-center mx-auto">
                <p class="sub-title-medium-regular  leading-8 text-secondary-800 text-center">
                    where we share the latest trends, insights, and best practices in
                    technology, digital transformation, and business solutions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3    gap-y-[60px] gap-x-6 mt-14">
                @foreach ($vacancies as $vacancy)
                    <div>
                        <div class="mt-4">
                            <button class="px-4 py-2   border rounded-full border-secondary-200 label-text-regular-small text-secondary-800"> {{ $vacancy->vacancy_category->title }} </button>
                            <h2 class="title-text-bold-medium text-secondary-950 pt-2"> {{ $vacancy->title }} </h2>
                            <p class="body-text-regular-medium text-secondary-600 pt-1"> {{ $vacancy->short_text }} </p>
                        </div>

                        <a href="{{ route('front.careers.show', $vacancy->slug) }}" class="inline-block px-3 py-2 rounded-sm border border-secondary-800 label-text-bold-small text-secondary-800 mt-4"> Read more </a>
                    </div>
                @endforeach
            </div>
        @endif


        @if ($vacancies->count() == 0)
            <div class="w-8/12 text-center m-auto pt-20">
                <h3 class="heading-text-regular-large text-secondary-800 m-auto text-center">No vacancy available this area!</h3>
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
                    <div class="flex gap-2 flex-col"><label class="inpul-label" for="">Your portfolio</label><input type="text" name="" id="" placeholder="e.g.  GitHub portfolio or Dribble portfolio or Linkndin" value="">
                    </div>

                    <hr class="h-px  bg-secondary-400 border-0 ">
                    <button class="btn-outline-full">Save & Continue <span class="
                    "> <i class="fa-solid fa-arrow-right"></i></span></button>
                </div>
            </form>
        @endif

        @if ($vacancies->hasMorePages())
            <div class="inline-flex justify-center items-center gap-2 px-6 py-3">
                <button type="button" class="px-6 py-3 rounded-lg border border-gray-600 text-xl font-semibold leading-7 transition duration-200 hover:bg-gray-700 hover:text-white active:scale-95">
                    See more
                </button>
            </div>
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

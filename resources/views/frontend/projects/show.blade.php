@extends('frontend.layouts.app')
@section('title', $projectDetailSettings['page_title'] ?? 'Project Details')

@section('content')

    <div class="container ">

        <h2 class="w-full lg:w-8/12 heading-text-regular-large  text-secondary-950 mt-20">{{ $project->title }}</h2>
        <div class="mt-7 inline-flex items-center flex-wrap gap-4 ">
            <div class="hero-badge-desktop">Digital Marketing</div>
            <div class="hero-badge-desktop">Digital Marketing</div>
            <div class="hero-badge-desktop">Digital Strategy</div>
            <div class="hero-badge-desktop">Email Campaigns</div>
            <div class="hero-badge-desktop">Boost Engagement </div>
            <div class="hero-badge-desktop">Increase Conversions</div>
        </div>

        <div class="flex mt-14">
            <a href="{{ $project->live_preview_link }}" class="bg-white  flex justify-center items-center gap-2 border border-secondary-400 rounded py-2 px-3 text-nowrap  text-secondary-800 text-base/5 font-semibold">See live preview <span> <i
                        class="fa-solid fa-arrow-up-right-from-square"></i></span> </a>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4   justify-center   gap-6 pb-15 pt-20">
            <div class=" flex items-center">
                <p class="body-text-regular-medium text-secondary-800">We specialize in digital solutions to help your business grow and thrive in the digital landscape.</p>
            </div>
            @for ($i = 0; $i < 3; $i++)
                <div class="hero-card">
                    <h1 class="title-text-bold-medium text-secondary-900 ">95%</h1>
                    <h2 class="sub-title-large-regular text-secondary-900">Satisfied Customers</h2>
                    <p class="body-text-regular-small text-secondary-800">We are committed to providing the best solutions to build happy relationships with our customers.</p>
                </div>
            @endfor
        </div>



        <x-frontend.content-card title="Project Overview" :content="$project->project_overview" />
        <x-frontend.content-card title="Problem" :content="$project->problem" />
        <x-frontend.content-card title="Challenge" :content="$project->challenge" />
        <x-frontend.content-card title="Workflow scenario" :content="$project->workflow_scenario" />
        <x-frontend.content-card title="Solutions" :content="$project->solutions" />

        {{-- <img src="{{ asset('upload/projects/') }}" alt=""> --}}
        {{-- {{ $project->screenshots }} --}}

        <div class="space-y-7 p-2">
            @foreach ($project->screenshots as $screenshot)
                <img src="{{ asset('upload/projects/screenshots/' . $screenshot) }}" alt="Screenshot" class="w-full h-auto rounded-lg">
            @endforeach
        </div>


        <div class="mt-20 xl:mb-20 overflow-hidden">
            <h1 class="heading-text-regular-medium text-center text-secondary-900">{{ $projectDetailSettings['client_reviews_title'] ?? '' }}</h1>
            <div class="w-1/2 mt-8 mx-auto">
                <x-frontend.client-review :review="$project->clientReview" />
            </div>
        </div>





        {{-- project Slider Section start ================================================== --}}
        <div class="slider-container mt-20 xl:mb-20 overflow-hidden">
            <div>
                <h1 class="heading-text-regular-medium text-center text-secondary-900">{{ $projectDetailSettings['other_projects_title'] ?? '' }}</h1>
                <div class="flex justify-between my-8 gap-5">
                    <p class="body-text-regular-medium text-secondary-800 w-full  md:w-1/2"> {{ $projectDetailSettings['other_projects_description'] ?? '' }} </p>
                    <div class="button-group border-secondary-600">
                        <button class="prev-btn button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i> </button>
                        <button class="next-btn button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-right"></i> </button>
                    </div>
                </div>
            </div>

            <div class="projects-container flex gap-10">
                @foreach ($projects as $item)
                    <div class="project-item">
                        <x-frontend.project-card :project="$item" />
                    </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection

@section('extra-js')
    <script>
        $(document).ready(function() {
            let total = $('.project-item').length;
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

            $('.projects-container').slick({
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
                $('.projects-container').slick('slickSetOption', 'slidesToShow', visible, true);
            });
        });
    </script>
@endsection

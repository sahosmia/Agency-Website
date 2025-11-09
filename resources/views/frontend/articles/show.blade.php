@extends('frontend.layouts.app')
@section('meta_title', $article->meta_title ?? 'Article Details')
@section('meta_description', $article->meta_description ?? 'Article Details')

@section('content')
<div class="container ">

    <h1 class="w-full lg:w-8/12 heading-text-regular-large  text-secondary-950 mt-20">{{ $article->title }}</h1>
    <div class="mt-7 inline-flex items-center flex-wrap gap-4 ">
        <div class="hero-badge-desktop">{{ $article->category->title }}</div>
        @foreach ($article->tags as $tag)
        <div class="hero-badge-desktop">{{ $tag->name }}</div>
        @endforeach
    </div>
    <div class="flex flex-col mx-auto items-center justify-center mt-20">
        <div class="w-8/12 ">
            <img class="rounded-lg m-auto w-full h-auto object-cover" src="{{ $article->thumbnail_url }}" alt="">
            <div class="prose lg:prose-xl mt-14">
                {!! $article->long_text !!}
            </div>
        </div>
    </div>




    {{-- Article Slider Section start ================================================== --}}
    <div class="slider-container mt-20 xl:mb-20 overflow-hidden">
        <div>
            <h2 class="heading-text-regular-medium text-center text-secondary-900">{{
                $articleDetailSettings['other_articles_title'] ?? '' }}</h2>
            <div class="flex justify-between my-8 gap-5">
                <p class="body-text-regular-medium text-secondary-800 w-full  md:w-1/2"> {{
                    $articleDetailSettings['other_articles_description'] ?? '' }} </p>
                <div class="button-group border-secondary-600">
                    <button class="prev-btn button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"> <i
                            class="w-5 h-5 fa-solid fa-circle-chevron-left"></i> </button>
                    <button class="next-btn button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"> <i
                            class="w-5 h-5 fa-solid fa-circle-chevron-right"></i> </button>
                </div>
            </div>
        </div>

        <div class="articles-container flex gap-10">
            @foreach ($articles as $item)
            <div class="article-item w-1/3">
                <img class="h-72 w-full object-cover rounded-xl self-start" src="{{ $item->thumbnail_url }}"
                    alt="{{$item->title}}" />
                <div class="mt-4">
                    <button
                        class="px-4 py-2   border rounded-full border-secondary-200 label-text-regular-small text-secondary-800">
                        {{ $item->category->title }} </button>
                    <h3 class="title-text-bold-medium text-secondary-950 pt-2"> {{ $item->title }} </h3>
                    <p class="body-text-regular-medium text-secondary-600 pt-1"> {{ $item->short_text }} </p>
                </div>

                <a href="{{ route('articles.show', $item->slug) }}"
                    class="inline-block px-3 py-2 rounded-sm border border-secondary-800 label-text-bold-small text-secondary-800 mt-4">
                    Read more </a>
            </div>
            @endforeach
        </div>
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

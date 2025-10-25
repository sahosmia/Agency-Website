@extends('frontend.layouts.app')
@section('title', 'Article - ' . $article->title)

@section('content')

    <div class="container ">

        <h2 class="w-full lg:w-8/12 heading-text-regular-large  text-secondary-950 mt-20">{{ $article->title }}</h2>
        <div class="mt-7 inline-flex items-center flex-wrap gap-4 ">
            <div class="hero-badge-desktop">Digital Marketing</div>
            <div class="hero-badge-desktop">Digital Marketing</div>
            <div class="hero-badge-desktop">Digital Strategy</div>
            <div class="hero-badge-desktop">Email Campaigns</div>
            <div class="hero-badge-desktop">Boost Engagement </div>
            <div class="hero-badge-desktop">Increase Conversions</div>
        </div>

        <div class="flex flex-col mx-auto items-center justify-center mt-20">
            <div class="w-8/12 ">
                <img class="rounded-lg m-auto w-full h-auto object-cover" src="{{ asset('upload/articles/card img.png') }}" alt="">
                <p class=" text-secondary-600 sub-title-medium-regular mt-14"> In today’s digital world, email marketing remains one of the most powerful tools for businesses to engage their audience, build relationships, and drive conversions. Whether
                    you're a startup or an established enterprise, an effective email campaign can enhance brand visibility, increase sales, and improve customer retention. </p>
                <p class="text-secondary-800 sub-title-medium-regular mt-8"> In this article, we will explore proven email campaign strategies to help you maximize your marketing efforts and achieve your business goals. </p>
            </div>
        </div>

        {{-- card section  --}}
        <div class="my-20">
            <div class="card">
                <h1 class="heading-text-regular-medium  text-secondary-950 tracking-[0.88px]">Understanding
                    the Importance of Email Marketing</h1>
                <hr class="h-px bg-secondary-400 border-none">
                <div class="flex flex-col justify-center gap-4 text-secondary-800">
                    <p class="label-text-regular-large ">Email marketing is a cost-effective and direct
                        way to communicate with potential and existing customers. Unlike social media, where algorithms
                        control visibility, email allows businesses to directly reach their audience’s inbox.</p>

                    <h5 class="sub-title-medium-bold ">Key Benefits of Email Marketing:</h5>
                    <ul class="list-disc ml-6 sub-title-medium-regular">
                        <li>High ROI – Email campaigns generate an average return of $42 for every $1 spent (Source: DMA).</li>
                        <li>Personalized Engagement – Tailored messages improve customer relationships.</li>
                        <li>Automation & Efficiency – Saves time with scheduled and triggered emails.</li>
                        <li>Measurable Performance – Track open rates, click-through rates, and conversions.</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <h1 class="heading-text-regular-medium  text-secondary-950 tracking-[0.88px]">Defining Your Email Campaign Goals</h1>
                <hr class="h-px bg-secondary-400 border-none">
                <div class="flex flex-col justify-center gap-4 text-secondary-800">
                    <p class="label-text-regular-large ">Email marketing is a cost-effective and direct
                        way to communicate with potential and existing customers. Unlike social media, where algorithms
                        control visibility, email allows businesses to directly reach their audience’s inbox.</p>

                    <h5 class="sub-title-medium-bold ">Key Benefits of Email Marketing:</h5>
                    <ul class="list-disc ml-6 sub-title-medium-regular">
                        <li>High ROI – Email campaigns generate an average return of $42 for every $1 spent (Source: DMA).</li>
                        <li>Personalized Engagement – Tailored messages improve customer relationships.</li>
                        <li>Automation & Efficiency – Saves time with scheduled and triggered emails.</li>
                        <li>Measurable Performance – Track open rates, click-through rates, and conversions.</li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col justify-center w-full md:w-10/12 xl:w-6/12 mx-auto mt-14">
                <h1 class="heading-text-bold-large">Analyzing & Optimizing Your Campaign Performance</h1>
                <p class="mt-4 sub-title-medium-regular text-secondary-600">To improve your email campaigns, track key
                    performance metrics and adjust strategies accordingly.

                </p>
                <div class=" mt-8">
                    <h3 class=" sub-title-medium-regular text-secondary-600 ">Key Email Metrics to Monitor:</h3>
                    <ul class="sub-title-medium-regular text-secondary-600 ">
                        <li> Open Rate – Percentage of recipients who open your email.</li>
                        <li>Click-Through Rate (CTR) – Percentage of recipients who click a link.</li>
                        <li>Conversion Rate – Percentage of users who complete a desired action.</li>
                        <li>Bounce Rate – Percentage of undelivered emails due to invalid addresses.</li>
                    </ul>
                </div>

                <div class="mt-4">
                    <p class=" sub-title-medium-regular text-secondary-600"> Pro Tip: A/B test different subject lines, CTAs, and email designs to identify what works best for your audience.</p>
                </div>

            </div>

            <div class="flex flex-col justify-center  w-full md:w-10/12 xl:w-6/12 mx-auto mt-14">
                <h1 class="heading-text-bold-large">Conclusion: Elevate Your Email Marketing Strategy</h1>
                <p class="mt-4 sub-title-medium-regular text-secondary-600">A well-planned email campaign can significantly
                    boost customer engagement, increase sales, and build long-term relationships. By following these
                    strategies—building a strong email list, crafting compelling content, optimizing timing, leveraging
                    automation, and analyzing performance—you can create highly effective email marketing campaigns that drive
                    results.
                </p>
                <p class=" mt-5 sub-title-medium-regular text-secondary-600">
                    Ready to enhance your email marketing strategy? Start applying these insights today and watch your engagement soar!
                </p>
            </div>
        </div>




        {{-- Article Slider Section start ================================================== --}}
        <div class="slider-container mt-20 xl:mb-20 overflow-hidden">
            <div>
                <h1 class="heading-text-regular-medium text-center text-secondary-900">Other Articles</h1>
                <div class="flex justify-between my-8 gap-5">
                    <p class="body-text-regular-medium text-secondary-800 w-full  md:w-1/2"> Stay informed with our expert insights! Explore articles on the latest trends, tips, and strategies in web design, digital marketing, and more. </p>
                    <div class="button-group border-secondary-600">
                        <button class="prev-btn button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i> </button>
                        <button class="next-btn button-label w-9 px-3 py-2 border-secondary-600 text-secondary-600"> <i class="w-5 h-5 fa-solid fa-circle-chevron-right"></i> </button>
                    </div>
                </div>
            </div>

            <div class="articles-container flex gap-10">
                @foreach ($articles as $item)
                    <div class="article-item w-1/3">
                        <img class=" max-h-72 w-full object-cover rounded-xl self-start" src="{{ asset('upload/articles/card img.png') }}" alt="Article Image" />
                        <div class="mt-4">
                            <button class="px-4 py-2   border rounded-full border-secondary-200 label-text-regular-small text-secondary-800"> {{ $item->article_category->title }} </button>
                            <h2 class="title-text-bold-medium text-secondary-950 pt-2"> {{ $item->title }} </h2>
                            <p class="body-text-regular-medium text-secondary-600 pt-1"> {{ $item->short_text }} </p>
                        </div>

                        <a href="{{ route('articles.show', $item->slug) }}" class="inline-block px-3 py-2 rounded-sm border border-secondary-800 label-text-bold-small text-secondary-800 mt-4"> Read more </a>
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

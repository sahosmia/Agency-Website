@extends('frontend.layouts.app')
@section('title', 'singlepagearticle')

@section('content')

    <div class="container ">

        {{-- heading text  --}}
        <div class="w-[911px]">
            <h1 class=" heading-text-regular-large  text-secondary-950 mt-[80px]">Marketing Insights: Email Campaign
                Strategies</h1>
        </div>

        <div class="mt-7 inline-flex items-center gap-4 ">
            <div class=" hero-badge-desktop text-secondary-800"><span>
                    Digital Marketing</span></div>
            <div class="hero-badge-desktop  text-secondary-800">Digital Marketing</div>
            <div class="hero-badge-desktop text-secondary-800">Digital Strategy</div>
            <div class="hero-badge-desktop text-secondary-800">Email Campaigns</div>
            <div class="hero-badge-desktop text-secondary-800">Boost Engagement </div>
            <div class="hero-badge-desktop text-secondary-800">Increase Conversions</div>
        </div>

        {{-- image placeholder --}}
        {{-- <div class="flex flex-col mx-auto items-center justify-center mt-[80px]">
            <div class="w-[808px] h-[496px] shrink  ">
                <img class="rounded-lg w-full" src="{{ asset('upload/articles/card img.png') }}" alt="">
            </div>

            <div class="w-[808px] mt-[56px]">
                <p class="">In today’s digital world, email marketing remains one of the most powerful tools for businesses to engage
                    their audience, build relationships, and drive conversions. Whether you're a startup or an established
                    enterprise, an effective email campaign can enhance brand visibility, increase sales, and improve
                    customer retention.

                    In this article, we will explore proven email campaign strategies to help you maximize your marketing
                    efforts and achieve your business goals.</p>
            </div>
        </div> --}}

        <div class="flex flex-col mx-auto items-center justify-center mt-[80px]">
            <!-- Image Container -->
            <div class="image-placeholder ">
                <img class="rounded-lg w-full h-full object-cover" src="{{ asset('upload/articles/card img.png') }}"
                    alt="">
            </div>

            <!-- Text Section -->
            <div class="w-[808px] mt-6">
                <p class=" text-secondary-800 sub-title-medium-regular">
                    In today’s digital world, email marketing remains one of the most powerful tools for businesses to
                    engage
                    their audience, build relationships, and drive conversions. Whether you're a startup or an established
                    enterprise, an effective email campaign can enhance brand visibility, increase sales, and improve
                    customer retention.
                </p>
                <p class="text-secondary-800 sub-title-medium-regular mt-4">
                    In this article, we will explore proven email campaign strategies to help you maximize your marketing
                    efforts and achieve your business goals.
                </p>
            </div>


        </div>

        {{-- card section  --}}

        <div class="card border-secondary-400 mt-[140px]">
            <div>
                <p class=" text-secondary-800">[01]</p>
            </div>
            <span class="border w-full stroke-secondary-400"></span>
            <div class="flex gap-6">

                <div class="w-[472px] self-stretch">
                    <h1 class=" heading-text-regular-medium  text-secondary-950  leading-14 tracking[0.88px]">Understanding
                        the Importance of Email Marketing</h1>
                </div>

                <div class="flex flex-col justify-center gap-4 w-[680px]">
                    <p class="label-text-regular-large text-secondary-800 ">Email marketing is a cost-effective and direct
                        way to communicate with potential and existing customers. Unlike social media, where algorithms
                        control visibility, email allows businesses to directly reach their audience’s inbox.</p>

                    <h3 class="sub-title-medium-regular font-semibold">Key Benefits of Email Marketing:</h3>
                    <p>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">High ROI – Email campaigns
                            generate an average return of $42 for every $1 spent (Source: DMA).</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Personalized Engagement –
                            Tailored messages improve customer relationships.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Automation & Efficiency – Saves
                            time with scheduled and triggered emails.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Measurable Performance – Track
                            open rates, click-through rates, and conversions.</li>
                    </p>
                </div>
            </div>

        </div>
        <div class="card border-secondary-400 mt-[56px]">
            <div>
                <p class=" text-secondary-800">[01]</p>
            </div>
            <span class="border w-full stroke-secondary-400"></span>
            <div class="flex gap-6">

                <div class="w-[472px] self-stretch">
                    <h1 class=" heading-text-regular-medium  text-secondary-950  leading-14 tracking[0.88px]">Understanding
                        the Importance of Email Marketing</h1>
                </div>

                <div class="flex flex-col justify-center gap-4 w-[680px]">
                    <p class="label-text-regular-large text-secondary-800 ">Email marketing is a cost-effective and direct
                        way to communicate with potential and existing customers. Unlike social media, where algorithms
                        control visibility, email allows businesses to directly reach their audience’s inbox.</p>

                    <h3 class="sub-title-medium-regular font-semibold">Key Benefits of Email Marketing:</h3>
                    <p>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">High ROI – Email campaigns
                            generate an average return of $42 for every $1 spent (Source: DMA).</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Personalized Engagement –
                            Tailored messages improve customer relationships.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Automation & Efficiency – Saves
                            time with scheduled and triggered emails.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Measurable Performance – Track
                            open rates, click-through rates, and conversions.</li>
                    </p>
                </div>
            </div>

        </div>
        <div class="card border-secondary-400 mt-[56px]">
            <div>
                <p class=" text-secondary-800">[01]</p>
            </div>
            <span class="border w-full stroke-secondary-400"></span>
            <div class="flex gap-6">

                <div class="w-[472px] self-stretch">
                    <h1 class=" heading-text-regular-medium  text-secondary-950  leading-14 tracking[0.88px]">Understanding
                        the Importance of Email Marketing</h1>
                </div>

                <div class="flex flex-col justify-center gap-4 w-[680px]">
                    <p class="label-text-regular-large text-secondary-800 ">Email marketing is a cost-effective and direct
                        way to communicate with potential and existing customers. Unlike social media, where algorithms
                        control visibility, email allows businesses to directly reach their audience’s inbox.</p>

                    <h3 class="sub-title-medium-regular font-semibold">Key Benefits of Email Marketing:</h3>
                    <p>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">High ROI – Email campaigns
                            generate an average return of $42 for every $1 spent (Source: DMA).</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Personalized Engagement –
                            Tailored messages improve customer relationships.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Automation & Efficiency – Saves
                            time with scheduled and triggered emails.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Measurable Performance – Track
                            open rates, click-through rates, and conversions.</li>
                    </p>
                </div>
            </div>

        </div>
        <div class="card border-secondary-400 mt-[56px]">
            <div>
                <p class=" text-secondary-800">[01]</p>
            </div>
            <span class="border w-full stroke-secondary-400"></span>
            <div class="flex gap-6">

                <div class="w-[472px] self-stretch">
                    <h1 class=" heading-text-regular-medium  text-secondary-950  leading-14 tracking[0.88px]">Understanding
                        the Importance of Email Marketing</h1>
                </div>

                <div class="flex flex-col justify-center gap-4 w-[680px]">
                    <p class="label-text-regular-large text-secondary-800 ">Email marketing is a cost-effective and direct
                        way to communicate with potential and existing customers. Unlike social media, where algorithms
                        control visibility, email allows businesses to directly reach their audience’s inbox.</p>

                    <h3 class="sub-title-medium-regular font-semibold">Key Benefits of Email Marketing:</h3>
                    <p>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">High ROI – Email campaigns
                            generate an average return of $42 for every $1 spent (Source: DMA).</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Personalized Engagement –
                            Tailored messages improve customer relationships.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Automation & Efficiency – Saves
                            time with scheduled and triggered emails.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Measurable Performance – Track
                            open rates, click-through rates, and conversions.</li>
                    </p>
                </div>
            </div>

        </div>
        <div class="card border-secondary-400 mt-[56px]">
            <div>
                <p class=" text-secondary-800">[01]</p>
            </div>
            <span class="border w-full stroke-secondary-400"></span>
            <div class="flex gap-6">

                <div class="w-[472px] self-stretch">
                    <h1 class=" heading-text-regular-medium  text-secondary-950  leading-14 tracking[0.88px]">Understanding
                        the Importance of Email Marketing</h1>
                </div>

                <div class="flex flex-col justify-center gap-4 w-[680px]">
                    <p class="label-text-regular-large text-secondary-800 ">Email marketing is a cost-effective and direct
                        way to communicate with potential and existing customers. Unlike social media, where algorithms
                        control visibility, email allows businesses to directly reach their audience’s inbox.</p>

                    <h3 class="sub-title-medium-regular font-semibold">Key Benefits of Email Marketing:</h3>
                    <p>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">High ROI – Email campaigns
                            generate an average return of $42 for every $1 spent (Source: DMA).</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Personalized Engagement –
                            Tailored messages improve customer relationships.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Automation & Efficiency – Saves
                            time with scheduled and triggered emails.</li>
                        <li class=" text-secondary-800 sub-title-medium-regular font-normal">Measurable Performance – Track
                            open rates, click-through rates, and conversions.</li>
                    </p>
                </div>
            </div>

        </div>

        {{-- Analyzing & Optimizing Your Campaign Performance --}}

        <div class="flex flex-col justify-center  w-[808px] mx-auto mt-[56px]">
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
                <p class=" sub-title-medium-regular text-secondary-600"> Pro Tip: A/B test different subject lines, CTAs,
                    and email designs to identify what works best for your audience.</p>
            </div>

        </div>

        {{-- Analyzing & Optimizing Your Campaign Performance --}}

        {{-- Conclusion: Elevate Your Email Marketing Strategy --}}

        <div class="flex flex-col justify-center  w-[808px] mx-auto mt-[56px]">
            <h1 class="heading-text-bold-large">Conclusion: Elevate Your Email Marketing Strategy</h1>
            <p class="mt-4 sub-title-medium-regular text-secondary-600">A well-planned email campaign can significantly
                boost customer engagement, increase sales, and build long-term relationships. By following these
                strategies—building a strong email list, crafting compelling content, optimizing timing, leveraging
                automation, and analyzing performance—you can create highly effective email marketing campaigns that drive
                results.
            </p>
            <p class=" mt-5 sub-title-medium-regular text-secondary-600">
                Ready to enhance your email marketing strategy? Start applying these insights today and watch your
                engagement soar!
            </p>
        </div>

        {{-- Conclusion: Elevate Your Email Marketing Strategy --}}


        {{-- other articles  --}}

        <div class="mt-[200px]">
            <h1 class="heading-text-regular-medium  text-center">Other Articles</h1>
            <div class="flex justify-between my-8 ">
                <div class="w-[600px]">
                    <p class="body-text-regular-medium ">Stay informed with our expert insights! Explore articles on the
                        latest trends, tips, and strategies in web design, digital marketing, and more.</p>
                </div>
                <div class="button-group  border-secondary-600 ">
                    <button class="flex w-9 px-3 py-4 justify-center items-center gap-2 rounded-sm border">
                        <i class="w-5 h-5 fa-solid fa-circle-chevron-left"></i>
                    </button>
                    <button class="flex w-9 px-3 py-4 justify-center items-center gap-2 rounded-sm border border-secondary-600">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </button>

                </div>


            </div>
        </div>


        {{-- other articles  --}}
    </div>

@endsection

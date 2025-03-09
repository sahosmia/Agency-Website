@extends('frontend.layouts.app')
@section('title', 'Career - ' . $vacancy->title)

@section('content')

    <div class="container ">

        <h2 class="w-full lg:w-8/12 heading-text-regular-large  text-secondary-950 mt-20">{{ $vacancy->title }}</h2>


        <div class="flex flex-col mx-auto items-center justify-center mt-20">
            <div class="w-8/12 ">
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






        </div>

    </div>

@endsection

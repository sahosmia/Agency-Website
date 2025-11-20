@extends('frontend.layouts.app')
@section('page_title', $service->name ?? 'Service Details')
@section('meta_title', $service->meta_title ?? 'Service Details')
@section('meta_description', $service->meta_description ?? 'Service Details')

@section('content')

{{-- Prevent Alpine flashing --}}
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<div class="container">
    <h2 class="w-full lg:w-8/12 heading-text-regular-large text-secondary-950 mt-20">
        {{ $service->name }}
    </h2>

    <div class="flex flex-col mx-auto items-center justify-center mt-20">
        <div class="w-8/12"></div>
    </div>

    {{-- ===========================
    KEY FEATURES SECTION
    ============================ --}}
    <div class="my-20" x-data="{ featureTab: 0 }">
        <h2 class="heading-text-regular-medium text-center text-secondary-900 mb-8">
            {{ $serviceDetailSettings['key_features_title'] ?? '' }}
        </h2>

        {{-- Tabs --}}
        <div class="flex justify-center mb-8">
            @foreach ($service->keyFeatures as $keyFeature)
            <button @click="featureTab = {{ $loop->index }}" :class="{
                            'border-b-2 border-secondary-400 bg-primary-500 text-primary-500': featureTab ===
                                {{ $loop->index }},
                            'text-secondary-600': featureTab !== {{ $loop->index }}
                        }" class="px-4 py-2 focus:outline-none">
                {{ $keyFeature->name }}
            </button>
            @endforeach
        </div>

        {{-- Content --}}
        @foreach ($service->keyFeatures as $keyFeature)
        <div x-show="featureTab === {{ $loop->index }}" x-cloak class="text-center">
            <p>{{ $keyFeature->description }}</p>
        </div>
        @endforeach
    </div>


    {{-- ===========================
    SERVICE PLANS SECTION
    ============================ --}}
    <div class="my-20" x-data="{ planTab: 0 }">
        <h2 class="heading-text-regular-medium text-center text-secondary-900 mb-8">
            {{ $serviceDetailSettings['service_plans_title'] ?? '' }}
        </h2>

        {{-- Tabs --}}
        <div class="flex justify-center mb-8">
            @foreach ($service->serviceTypes as $serviceType)
            <button @click="planTab = {{ $loop->index }}" :class="{
                            'border-b-2 border-primary-500 text-primary-500': planTab === {{ $loop->index }},
                            'text-secondary-600': planTab !== {{ $loop->index }}
                        }" class="px-4 py-2 focus:outline-none">
                {{ $serviceType->name }}
            </button>
            @endforeach
        </div>

        {{-- Plans --}}
        @foreach ($service->serviceTypes as $serviceType)
        <div x-show="planTab === {{ $loop->index }}" x-cloak
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($serviceType->pricePlans as $plan)
            <div class="border rounded-lg p-6 flex flex-col @if ($plan->name === 'Advanced') border-primary-500 @endif">

                {{-- Header --}}
                <div class="flex justify-between items-center">
                    <h3 class="title-text-bold-medium text-secondary-950">{{ $plan->name }}</h3>
                    @if ($plan->name === 'Advanced')
                    <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">Popular</span>
                    @endif
                </div>

                {{-- Price --}}
                <div class="my-4">
                    <span class="heading-text-bold-large text-secondary-950">${{ $plan->price }}</span>
                    <span class="body-text-regular-medium text-secondary-600">/Per {{ $plan->type }}</span>
                </div>

                <p class="body-text-regular-medium text-secondary-600 mb-4">Why should you take this</p>

                {{-- Features --}}
                <ul class="space-y-2">
                    @if ($plan->features()->exists())
                    @foreach ($plan->features as $feature)
                    <li class="flex items-center">
                        @if ($feature->pivot->is_active)
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        @else
                        <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        @endif
                        <span class="body-text-regular-medium text-secondary-600">{{ $feature->name }}</span>
                    </li>
                    @endforeach
                    @endif
                </ul>

                {{-- CTA --}}
                <div class="mt-auto pt-6">
                    @if ($plan->name === 'Advanced')
                    <a href="#" class="btn btn-outline-primary w-full">Let's discuss</a>
                    @else
                    <a href="#" class="btn btn-primary w-full">Add to cart</a>
                    @endif
                </div>

            </div>
            @endforeach
        </div>
        @endforeach
    </div>


    {{-- ===========================
    TECHNOLOGIES SECTION
    ============================ --}}
    <div class="my-20">
        <h2 class="heading-text-regular-medium text-center text-secondary-900 mb-8">
            {{ $serviceDetailSettings['technologies_title'] ?? '' }}
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($service->technologies as $technology)
            <div class="card">
                <img class="w-full h-48 object-cover rounded-t-lg"
                    src="{{ asset('storage/technologies/' . $technology->image) }}" alt="{{ $technology->name }}">

                <div class="p-4">
                    <h3 class="title-text-bold-medium text-secondary-950">{{ $technology->name }}</h3>
                    <p class="body-text-regular-medium text-secondary-600 mt-2">{{ $technology->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    {{-- ===========================
    FAQ SECTION
    ============================ --}}
    <div class="mt-10 md:mt-16 mb-10 md:mb-20 max-w-[95%] md:max-w-3xl lg:max-w-5xl mx-auto px-4" x-data="{ open: 1 }">

        <h2
            class="heading-text-regular-medium text-center text-secondary-900 text-2xl md:text-3xl lg:text-4xl font-semibold">
            {{ $homeSettings['faq_title'] ?? 'Frequently Asked Questions' }}
        </h2>

        <x-frontend.faq-accordion :faqs="$service->faqs" />
    </div>

</div>

@endsection

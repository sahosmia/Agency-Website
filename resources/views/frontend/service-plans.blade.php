@extends('frontend.layouts.app')
@section('title', $servicePlansSettings['page_title'] ?? 'Service Plans')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">{{ $servicePlansSettings['title'] ?? '' }}</h1>

        <div x-data="{ activeTab: {{ $categories->first()->id }} }">
            <div class="flex justify-center mb-8">
                @foreach ($categories as $category)
                    <button @click="activeTab = {{ $category->id }}"
                        :class="{ 'bg-blue-500 text-white': activeTab === {{ $category->id }}, 'bg-gray-200 text-gray-700': activeTab !== {{ $category->id }} }"
                        class="px-4 py-2 rounded-md mr-4">{{ $category->name }}</button>
                @endforeach
            </div>

            @foreach ($categories as $category)
                <div x-show="activeTab === {{ $category->id }}">
                    @foreach ($category->services as $service)
                        @foreach ($service->serviceTypes as $serviceType)
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                @foreach ($serviceType->pricePlans as $plan)
                                    <div class="bg-white rounded-lg shadow-md p-6">
                                        <h2 class="text-xl font-bold mb-4">{{ $plan->name }}</h2>
                                        <p class="text-3xl font-bold mb-4">${{ $plan->price }}</p>
                                        <ul class="mb-4">
                                            @foreach ($features as $feature)
                                                <li class="flex items-center mb-2">
                                                    @php
                                                        $planFeature = $plan->features->firstWhere('id', $feature->id);
                                                        $isActive = $planFeature ? $planFeature->pivot->is_active : false;
                                                    @endphp
                                                    <span class="mr-2">
                                                        @if ($isActive)
                                                            <svg class="w-6 h-6 text-green-500" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                            </svg>
                                                        @else
                                                            <svg class="w-6 h-6 text-red-500" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                            </svg>
                                                        @endif
                                                    </span>
                                                    {{ $feature->name }}
                                                </li>
                                            @endforeach
                                        </ul>
                                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Choose Plan</button>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection

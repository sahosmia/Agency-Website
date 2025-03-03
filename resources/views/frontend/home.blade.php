@extends('frontend.layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold text-center mb-6">Latest Blog Posts</h2>

        <div x-data="{ current: 0, total: {{ count($articles) }}, interval: null }" x-init="interval = setInterval(() => { current = (current + 1) % total }, 6000)" @mouseenter="clearInterval(interval)" @mouseleave="interval = setInterval(() => { current = (current + 1) % total }, 3000)" class="relative w-full max-w-4xl mx-auto overflow-hidden">

            <!-- Slider Content -->
            <div class="flex transition-transform duration-500 ease-in-out" :style="'transform: translateX(-' + current * 100 + '%)'">
                @foreach ($articles as $blog)
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold mt-4">{{ $blog->title }}</h3>
                        <p class="text-gray-600">{{ $blog->description }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Previous Button -->
            <button @click="current = (current === 0) ? total - 1 : current - 1" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-l">←</button>

            <!-- Next Button -->
            <button @click="current = (current === total - 1) ? 0 : current + 1" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-r">→</button>
        </div>
    </div>
    {{-- <x-frontend.faq :faqs="$faqs" /> --}}

@endsection

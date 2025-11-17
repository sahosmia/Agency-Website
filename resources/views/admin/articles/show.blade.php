@extends('admin.layouts.app')

@section('title', 'Show Article')
@section('header-title', 'Show Article')

@section('content')

<div class="max-w-5xl mx-auto bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden">
    {{-- Thumbnail --}}
    @if ($article->thumbnail)
    <div class="w-full h-64 overflow-hidden">
        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
            class="w-full h-full object-cover">
    </div>
    @endif

    {{-- Content --}}
    <div class="p-8 space-y-5">
        <div>
            <h2 class="text-3xl font-semibold text-gray-800">{{ $article->title }}</h2>
        </div>

        <div class="flex flex-wrap gap-6 text-gray-600 text-sm">
            <div>
                <span class="font-semibold text-gray-700">Category:</span>
                {{ $article->category->title }}
            </div>

            @if ($article->tags->count())
            <div>
                <span class="font-semibold text-gray-700">Tags:</span>
                <div class="inline-flex flex-wrap gap-2 mt-1">
                    @foreach ($article->tags as $tag)
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm font-medium">
                        {{ $tag->name }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endif
        </div>

        {{-- Description --}}
        <div class="border-t pt-4 text-gray-800 leading-relaxed">
            {!! $article->description !!}
        </div>

        {{-- SEO Section --}}
        <div class="border-t pt-4">
            <x-admin.seo-display :metaTitle="$article->meta_title" :metaDescription="$article->meta_description" />
        </div>

        {{-- Back Button --}}
        <div class="pt-4">
            <a href="{{ route('admin.articles.index') }}"
                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to Articles
            </a>
        </div>
    </div>
</div>
@endsection
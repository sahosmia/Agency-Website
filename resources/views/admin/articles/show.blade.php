@extends('admin.layouts.app')

@section('title', 'Show Article')
@section('header-title', 'Show Article')

@section('content')
    <div class="p-6 bg-white shadow-md rounded-lg">
        <div class="mb-4">
            <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
        </div>
        <div class="mb-4">
            <strong>Category:</strong> {{ $article->article_category->name }}
        </div>
        <div class="mb-4">
            <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="h-48 w-full object-cover">
        </div>
        <div class="mb-4">
            <strong>Tags:</strong>
            @foreach ($article->tags as $tag)
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $tag->name }}</span>
            @endforeach
        </div>
        <div>
            {!! $article->description !!}
        </div>
        <div class="mt-4">
            <a href="{{ route('admin.articles.index') }}" class="text-blue-500 hover:underline">Back to Articles</a>
        </div>
    </div>
@endsection

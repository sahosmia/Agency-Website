@extends('admin.layouts.app')

@section('title', 'Show Software')
@section('header-title', 'Show Software')

@section('content')
    <div class="p-6 bg-white shadow-md rounded-lg">
        <div class="mb-4">
            <h2 class="text-2xl font-bold">{{ $software->name }}</h2>
        </div>
        <div class="mb-4">
            <strong>Category:</strong> {{ $software->category->name }}
        </div>
        @if ($software->image)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $software->image) }}" alt="{{ $software->name }}"
                    class="h-48 w-full object-cover">
            </div>
        @endif
        <div>
            {!! $software->description !!}
        </div>
        <x-admin.seo-display :metaTitle="$software->meta_title" :metaDescription="$software->meta_description" />
        <div class="mt-4">
            <a href="{{ route('admin.softwares.index') }}" class="text-blue-500 hover:underline">Back to Softwares</a>
        </div>
    </div>
@endsection

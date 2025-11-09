@extends('admin.layouts.app')

@section('title', 'Show Service')
@section('header-title', 'Show Service')

@section('content')
    <x-admin.back-button :route="route('admin.services.index')" />
    <div class="p-6 bg-white shadow-md rounded-lg">
        <div class="mb-4">
            <h2 class="text-2xl font-bold">{{ $service->name }}</h2>
        </div>
        <div class="mb-4">
            <strong>Category:</strong> {{ $service->category->name }}
        </div>
        @if ($service->image)
            <div class="mb-4">
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}"
                    class="h-48 w-full object-cover">
            </div>
        @endif
        <div>
            {!! $service->description !!}
        </div>
        <x-admin.seo-display :metaTitle="$service->meta_title" :metaDescription="$service->meta_description" />
        <div class="mt-4">
            <a href="{{ route('admin.services.index') }}" class="text-blue-500 hover:underline">Back to Services</a>
        </div>
    </div>
@endsection

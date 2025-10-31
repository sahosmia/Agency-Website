@extends('admin.layouts.app')

@section('title', 'Show Service')
@section('header-title', 'Show Service')

@section('content')
    <div class="p-6 bg-white shadow-md rounded-lg">
        <div class="mb-4">
            <h2 class="text-2xl font-bold">{{ $service->name }}</h2>
        </div>
        <div class="mb-4">
            <strong>Category:</strong> {{ $service->service_category->name }}
        </div>
        <div class="mb-4">
            <img src="{{ $service->image_url }}" alt="{{ $service->name }}" class="h-48 w-full object-cover">
        </div>
        <div>
            {!! $service->description !!}
        </div>
        <div class="mt-4">
            <a href="{{ route('admin.services.index') }}" class="text-blue-500 hover:underline">Back to Services</a>
        </div>
    </div>
@endsection

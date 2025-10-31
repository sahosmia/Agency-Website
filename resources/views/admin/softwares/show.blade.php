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
        <div class="mb-4">
            <img src="{{ $software->image_url }}" alt="{{ $software->name }}" class="h-48 w-full object-cover">
        </div>
        <div>
            {!! $software->description !!}
        </div>
        <div class="mt-4">
            <a href="{{ route('admin.softwares.index') }}" class="text-blue-500 hover:underline">Back to Softwares</a>
        </div>
    </div>
@endsection

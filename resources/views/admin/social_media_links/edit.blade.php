@extends('admin.layouts.app')

@section('title', 'Edit Social Media Link')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Social Media Link</h1>
    </div>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.social-media-links.update', $socialMediaLink) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $socialMediaLink->name) }}" required>
        </div>
        <div class="mb-4">
            <label for="url" class="block text-gray-700">URL</label>
            <input type="url" name="url" id="url" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('url', $socialMediaLink->url) }}" required>
        </div>
        <div class="mb-4">
            <label for="icon" class="block text-gray-700">Icon</label>
            <input type="file" name="icon" id="icon" class="w-full border-gray-300 rounded-md shadow-sm">
            @if ($socialMediaLink->icon)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $socialMediaLink->icon) }}" alt="{{ $socialMediaLink->name }}" class="h-16">
                </div>
            @endif
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </form>
@endsection

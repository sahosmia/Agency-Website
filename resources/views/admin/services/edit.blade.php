@extends('admin.layouts.app')

@section('title', 'Edit Service')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Service</h1>

    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-md" value="{{ old('name', $service->name) }}" required>
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="slug" class="block text-gray-700">Slug</label>
            <input type="text" name="slug" id="slug" class="w-full px-3 py-2 border rounded-md" value="{{ old('slug', $service->slug) }}" required>
            @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="service_category_id" class="block text-gray-700">Category</label>
            <select name="service_category_id" id="service_category_id" class="w-full px-3 py-2 border rounded-md" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($service->service_category_id == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('service_category_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="w-full px-3 py-2 border rounded-md">
            @if ($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="h-16 w-16 object-cover mt-2">
            @endif
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </form>
@endsection

@extends('admin.layouts.app')

@section('title', 'Edit Project')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-md" value="{{ old('title', $project->title) }}" required>
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="slug" class="block text-gray-700">Slug</label>
            <input type="text" name="slug" id="slug" class="w-full px-3 py-2 border rounded-md" value="{{ old('slug', $project->slug) }}" required>
            @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="project_category_id" class="block text-gray-700">Category</label>
            <select name="project_category_id" id="project_category_id" class="w-full px-3 py-2 border rounded-md" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($project->project_category_id == $category->id)>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('project_category_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="thumbnail" class="block text-gray-700">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="w-full px-3 py-2 border rounded-md">
            @if ($project->thumbnail)
                <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="h-16 w-16 object-cover mt-2">
            @endif
            @error('thumbnail')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </form>
@endsection

@extends('admin.layouts.app')

@section('title', 'Edit Article')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Article</h1>

    <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-md" value="{{ old('title', $article->title) }}" required>
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="slug" class="block text-gray-700">Slug</label>
            <input type="text" name="slug" id="slug" class="w-full px-3 py-2 border rounded-md" value="{{ old('slug', $article->slug) }}" required>
            @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="article_category_id" class="block text-gray-700">Category</label>
            <select name="article_category_id" id="article_category_id" class="w-full px-3 py-2 border rounded-md" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($article->article_category->id == $category->id)>{{ $category->title }}</option>
                @endforeach
            </select>
            @error('article_category_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="tags" class="block text-gray-700">Tags</label>
            <select name="tags[]" id="tags" class="w-full px-3 py-2 border rounded-md" multiple>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" @selected($article->tags->contains($tag->id))>{{ $tag->name }}</option>
                @endforeach
            </select>
            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="thumbnail" class="block text-gray-700">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="w-full px-3 py-2 border rounded-md">
            @if ($article->thumbnail)
                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="h-16 w-16 object-cover mt-2">
            @endif
            @error('thumbnail')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="short_text" class="block text-gray-700">Short Text</label>
            <textarea name="short_text" id="short_text" class="w-full px-3 py-2 border rounded-md">{{ old('short_text', $article->short_text) }}</textarea>
            @error('short_text')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_text" class="block text-gray-700">Long Text</label>
            <textarea name="long_text" id="long_text" class="w-full px-3 py-2 border rounded-md">{{ old('long_text', $article->long_text) }}</textarea>
            @error('long_text')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </form>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tags').select2();
        });
        ClassicEditor
            .create(document.querySelector('#long_text'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

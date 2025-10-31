@extends('admin.layouts.app')

@section('title', 'Index Articles')
@section('header-title', 'Index Articles')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Articles</h1>
        <x-admin.create-button :route="route('admin.articles.create')" />
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">Thumbnail</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td class="border px-4 py-2">{{ $article->title }}</td>
                    <td class="border px-4 py-2">{{ $article->article_category->name }}</td>
                    <td class="border px-4 py-2">
                        <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="h-16 w-16 object-cover">
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.articles.show', $article) }}" class="text-green-500 hover:underline mr-2">Show</a>
                        <a href="{{ route('admin.articles.edit', $article) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.articles.destroy', $article)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

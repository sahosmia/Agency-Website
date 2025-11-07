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
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2 w-24">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td class="border px-4 py-2">{{ $article->title }}</td>
                    <td class="border px-4 py-2">{{ $article->article_category->name }}</td>
                    <td class="border px-4 py-2">
                        @if ($article->thumbnail)
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="h-16 w-16 object-cover">
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <x-admin.status-badge :is-active="$article->is_active" />
                    </td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :showUrl="route('admin.articles.show', $article)"
                            :editUrl="route('admin.articles.edit', $article)"
                            :deleteRoute="route('admin.articles.destroy', $article)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

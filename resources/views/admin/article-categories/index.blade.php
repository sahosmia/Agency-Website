@extends('admin.layouts.app')

@section('title', 'Index Article Categories')
@section('header-title', 'Index Article Categories')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Article Categories</h1>
        <x-admin.create-button :route="route('admin.article-categories.create')" />
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Slug</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articleCategories as $category)
                <tr>
                    <td class="border px-4 py-2">{{ $category->name }}</td>
                    <td class="border px-4 py-2">{{ $category->slug }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.article-categories.edit', $category) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.article-categories.destroy', $category)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('admin.layouts.app')

@section('title', 'Index Service Categories')
@section('header-title', 'Index Service Categories')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Service Categories</h1>
        <a href="{{ route('admin.service-categories.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create New</a>
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
            @foreach ($serviceCategories as $category)
                <tr>
                    <td class="border px-4 py-2">{{ $category->title }}</td>
                    <td class="border px-4 py-2">{{ $category->slug }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.service-categories.edit', $category) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.service-categories.destroy', $category)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

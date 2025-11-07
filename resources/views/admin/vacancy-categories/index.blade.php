@extends('admin.layouts.app')

@section('title', 'Index Vacancy Categories')
@section('header-title', 'Index Vacancy Categories')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Vacancy Categories</h1>
        <x-admin.create-button :route="route('admin.vacancy-categories.create')" />
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Slug</th>
                <th class="px-4 py-2 w-24">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vacancyCategories as $category)
                <tr>
                    <td class="border px-4 py-2">{{ $category->title }}</td>
                    <td class="border px-4 py-2">{{ $category->slug }}</td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :editUrl="route('admin.vacancy-categories.edit', $category)"
                            :deleteRoute="route('admin.vacancy-categories.destroy', $category)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

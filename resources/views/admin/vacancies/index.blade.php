@extends('admin.layouts.app')

@section('title', 'Index Vacancies')
@section('header-title', 'Index Vacancies')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Vacancies</h1>
    <x-admin.create-button :route="route('admin.vacancies.create')" />
</div>

<div class="mb-4">
    <form action="{{ route('admin.vacancies.index') }}" method="GET">
        <div class="flex items-center">
            <input type="text" name="q" value="{{ request()->q }}" class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2" placeholder="Search by title...">
            <select name="category_id" class="border border-gray-300 px-4 py-2 w-1/3">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request()->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            <select name="status" class="border border-gray-300 px-4 py-2 w-1/3">
                <option value="">All Statuses</option>
                <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Filter</button>
        </div>
    </form>
</div>

<table class="w-full bg-white shadow-md rounded-lg">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Title</th>
            <th class="px-4 py-2">Category</th>
            <th class="px-4 py-2">Location</th>
            <th class="px-4 py-2">End Date</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2 w-24">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vacancies as $vacancy)
        <tr>
            <td class="border px-4 py-2">{{ $vacancy->title }}</td>
            <td class="border px-4 py-2">{{ $vacancy->category->name }}</td>
            <td class="border px-4 py-2">{{ $vacancy->location }}</td>
            <td class="border px-4 py-2">{{ $vacancy->end_date }}</td>
            <td class="border px-4 py-2">
                <x-admin.status-badge :is-active="$vacancy->is_active" />
            </td>
            <td class="border px-4 py-2">
                <x-admin.actions-dropdown
                    :showUrl="route('admin.vacancies.show', $vacancy)"
                    :editUrl="route('admin.vacancies.edit', $vacancy)"
                    :deleteRoute="route('admin.vacancies.destroy', $vacancy)"
                />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $vacancies->appends(request()->query())->links() }}
</div>
@endsection
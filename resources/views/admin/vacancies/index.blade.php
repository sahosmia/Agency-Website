@extends('admin.layouts.app')

@section('title', 'Index Vacancies')
@section('header-title', 'Index Vacancies')

@section('back-button')
<x-admin.create-button :route="route('admin.vacancies.create')" />
@endsection

@section('content')

<div class="mb-4">
    <form action="{{ route('admin.vacancies.index') }}" method="GET">
        <div class="flex items-center">
            <input type="text" name="q" value="{{ request()->q }}"
                class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2" placeholder="Search by title...">
            <select name="category_id" class="border border-gray-300 px-4 py-2 w-1/3">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request()->category_id == $category->id ? 'selected' : '' }}>{{
                    $category->title }}</option>
                @endforeach
            </select>
            <select name="status" class="border border-gray-300 px-4 py-2 w-1/3">
                <option value="">All Statuses</option>
                <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Filter</button>
        </div>
    </form>
</div>

<x-admin.table>
    <x-slot name="head">
        <tr>
            <th class="px-5 py-3 text-left font-medium text-gray-600">Title</th>
            <th class="px-5 py-3 text-left font-medium text-gray-600">Category</th>
            <th class="px-5 py-3 text-left font-medium text-gray-600">Location</th>
            <th class="px-5 py-3 text-left font-medium text-gray-600">End Date</th>
            <th class="px-5 py-3 text-center font-medium text-gray-600">Status</th>
            <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($vacancies as $vacancy)
        <tr class="hover:bg-gray-50 transition">
            <td class="px-5 py-3">{{ $vacancy->title }}</td>
            <td class="px-5 py-3">{{ $vacancy->category->title }}</td>
            <td class="px-5 py-3">{{ $vacancy->location }}</td>
            <td class="px-5 py-3">{{ $vacancy->end_date }}</td>
            <td class="px-5 py-3 text-center">
                <x-admin.status-badge :is-active="$vacancy->is_active" />
            </td>
            <td class="px-5 py-3 text-right">
                <x-admin.actions-dropdown :showUrl="route('admin.vacancies.show', $vacancy)"
                    :editUrl="route('admin.vacancies.edit', $vacancy)"
                    :deleteRoute="route('admin.vacancies.destroy', $vacancy)" />
            </td>
        </tr>
        @endforeach
    </x-slot>
</x-admin.table>

<div class="mt-4">
    {{ $vacancies->appends(request()->query())->links() }}
</div>
@endsection
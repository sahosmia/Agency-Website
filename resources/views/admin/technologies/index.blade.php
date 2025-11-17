@extends('admin.layouts.app')

@section('title', 'Index Technologies')
@section('header-title', 'Index Technologies')

@section('back-button')
{{-- Using the standardized admin button component --}}
<x-admin.button :route="route('admin.technologies.create')" text="Create" />
@endsection

@section('content')
<x-admin.status-message />

{{-- Filter Section styled consistently with shadow, background, and responsive layout --}}
<div class="mb-6 bg-white border border-gray-200 rounded-xl shadow-sm p-4">
    <form action="{{ route('admin.technologies.index') }}" method="GET"
        class="flex flex-col sm:flex-row sm:items-end gap-4">

        {{-- Search Input (flex-1 ensures it takes most available width) --}}
        <div class="flex-1">
            <label for="q" class="block text-gray-600 text-sm font-medium mb-1">Search by Name</label>
            <input type="text" name="q" id="q" value="{{ request()->q }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition"
                placeholder="Search by name...">
        </div>

        {{-- Status Select (responsive width) --}}
        <div class="w-full sm:w-1/4">
            <label for="status" class="block text-gray-600 text-sm font-medium mb-1">Status</label>
            <select name="status" id="status"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition">
                <option value="">All Statuses</option>
                <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        {{-- Filter Button styled with indigo color --}}
        <div class="flex">
            <button type="submit"
                class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-5 py-2.5 rounded-md transition-colors duration-200 shadow-sm hover:shadow-md">
                Filter
            </button>
        </div>
    </form>
</div>

{{-- Table structure styled consistently, removing x-admin.table component and old card structure --}}
<div class="bg-white border border-gray-100 shadow-sm rounded-xl overflow-hidden">
    <table class="w-full text-sm text-gray-700">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Name</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Description</th>
                <th class="px-5 py-3 text-center font-medium text-gray-600">Status</th>
                <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-100">
            @forelse ($technologies as $technology)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-5 py-3">
                    <x-admin.image-title :name="$technology->name"
                        :imagePath="$technology->image ? asset('storage/technologies/' . $technology->image) : ''" />
                </td>
                {{-- Truncating description for table view --}}
                <td class="px-5 py-3 max-w-sm truncate">{{ $technology->description }}</td>
                <td class="px-5 py-3 text-center">
                    <x-admin.status-badge :is-active="$technology->is_active" />
                </td>
                <td class="px-5 py-3 text-right">
                    <x-admin.actions-dropdown :editUrl="route('admin.technologies.edit', $technology)"
                        :deleteRoute="route('admin.technologies.destroy', $technology)" />
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-5 py-6 text-center text-gray-500">
                    No technologies found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination container --}}
<div class="mt-6">
    {{ $technologies->appends(request()->query())->links() }}
</div>
@endsection

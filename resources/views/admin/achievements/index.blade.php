@extends('admin.layouts.app')

@section('title', 'Achievements')
@section('header-title', 'Achievements')

@section('back-button')
<x-admin.button :route="route('admin.achievements.create')" text="Create Achievement" />
@endsection

@section('content')
<x-admin.status-message />

{{-- Filter Section --}}
<div class="mb-6 bg-white border border-gray-200 rounded-xl shadow-sm p-4">
    <form action="{{ route('admin.achievements.index') }}" method="GET"
        class="flex flex-col sm:flex-row sm:items-end gap-4">

        {{-- Search Input --}}
        <div class="flex-1">
            <label for="q" class="block text-gray-600 text-sm font-medium mb-1">Search by Title</label>
            <input type="text" name="q" id="q" value="{{ request()->q }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition"
                placeholder="Search by title...">
        </div>

        {{-- Filter Button --}}
        <div class="flex">
            <button type="submit"
                class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-5 py-2.5 rounded-md transition-colors duration-200 shadow-sm hover:shadow-md">
                Filter
            </button>
        </div>

    </form>
</div>

{{-- Table --}}
<div class="bg-white border border-gray-100 shadow-sm rounded-xl overflow-hidden">
    <table class="w-full text-sm text-gray-700">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Title</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Description</th>
                <th class="px-5 py-3 text-center font-medium text-gray-600">Value</th>
                <th class="px-5 py-3 text-center font-medium text-gray-600">Show on Home Page</th>
                <th class="px-5 py-3 text-center font-medium text-gray-600">Sort Order</th>
                <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse ($achievements as $achievement)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-5 py-3">{{ $achievement->title }}</td>
                <td class="px-5 py-3">{{ Str::limit($achievement->description, 50) }}</td>
                <td class="px-5 py-3 text-center">{{ $achievement->value }}</td>
                <td class="px-5 py-3 text-center">
                    {{-- Using a status badge for consistency, you might need to create this component or use plain
                    text/icons --}}
                    <x-admin.status-badge :is-active="$achievement->home_page_show" />
                </td>
                <td class="px-5 py-3 text-center">{{ $achievement->sort }}</td>

                <td class="px-5 py-3 text-right">
                    <x-admin.actions-dropdown :editUrl="route('admin.achievements.edit', $achievement)"
                        :deleteRoute="route('admin.achievements.destroy', $achievement)" />
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-5 py-6 text-center text-gray-500">
                    No achievements found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="mt-6">
    {{ $achievements->appends(request()->query())->links() }}
</div>
@endsection

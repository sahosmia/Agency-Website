@extends('admin.layouts.app')

@section('title', 'Index Services')
@section('header-title', 'Index Services')

@section('back-button')
<x-admin.button :route="route('admin.services.create')" text="Create" />
@endsection

@section('content')
<x-admin.status-message />


{{-- Filter Section styled with background, border, and shadow --}}
<div class="mb-6 bg-white border border-gray-200 rounded-xl shadow-sm p-4">
    <form action="{{ route('admin.services.index') }}" method="GET"
        class="flex flex-col sm:flex-row sm:items-end gap-4">

        {{-- Search Input --}}
        <div class="flex-1">
            <label for="q" class="block text-gray-600 text-sm font-medium mb-1">Search by Name</label>
            <input type="text" name="q" id="q" value="{{ request()->q }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition"
                placeholder="Search by name...">
        </div>

        {{-- Category Select --}}
        <div class="w-full sm:w-1/4">
            <label for="category_id" class="block text-gray-600 text-sm font-medium mb-1">Category</label>
            <select name="category_id" id="category_id"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request()->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->title }}
                </option>
                @endforeach
            </select>
        </div>

        {{-- Status Select --}}
        <div class="w-full sm:w-1/4">
            <label for="status" class="block text-gray-600 text-sm font-medium mb-1">Status</label>
            <select name="status" id="status"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition">
                <option value="">All Statuses</option>
                <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
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



{{-- Table structure styled according to the client reviews index --}}
<div class="bg-white border border-gray-100 shadow-sm rounded-xl overflow-hidden">
    <table class="w-full text-sm text-gray-700">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Name</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Category</th>
                <th class="px-5 py-3 text-center font-medium text-gray-600">Status</th>
                <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-100">
            @forelse ($services as $service)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-5 py-3">
                    <x-admin.image-title :name="$service->name" :imagePath="$service->image_url" />
                </td>
                <td class="px-5 py-3">{{ $service->category->title }}</td>
                <td class="px-5 py-3 text-center">
                    <x-admin.status-badge :is-active="$service->is_active" />
                </td>
                <td class="px-5 py-3 text-right">
                    <x-admin.actions-dropdown :showUrl="route('admin.services.show', $service)"
                        :editUrl="route('admin.services.edit', $service)"
                        :deleteRoute="route('admin.services.destroy', $service)" />
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-5 py-6 text-center text-gray-500">
                    No services found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>


<div class="mt-6">
    {{ $services->appends(request()->query())->links() }}
</div>
@endsection

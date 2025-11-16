@extends('admin.layouts.app')

@section('title', 'Index Services')
@section('header-title', 'Index Services')

@section('back-button')
<x-admin.create-button :route="route('admin.services.create')" />
@endsection

@section('content')



<div class="mb-4">
    <form action="{{ route('admin.services.index') }}" method="GET">
        <div class="flex items-center">
            <input type="text" name="q" value="{{ request()->q }}"
                class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2" placeholder="Search by name...">
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
        <tr class="bg-gray-200">
            <th class="px-5 py-3 text-left font-medium text-gray-600">Name</th>
            <th class="px-5 py-3 text-left font-medium text-gray-600">Category</th>
            <th class="px-5 py-3 text-left font-medium text-gray-600">Status</th>
            <th class="px-5 py-3 text-left font-medium text-gray-600 w-24">Actions</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($services as $service)
        <tr class="hover:bg-gray-50 transition">
            <td class="px-5 py-3">
                <x-admin.image-title :name="$service->name" :imagePath="asset('storage/' . $service->image)" />
            </td>
            <td class="px-5 py-3">{{ $service->category->title }}</td>
            <td class="px-5 py-3">
                <x-admin.status-badge :is-active="$service->is_active" />
            </td>
            <td class="px-5 py-3">
                <x-admin.actions-dropdown :showUrl="route('admin.services.show', $service)"
                    :editUrl="route('admin.services.edit', $service)"
                    :deleteRoute="route('admin.services.destroy', $service)" />
            </td>
        </tr>
        @endforeach
    </x-slot>
    </table>
</x-admin.table>

<div class="mt-4">
    {{ $services->appends(request()->query())->links() }}
</div>
@endsection
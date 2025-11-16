@extends('admin.layouts.app')

@section('title', 'Service Types')
@section('header-title', 'Service Types')

@section('back-button')
<x-admin.button :route="route('admin.service-types.create')" text="Create Service Type" />
@endsection

@section('content')
<x-admin.status-message />

{{-- Filter/Search Section --}}
<div class="mb-6 bg-white border border-gray-200 rounded-xl shadow-sm p-4">
    <form action="{{ route('admin.service-types.index') }}" method="GET" class="flex items-end gap-4">

        {{-- Search Input --}}
        <div class="flex-1">
            <label for="q" class="block text-gray-600 text-sm font-medium mb-1">Search by Name</label>
            <input type="text" name="q" id="q" value="{{ request()->q }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition"
                placeholder="Search by name...">
        </div>

        {{-- Search Button --}}
        <div class="flex">
            <button type="submit"
                class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-5 py-2.5 rounded-md transition-colors duration-200 shadow-sm hover:shadow-md">
                Search
            </button>
        </div>

    </form>
</div>

{{-- Table --}}
<div class="bg-white border border-gray-100 shadow-sm rounded-xl overflow-hidden">
    <table class="w-full text-sm text-gray-700">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-5 py-3 text-left font-medium text-gray-600 w-1/3">Name</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600 w-1/3">Service</th>
                <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse ($serviceTypes as $serviceType)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-5 py-3 font-medium">{{ $serviceType->name }}</td>
                <td class="px-5 py-3">{{ $serviceType->service->name }}</td>
                <td class="px-5 py-3 text-right">
                    <x-admin.actions-dropdown :editUrl="route('admin.service-types.edit', $serviceType)"
                        :deleteRoute="route('admin.service-types.destroy', $serviceType)" />
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="px-5 py-6 text-center text-gray-500">
                    No service types found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="mt-6">
    {{ $serviceTypes->links() }}
</div>
@endsection

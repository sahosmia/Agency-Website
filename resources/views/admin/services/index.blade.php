@extends('admin.layouts.app')

@section('title', 'Index Services')
@section('header-title', 'Index Services')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Services</h1>
    <a href="{{ route('admin.services.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create New</a>
</div>

@if (session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
    <span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif

<table class="w-full bg-white shadow-md rounded-lg">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Category</th>
            <th class="px-4 py-2">Image</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $service)
        <tr>
            <td class="border px-4 py-2">{{ $service->name }}</td>
            <td class="border px-4 py-2">{{ $service->service_category->name }}</td>
            <td class="border px-4 py-2">
                @if ($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}"
                    class="h-16 w-16 object-cover">
                @endif
            </td>
            <td class="border px-4 py-2">
                <a href="{{ route('admin.services.edit', $service) }}" class="text-blue-500 hover:underline">Edit</a>
                <x-admin.delete-button :route="route('admin.services.destroy', $service)" />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

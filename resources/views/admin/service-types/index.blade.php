@extends('admin.layouts.app')

@section('title', 'Service Types')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Service Types</h1>
        <a href="{{ route('admin.service-types.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create New</a>
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
                <th class="px-4 py-2">Service</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($serviceTypes as $serviceType)
                <tr>
                    <td class="border px-4 py-2">{{ $serviceType->name }}</td>
                    <td class="border px-4 py-2">{{ $serviceType->service->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.service-types.edit', $serviceType) }}" class="text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('admin.service-types.destroy', $serviceType) }}" method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

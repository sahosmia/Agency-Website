@extends('admin.layouts.app')

@section('title', 'Index Service Types')
@section('header-title', 'Index Service Types')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Service Types</h1>
        <x-admin.create-button :route="route('admin.service-types.create')" />
    </div>

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
                        <x-admin.delete-button :route="route('admin.service-types.destroy', $serviceType)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

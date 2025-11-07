@extends('admin.layouts.app')

@section('title', 'Index Service Types')
@section('header-title', 'Index Service Types')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Service Types</h1>
        <x-admin.create-button :route="route('admin.service-types.create')" />
    </div>

    <div class="mb-4">
        <form action="{{ route('admin.service-types.index') }}" method="GET">
            <div class="flex items-center">
                <input type="text" name="q" value="{{ request()->q }}" class="border border-gray-300 rounded-l-md px-4 py-2 w-full" placeholder="Search by name...">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Search</button>
            </div>
        </form>
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
                        <x-admin.actions-dropdown
                            :editUrl="route('admin.service-types.edit', $serviceType)"
                            :deleteRoute="route('admin.service-types.destroy', $serviceType)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

<div class="mt-4">
    {{ $serviceTypes->links() }}
</div>
@endsection

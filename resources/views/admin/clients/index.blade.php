@extends('admin.layouts.app')

@section('title', 'Index Clients')
@section('header-title', 'Index Clients')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Clients</h1>
        <a href="{{ route('admin.clients.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create New</a>
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Location</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td class="border px-4 py-2">{{ $client->name }}</td>
                    <td class="border px-4 py-2">{{ $client->location }}</td>
                    <td class="border px-4 py-2">
                        @if ($client->image)
                            <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}" class="h-16 w-16 object-cover">
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.clients.edit', $client) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.clients.destroy', $client)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

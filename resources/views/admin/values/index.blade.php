@extends('admin.layouts.app')

@section('title', 'Index Values')
@section('header-title', 'Index Values')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Values</h1>
        <a href="{{ route('admin.values.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create New</a>
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Icon</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($values as $value)
                <tr>
                    <td class="border px-4 py-2">{{ $value->title }}</td>
                    <td class="border px-4 py-2">{{ $value->description }}</td>
                    <td class="border px-4 py-2">{{ $value->icon }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.values.edit', $value) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.values.destroy', $value)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

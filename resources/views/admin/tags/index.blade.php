@extends('admin.layouts.app')

@section('title', 'Index Tags')
@section('header-title', 'Index Tags')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Tags</h1>
        <x-admin.create-button :route="route('admin.tags.create')" />
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td class="border px-4 py-2">{{ $tag->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.tags.edit', $tag) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.tags.destroy', $tag)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

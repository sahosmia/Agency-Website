@extends('admin.layouts.app')

@section('title', 'Index Softwares')
@section('header-title', 'Index Softwares')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Softwares</h1>
        <x-admin.create-button :route="route('admin.softwares.create')" />
    </div>

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
            @foreach ($softwares as $software)
                <tr>
                    <td class="border px-4 py-2">{{ $software->name }}</td>
                    <td class="border px-4 py-2">{{ $software->software_category->name }}</td>
                    <td class="border px-4 py-2">
                        <img src="{{ $software->image_url }}" alt="{{ $software->name }}" class="h-16 w-16 object-cover">
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.softwares.show', $software) }}" class="text-green-500 hover:underline mr-2">Show</a>
                        <a href="{{ route('admin.softwares.edit', $software) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.softwares.destroy', $software)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

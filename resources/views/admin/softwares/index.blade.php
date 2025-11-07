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
                 <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2 w-24">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($softwares as $software)
                <tr>
                    <td class="border px-4 py-2">{{ $software->name }}</td>
                    <td class="border px-4 py-2">{{ $software->software_category->name }}</td>
                    <td class="border px-4 py-2">
                        @if ($software->image)
                            <img src="{{ asset('storage/' . $software->image) }}" alt="{{ $software->name }}" class="h-16 w-16 object-cover">
                        @endif
                    </td>
                     <td class="border px-4 py-2">
                        <x-admin.status-badge :is-active="$software->is_active" />
                     </td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :showUrl="route('admin.softwares.show', $software)"
                            :editUrl="route('admin.softwares.edit', $software)"
                            :deleteRoute="route('admin.softwares.destroy', $software)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('admin.layouts.app')

@section('title', 'Index Projects')
@section('header-title', 'Index Projects')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Projects</h1>
        <x-admin.create-button :route="route('admin.projects.create')" />
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">Thumbnail</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2 w-24">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td class="border px-4 py-2">{{ $project->title }}</td>
                    <td class="border px-4 py-2">{{ $project->project_category->title }}</td>
                    <td class="border px-4 py-2">
                        @if ($project->thumbnail)
                            <img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="h-16 w-16 object-cover">
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <x-admin.status-badge :is-active="$project->is_active" />
                    </td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :showUrl="route('admin.projects.show', $project)"
                            :editUrl="route('admin.projects.edit', $project)"
                            :deleteRoute="route('admin.projects.destroy', $project)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

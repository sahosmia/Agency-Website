@extends('admin.layouts.app')

@section('title', 'Team Members')
@section('header-title', 'Team Members')

@section('back-button')
<x-admin.create-button :route="route('admin.teams.create')" />
@endsection

@section('content')

<x-admin.status-message />
<div class="mb-4">
    <form action="{{ route('admin.teams.index') }}" method="GET">
        <div class="flex items-center">
            <input type="text" name="q" value="{{ request()->q }}"
                class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2" placeholder="Search by name...">
            <select name="designation_id" class="border border-gray-300 px-4 py-2 w-1/3">
                <option value="">All Designations</option>
                @foreach($designations as $designation)
                <option value="{{ $designation->id }}" {{ request()->designation_id == $designation->id ? 'selected' :
                    '' }}>{{ $designation->title }}</option>
                @endforeach
            </select>
            <select name="status" class="border border-gray-300 px-4 py-2 w-1/3">
                <option value="">All Statuses</option>
                <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Filter</button>
        </div>
    </form>
</div>

<x-admin.table>
    <x-slot name="head">
        <tr>
            <th class="px-5 py-3 text-left font-medium text-gray-600">Name</th>
            <th class="px-5 py-3 text-left font-medium text-gray-600">Designation</th>
            <th class="px-5 py-3 text-center font-medium text-gray-600">Status</th>
            <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @forelse ($teams as $team)
        <tr class="hover:bg-gray-50 transition">
            <td class="px-5 py-3">
                <x-admin.image-title :name="$team->name" :imagePath="$team->avatar_url" />
            </td>
            <td class="px-5 py-3">{{ $team->designation->title }}</td>

            <td class="px-5 py-3 text-center">
                <x-admin.status-badge :is-active="$team->is_active" />
            </td>
            <td class="px-5 py-3 text-right">
                <x-admin.actions-dropdown :editUrl="route('admin.teams.edit', $team)"
                    :deleteRoute="route('admin.teams.destroy', $team)" />
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center py-4">No team members found.</td>
        </tr>
        @endforelse
    </x-slot>
</x-admin.table>

<div class="mt-4">
    {{ $teams->appends(request()->query())->links() }}
</div>
@endsection
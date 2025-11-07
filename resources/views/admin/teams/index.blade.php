@extends('admin.layouts.app')

@section('title', 'Team Members')
@section('header-title', 'Team Members')
@section('breadcrumbs')
<div class="breadcrumb-item">Team Members</div>
@endsection

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Team Members</h1>
    <x-admin.create-button :route="route('admin.teams.create')" />
</div>

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

<table class="w-full bg-white shadow-md rounded-lg">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Designation</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2 w-24">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($teams as $team)
        <tr>
            <td class="border px-4 py-2">
                <x-admin.image-title :name="$team->name" :imagePath="$team->avatar_url" />
            </td>
            <td class="border px-4 py-2">{{ $team->designation->title }}</td>

            <td class="border px-4 py-2">
                <x-admin.status-badge :is-active="$team->is_active" />
            </td>
            <td class="border px-4 py-2">
                <x-admin.actions-dropdown :editUrl="route('admin.teams.edit', $team)"
                    :deleteRoute="route('admin.teams.destroy', $team)" />
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center border py-4">No team members found.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-4">
    {{ $teams->appends(request()->query())->links() }}
</div>
@endsection

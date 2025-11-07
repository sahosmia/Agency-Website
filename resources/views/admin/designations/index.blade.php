@extends('admin.layouts.app')

@section('title', 'Designations')
@section('header-title', 'Designations')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Designations</li>
@endsection

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Designations</h1>
    <x-admin.create-button :route="route('admin.designations.create')" />
</div>

<div class="mb-4">
    <form action="{{ route('admin.designations.index') }}" method="GET">
        <div class="flex items-center">
            <input type="text" name="q" value="{{ request()->q }}"
                class="border border-gray-300 rounded-l-md px-4 py-2 w-full" placeholder="Search by title...">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Search</button>
        </div>
    </form>
</div>

<table class="w-full bg-white shadow-md rounded-lg">
    <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Title</th>
            <th class="px-4 py-2">Slug</th>
            <th class="px-4 py-2 w-24">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($designations as $designation)
        <tr>
            <td class="border px-4 py-2">{{ $designation->title }}</td>
            <td class="border px-4 py-2">{{ $designation->slug }}</td>
            <td class="border px-4 py-2">
                <x-admin.actions-dropdown :editUrl="route('admin.designations.edit', $designation)"
                    :deleteRoute="route('admin.designations.destroy', $designation)" />
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center border px-4 py-2">No designations found.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-4">
    {{ $designations->appends(request()->query())->links() }}
</div>
@endsection

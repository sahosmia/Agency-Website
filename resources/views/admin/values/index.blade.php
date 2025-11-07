@extends('admin.layouts.app')

@section('title', 'Index Values')
@section('header-title', 'Index Values')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Values</h1>
        <x-admin.create-button :route="route('admin.values.create')" />
    </div>

    <div class="mb-4">
        <form action="{{ route('admin.values.index') }}" method="GET">
            <div class="flex items-center">
                <input type="text" name="q" value="{{ request()->q }}" class="border border-gray-300 rounded-l-md px-4 py-2 w-1/2" placeholder="Search by title...">
                <select name="status" class="border border-gray-300 px-4 py-2 w-1/2">
                    <option value="">All Statuses</option>
                    <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r-md">Filter</button>
            </div>
        </form>
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Icon</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2 w-24">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($values as $value)
                <tr>
                    <td class="border px-4 py-2">{{ $value->title }}</td>
                    <td class="border px-4 py-2">{{ $value->description }}</td>
                    <td class="border px-4 py-2">{{ $value->icon }}</td>
                    <td class="border px-4 py-2">
                        <x-admin.status-badge :is-active="$value->is_active" />
                    </td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :editUrl="route('admin.values.edit', $value)"
                            :deleteRoute="route('admin.values.destroy', $value)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

<div class="mt-4">
    {{ $values->appends(request()->query())->links() }}
</div>
@endsection

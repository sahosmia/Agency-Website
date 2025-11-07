@extends('admin.layouts.app')

@section('title', 'Index Working Processes')
@section('header-title', 'Index Working Processes')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Working Processes</h1>
        <x-admin.create-button :route="route('admin.working-processes.create')" />
    </div>

    <div class="mb-4">
        <form action="{{ route('admin.working-processes.index') }}" method="GET">
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
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($workingProcesses as $workingProcess)
                <tr>
                    <td class="border px-4 py-2">{{ $workingProcess->title }}</td>
                    <td class="border px-4 py-2">{{ $workingProcess->description }}</td>
                    <td class="border px-4 py-2">{{ $workingProcess->icon }}</td>
                    <td class="border px-4 py-2">
                        <x-admin.status-badge :is-active="$workingProcess->is_active" />
                    </td>
                    <td class="border px-4 py-2">
                        <x-admin.actions-dropdown
                            :editUrl="route('admin.working-processes.edit', $workingProcess)"
                            :deleteRoute="route('admin.working-processes.destroy', $workingProcess)"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

<div class="mt-4">
    {{ $workingProcesses->appends(request()->query())->links() }}
</div>
@endsection

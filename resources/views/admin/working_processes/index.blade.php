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

    <x-admin.table>
        <x-slot name="head">
            <tr>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Title</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Description</th>
                <th class="px-5 py-3 text-left font-medium text-gray-600">Icon</th>
                <th class="px-5 py-3 text-center font-medium text-gray-600">Status</th>
                <th class="px-5 py-3 text-right font-medium text-gray-600 w-24">Actions</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($workingProcesses as $workingProcess)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-5 py-3">{{ $workingProcess->title }}</td>
                    <td class="px-5 py-3">{{ $workingProcess->description }}</td>
                    <td class="px-5 py-3">{{ $workingProcess->icon }}</td>
                    <td class="px-5 py-3 text-center">
                        <x-admin.status-badge :is-active="$workingProcess->is_active" />
                    </td>
                    <td class="px-5 py-3 text-right">
                        <x-admin.actions-dropdown
                            :editUrl="route('admin.working-processes.edit', $workingProcess)"
                            :deleteRoute="route('admin.working-processes.destroy', $workingProcess)"
                        />
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-admin.table>

<div class="mt-4">
    {{ $workingProcesses->appends(request()->query())->links() }}
</div>
@endsection

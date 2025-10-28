@extends('admin.layouts.app')

@section('title', 'Index Working Processes')
@section('header-title', 'Index Working Processes')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Working Processes</h1>
        <x-admin.create-button :route="route('admin.working-processes.create')" />
    </div>

    <table class="w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Icon</th>
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
                        <a href="{{ route('admin.working-processes.edit', $workingProcess) }}" class="text-blue-500 hover:underline">Edit</a>
                        <x-admin.delete-button :route="route('admin.working-processes.destroy', $workingProcess)" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

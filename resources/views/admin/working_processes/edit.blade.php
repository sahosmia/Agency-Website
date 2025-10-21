@extends('admin.layouts.app')

@section('title', 'Edit Working Process')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Working Process</h1>
    </div>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.working-processes.update', $workingProcess) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('title', $workingProcess->title) }}" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full border-gray-300 rounded-md shadow-sm" required>{{ old('description', $workingProcess->description) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="icon" class="block text-gray-700">Icon</label>
            <input type="text" name="icon" id="icon" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('icon', $workingProcess->icon) }}" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </form>
@endsection

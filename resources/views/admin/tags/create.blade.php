@extends('admin.layouts.app')

@section('title', 'Create Tags')
@section('header-title', 'Create Tags')





@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Tag</h1>

    <form action="{{ route('admin.tags.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-md" value="{{ old('name') }}" required>
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create</button>
    </form>
@endsection

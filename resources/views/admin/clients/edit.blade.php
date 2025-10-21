@extends('admin.layouts.app')

@section('title', 'Edit Client')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Client</h1>
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

    <form action="{{ route('admin.clients.update', $client) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $client->name) }}" required>
        </div>
        <div class="mb-4">
            <label for="location" class="block text-gray-700">Location</label>
            <input type="text" name="location" id="location" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('location', $client->location) }}" required>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="w-full border-gray-300 rounded-md shadow-sm">
            @if ($client->image)
                <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}" class="h-16 w-16 object-cover mt-2">
            @endif
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </form>
@endsection

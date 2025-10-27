@extends('admin.layouts.app')

@section('title', 'Create Clients')
@section('header-title', 'Create Clients')





@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Create Client</h1>
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

    <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name') }}" required>
        </div>
        <div class="mb-4">
            <label for="location" class="block text-gray-700">Location</label>
            <input type="text" name="location" id="location" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('location') }}" required>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create</button>
    </form>
@endsection

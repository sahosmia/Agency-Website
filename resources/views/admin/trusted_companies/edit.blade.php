@extends('admin.layouts.app')

@section('title', 'Edit Trusted Company')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Edit Trusted Company</h1>
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

    <form action="{{ route('admin.trusted-companies.update', $trustedCompany) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $trustedCompany->name) }}" required>
        </div>
        <div class="mb-4">
            <label for="logo" class="block text-gray-700">Logo</label>
            <input type="file" name="logo" id="logo" class="w-full border-gray-300 rounded-md shadow-sm">
            @if ($trustedCompany->logo)
                <img src="{{ asset('storage/' . $trustedCompany->logo) }}" alt="{{ $trustedCompany->name }}" class="h-16 w-16 object-cover mt-2">
            @endif
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </form>
@endsection

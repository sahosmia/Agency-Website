@extends('admin.layouts.app')

@section('title', 'Create Price Plan')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Price Plan</h1>

    <form action="{{ route('admin.price-plans.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-md" value="{{ old('name') }}" required>
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700">Price</label>
            <input type="number" name="price" id="price" class="w-full px-3 py-2 border rounded-md" value="{{ old('price') }}" required>
            @error('price')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="features" class="block text-gray-700">Features (comma-separated)</label>
            <input type="text" name="features" id="features" class="w-full px-3 py-2 border rounded-md" value="{{ old('features') }}" required>
            @error('features')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="planable_type" class="block text-gray-700">Planable Type</label>
            <select name="planable_type" id="planable_type" class="w-full px-3 py-2 border rounded-md" required>
                <option value="App\Models\ServiceType">Service Type</option>
            </select>
            @error('planable_type')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="planable_id" class="block text-gray-700">Planable</label>
            <select name="planable_id" id="planable_id" class="w-full px-3 py-2 border rounded-md" required>
                @foreach ($serviceTypes as $serviceType)
                    <option value="{{ $serviceType->id }}">{{ $serviceType->name }}</option>
                @endforeach
            </select>
            @error('planable_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create</button>
    </form>
@endsection

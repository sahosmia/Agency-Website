@extends('admin.layouts.app')

@section('title', 'Edit Service Type')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Service Type</h1>

    <form action="{{ route('admin.service-types.update', $serviceType) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-md" value="{{ old('name', $serviceType->name) }}" required>
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="service_id" class="block text-gray-700">Service</label>
            <select name="service_id" id="service_id" class="w-full px-3 py-2 border rounded-md" required>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}" @if($service->id == $serviceType->service_id) selected @endif>{{ $service->name }}</option>
                @endforeach
            </select>
            @error('service_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Update</button>
    </form>
@endsection

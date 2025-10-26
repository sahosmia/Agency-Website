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
            <label for="type" class="block text-gray-700">Type</label>
            <select name="type" id="type" class="w-full px-3 py-2 border rounded-md" required>
                <option value="fixed" {{ old('type') === 'fixed' ? 'selected' : '' }}>Fixed</option>
                <option value="free" {{ old('type') === 'free' ? 'selected' : '' }}>Free</option>
                <option value="custom" {{ old('type') === 'custom' ? 'selected' : '' }}>Custom</option>
            </select>
            @error('type')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4" id="price-container">
            <label for="price" class="block text-gray-700">Price</label>
            <input type="number" name="price" id="price" class="w-full px-3 py-2 border rounded-md" value="{{ old('price') }}">
            @error('price')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Features</label>
            @foreach ($features as $feature)
                <div class="flex items-center">
                    <input type="checkbox" name="features[{{ $feature->id }}][id]" value="{{ $feature->id }}" class="mr-2">
                    <label>{{ $feature->name }}</label>
                    <div class="ml-4">
                        <label class="mr-2">
                            <input type="radio" name="features[{{ $feature->id }}][is_active]" value="1" class="mr-1">
                            Active
                        </label>
                        <label>
                            <input type="radio" name="features[{{ $feature->id }}][is_active]" value="0" class="mr-1" checked>
                            Inactive
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mb-4">
            <label for="planable_type" class="block text-gray-700">Planable Type</label>
            <select name="planable_type" id="planable_type" class="w-full px-3 py-2 border rounded-md" required>
                <option value="App\Models\ServiceType">Service Type</option>
                <option value="App\Models\Software">Software</option>
            </select>
            @error('planable_type')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="planable_id" class="block text-gray-700">Planable</label>
            <select name="planable_id" id="planable_id" class="w-full px-3 py-2 border rounded-md" required>
                <!-- Options will be populated by script -->
            </select>
            @error('planable_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Create</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typeElement = document.getElementById('type');
            const priceContainer = document.getElementById('price-container');
            const planableTypeElement = document.getElementById('planable_type');
            const planableIdElement = document.getElementById('planable_id');

            const serviceTypes = @json($serviceTypes);
            const softwares = @json($softwares);

            function togglePriceContainer() {
                if (typeElement.value === 'fixed') {
                    priceContainer.style.display = 'block';
                } else {
                    priceContainer.style.display = 'none';
                }
            }

            function updatePlanableOptions() {
                planableIdElement.innerHTML = '';
                if (planableTypeElement.value === 'App\\Models\\ServiceType') {
                    serviceTypes.forEach(function(serviceType) {
                        const option = document.createElement('option');
                        option.value = serviceType.id;
                        option.textContent = serviceType.name;
                        planableIdElement.appendChild(option);
                    });
                } else if (planableTypeElement.value === 'App\\Models\\Software') {
                    softwares.forEach(function(software) {
                        const option = document.createElement('option');
                        option.value = software.id;
                        option.textContent = software.name;
                        planableIdElement.appendChild(option);
                    });
                }
            }

            togglePriceContainer();
            updatePlanableOptions();

            typeElement.addEventListener('change', togglePriceContainer);
            planableTypeElement.addEventListener('change', updatePlanableOptions);
        });
    </script>
@endsection

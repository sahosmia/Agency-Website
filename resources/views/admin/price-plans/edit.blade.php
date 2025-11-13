@extends('admin.layouts.app')

@section('title', 'Edit Price Plans')
@section('header-title', 'Edit Price Plans')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Price Plan</h1>

    <form action="{{ route('admin.price-plans.update', $pricePlan) }}" method="POST">
        @csrf
        @method('PUT')
        <x-admin.text-input name="name" label="Name" :value="$pricePlan->name" required />
        <x-admin.select name="type" label="Type" :options="['fixed' => 'Fixed', 'free' => 'Free', 'custom' => 'Custom']" :value="$pricePlan->type" required />
        <div id="price-container">
            <x-admin.text-input name="price" label="Price" :value="$pricePlan->price" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Features</label>
            @foreach ($features as $feature)
                @php
                    $planFeature = $pricePlan->features->firstWhere('id', $feature->id);
                    $isActive = $planFeature ? $planFeature->pivot->is_active : false;
                @endphp
                <div class="flex items-center">
                    <x-admin.checkbox name="features[{{ $feature->id }}][id]" :value="$feature->id" :label="$feature->name" :checked="!!$planFeature" />
                    <div class="ml-4">
                        <label class="mr-2">
                            <input type="radio" name="features[{{ $feature->id }}][is_active]" value="1" class="mr-1" @if($isActive) checked @endif>
                            Active
                        </label>
                        <label>
                            <input type="radio" name="features[{{ $feature->id }}][is_active]" value="0" class="mr-1" @if(!$isActive) checked @endif>
                            Inactive
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
        <x-admin.select name="planable_type" label="Planable Type" :options="['App\Models\ServiceType' => 'Service Type', 'App\Models\Software' => 'Software']" :value="$pricePlan->planable_type" required />
        <div class="mb-4">
            <label for="planable_id" class="block text-gray-700">Planable</label>
            <select name="planable_id" id="planable_id" class="w-full px-3 py-2 border rounded-md" required>
                <!-- Options will be populated by script -->
            </select>
            @error('planable_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <x-admin.switch-input name="is_active" label="Active" :checked="$pricePlan->is_active" />
        <x-admin.submit-button label="Update" />
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typeElement = document.getElementById('type');
            const priceContainer = document.getElementById('price-container');
            const planableTypeElement = document.getElementById('planable_type');
            const planableIdElement = document.getElementById('planable_id');

            const serviceTypes = @json($serviceTypes);
            const softwares = @json($softwares);
            const selectedPlanableId = {{ $pricePlan->planable_id }};

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
                        if (serviceType.id === selectedPlanableId) {
                            option.selected = true;
                        }
                        planableIdElement.appendChild(option);
                    });
                } else if (planableTypeElement.value === 'App\\Models\\Software') {
                    softwares.forEach(function(software) {
                        const option = document.createElement('option');
                        option.value = software.id;
                        option.textContent = software.name;
                        if (software.id === selectedPlanableId) {
                            option.selected = true;
                        }
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

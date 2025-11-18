@extends('admin.layouts.app')

@section('title', 'Create Price Plans')
@section('header-title', 'Create Price Plans')

@section('content')
<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-sm border border-gray-100 p-8">
    {{-- Page Header --}}
    <div class="mb-8 border-b border-gray-200 pb-4 flex items-center justify-between">
        <h1 class="text-xl font-semibold text-gray-800">Create Price Plan</h1>
        {{-- Consistent Back Button --}}
        <x-admin.button outline :route="route('admin.price-plans.index')" text="Back" />
    </div>

    {{-- Price Plan Form --}}
    <form action="{{ route('admin.price-plans.store') }}" method="POST" class="space-y-6">
        @csrf

        {{-- Basic Info --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-admin.text-input name="name" label="Name" required />
            <x-admin.select name="type" label="Type" id="type"
                :options="['fixed' => 'Fixed', 'free' => 'Free', 'custom' => 'Custom']" required />
        </div>

        {{-- Price Input (Conditional) --}}
        <div id="price-container">
            <x-admin.text-input name="price" label="Price" />
        </div>

        {{-- Planable Type Selection --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <x-admin.select name="planable_type" label="Planable Type" id="planable_type"
                :options="['App\Models\ServiceType' => 'Service Type', 'App\Models\Software' => 'Software']" required />

            {{-- Dynamic Planable ID Select (Using your component styling for consistency) --}}
            <div>
                <x-admin.select name="planable_id" label="Planable Item" id="planable_id" :options="[]" required />
            </div>
        </div>

        {{-- Features Section --}}
        <div class="border border-gray-200 rounded-lg p-4 bg-gray-50/60 space-y-4">
            <h2 class="text-lg font-medium text-gray-700 border-b border-gray-200 pb-2">Plan Features</h2>

            @foreach ($features as $feature)
            <div class="flex items-center justify-between py-1 px-2 border-b last:border-b-0">
                {{-- Feature Name/Checkbox (Using a standard switch for cleaner look or checkbox if needed) --}}
                <label class="text-gray-700 font-medium flex items-center space-x-2">
                    <input type="checkbox" name="features[{{ $feature->id }}][id]" value="{{ $feature->id }}"
                        class="rounded text-indigo-600 focus:ring-indigo-500">
                    <span>{{ $feature->name }}</span>
                </label>

                {{-- Feature Status (Active/Inactive Radios) --}}
                <div class="flex items-center space-x-4 text-sm">
                    <label class="inline-flex items-center text-gray-600">
                        <input type="radio" name="features[{{ $feature->id }}][is_active]" value="1"
                            class="form-radio text-green-600 focus:ring-green-500">
                        <span class="ml-1">Active</span>
                    </label>
                    <label class="inline-flex items-center text-gray-600">
                        <input type="radio" name="features[{{ $feature->id }}][is_active]" value="0"
                            class="form-radio text-red-600 focus:ring-red-500" checked>
                        <span class="ml-1">Inactive</span>
                    </label>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Status & Actions --}}
        <div class="flex items-center justify-between border-t border-gray-100 pt-6">
            <x-admin.switch-input name="is_active" label="Active Status" checked />

            <div class="flex gap-3">
                <x-admin.button type="submit" text="Create Plan" class="px-6 py-2" />
                <x-admin.button outline :route="route('admin.price-plans.index')" text="Cancel" />
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
{{-- Move script logic into the scripts stack --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elements are correctly queried by their IDs
        const typeElement = document.getElementById('type');
        const priceContainer = document.getElementById('price-container');
        const planableTypeElement = document.getElementById('planable_type');
        const planableIdElement = document.getElementById('planable_id');

        // Data arrays passed from Laravel
        const serviceTypes = @json($serviceTypes);
        const softwares = @json($softwares);

        function togglePriceContainer() {
            // Check if the price input exists within its container (it should)
            const priceInput = priceContainer.querySelector('[name="price"]');

            if (typeElement.value === 'fixed') {
                priceContainer.style.display = 'block';
                // Optional: set required attribute dynamically
                if (priceInput) priceInput.setAttribute('required', 'required');
            } else {
                priceContainer.style.display = 'none';
                // Optional: remove required attribute dynamically
                if (priceInput) priceInput.removeAttribute('required');
            }
        }

        function updatePlanableOptions() {
            planableIdElement.innerHTML = ''; // Clear existing options
            let data = [];

            if (planableTypeElement.value === 'App\\Models\\ServiceType') {
                data = serviceTypes;
            } else if (planableTypeElement.value === 'App\\Models\\Software') {
                data = softwares;
            }

            data.forEach(function(item) {
                const option = document.createElement('option');
                option.value = item.id;
                option.textContent = item.name;
                planableIdElement.appendChild(option);
            });
        }

        // Initial calls and listeners
        togglePriceContainer();
        updatePlanableOptions();

        typeElement.addEventListener('change', togglePriceContainer);
        planableTypeElement.addEventListener('change', updatePlanableOptions);
    });
</script>
@endpush

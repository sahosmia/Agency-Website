@props(['name', 'label', 'value' => 1, 'checked' => false, 'id' => null])

@php
    $id = $id ?? $name;
    $checked = !!$checked; // Ensure boolean
@endphp

<div class="flex items-center">
    <label for="{{ $id }}" class="text-sm font-medium text-gray-700 mr-3">{{ $label }}</label>
    <div x-data="{ isOn: {{ $checked ? 'true' : 'false' }} }">
        <!-- Hidden checkbox that holds the actual value -->
        <input type="checkbox"
               name="{{ $name }}"
               id="{{ $id }}"
               value="{{ $value }}"
               x-model="isOn"
               class="hidden"
               {{ $checked ? 'checked' : '' }}
        >
        <!-- Visual switch -->
        <button
            type="button"
            @click="isOn = !isOn"
            class="relative inline-flex items-center h-6 rounded-full w-11 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            :class="isOn ? 'bg-indigo-600' : 'bg-gray-200'"
        >
            <span
                class="inline-block w-4 h-4 transform bg-white rounded-full transition-transform duration-200 ease-in-out"
                :class="isOn ? 'translate-x-6' : 'translate-x-1'"
            ></span>
        </button>
    </div>
</div>

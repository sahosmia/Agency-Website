@props(['name', 'label', 'value' => 1, 'checked' => false, 'id' => null])

@php
$id = $id ?? $name;
// Determine if checked: use old input if available, otherwise fall back to $checked or $value
$isChecked = old($name) !== null
? (bool) old($name)
: (bool) $value || $checked;
@endphp

<div class="flex items-center gap-3">
    <div x-data="{ isOn: {{ $isChecked ? 'true' : 'false' }} }" class="relative">
        <!-- Hidden input ensures a value is always submitted -->
        <input type="hidden" name="{{ $name }}" value="0">
        <!-- Actual checkbox -->
        <input type="checkbox" name="{{ $name }}" id="{{ $id }}" value="1" x-model="isOn" class="hidden">

        <!-- Toggle UI -->
        <button type="button" @click="isOn = !isOn" :class="isOn ? 'bg-indigo-600' : 'bg-gray-300'"
            class="relative inline-flex items-center h-6 w-11 rounded-full transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span
                class="inline-block w-4 h-4 bg-white rounded-full transform transition-transform duration-200 ease-in-out"
                :class="isOn ? 'translate-x-6' : 'translate-x-1'"></span>
        </button>
    </div>

    <label for="{{ $id }}" class="text-sm font-medium text-gray-700 select-none">{{ $label }}</label>
</div>
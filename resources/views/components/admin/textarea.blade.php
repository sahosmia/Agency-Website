@props(['name', 'label', 'value' => ''])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" class="w-full px-3 py-2 border rounded-md">{{ old($name, $value) }}</textarea>
    <x-admin.error-message :name="$name" />
</div>

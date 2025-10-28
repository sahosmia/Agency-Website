@props(['name', 'label', 'value' => '', 'required' => false])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700">{{ $label }}</label>
    <input type="text" name="{{ $name }}" id="{{ $name }}" class="w-full px-3 py-2 border rounded-md" value="{{ old($name, $value) }}" {{ $required ? 'required' : '' }}>
    <x-admin.error-message :name="$name" />
</div>

@props(['name', 'label', 'value' => ''])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700">{{ $label }}</label>
    <input type="file" name="{{ $name }}" id="{{ $name }}" class="w-full px-3 py-2 border rounded-md">
    @if ($value)
        <img src="{{ asset('storage/' . $value) }}" class="h-16 w-16 object-cover mt-2">
    @endif
    <x-admin.error-message :name="$name" />
</div>

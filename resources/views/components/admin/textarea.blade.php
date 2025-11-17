@props(['name', 'label', 'value' => '', 'rows' => 4])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 font-medium mb-2">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 resize-none transition">{{ old($name, $value) }}</textarea>
    <x-admin.error-message :name="$name" />
</div>
@props(['name', 'label', 'options', 'value' => '', 'required' => false])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="w-full px-3 py-2 border rounded-md" {{ $required ? 'required' : '' }}>
        @foreach ($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ old($name, $value) == $optionValue ? 'selected' : '' }}>{{ $optionLabel }}</option>
        @endforeach
    </select>
    <x-admin.error-message :name="$name" />
</div>

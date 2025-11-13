@props(['name', 'label', 'options', 'values' => [], 'required' => false])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 font-medium mb-2">{{ $label }}</label>
    <select name="{{ $name }}[]" id="{{ $name }}" multiple class="w-full px-3 py-2 border rounded-md" {{ $required
        ? 'required' : '' }}>
        @foreach ($options as $optionValue => $optionLabel)
        <option value="{{ $optionValue }}" {{ in_array($optionValue, old($name, $values)) ? 'selected' : '' }}>
            {{ $optionLabel }}
        </option>
        @endforeach
    </select>
    <x-admin.error-message :name="$name" />
</div>

@pushOnce('scripts')
<script>
    $(document).ready(function() {
        $('#{{ $name }}').select2({
            theme: 'classic',
            width: '100%',
            placeholder: "Select {{ $label }}"
        });
    });
</script>
@endPushOnce
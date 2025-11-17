@props(['name', 'label', 'options', 'value' => '', 'required' => false])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-gray-700 font-medium mb-2">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}"
        class="w-full px-3 py-2 border border-gray-300 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 transition-colors"
        {{ $required ? 'required' : '' }}>
        <option value="">{{ $label }}</option>
        @foreach ($options as $optionValue => $optionLabel)
        <option value="{{ $optionValue }}" {{ old($name, $value)==$optionValue ? 'selected' : '' }}>
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
            theme: 'classic', // optional: 'bootstrap-5' if using Bootstrap theme
            width: '100%',
            placeholder: "Select {{ $label }}",
            allowClear: true
        });
    });
</script>
@endPushOnce
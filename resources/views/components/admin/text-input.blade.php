@props(['name', 'label', 'value' => '', 'required' => false, 'placeholder' => ''])

<div class="mb-5">
    <label for="{{ $name }}" class="block  font-medium text-gray-700 mb-2">
        {{ $label }}
        @if($required)
        <span class="text-red-500">*</span>
        @endif
    </label>

    <div class="relative">
        <input type="text" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}"
            placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}
            class="w-full rounded-lg border border-gray-300  ">
    </div>

    <x-admin.error-message :name="$name" />
</div>
@props(['name', 'label', 'value' => 1, 'checked' => false])

<div class="flex items-center">
    <input type="checkbox" name="{{ $name }}" value="{{ $value }}" {{ $checked ? 'checked' : '' }} class="mr-2">
    <label>{{ $label }}</label>
</div>

@props(['name', 'label', 'value' => 1, 'checked' => false])

@php
$oldValue = old($name);
$isChecked = !is_null($oldValue) ? (bool)$oldValue : (bool)$value;
@endphp

<div class="flex items-center">
    <input type="hidden" name="{{ $name }}" value="0">
    <input type="checkbox" name="{{ $name }}" value="1" {{ $isChecked ? 'checked' : '' }} class="mr-2">
    <label>{{ $label }}</label>
</div>
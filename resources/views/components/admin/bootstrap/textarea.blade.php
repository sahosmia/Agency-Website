@props(['name', 'label', 'value' => ''])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" class="form-control" rows="3">{{ old($name, $value) }}</textarea>
    <x-admin.bootstrap.error-message :name="$name" />
</div>

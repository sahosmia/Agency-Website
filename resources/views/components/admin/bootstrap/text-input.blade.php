@props(['name', 'label', 'value' => '', 'required' => false])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="text" name="{{ $name }}" id="{{ $name }}" class="form-control" value="{{ old($name, $value) }}" {{ $required ? 'required' : '' }}>
    <x-admin.bootstrap.error-message :name="$name" />
</div>

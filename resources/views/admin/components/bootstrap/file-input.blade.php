@props(['name', 'label', 'value' => ''])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="file" name="{{ $name }}" id="{{ $name }}" class="form-control">
    @if ($value)
        <img src="{{ asset('storage/' . $value) }}" class="img-thumbnail mt-2" width="100">
    @endif
    <x-admin.bootstrap.error-message :name="$name" />
</div>

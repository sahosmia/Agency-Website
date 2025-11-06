@props(['isActive'])

@if ($isActive)
    <span class="badge badge-success">Active</span>
@else
    <span class="badge badge-danger">Inactive</span>
@endif

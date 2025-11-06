@props(['isActive'])

@if ($isActive)
    <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs">Active</span>
@else
    <span class="bg-red-500 text-white px-2 py-1 rounded-full text-xs">Inactive</span>
@endif

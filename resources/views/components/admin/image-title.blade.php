@props(['name', 'imagePath'])

<div class="flex items-center gap-2">
    <img class="rounded border border-secondary-400 w-10 h-10" src="{{ $imagePath }}" alt="{{ $name }}"
        class="h-16 w-16 object-cover">{{
    $name }}
</div>

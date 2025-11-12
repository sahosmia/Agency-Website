@props(['achievements'])
@foreach ($achievements as $achievement)
<div class="hero-card">
    <h2 class="title-text-bold-medium text-secondary-900">{{ $achievement->value }} </h2>
    <h3 class="sub-title-large-regular text-secondary-900">{{ $achievement->title}}
    </h3>
    <p class="body-text-regular-small text-secondary-800">
        {{ $achievement->description}}</p>
</div>
@endforeach
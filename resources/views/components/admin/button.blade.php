@props([
'route' => null,
'variant' => 'gray',
'outline' => false,
'size' => 'md',
'type' => 'link', // 'link' | 'submit'
'icon' => null,
'text' => null, // optional Font Awesome icon HTML
'class' => '',
])

@php
$variants = [
'indigo' => [
'solid' => 'bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 text-white focus:ring-indigo-400',
'outline' =>
'border border-indigo-600 text-indigo-600 hover:bg-indigo-50 active:bg-indigo-100 focus:ring-indigo-400',
],
'gray' => [
'solid' => 'bg-gray-600 hover:bg-gray-700 active:bg-gray-800 text-white focus:ring-gray-400',
'outline' =>
'border border-gray-600 text-gray-700 hover:bg-gray-100 active:bg-gray-200 focus:ring-gray-400',
],
'red' => [
'solid' => 'bg-red-600 hover:bg-red-700 active:bg-red-800 text-white focus:ring-red-400',
'outline' => 'border border-red-600 text-red-600 hover:bg-red-50 active:bg-red-100 focus:ring-red-400',
],
'green' => [
'solid' => 'bg-green-600 hover:bg-green-700 active:bg-green-800 text-white focus:ring-green-400',
'outline' =>
'border border-green-600 text-green-600 hover:bg-green-50 active:bg-green-100 focus:ring-green-400',
],
'blue' => [
'solid' => 'bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white focus:ring-blue-400',
'outline' => 'border border-blue-600 text-blue-600 hover:bg-blue-50 active:bg-blue-100 focus:ring-blue-400',
],
];

$sizes = [
'sm' => 'px-3 py-1.5 text-xs',
'md' => 'px-4 py-2 text-sm',
'lg' => 'px-5 py-3 text-base',
];

$baseClasses = 'inline-flex items-center gap-2 rounded-lg focus:ring-2 focus:outline-none transition-all
duration-200 shadow-sm hover:shadow-md';
$selectedSize = isset($sizes[$size]) ? $sizes[$size] : $sizes['md'];
$selectedVariant = $outline ? $variants[$variant]['outline'] : $variants[$variant]['solid'];

$classes = trim("$baseClasses $selectedSize $selectedVariant $class");
@endphp

@if ($type === 'submit')
<button type="submit" {{ $attributes->merge(['class' => $classes]) }}>
    @if ($icon)
    {!! $icon !!}
    @endif
    {{ $text }}
</button>
@else
<a href="{{ $route }}" {{ $attributes->merge(['class' => $classes]) }}>
    @if ($icon)
    {!! $icon !!}
    @endif
    {{ $text }}
</a>
@endif
@props(['faqs'])

@if ($faqs->count())
<div class="max-w-4xl mx-auto">
    <div x-data="{ open: 0 }" class="space-y-4">
        @foreach ($faqs as $faq)
        <div class="bg-white shadow-md rounded-lg">
            <button @click="open = open === {{ $loop->index }} ? -1 : {{ $loop->index }}"
                class="w-full flex justify-between items-center px-6 py-4 text-left">
                <span class="text-lg font-semibold">{{ $faq->question }}</span>
                <svg class="h-6 w-6 transform transition-transform text-secondary-800"
                    :class="{ 'rotate-180': open === {{ $loop->index }} }" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <div x-show="open === {{ $loop->index }}" x-collapse class="px-6 pb-4">
                <p class="text-gray-600">{!! $faq->answer !!}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
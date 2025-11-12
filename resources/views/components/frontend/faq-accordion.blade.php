@props(['faqs'])

@if ($faqs->count())
<div class="max-w-4xl mx-auto">
    <div x-data="{ open: 0 }" class="mt-8 space-y-3 md:space-y-4">
        @foreach ($faqs as $faq)
        <div
            class="border-b border-secondary-200 overflow-hidden  shadow-sm hover:shadow-md transition-shadow duration-300">
            <!-- Question -->
            <div class="flex justify-between items-center gap-3 p-3 md:p-4 cursor-pointer select-none"
                @click="open = (open === {{ $loop->iteration }} ? 0 : {{ $loop->iteration }})">
                <h3 class="  font-semibold text-secondary-950 text-xl md:text-2xl leading-snug">
                    {{ $faq->question }}
                </h3>
                <i class="fa-solid text-secondary-800 text-sm md:text-base transition-transform duration-300"
                    :class="open === {{ $loop->iteration }} ? 'fa-minus rotate-180' : 'fa-plus rotate-0'"></i>
            </div>

            <!-- Answer (Smooth Collapse) -->
            <div x-show="open === {{ $loop->iteration }}" x-collapse>
                <div class="p-3 md:p-4 bg-secondary-50 ">
                    <p class="body-text-regular-medium text-secondary-600 text-sm md:text-base leading-relaxed">
                        {{ $faq->answer }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
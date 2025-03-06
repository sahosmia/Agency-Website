<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md" x-data="{ activeIndex: 1 }">
    <h2 class="text-2xl font-semibold text-center mb-4">Frequently Asked Questions</h2>
    @foreach ($faqs as $key => $faq)
        {{-- <h2>{{ $faq->question }}</h2>    <p>{{ $faq->answer }}</p> --}}

        <div class="border-b py-4" x-data="{ open: false }">
            <button @click="activeIndex = (activeIndex === {{ $key + 1 }} ? null : {{ $key + 1 }})" class="flex justify-between items-center w-full text-left text-lg font-medium">
                <span>{{ $faq->question }}</span>
                <span x-text="activeIndex === {{ $key + 1 }} ? '−' : '+'"></span>

            </button>
            <p x-show="activeIndex === {{ $key + 1 }}" x-transition class="mt-2 text-gray-600">
                {{ $faq->answer }}
            </p>
        </div>
    @endforeach



    <!-- FAQ Item -->
    {{-- <div class="border-b py-4" x-data="{ open: false }">
            <button @click="open = !open" class="flex justify-between items-center w-full text-left text-lg font-medium">
                <span>What is Tailwind CSS?</span>
                <svg x-show="!open" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                </svg>
                <svg x-show="open" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path>
                </svg>
            </button>
            <p x-show="open" x-transition class="mt-2 text-gray-600">
                Tailwind CSS is a utility-first CSS framework that allows rapid UI development.
            </p>
        </div> --}}

    <!-- Another FAQ Item -->
    {{-- <div class="border-b py-4" x-data="{ open: false }">
            <button @click="open = !open" class="flex justify-between items-center w-full text-left text-lg font-medium">
                <span>How does Alpine.js work?</span>
                <svg x-show="!open" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                </svg>
                <svg x-show="open" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4"></path>
                </svg>
            </button>
            <p x-show="open" x-transition class="mt-2 text-gray-600">
                Alpine.js is a lightweight JavaScript framework for simple UI interactions.
            </p>
        </div> --}}

    <!-- More FAQs can be added in the same pattern -->
</div>
<script>
    // Your JS code here
    var data = @json($faqs);
    console.log(data);
</script>

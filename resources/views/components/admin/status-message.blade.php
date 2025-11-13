@if (session('success'))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-4"
    x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-4"
    class="fixed top-4 right-4 bg-green-500 text-white px-5 py-3 rounded-xl shadow-lg z-50 flex items-center space-x-3"
    role="alert">

    <span class="flex-1">{{ session('success') }}</span>

    <!-- Close button -->
    <button @click="show = false" class="text-white hover:text-gray-100 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>
@endif
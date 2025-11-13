@if ($errors->any())
<div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-x-4" x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-4"
    class="fixed top-4 right-4 bg-red-500 text-white px-5 py-3 rounded-xl shadow-lg z-50 flex flex-col space-y-1"
    role="alert">

    <div class="flex justify-between items-start">
        <strong class="font-semibold">Error:</strong>
        <button @click="show = false" class="text-white hover:text-gray-100 focus:outline-none ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <ul class="mt-1 list-disc list-inside text-sm">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
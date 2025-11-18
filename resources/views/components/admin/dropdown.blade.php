<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" class="flex items-center space-x-2 px-4 py-2 bg-blue-500 text-white rounded-md">
        {{ $label }}
    </button>

    <div x-show="open" x-cloak @click.outside="open = false"
        class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10" x-transition>
        {{ $slot }}
    </div>
</div>

@props(['showUrl' => null, 'editUrl' => null, 'deleteRoute'])

<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
        </svg>
    </button>

    <div x-show="open" @click.away="open = false" class="absolute right-0 z-10 w-48 mt-2 origin-top-right bg-white rounded-md shadow-lg" x-cloak>
        <div class="py-1">
            @if ($showUrl)
                <a href="{{ $showUrl }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Show</a>
            @endif
            @if ($editUrl)
                <a href="{{ $editUrl }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
            @endif
            <x-admin.delete-button :route="$deleteRoute" display-as="link" class="w-full" />
        </div>
    </div>
</div>

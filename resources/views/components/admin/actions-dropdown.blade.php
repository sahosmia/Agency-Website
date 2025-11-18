@props(['showUrl' => null, 'editUrl' => null, 'deleteRoute'])

<div x-data="actionsDropdown()" class="relative">
    <!-- Trigger Button -->
    <button x-ref="trigger" @click="toggle()"
        class="flex items-center justify-center w-8 h-8 rounded-md border border-gray-200 bg-white shadow-sm text-gray-600 hover:text-gray-800 hover:bg-gray-50 focus:outline-none transition"
        aria-haspopup="true" aria-expanded="false">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5h.01M12 12h.01M12 19h.01" />
        </svg>
    </button>

    <!-- Teleported Dropdown -->
    <template x-teleport="body">
        <div :id="`menu-${uid}`" x-ref="menu" x-show="open" @click.away="close()"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95" x-cloak
            :style="`position: absolute; top: ${top}px; left: ${left}px;`"
            class="z-50 w-44 bg-white border border-gray-200 rounded-xl shadow-lg ring-1 ring-black/5 overflow-hidden">
            <div class="py-1">

                @if ($showUrl)
                <a href="{{ $showUrl }}"
                    class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 transition">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 12H9m12 0A9 9 0 113 12a9 9 0 0118 0z" />
                    </svg>
                    View
                </a>
                @endif

                @if ($editUrl)
                <a href="{{ $editUrl }}"
                    class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 transition">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.232 5.232l3.536 3.536M9 13l6-6 3 3-6 6H9v-3z" />
                    </svg>
                    Edit
                </a>
                @endif

                <div class="border-t border-gray-100 my-1"></div>

                <x-admin.delete-button :route="$deleteRoute" display-as="link"
                    class="flex items-center gap-2 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 w-full transition">
                    <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 7h12M9 7V4h6v3m2 0v13H8V7h10z" />
                    </svg>
                    Delete
                </x-admin.delete-button>
            </div>
        </div>
    </template>
</div>

<script>
    function actionsDropdown() {
        return {
            open: false,
            top: 0,
            left: 0,
            menuWidth: 176,
            uid: crypto.randomUUID(), // unique ID per dropdown
            triggerRef: null,
            menuRef: null,

            init() {
                this.triggerRef = this.$refs.trigger;

                // Wait until teleport finishes
                this.$nextTick(() => {
                    this.menuRef = document.getElementById(`menu-${this.uid}`);
                });

                window.addEventListener('resize', () => {
                    if (this.open) this.position();
                });

                // Use capture mode scroll to detect scrolling inside containers
                window.addEventListener('scroll', () => {
                    if (this.open) this.position();
                }, true);
            },

            toggle() {
                this.open = !this.open;
                if (this.open) {
                    this.position();
                }
            },

            close() {
                this.open = false;
            },

            position() {
                if (!this.triggerRef || !this.menuRef) return;

                const rect = this.triggerRef.getBoundingClientRect();
                const scrollY = window.scrollY;
                const scrollX = window.scrollX;

                const desiredTop = rect.bottom + scrollY + 8;
                let desiredLeft = rect.right + scrollX - this.menuWidth;

                const viewportWidth = document.documentElement.clientWidth;

                // prevent overflow right side
                if (desiredLeft + this.menuWidth > viewportWidth) {
                    desiredLeft = viewportWidth - this.menuWidth - 8;
                }

                const menuHeight = this.menuRef.offsetHeight || 200;
                const viewportHeight = window.innerHeight + scrollY;

                // if bottom overflow → open upward
                if (desiredTop + menuHeight > viewportHeight) {
                    this.top = rect.top + scrollY - menuHeight - 8;
                } else {
                    this.top = desiredTop;
                }

                this.left = desiredLeft;
            }
        }
    }
</script>

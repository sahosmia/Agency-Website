<header class="bg-white shadow-md p-4">
    <div class="flex justify-between items-center">
        <div class="flex items-center">
            <button @click="sidebarCollapsed = !sidebarCollapsed"
                class="text-gray-500 hover:text-gray-600 focus:outline-none">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </button>
            <h1 class="text-xl font-semibold text-gray-700 ml-4">@yield('header-title', 'Dashboard')</h1>
        </div>
        <div class="flex items-center space-x-4">
            <x-admin.dropdown label="Quick Create">

                <x-admin.dropdown-item route="admin.services.create">New Service</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.service-types.create">New Service Type</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.projects.create">New Project</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.softwares.create">New Software</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.articles.create">New Article</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.tags.create">New Tag</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.vacancies.create">New Vacancy</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.technologies.create">New Technology</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.categories.create">New Category</x-admin.dropdown-item>

                <x-admin.dropdown-item route="admin.features.create">New Feature</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.trusted-companies.create">New Trusted Company</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.clients.create">New Client</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.page-faqs.create">New Page FAQ</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.working-processes.create">New Working Process</x-admin.dropdown-item>

                <x-admin.dropdown-item route="admin.social-media-links.create">New Social Media Link</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.price-plans.create">New Price Plan</x-admin.dropdown-item>

                <x-admin.dropdown-item route="admin.teams.create">New Team Member</x-admin.dropdown-item>
                <x-admin.dropdown-item route="admin.client-reviews.create">New Testimonial</x-admin.dropdown-item>

            </x-admin.dropdown>
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                    <span>{{ Auth::user()->name }}</span>
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-6a6 6 0 100 12A6 6 0 0010 4z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10" x-transition>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
</header>

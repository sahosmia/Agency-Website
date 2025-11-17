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
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center space-x-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Quick Create</span>
                </button>
                <div x-show="open" @click.away="open = false"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10" x-transition>
                    <a href="{{ route('admin.services.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Service</a>
                    <a href="{{ route('admin.service-types.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Service
                        Type</a>
                    <a href="{{ route('admin.projects.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Project</a>
                    <a href="{{ route('admin.softwares.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Software</a>
                    <a href="{{ route('admin.articles.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Article</a>
                    <a href="{{ route('admin.tags.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Tag</a>
                    <a href="{{ route('admin.vacancies.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Vacancy</a>
                    <a href="{{ route('admin.technologies.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New
                        Technology</a>
                    <a href="{{ route('admin.categories.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Category</a>

                    <a href="{{ route('admin.features.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Feature</a>
                    <a href="{{ route('admin.trusted-companies.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Trusted
                        Company</a>
                    <a href="{{ route('admin.clients.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Client</a>
                    <a href="{{ route('admin.page-faqs.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Page FAQ</a>
                    <a href="{{ route('admin.working-processes.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Working
                        Process</a>

                    <a href="{{ route('admin.social-media-links.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Social
                        Media Link</a>
                    <a href="{{ route('admin.price-plans.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Price
                        Plan</a>

                    <a href="{{ route('admin.teams.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Team Member</a>
                    <a href="{{ route('admin.client-reviews.create') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Testimonial</a>
                </div>
            </div>
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
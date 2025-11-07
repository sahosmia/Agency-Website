<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
</head>

<body class="bg-gray-100">
    <div x-data="{ sidebarOpen: true, sidebarCollapsed: false }" class="flex h-screen">
        <!-- Sidebar -->
        <aside :class="{ 'w-64': !sidebarCollapsed, 'w-20': sidebarCollapsed }"
            class="bg-gray-800 text-white flex-shrink-0 transition-all duration-300">
            <div class="p-4">
                <h1 class="text-2xl font-bold" x-show="!sidebarCollapsed"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">Admin Panel</h1>
                <h1 class="text-2xl font-bold text-center" x-show="sidebarCollapsed"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">A</h1>
            </div>
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}">
                    <svg class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 12L12 3L21 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M5 10V20H19V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span x-show="!sidebarCollapsed" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">Dashboard</span>
                </a>

                <div x-data="{ open: @json(request()->routeIs('admin.service-categories.*') || request()->routeIs('admin.services.*') || request()->routeIs('admin.service-types.*') || request()->routeIs('admin.price-plans.*')) }"
                    class="relative">
                    <button @click="sidebarCollapsed ? (sidebarCollapsed = false, open = true) : open = !open"
                        class="w-full text-left flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <span class="flex items-center">
                            <svg class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0">Services</span>
                        </span>
                        <svg x-show="!sidebarCollapsed" class="h-4 w-4 transform" :class="{ 'rotate-180': open }"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open && !sidebarCollapsed" @click.away="open = false" class="bg-gray-700" x-transition>
                        <a href="{{ route('admin.service-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.service-categories.*') ? 'bg-gray-600' : '' }}">Service
                            Categories</a>
                        <a href="{{ route('admin.services.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.services.*') ? 'bg-gray-600' : '' }}">Services</a>
                        <a href="{{ route('admin.service-types.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.service-types.*') ? 'bg-gray-600' : '' }}">Service
                            Types</a>
                        <a href="{{ route('admin.price-plans.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.price-plans.*') ? 'bg-gray-600' : '' }}">Price
                            Plans</a>
                    </div>
                </div>

                <div x-data="{ open: @json(request()->routeIs('admin.project-categories.*') || request()->routeIs('admin.projects.*')) }"
                    class="relative">
                    <button @click="sidebarCollapsed ? (sidebarCollapsed = false, open = true) : open = !open"
                        class="w-full text-left flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <span class="flex items-center">
                            <svg class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0">Projects</span>
                        </span>
                        <svg x-show="!sidebarCollapsed" class="h-4 w-4 transform" :class="{ 'rotate-180': open }"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open && !sidebarCollapsed" @click.away="open = false" class="bg-gray-700" x-transition>
                        <a href="{{ route('admin.project-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.project-categories.*') ? 'bg-gray-600' : '' }}">Project
                            Categories</a>
                        <a href="{{ route('admin.projects.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.projects.*') ? 'bg-gray-600' : '' }}">Projects</a>
                    </div>
                </div>

                <div x-data="{ open: @json(request()->routeIs('admin.article-categories.*') || request()->routeIs('admin.articles.*')) }"
                    class="relative">
                    <button @click="sidebarCollapsed ? (sidebarCollapsed = false, open = true) : open = !open"
                        class="w-full text-left flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <span class="flex items-center">
                            <svg class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 2L11 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0">Articles</span>
                        </span>
                        <svg x-show="!sidebarCollapsed" class="h-4 w-4 transform" :class="{ 'rotate-180': open }"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open && !sidebarCollapsed" @click.away="open = false" class="bg-gray-700" x-transition>
                        <a href="{{ route('admin.article-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.article-categories.*') ? 'bg-gray-600' : '' }}">Article
                            Categories</a>
                        <a href="{{ route('admin.articles.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.articles.*') ? 'bg-gray-600' : '' }}">Articles</a>
                    </div>
                </div>

                <div x-data="{ open: @json(request()->routeIs('admin.software-categories.*') || request()->routeIs('admin.softwares.*')) }"
                    class="relative">
                    <button @click="sidebarCollapsed ? (sidebarCollapsed = false, open = true) : open = !open"
                        class="w-full text-left flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <span class="flex items-center">
                            <svg class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M12 16V12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M12 8H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0">Software</span>
                        </span>
                        <svg x-show="!sidebarCollapsed" class="h-4 w-4 transform" :class="{ 'rotate-180': open }"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open && !sidebarCollapsed" @click.away="open = false" class="bg-gray-700" x-transition>
                        <a href="{{ route('admin.software-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.software-categories.*') ? 'bg-gray-600' : '' }}">Software
                            Categories</a>
                        <a href="{{ route('admin.softwares.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.softwares.*') ? 'bg-gray-600' : '' }}">Softwares</a>
                    </div>
                </div>

                <div x-data="{ open: @json(request()->routeIs('admin.vacancy-categories.*') || request()->routeIs('admin.vacancies.*') || request()->routeIs('admin.applicants.*')) }"
                    class="relative">
                    <button @click="sidebarCollapsed ? (sidebarCollapsed = false, open = true) : open = !open"
                        class="w-full text-left flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <span class="flex items-center">
                            <svg class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2C15.31 2 18 4.69 18 8C18 11.31 15.31 14 12 14C8.69 14 6 11.31 6 8C6 4.69 8.69 2 12 2Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M20 21V19C20 16.79 16.42 15 12 15C7.58 15 4 16.79 4 19V21"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">Careers</span>
                        </span>
                        <svg x-show="!sidebarCollapsed" class="h-4 w-4 transform" :class="{ 'rotate-180': open }"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open && !sidebarCollapsed" @click.away="open = false" class="bg-gray-700" x-transition>
                        <a href="{{ route('admin.vacancy-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.vacancy-categories.*') ? 'bg-gray-600' : '' }}">Vacancy
                            Categories</a>
                        <a href="{{ route('admin.vacancies.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.vacancies.*') ? 'bg-gray-600' : '' }}">Vacancies</a>
                        <a href="{{ route('admin.applicants.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.applicants.*') ? 'bg-gray-600' : '' }}">Applicants</a>
                    </div>
                </div>

                <div x-data="{ open: @json(request()->routeIs('admin.tags.*') || request()->routeIs('admin.technologies.*') || request()->routeIs('admin.key-features.*') || request()->routeIs('admin.features.*') || request()->routeIs('admin.trusted-companies.*') || request()->routeIs('admin.clients.*') || request()->routeIs('admin.faqs.*') || request()->routeIs('admin.working-processes.*') || request()->routeIs('admin.values.*') || request()->routeIs('admin.social-media-links.*')) }"
                    class="relative">
                    <button @click="sidebarCollapsed ? (sidebarCollapsed = false, open = true) : open = !open"
                        class="w-full text-left flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <span class="flex items-center">
                            <svg class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0">Miscellaneous</span>
                        </span>
                        <svg x-show="!sidebarCollapsed" class="h-4 w-4 transform" :class="{ 'rotate-180': open }"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open && !sidebarCollapsed" @click.away="open = false" class="bg-gray-700" x-transition>
                        <a href="{{ route('admin.tags.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.tags.*') ? 'bg-gray-600' : '' }}">Tags</a>
                        <a href="{{ route('admin.technologies.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.technologies.*') ? 'bg-gray-600' : '' }}">Technologies</a>
                        <a href="{{ route('admin.key-features.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.key-features.*') ? 'bg-gray-600' : '' }}">Key
                            Features</a>
                        <a href="{{ route('admin.features.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.features.*') ? 'bg-gray-600' : '' }}">Features</a>
                        <a href="{{ route('admin.trusted-companies.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.trusted-companies.*') ? 'bg-gray-600' : '' }}">Trusted
                            Companies</a>
                        <a href="{{ route('admin.clients.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.clients.*') ? 'bg-gray-600' : '' }}">Clients</a>
                        <a href="{{ route('admin.faqs.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.faqs.*') ? 'bg-gray-600' : '' }}">FAQs</a>
                        <a href="{{ route('admin.working-processes.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.working-processes.*') ? 'bg-gray-600' : '' }}">Working
                            Processes</a>
                        <a href="{{ route('admin.values.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.values.*') ? 'bg-gray-600' : '' }}">Values</a>
                        <a href="{{ route('admin.social-media-links.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.social-media-links.*') ? 'bg-gray-600' : '' }}">Social
                            Media Links</a>
                    </div>
                </div>

                <div x-data="{ open: @json(request()->routeIs('admin.pages.*')) }" class="relative">
                    <button @click="sidebarCollapsed ? (sidebarCollapsed = false, open = true) : open = !open"
                        class="w-full text-left flex items-center justify-between px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        <span class="flex items-center">
                            <svg class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 12L12 3L21 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M5 10V20H19V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span x-show="!sidebarCollapsed" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">Page
                                Settings</span>
                        </span>
                        <svg x-show="!sidebarCollapsed" class="h-4 w-4 transform" :class="{ 'rotate-180': open }"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open && !sidebarCollapsed" @click.away="open = false" class="bg-gray-700" x-transition>
                        <a href="{{ route('admin.pages.index', 'home') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.pages.index') && request()->route('page') == 'home' ? 'bg-gray-600' : '' }}">Home
                            Page</a>
                        <a href="{{ route('admin.pages.index', 'other_page') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.pages.index') && request()->route('page') == 'other_page' ? 'bg-gray-600' : '' }}">Other
                            Page</a>
                        <a href="{{ route('admin.pages.index', 'contact_information') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.pages.index') && request()->route('page') == 'contact_information' ? 'bg-gray-600' : '' }}">Contact
                            Information</a>
                        <a href="{{ route('admin.pages.index', 'common_setting') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600 {{ request()->routeIs('admin.pages.index') && request()->route('page') == 'common_setting' ? 'bg-gray-600' : '' }}">Common
                            Setting</a>
                    </div>
                </div>
                <a href="{{ route('admin.menus.index') }}"
                    class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 {{ request()->routeIs('admin.menus.*') ? 'bg-gray-700' : '' }}">
                    <svg class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6H20M4 12H20M4 18H14" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span x-show="!sidebarCollapsed" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">Menus</span>
                </a>
            </nav>
        </aside>

        <!-- Content Wrapper -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-md p-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <button @click="sidebarCollapsed = !sidebarCollapsed"
                            class="text-gray-500 hover:text-gray-600 focus:outline-none">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
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
                                <a href="{{ route('admin.service-categories.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Service
                                    Category</a>
                                <a href="{{ route('admin.service-types.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Service
                                    Type</a>
                                <a href="{{ route('admin.projects.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Project</a>
                                <a href="{{ route('admin.project-categories.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Project
                                    Category</a>
                                <a href="{{ route('admin.softwares.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Software</a>
                                <a href="{{ route('admin.software-categories.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Software
                                    Category</a>
                                <a href="{{ route('admin.articles.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Article</a>
                                <a href="{{ route('admin.article-categories.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Article
                                    Category</a>
                                <a href="{{ route('admin.tags.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Tag</a>
                                <a href="{{ route('admin.vacancies.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Vacancy</a>
                                <a href="{{ route('admin.vacancy-categories.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Vacancy
                                    Category</a>
                                <a href="{{ route('admin.technologies.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New
                                    Technology</a>
                                <a href="{{ route('admin.key-features.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Key
                                    Feature</a>
                                <a href="{{ route('admin.features.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Feature</a>
                                <a href="{{ route('admin.trusted-companies.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Trusted
                                    Company</a>
                                <a href="{{ route('admin.clients.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Client</a>
                                <a href="{{ route('admin.faqs.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New FAQ</a>
                                <a href="{{ route('admin.working-processes.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Working
                                    Process</a>
                                <a href="{{ route('admin.values.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Value</a>
                                <a href="{{ route('admin.social-media-links.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Social
                                    Media Link</a>
                                <a href="{{ route('admin.price-plans.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Price
                                    Plan</a>
                                <a href="{{ route('admin.menus.create') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">New Menu</a>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-6a6 6 0 100 12A6 6 0 0010 4z"
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

            <!-- Main Content -->
            <main class="flex-1 p-8 overflow-y-auto">
                @include('admin.partials.breadcrumbs')
                <x-admin.status-message />
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
</body>

</html>

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
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
            </div>
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}"
                    class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Dashboard</a>

                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="w-full text-left block px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        Services
                    </button>
                    <div x-show="open" @click.away="open = false" class="bg-gray-700">
                        <a href="{{ route('admin.service-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Service Categories</a>
                        <a href="{{ route('admin.services.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Services</a>
                        <a href="{{ route('admin.service-types.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Service Types</a>
                        <a href="{{ route('admin.price-plans.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Price Plans</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="w-full text-left block px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        Projects
                    </button>
                    <div x-show="open" @click.away="open = false" class="bg-gray-700">
                        <a href="{{ route('admin.project-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Project Categories</a>
                        <a href="{{ route('admin.projects.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Projects</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="w-full text-left block px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        Articles
                    </button>
                    <div x-show="open" @click.away="open = false" class="bg-gray-700">
                        <a href="{{ route('admin.article-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Article Categories</a>
                        <a href="{{ route('admin.articles.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Articles</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="w-full text-left block px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        Software
                    </button>
                    <div x-show="open" @click.away="open = false" class="bg-gray-700">
                        <a href="{{ route('admin.software-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Software Categories</a>
                        <a href="{{ route('admin.softwares.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Softwares</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="w-full text-left block px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        Careers
                    </button>
                    <div x-show="open" @click.away="open = false" class="bg-gray-700">
                        <a href="{{ route('admin.vacancy-categories.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Vacancy Categories</a>
                        <a href="{{ route('admin.vacancies.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Vacancies</a>
                        <a href="{{ route('admin.applicants.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Applicants</a>
                        {{-- <a href="{{ route('admin.pages.careers') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Careers Page</a> --}}
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="w-full text-left block px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        Miscellaneous
                    </button>
                    <div x-show="open" @click.away="open = false" class="bg-gray-700">
                        <a href="{{ route('admin.tags.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Tags</a>
                        <a href="{{ route('admin.technologies.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Technologies</a>
                        <a href="{{ route('admin.key-features.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Key Features</a>
                        <a href="{{ route('admin.features.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Features</a>
                        <a href="{{ route('admin.trusted-companies.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Trusted Companies</a>
                        <a href="{{ route('admin.clients.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Clients</a>
                        <a href="{{ route('admin.faqs.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">FAQs</a>
                        <a href="{{ route('admin.working-processes.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Working Processes</a>
                        <a href="{{ route('admin.values.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Values</a>
                        <a href="{{ route('admin.social-media-links.index') }}"
                            class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Social Media Links</a>
                    </div>
                </div>

                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="w-full text-left block px-4 py-2 text-gray-300 hover:bg-gray-700 focus:outline-none">
                        Page Settings
                    </button>
                    <div x-show="open" @click.away="open = false" class="bg-gray-700">
                        <a href="{{ route('admin.pages.index', 'home') }}" class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Home Page</a>
                        <a href="{{ route('admin.pages.index', 'other_page') }}" class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Other Page</a>
                        <a href="{{ route('admin.pages.index', 'contact_information') }}" class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Contact Information</a>
                        <a href="{{ route('admin.pages.index', 'common_setting') }}" class="block px-8 py-2 text-gray-300 hover:bg-gray-600">Common Setting</a>
                    </div>
                </div>
                <a href="{{ route('admin.menus.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Menus</a>
            </nav>
        </aside>

        <!-- Content Wrapper -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-md p-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-semibold text-gray-700">@yield('header-title', 'Dashboard')</h1>
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
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
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
    @stack('scripts')
</body>

</html>

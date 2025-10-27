<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite('resources/css/app.css')
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
            <nav>
                <a href="{{ route('admin.dashboard.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Dashboard</a>
                <div id="crud-links">
                    <a href="{{ route('admin.project-categories.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Project Categories</a>
                    <a href="{{ route('admin.service-categories.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Service Categories</a>
                    <a href="{{ route('admin.software-categories.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Software Categories</a>
                    <a href="{{ route('admin.article-categories.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Article Categories</a>
                    <a href="{{ route('admin.tags.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Tags</a>
                    <a href="{{ route('admin.vacancy-categories.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Vacancy Categories</a>
                    <hr class="my-2 border-gray-600">
                    <a href="{{ route('admin.projects.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Projects</a>
                    <a href="{{ route('admin.services.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Services</a>
                    <a href="{{ route('admin.service-types.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Service Types</a>
                    <a href="{{ route('admin.price-plans.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Price Plans</a>
                    <a href="{{ route('admin.softwares.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Softwares</a>
                    <a href="{{ route('admin.technologies.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Technologies</a>
                    <a href="{{ route('admin.key-features.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Key Features</a>
                    <a href="{{ route('admin.features.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Features</a>
                    <a href="{{ route('admin.articles.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Articles</a>
                    <a href="{{ route('admin.trusted-companies.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Trusted Companies</a>
                    <a href="{{ route('admin.clients.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Clients</a>
                    <a href="{{ route('admin.faqs.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">FAQs</a>
                    <a href="{{ route('admin.working-processes.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Working Processes</a>
                    <a href="{{ route('admin.values.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Values</a>
                    <a href="{{ route('admin.social-media-links.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Social Media Links</a>
                    <hr class="my-2 border-gray-600">
                    <a href="{{ route('admin.pages.home') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Home Page</a>
                    <a href="{{ route('admin.pages.about') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">About Page</a>
                    <a href="{{ route('admin.pages.contact') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Contact Page</a>
                    <a href="{{ route('admin.pages.404') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">404 Page</a>
                    <a href="{{ route('admin.pages.terms') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Terms & Conditions</a>
                    <a href="{{ route('admin.pages.privacy') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Privacy Policy</a>
                    <a href="{{ route('admin.pages.services') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Services Page</a>
                    <a href="{{ route('admin.pages.articles') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Articles Page</a>
                    <a href="{{ route('admin.pages.softwares') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Software Page</a>
                    <a href="{{ route('admin.pages.projects') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Projects Page</a>
                    <a href="{{ route('admin.pages.all-softwares') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">All Software Page</a>
                    <a href="{{ route('admin.pages.custom-software') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Custom Software Page</a>
                    <a href="{{ route('admin.pages.lets-discuss') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Let's Discuss Page</a>
                    <a href="{{ route('admin.pages.thank-you') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Thank You Page</a>
                    <a href="{{ route('admin.pages.service-plans') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Service Plans Page</a>
                    <a href="{{ route('admin.pages.software-plans') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Software Plans Page</a>
                    <a href="{{ route('admin.pages.careers') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Careers Page</a>
                    <a href="{{ route('admin.pages.service-detail') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Service Detail Page</a>
                    <a href="{{ route('admin.pages.article-detail') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Article Detail Page</a>
                    <a href="{{ route('admin.pages.software-detail') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Software Detail Page</a>
                    <a href="{{ route('admin.pages.project-detail') }}" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Project Detail Page</a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @stack('scripts')
</body>
</html>

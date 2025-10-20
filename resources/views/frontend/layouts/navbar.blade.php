<nav class="shadow-[0px_2px_16px_0px_rgba(66,67,72,0.12)]" x-data="{ open: false }">
    <div class="container flex justify-between items-center h-20">
        {{-- Logo --}}
        <a href="{{ route('front.home') }}">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="">
        </a>

        {{-- Menus --}}
        <ul class="hidden lg:flex justify-center items-center gap-7">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('front.home') }}">Home</a></li>
            <li class="nav-item {{ request()->is('services') || request()->is('services/*') ? 'active' : '' }}"><a href="{{ route('front.services.index') }}">Services</a></li>
            <li class="nav-item {{ request()->is('softwares') || request()->is('software/*') ? 'active' : '' }}"><a href="{{ route('front.softwares.index') }}">Software</a></li>
            <li class="nav-item {{ request()->is('projects') || request()->is('projects/*') ? 'active' : '' }}"><a href="{{ route('front.projects.index') }}">Projects</a></li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('front.contact') }}">Contact us</a></li>
        </ul>

        {{-- Login Btn --}}
        <div class="hidden lg:flex justify-center items-center gap-4">
            <a href="{{ route('login') }}" class="label-text-bold-medium text-secondary-800 border border-secondary-800 rounded-[6px] px-4 py-2">Login</a>
            <a href="#" class="label-text-bold-medium text-white bg-primary-600 rounded-[6px] px-4 py-2">Whatsapp us</a>
        </div>

        {{-- Hamburger Menu --}}
        <div class="lg:hidden">
            <button @click="open = !open" class="text-secondary-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" class="lg:hidden" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2">
        <ul class="flex flex-col items-center gap-4 py-4">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('front.home') }}">Home</a></li>
            <li class="nav-item {{ request()->is('services') || request()->is('services/*') ? 'active' : '' }}"><a href="{{ route('front.services.index') }}">Services</a></li>
            <li class="nav-item {{ request()->is('softwares') || request()->is('software/*') ? 'active' : '' }}"><a href="{{ route('front.softwares.index') }}">Software</a></li>
            <li class="nav-item {{ request()->is('projects') || request()->is('projects/*') ? 'active' : '' }}"><a href="{{ route('front.projects.index') }}">Projects</a></li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('front.contact') }}">Contact us</a></li>
            <li><a href="{{ route('login') }}" class="label-text-bold-medium text-secondary-800 border border-secondary-800 rounded-[6px] px-4 py-2">Login</a></li>
            <li><a href="#" class="label-text-bold-medium text-white bg-primary-600 rounded-[6px] px-4 py-2">Whatsapp us</a></li>
        </ul>
    </div>
</nav>

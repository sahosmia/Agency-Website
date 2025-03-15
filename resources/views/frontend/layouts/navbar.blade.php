<nav class="shadow-[0px_2px_16px_0px_rgba(66,67,72,0.12)]">
    <div class="container flex justify-between items-center  h-20 ">
        {{-- Logo --}}
        <a href="{{ route('front.home') }}">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="">
        </a>

        {{-- Menus  --}}
        <ul class="hidden lg:flex justify-center items-center gap-7 ">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('front.home') }}">Home</a></li>
            <li class="nav-item {{ request()->is('services') || request()->is('services/*') ? 'active' : '' }}"><a href="{{ route('front.services.index') }}">Services</a></li>
            <li class="nav-item {{ request()->is('softwares') || request()->is('software/*') ? 'active' : '' }}"><a href="{{ route('front.softwares.index') }}">Software</a></li>
            <li class="nav-item {{ request()->is('projects') || request()->is('projects/*') ? 'active' : '' }}"><a href="{{ route('front.projects.index') }}">Projects</a></li>
            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('front.contact') }}">Contact us</a></li>
        </ul>

        {{-- Login Btn  --}}
        <div class="flex justify-center items-center gap-4">
            <a href="{{ route('login') }}" class="label-text-bold-medium text-secondary-800 border  border-secondary-800 rounded-[6px] px-4 py-2">Login</a>
            <a href="#" class="label-text-bold-medium text-white bg-primary-600  rounded-[6px] px-4 py-2">Whatsapp us</a>
        </div>

    </div>

</nav>

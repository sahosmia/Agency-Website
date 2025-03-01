<nav class="shadow-[0px_2px_16px_0px_rgba(66,67,72,0.12)]">
    <div class="container flex justify-between items-center  h-20 ">
        {{-- Logo --}}
        <div>
            <img src="{{ asset('frontend/images/logo.png') }}" alt="">
        </div>

        {{-- Menus  --}}
        <ul class="flex justify-center items-center gap-7">
            <li class="nav-item active"><a href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a href="{{ route('services') }}">Services</a></li>
            <li class="nav-item"><a href="{{ route('software') }}">Software</a></li>
            <li class="nav-item"><a href="{{ route('software') }}">Projects</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}">Contact us</a></li>
        </ul>

        {{-- Login Btn  --}}
        <div class="flex justify-center items-center gap-4">
            <a href="{{ route('auth.login') }}" class="label-text-bold-medium text-secondary-800 border  border-secondary-800 rounded-[6px] px-4 py-2">Login</a>
            <a href="#" class="label-text-bold-medium text-white bg-primary-600  rounded-[6px] px-4 py-2">Whatsapp us</a>
        </div>

    </div>

</nav>

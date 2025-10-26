<footer>
    <div class="container relative">
        <div class="border-b-1 border-secondary-400">
            <div class="py-10 md:py-[60px] flex flex-col lg:flex-row gap-10 lg:gap-[128px]">
                <div class="flex flex-col gap-5 w-full lg:w-4/12">
                    <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
                        <img class="block w-[103px] h-10" src="{{ asset('frontend/images/logo.png') }}" alt="">
                        <p class="text-secondary-800 body-text-regular-small pt-2">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    <div>
                        <h4 class="body-text-bold-large text-secondary-900 text-center lg:text-left">Follow us</h4>
                        <div class="pt-2 grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-2 gap-4">
                            @forelse ($socialMediaLinks as $link)
                                <a class="flex justify-center items-center gap-2 rounded-sm border border-secondary-800 h-9 group"
                                    href="{{ $link->url }}">
                                    <img src="{{ asset($link->icon) }}" alt="{{ $link->name }}">
                                    <span
                                        class="text-secondary-800 label-text-bold-small group-hover:text-secondary-950">{{ $link->name }}</span>
                                </a>
                            @empty
                                <p class="text-secondary-800 label-text-bold-small">No Social Media Links Found</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-8/12 flex flex-col sm:flex-row gap-8 sm:gap-5">
                    <div class="flex-1">
                        <h4 class="body-text-bold-large text-secondary-900">Quick links</h4>
                        <ul class="flex flex-col gap-2 md:gap-3 pt-4">
                            <li class="label-text-regular-small text-secondary-900"><a
                                    href="{{ route('admin.dashboard.index') }}">Log in dashboard</a></li>
                            <li class="label-text-regular-small text-secondary-900"><a
                                    href="{{ route('about') }}">About us</a></li>
                            <li class="label-text-regular-small text-secondary-900"><a
                                    href="{{ route('contact') }}">Contact us</a></li>
                            <li class="label-text-regular-small text-secondary-900"><a
                                    href="{{ route('articles.index') }}">Articles</a></li>
                            <li class="label-text-regular-small text-secondary-900"><a
                                    href="{{ route('careers.index') }}">Career</a></li>
                            <li class="label-text-regular-small text-secondary-900"><a
                                    href="{{ route('privacy-policy') }}">Privacy policy</a></li>
                            <li class="label-text-regular-small text-secondary-900"><a
                                    href="{{ route('terms-conditions') }}">Terms & conditions</a></li>
                        </ul>
                    </div>
                    <div class="flex-1">
                        <h4 class="body-text-bold-large text-secondary-900">Services solution</h4>
                        <ul class="flex flex-col gap-2 md:gap-3 pt-4">
                            @forelse ($services as $service)
                                <li class="label-text-regular-small text-secondary-900"><a
                                        href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a>
                                </li>
                            @empty
                                <li class="label-text-regular-small text-secondary-900">No Service Found</li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="flex-1">
                        <h4 class="body-text-bold-large text-secondary-900">Software's solution</h4>
                        <ul class="flex flex-col gap-2 md:gap-3 pt-4">
                            @forelse ($softwares as $software)
                                <li class="label-text-regular-small text-secondary-900"><a
                                        href="{{ route('softwares.show', $software->slug) }}">{{ $software->name }}</a>
                                </li>
                            @empty
                                <li class="label-text-regular-small text-secondary-900">No Software Found</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5">
            <p class="text-secondary-600 body-text-regular-small text-center">©2025 Yeasin arena All Rights Reserved</p>
        </div>

        <a href="#"
            class="group absolute top-5 right-5 w-10 h-10 md:w-14 md:h-14 rounded-lg flex justify-center items-center border border-secondary-600 hover:border-transparent hover:bg-primary-600 transition-all duration-500 ease-in-out text-secondary-800 hover:text-white drop-shadow-xl">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                <path
                    d="M14.6187 5.21478L21.6187 12.2148C21.9604 12.5565 21.9604 13.1105 21.6187 13.4522C21.277 13.7939 20.723 13.7939 20.3813 13.4522L14.875 7.94593V22.1668C14.875 22.6501 14.4832 23.0418 14 23.0418C13.5168 23.0418 13.125 22.6501 13.125 22.1668V7.94593L7.61872 13.4522C7.27701 13.7939 6.72299 13.7939 6.38128 13.4522C6.03957 13.1105 6.03957 12.5565 6.38128 12.2148L13.3813 5.21478C13.4614 5.13469 13.5531 5.07337 13.6511 5.03083C13.6557 5.0288 13.6604 5.02683 13.6651 5.02489C13.7682 4.98211 13.8814 4.9585 14 4.9585C14.1186 4.9585 14.2318 4.98211 14.3349 5.02489C14.4381 5.06759 14.5348 5.13089 14.6187 5.21478Z"
                    fill="currentColor" />
            </svg>
        </a>
    </div>
</footer>

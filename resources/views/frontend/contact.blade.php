@extends('frontend.layouts.app')
@section('meta_title', $contactSettings['meta_title'] ?? 'Contact Us')
@section('meta_description', $contactSettings['meta_description'] ?? 'Contact Us')

@section('content')
<div class="bg-gray-100">
    <div class="container mx-auto py-12">
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-5/12 px-4 mb-8 md:mb-0">
                <h2 class="text-3xl font-bold mb-4">{{ $contactSettings['contact_title'] ?? '' }}</h2>
                <p class="text-gray-600 mb-8 w-96">
                    {{ $contactSettings['contact_description'] ?? '' }}
                </p>
                <div class="flex items-center mb-4">
                    <div>
                        <p class="font-bold">Phone</p>
                        <p class="text-gray-600">{{ $contactSettings['contact_phone'] ?? '' }}</p>
                    </div>
                </div>
                <div class="flex items-center mb-4">
                    <div>
                        <p class="font-bold">Email</p>
                        <p class="text-gray-600">{{ $contactSettings['contact_email'] ?? '' }}</p>
                    </div>
                </div>
                <div class="flex items-center mb-4">
                    <div>
                        <p class="font-bold">Address</p>
                        <p class="text-gray-600">{{ $contactSettings['contact_address'] ?? '' }}</p>
                    </div>
                </div>
                <div class="pt-2 grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-2 gap-4">
                    @forelse ($socialMediaLinks as $link)
                    <a class="flex justify-center bg-white items-center gap-2 rounded-sm border border-secondary-600 h-9 group"
                        href="{{ $link->url }}">
                        <img src="{{ asset('storage/social_media_links/' . $link->icon) }}" alt="{{ $link->name }}">
                        <span class="text-secondary-800 label-text-bold-small group-hover:text-secondary-950">{{
                            $link->name }}</span>
                    </a>
                    @empty
                    <p class="text-secondary-800 label-text-bold-small">No Social Media Links Found</p>
                    @endforelse
                </div>
            </div>
            <div class="w-full md:w-7/12 px-4">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 font-bold mb-2">Subject</label>
                            <input type="text" id="subject" name="subject"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="Subject">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600">Send
                            Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto py-12">
    <h2 class="text-3xl font-bold mb-4 text-center">Our Location</h2>
    <div class="w-full">


        <iframe src="{!! $contactSettings['contact_map_iframe_url'] ?? '' !!}" width="100%" height="450"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="mt-10 md:mt-16 mb-10 md:mb-20 max-w-[95%] md:max-w-3xl lg:max-w-5xl mx-auto px-4" x-data="{ open: 1 }">
    <!-- Section Title -->
    <h2
        class="heading-text-regular-medium text-center text-secondary-900 text-2xl md:text-3xl lg:text-4xl font-semibold">
        {{ $homeSettings['faq_title'] ?? 'Frequently Asked Questions' }}
    </h2>

    <!-- FAQ Items -->
    <div class="mt-8 space-y-3 md:space-y-4">
        @foreach ($faqs as $faq)
        <div
            class="border-b border-secondary-200 overflow-hidden  shadow-sm hover:shadow-md transition-shadow duration-300">
            <!-- Question -->
            <div class="flex justify-between items-center gap-3 p-3 md:p-4 cursor-pointer select-none"
                @click="open = (open === {{ $loop->iteration }} ? 0 : {{ $loop->iteration }})">
                <h3 class="  font-semibold text-secondary-950 text-xl md:text-2xl leading-snug">
                    {{ $faq->question }}
                </h3>
                <i class="fa-solid text-secondary-800 text-sm md:text-base transition-transform duration-300"
                    :class="open === {{ $loop->iteration }} ? 'fa-minus rotate-180' : 'fa-plus rotate-0'"></i>
            </div>

            <!-- Answer (Smooth Collapse) -->
            <div x-show="open === {{ $loop->iteration }}" x-collapse>
                <div class="p-3 md:p-4 bg-secondary-50 ">
                    <p class="body-text-regular-medium text-secondary-600 text-sm md:text-base leading-relaxed">
                        {{ $faq->answer }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

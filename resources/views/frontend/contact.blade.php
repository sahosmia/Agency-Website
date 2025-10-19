@extends('frontend.layouts.app')

@section('content')
    <div class="bg-gray-100">
        <div class="container mx-auto py-12">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Contact us</h2>
                    <p class="text-gray-600 mb-8">
                        We're here to help. If you have any questions, please don't hesitate to reach out to us.
                    </p>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-phone-alt text-2xl text-gray-600 mr-4"></i>
                        <div>
                            <p class="font-bold">Phone</p>
                            <p class="text-gray-600">+1 234 567 890</p>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-envelope text-2xl text-gray-600 mr-4"></i>
                        <div>
                            <p class="font-bold">Email</p>
                            <p class="text-gray-600">info@example.com</p>
                        </div>
                    </div>
                    <div class="flex mt-8">
                        <a href="#" class="text-gray-600 hover:text-gray-800 mr-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-600 hover:text-gray-800 mr-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-600 hover:text-gray-800 mr-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <div class="bg-white rounded-lg shadow-md p-8">
                        <form action="{{ route('front.contact') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <label for="subject" class="block text-gray-700 font-bold mb-2">Subject</label>
                                <input type="text" id="subject" name="subject" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Subject">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                                <textarea id="message" name="message" rows="5" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

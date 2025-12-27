@extends('layouts.app')

@section('content')
<div class="bg-green-50 min-h-screen">
    <div class="container mx-auto px-4 py-16">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-green-800 mb-6">Contact Us</h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">Get in touch with BARAKA AGRO PLC for inquiries, support, or to learn more about our organic liquid fertilizers</p>
        </div>

        <!-- Contact Information -->
        <div class="mb-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Our Address</h3>
                    <p class="text-gray-600">Shashemene, Oromia, Ethiopia</p>
                    <p class="text-gray-600">P.O. Box 12345</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Phone Number</h3>
                    <p class="text-gray-600">+251-11-123-4567</p>
                    <p class="text-gray-600">+251-91-234-5678</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Email Address</h3>
                    <p class="text-gray-600">info@barakaagro.com</p>
                    <p class="text-gray-600">sales@barakaagro.com</p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-8 text-center">Send Us a Message</h2>
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <form action="#" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" name="subject" id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea name="message" id="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Send Message</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Map Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-8 text-center">Find Us on the Map</h2>
            <div class="rounded-lg overflow-hidden shadow-md">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434509374!2d-122.42175668468163!3d37.77492927975903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808a2e3b8a2d%3A0x7f2a8c1b3b3b3b3b!2sBaraka%20Agro%20PLC!5e0!3m2!1sen!2sus!4v1623456789012!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- Business Hours -->
        <div class="mb-16">
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold text-green-800 mb-6 text-center">Business Hours</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-xl font-semibold text-green-700 mb-3">Office Hours</h3>
                        <ul class="space-y-2">
                            <li class="flex justify-between">
                                <span class="text-gray-700">Monday - Friday</span>
                                <span class="text-gray-600">8:00 AM - 5:00 PM</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-gray-700">Saturday</span>
                                <span class="text-gray-600">9:00 AM - 1:00 PM</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-gray-700">Sunday</span>
                                <span class="text-gray-600">Closed</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-green-700 mb-3">Customer Support</h3>
                        <ul class="space-y-2">
                            <li class="flex justify-between">
                                <span class="text-gray-700">Phone Support</span>
                                <span class="text-gray-600">24/7</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-gray-700">Email Support</span>
                                <span class="text-gray-600">24/7</span>
                            </li>
                            <li class="flex justify-between">
                                <span class="text-gray-700">Live Chat</span>
                                <span class="text-gray-600">8:00 AM - 5:00 PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
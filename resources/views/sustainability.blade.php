@extends('layouts.app')

@section('content')
<div class="bg-green-50 min-h-screen">
    <div class="container mx-auto px-4 py-16">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-green-800 mb-6">Sustainability Commitment</h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">Discover our dedication to sustainable agriculture and environmental stewardship</p>
        </div>

        <!-- Sustainability Vision -->
        <div class="mb-16">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold text-green-800 mb-6">Our Sustainability Vision</h2>
                    <p class="text-gray-700 mb-6">At BARAKA AGRO PLC, we are committed to promoting sustainable agriculture and environmental stewardship. We believe that responsible farming practices can enhance productivity while protecting the environment for future generations.</p>
                    <p class="text-gray-700">Our sustainability initiatives focus on reducing environmental impact, conserving natural resources, and promoting biodiversity. We strive to set an example for the agricultural industry by demonstrating that sustainable practices can be both environmentally responsible and economically viable.</p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/sustainability-vision.jpg') }}" alt="Sustainability Vision" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>

        <!-- Sustainability Initiatives -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-12 text-center">Our Sustainability Initiatives</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Organic Farming Practices</h3>
                    <p class="text-gray-600">We promote organic farming practices that minimize the use of synthetic chemicals and maximize the use of natural resources to enhance soil health and biodiversity.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Water Conservation</h3>
                    <p class="text-gray-600">We implement water conservation measures to minimize water usage and promote efficient water management practices in our farming operations.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Energy Efficiency</h3>
                    <p class="text-gray-600">We strive to improve energy efficiency in our manufacturing processes and facilities to reduce our carbon footprint and promote sustainable energy use.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Waste Reduction</h3>
                    <p class="text-gray-600">We implement waste reduction strategies to minimize waste generation and promote recycling and composting practices in our operations.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Biodiversity Conservation</h3>
                    <p class="text-gray-600">We promote biodiversity conservation practices to protect and enhance the natural habitats and ecosystems in our farming operations.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Community Engagement</h3>
                    <p class="text-gray-600">We engage with local communities to promote sustainable agriculture practices and provide educational opportunities for farmers and stakeholders.</p>
                </div>
            </div>
        </div>

        <!-- Environmental Impact -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-12 text-center">Our Environmental Impact</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Reduced Carbon Footprint</h3>
                    <p class="text-gray-600">By implementing energy-efficient practices and promoting sustainable agriculture, we have significantly reduced our carbon footprint and minimized our impact on the environment.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Enhanced Soil Health</h3>
                    <p class="text-gray-600">Our organic farming practices have led to improved soil health and fertility, promoting biodiversity and supporting sustainable agriculture in our farming operations.</p>
                </div>
            </div>
        </div>

        <!-- Sustainability Certifications -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-8">Our Sustainability Certifications</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/certification1.jpg') }}" alt="Certification" class="w-24 h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Organic Certification</h3>
                    <p class="text-gray-600">Our products are certified as organic, meeting the strict standards set by the Ethiopian Organic Agriculture Association.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/certification2.jpg') }}" alt="Certification" class="w-24 h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">ISO 9001 Certification</h3>
                    <p class="text-gray-600">Our manufacturing processes are certified to meet the international quality management standards set by the International Organization for Standardization.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/certification3.jpg') }}" alt="Certification" class="w-24 h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Environmental Certification</h3>
                    <p class="text-gray-600">Our facilities are certified to meet the environmental management standards set by the Ethiopian Environmental Protection Authority.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-green-700 rounded-lg p-12 text-center text-white">
            <h2 class="text-3xl font-bold mb-6">Join Us in Our Sustainability Journey</h2>
            <p class="text-xl mb-8">Discover how our commitment to sustainability is transforming agriculture and protecting the environment for future generations.</p>
            <a href="{{ route('contact') }}" class="bg-white hover:bg-gray-100 text-green-700 font-bold py-3 px-6 rounded-lg transition duration-300">Contact Us Today</a>
        </div>
    </div>
</div>
@endsection
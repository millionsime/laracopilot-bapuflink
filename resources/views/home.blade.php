@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="relative">
            <img src="{{ asset('images/hero.jpg') }}" alt="Baraka Organic Liquid Fertilizer" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="text-center text-white px-4">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Baraka Organic Liquid Fertilizer</h1>
                    <p class="text-xl mb-8">Premium organic fertilizer for healthy crops</p>
                    <a href="{{ route('product') }}" class="bg-baraka hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12">
        <h2 class="text-3xl font-bold text-baraka mb-8">Why Choose Baraka?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-4xl text-baraka mb-4">🌱</div>
                <h3 class="text-xl font-bold mb-2">100% Organic</h3>
                <p>Our fertilizer is made from natural, organic ingredients that are safe for the environment and your crops.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-4xl text-baraka mb-4">💧</div>
                <h3 class="text-xl font-bold mb-2">High Nutrient Content</h3>
                <p>Packed with essential nutrients to promote healthy growth and maximize crop yields.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-4xl text-baraka mb-4">🌍</div>
                <h3 class="text-xl font-bold mb-2">Eco-Friendly</h3>
                <p>Our production process minimizes environmental impact while delivering superior results.</p>
            </div>
        </div>
    </div>

    <div class="mt-12 bg-white rounded-lg shadow-md overflow-hidden">
        <div class="md:flex">
            <div class="md:w-1/2">
                <img src="{{ asset('images/about.jpg') }}" alt="About Baraka Agro PLC" class="w-full h-full object-cover">
            </div>
            <div class="md:w-1/2 p-8">
                <h2 class="text-3xl font-bold text-baraka mb-4">About Baraka Agro PLC</h2>
                <p class="mb-4">Baraka Agro PLC is a leading producer of organic liquid fertilizer in Ethiopia. Located in Shashemene, Oromia, our state-of-the-art facility combines traditional knowledge with modern technology to create premium fertilizers that nourish crops and the environment.</p>
                <p class="mb-6">With a commitment to sustainability and quality, we provide farmers with the tools they need to achieve higher yields while protecting natural resources.</p>
                <a href="{{ route('about') }}" class="bg-baraka hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Learn More About Us</a>
            </div>
        </div>
    </div>

    <div class="mt-12">
        <h2 class="text-3xl font-bold text-baraka mb-8">Our Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/product1.jpg') }}" alt="Baraka Organic Liquid Fertilizer" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Baraka Organic Liquid Fertilizer</h3>
                    <p class="text-gray-600 mb-4">Our flagship product, designed for maximum nutrient absorption and crop health.</p>
                    <a href="{{ route('product') }}" class="text-baraka hover:text-green-700 font-bold">Learn More</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/product2.jpg') }}" alt="Baraka Organic Granules" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Baraka Organic Granules</h3>
                    <p class="text-gray-600 mb-4">Convenient granular fertilizer for easy application and storage.</p>
                    <a href="{{ route('product') }}" class="text-baraka hover:text-green-700 font-bold">Learn More</a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/product3.jpg') }}" alt="Baraka Organic Pellets" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Baraka Organic Pellets</h3>
                    <p class="text-gray-600 mb-4">Slow-release pellets for consistent nutrient delivery throughout the growing season.</p>
                    <a href="{{ route('product') }}" class="text-baraka hover:text-green-700 font-bold">Learn More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
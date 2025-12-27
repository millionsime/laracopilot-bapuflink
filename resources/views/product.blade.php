@extends('layouts.app')

@section('title', 'Our Product')

@section('content')
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="relative">
            <img src="{{ asset('images/product-hero.jpg') }}" alt="Baraka Organic Liquid Fertilizer" class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white">Our Product</h1>
            </div>
        </div>
    </div>

    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-baraka mb-4">Baraka Organic Liquid Fertilizer</h2>
            <p class="mb-4">Baraka Organic Liquid Fertilizer is our flagship product, designed to provide essential nutrients to crops in a liquid form that is easy to apply and absorb. Our fertilizer is made from natural, organic ingredients that are safe for the environment and your crops.</p>
            <p class="mb-4">This premium organic fertilizer is formulated to promote healthy growth, maximize crop yields, and support sustainable agriculture practices. Whether you're a small-scale farmer or a large agricultural operation, Baraka Organic Liquid Fertilizer is the perfect choice for nourishing your crops and the environment.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md">
            <img src="{{ asset('images/product.jpg') }}" alt="Baraka Organic Liquid Fertilizer" class="w-full h-auto rounded-lg">
        </div>
    </div>

    <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-baraka mb-6">Key Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex items-start">
                <div class="text-3xl text-baraka mr-4">🌱</div>
                <div>
                    <h3 class="text-xl font-bold mb-2">100% Organic</h3>
                    <p>Made from natural, organic ingredients that are safe for the environment and your crops.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="text-3xl text-baraka mr-4">💧</div>
                <div>
                    <h3 class="text-xl font-bold mb-2">High Nutrient Content</h3>
                    <p>Packed with essential nutrients to promote healthy growth and maximize crop yields.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="text-3xl text-baraka mr-4">🌍</div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Eco-Friendly</h3>
                    <p>Our production process minimizes environmental impact while delivering superior results.</p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="text-3xl text-baraka mr-4">🔄</div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Easy Application</h3>
                    <p>Liquid form makes it easy to apply and absorb by crops, ensuring maximum effectiveness.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-baraka mb-6">Benefits</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-xl font-bold mb-2">Promotes Healthy Growth</h3>
                <p>Our organic liquid fertilizer provides essential nutrients that promote healthy growth and development in crops.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Maximizes Crop Yields</h3>
                <p>By providing the right balance of nutrients, our fertilizer helps maximize crop yields and improve overall productivity.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Supports Sustainable Agriculture</h3>
                <p>Our eco-friendly production process and organic ingredients support sustainable agriculture practices that protect the environment.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Improves Soil Health</h3>
                <p>Regular use of our organic liquid fertilizer helps improve soil health, fertility, and structure for long-term benefits.</p>
            </div>
        </div>
    </div>

    <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-baraka mb-6">How to Use</h2>
        <ol class="list-decimal list-inside space-y-4">
            <li>Mix the appropriate amount of Baraka Organic Liquid Fertilizer with water according to the package instructions.</li>
            <li>Apply the fertilizer solution to the soil using a sprayer or by hand.</li>
            <li>Ensure even distribution of the fertilizer to all areas of the crop.</li>
            <li>Water the area thoroughly to help the fertilizer penetrate the soil and reach the roots of the plants.</li>
            <li>Repeat the application as needed, following the recommended schedule for your specific crop and soil type.</li>
        </ol>
    </div>
@endsection
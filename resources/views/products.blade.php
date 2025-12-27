@extends('layouts.app')

@section('content')
<div class="bg-green-50 min-h-screen">
    <div class="container mx-auto px-4 py-16">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-green-800 mb-6">Our Products</h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">Discover our range of high-quality organic liquid fertilizers designed to enhance crop productivity and promote sustainable farming practices.</p>
        </div>

        <!-- Product Overview -->
        <div class="mb-16">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold text-green-800 mb-6">Baraka Organic Liquid Fertilizer</h2>
                    <p class="text-gray-700 mb-6">Our flagship product, Baraka Organic Liquid Fertilizer, is formulated with the highest quality natural ingredients to ensure maximum plant growth and health. This eco-friendly fertilizer is designed to nourish your crops while promoting soil health and sustainability.</p>
                    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                        <h3 class="text-xl font-semibold text-green-700 mb-4">Key Features</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li>100% organic and natural ingredients</li>
                            <li>Balanced nutrient composition for optimal growth</li>
                            <li>Promotes soil health and microbial activity</li>
                            <li>Easy to use and apply</li>
                            <li>Environmentally friendly and sustainable</li>
                        </ul>
                    </div>
                    <a href="{{ route('contact') }}" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Get in Touch</a>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/product-image.jpg') }}" alt="Baraka Organic Liquid Fertilizer" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>

        <!-- Product Benefits -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-12 text-center">Benefits of Our Fertilizer</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Increased Crop Yield</h3>
                    <p class="text-gray-600">Our organic liquid fertilizer provides essential nutrients that enhance plant growth, leading to higher crop yields and improved productivity.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Improved Soil Health</h3>
                    <p class="text-gray-600">By promoting microbial activity and enhancing soil structure, our fertilizer helps improve soil health and fertility for long-term benefits.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Sustainable Farming</h3>
                    <p class="text-gray-600">Our organic liquid fertilizer supports sustainable farming practices by reducing chemical usage and promoting eco-friendly agriculture.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Cost-Effective</h3>
                    <p class="text-gray-600">Our fertilizer provides excellent value for money, offering long-lasting benefits that help farmers reduce costs and increase profits.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Easy to Use</h3>
                    <p class="text-gray-600">Our liquid fertilizer is user-friendly, with simple application instructions that make it easy for farmers to use and integrate into their farming practices.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Wide Application</h3>
                    <p class="text-gray-600">Our organic liquid fertilizer can be used on a variety of crops, making it a versatile solution for different farming needs and crop types.</p>
                </div>
            </div>
        </div>

        <!-- Product Specifications -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-8">Product Specifications</h2>
            <div class="bg-white p-8 rounded-lg shadow-md overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-green-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-green-700 uppercase tracking-wider">Specification</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-green-700 uppercase tracking-wider">Details</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Product Name</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Baraka Organic Liquid Fertilizer</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Formulation</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">100% organic liquid fertilizer</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Nutrient Composition</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Balanced NPK ratio for optimal plant growth</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Recommended Application Rate</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1-2 liters per 100 square meters, depending on crop type and soil condition</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Packaging</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1-liter plastic bottles with unique QR codes for product authentication</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Storage Conditions</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Store in a cool, dry place away from direct sunlight</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Shelf Life</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 years from date of manufacture</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Place of Manufacture</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Shashemene, Oromia, Ethiopia</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-green-700 rounded-lg p-12 text-center text-white">
            <h2 class="text-3xl font-bold mb-6">Ready to Improve Your Farming?</h2>
            <p class="text-xl mb-8">Experience the benefits of Baraka Organic Liquid Fertilizer for your crops today.</p>
            <a href="{{ route('contact') }}" class="bg-white hover:bg-gray-100 text-green-700 font-bold py-3 px-6 rounded-lg transition duration-300">Contact Us Now</a>
        </div>
    </div>
</div>
@endsection
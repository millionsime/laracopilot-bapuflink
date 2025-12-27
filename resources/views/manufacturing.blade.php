@extends('layouts.app')

@section('content')
<div class="bg-green-50 min-h-screen">
    <div class="container mx-auto px-4 py-16">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-green-800 mb-6">Manufacturing & Quality</h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">Discover our state-of-the-art manufacturing facilities and commitment to quality and safety standards</p>
        </div>

        <!-- Manufacturing Process -->
        <div class="mb-16">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold text-green-800 mb-6">Our Manufacturing Process</h2>
                    <p class="text-gray-700 mb-6">At BARAKA AGRO PLC, we take pride in our advanced manufacturing process, which ensures the production of high-quality, organic liquid fertilizers. Our facilities are designed to meet international standards and are equipped with cutting-edge technology to guarantee consistent quality and safety.</p>
                    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                        <h3 class="text-xl font-semibold text-green-700 mb-4">Key Steps in Our Process</h3>
                        <ol class="list-decimal list-inside text-gray-700 space-y-2">
                            <li>Raw material sourcing and quality control</li>
                            <li>Precise formulation and mixing</li>
                            <li>Advanced filtration and purification</li>
                            <li>Rigorous testing and quality assurance</li>
                            <li>Packaging and labeling</li>
                            <li>Final inspection and distribution</li>
                        </ol>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/manufacturing-process.jpg') }}" alt="Manufacturing Process" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>

        <!-- Quality Assurance -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-12 text-center">Quality Assurance</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Stringent Quality Control</h3>
                    <p class="text-gray-600">Our manufacturing process includes multiple quality control checkpoints to ensure that every batch of Baraka Organic Liquid Fertilizer meets our strict standards for purity, potency, and safety.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Certified Facilities</h3>
                    <p class="text-gray-600">Our manufacturing facilities are certified to meet international quality and safety standards, ensuring that our products are safe for use and meet the highest industry benchmarks.</p>
                </div>
            </div>
        </div>

        <!-- Safety Measures -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-12 text-center">Safety Measures</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Strict Safety Protocols</h3>
                    <p class="text-gray-600">We adhere to strict safety protocols throughout our manufacturing process to protect our employees, the environment, and the final product.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Employee Training</h3>
                    <p class="text-gray-600">Our employees undergo rigorous training to ensure they are knowledgeable about safety procedures and best practices in the manufacturing process.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Environmental Protection</h3>
                    <p class="text-gray-600">We implement environmentally friendly practices to minimize our impact on the surrounding ecosystem and promote sustainable manufacturing.</p>
                </div>
            </div>
        </div>

        <!-- Manufacturing Facilities -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-8">Our Manufacturing Facilities</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="{{ asset('images/facility1.jpg') }}" alt="Manufacturing Facility" class="w-full h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Main Production Plant</h3>
                    <p class="text-gray-600">Our main production plant in Shashemene, Oromia, is equipped with state-of-the-art machinery and technology to ensure efficient and high-quality production of Baraka Organic Liquid Fertilizer.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="{{ asset('images/facility2.jpg') }}" alt="Quality Control Lab" class="w-full h-64 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold mb-2">Quality Control Laboratory</h3>
                    <p class="text-gray-600">Our dedicated quality control laboratory is staffed with experienced professionals who conduct rigorous testing to ensure that every batch of Baraka Organic Liquid Fertilizer meets our strict quality standards.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-green-700 rounded-lg p-12 text-center text-white">
            <h2 class="text-3xl font-bold mb-6">Experience Our Commitment to Quality</h2>
            <p class="text-xl mb-8">Discover how our advanced manufacturing processes and strict quality controls ensure the highest standards for our organic liquid fertilizers.</p>
            <a href="{{ route('contact') }}" class="bg-white hover:bg-gray-100 text-green-700 font-bold py-3 px-6 rounded-lg transition duration-300">Contact Us Today</a>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="bg-green-50 min-h-screen">
    <div class="container mx-auto px-4 py-16">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-green-800 mb-6">About BARAKA AGRO PLC</h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">Discover our story, mission, and commitment to sustainable agriculture</p>
        </div>

        <!-- Company History -->
        <div class="mb-16">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold text-green-800 mb-6">Our Story</h2>
                    <p class="text-gray-700 mb-6">Founded in 2010, BARAKA AGRO PLC has been a pioneer in the Ethiopian agricultural industry. Based in Shashemene, Oromia, we have grown from a small family-run operation to a leading agricultural company, dedicated to providing high-quality organic liquid fertilizers that support sustainable farming practices.</p>
                    <p class="text-gray-700">Our journey began with a simple vision: to revolutionize agriculture through innovative, eco-friendly solutions. Today, we continue to innovate and expand our product range to meet the growing demands of modern farmers.</p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/company-history.jpg') }}" alt="Company History" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>

        <!-- Mission Vision -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-12 text-center">Mission & Vision</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Our Mission</h3>
                    <p class="text-gray-600">To provide high-quality, organic liquid fertilizers that enhance crop productivity while promoting sustainable and environmentally friendly farming practices.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Our Vision</h3>
                    <p class="text-gray-600">To be the leading provider of organic agricultural solutions in Ethiopia, recognized for our commitment to quality, sustainability, and innovation.</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-green-800 mb-12 text-center">Meet Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/team-member1.jpg') }}" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-semibold mb-1">Dr. Alemu Kebede</h3>
                    <p class="text-green-600 mb-3">CEO & Founder</p>
                    <p class="text-gray-600">With over 20 years of experience in agriculture, Dr. Alemu leads our company with a vision for sustainable farming practices.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/team-member2.jpg') }}" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-semibold mb-1">Mekdes Wondimu</h3>
                    <p class="text-green-600 mb-3">Chief Scientific Officer</p>
                    <p class="text-gray-600">Mekdes oversees our product development and quality control processes, ensuring our fertilizers meet the highest standards.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/team-member3.jpg') }}" alt="Team Member" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-semibold mb-1">Tadesse Lemma</h3>
                    <p class="text-green-600 mb-3">Head of Operations</p>
                    <p class="text-gray-600">Tadesse manages our production facilities and supply chain, ensuring efficient and reliable distribution of our products.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-green-700 rounded-lg p-12 text-center text-white">
            <h2 class="text-3xl font-bold mb-6">Join Us in Our Mission</h2>
            <p class="text-xl mb-8">Become part of our team and help us revolutionize agriculture in Ethiopia.</p>
            <a href="{{ route('contact') }}" class="bg-white hover:bg-gray-100 text-green-700 font-bold py-3 px-6 rounded-lg transition duration-300">Contact Us Today</a>
        </div>
    </div>
</div>
@endsection
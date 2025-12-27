@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="relative">
            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Baraka Agro PLC" class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white">About Baraka Agro PLC</h1>
            </div>
        </div>
    </div>

    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-baraka mb-4">Our Story</h2>
            <p class="mb-4">Baraka Agro PLC was founded in 2010 with a vision to revolutionize agriculture in Ethiopia through the use of organic fertilizers. Based in Shashemene, Oromia, our company combines traditional farming knowledge with cutting-edge technology to create premium fertilizers that nourish crops and the environment.</p>
            <p class="mb-4">What started as a small family business has grown into a leading producer of organic liquid fertilizers, serving farmers across Ethiopia and beyond. Our commitment to quality, sustainability, and innovation has earned us a reputation as a trusted partner in the agricultural industry.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-baraka mb-4">Our Mission</h2>
            <p class="mb-4">At Baraka Agro PLC, our mission is to provide farmers with the highest quality organic fertilizers that promote healthy crops, maximize yields, and protect the environment. We are committed to sustainable agriculture practices that benefit both farmers and the planet.</p>
            <p class="mb-4">We strive to be a leader in the organic fertilizer industry, setting the standard for quality, innovation, and environmental responsibility. Our team of dedicated professionals works tirelessly to develop and deliver products that meet the evolving needs of farmers and the agricultural sector.</p>
        </div>
    </div>

    <div class="mt-12 bg-white rounded-lg shadow-md overflow-hidden">
        <div class="md:flex">
            <div class="md:w-1/2">
                <img src="{{ asset('images/team.jpg') }}" alt="Our Team" class="w-full h-full object-cover">
            </div>
            <div class="md:w-1/2 p-8">
                <h2 class="text-2xl font-bold text-baraka mb-4">Our Team</h2>
                <p class="mb-4">Baraka Agro PLC is proud to have a team of experienced professionals who bring a wealth of knowledge and expertise to our organization. From our skilled farmers and scientists to our dedicated administrative staff, each member of our team plays a crucial role in delivering our high-quality products and services.</p>
                <p class="mb-4">We believe that our success is a reflection of the hard work, dedication, and passion of our team. We are committed to fostering a positive and supportive work environment where our employees can thrive and grow both personally and professionally.</p>
            </div>
        </div>
    </div>

    <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-baraka mb-4">Our Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-xl font-bold mb-2">Quality</h3>
                <p>We are committed to delivering the highest quality products and services to our customers. Our products are rigorously tested and meet the strictest industry standards.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Sustainability</h3>
                <p>We believe in sustainable agriculture practices that protect the environment and promote long-term viability. Our products are eco-friendly and designed to minimize environmental impact.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Innovation</h3>
                <p>We embrace innovation and continuously seek new ways to improve our products and services. Our team of experts is dedicated to research and development to stay ahead of industry trends.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Integrity</h3>
                <p>We conduct our business with the highest ethical standards and maintain transparency in all our dealings. We value honesty, fairness, and respect in all our relationships.</p>
            </div>
        </div>
    </div>
@endsection
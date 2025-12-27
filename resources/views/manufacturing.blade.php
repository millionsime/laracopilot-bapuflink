@extends('layouts.app')

@section('title', 'Manufacturing & Quality')

@section('content')
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="relative">
            <img src="{{ asset('images/manufacturing-hero.jpg') }}" alt="Baraka Manufacturing Facility" class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white">Manufacturing & Quality</h1>
            </div>
        </div>
    </div>

    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-baraka mb-4">Our Manufacturing Facility</h2>
            <p class="mb-4">Baraka Agro PLC is proud to operate a state-of-the-art manufacturing facility in Shashemene, Oromia. Our facility is designed to produce high-quality organic liquid fertilizers using the latest technology and sustainable practices.</p>
            <p class="mb-4">Located in the heart of Ethiopia, our facility benefits from a favorable climate and access to natural resources, allowing us to produce premium fertilizers that meet the unique needs of Ethiopian farmers.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md">
            <img src="{{ asset('images/factory.jpg') }}" alt="Baraka Manufacturing Facility" class="w-full h-auto rounded-lg">
        </div>
    </div>

    <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-baraka mb-6">Quality Control</h2>
        <p class="mb-4">At Baraka Agro PLC, quality is our top priority. We have implemented rigorous quality control measures throughout our production process to ensure that our fertilizers meet the highest standards of purity, potency, and safety.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div>
                <h3 class="text-xl font-bold mb-2">Raw Material Testing</h3>
                <p>All raw materials used in our fertilizers undergo thorough testing to ensure they meet our strict quality standards and are free from contaminants.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Production Monitoring</h3>
                <p>Our production process is closely monitored at every stage to maintain consistency and quality. We use advanced technology and trained personnel to ensure that our fertilizers are produced to the highest standards.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Final Product Testing</h3>
                <p>Before our fertilizers are released for sale, they undergo rigorous final product testing to ensure they meet our quality specifications and regulatory requirements.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Continuous Improvement</h3>
                <p>We are committed to continuous improvement in our quality control processes. We regularly review and update our quality control procedures to ensure that we are always meeting and exceeding industry standards.</p>
            </div>
        </div>
    </div>

    <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-baraka mb-6">Sustainable Manufacturing</h2>
        <p class="mb-4">Baraka Agro PLC is committed to sustainable manufacturing practices that minimize our environmental impact and promote the health of our communities and the planet.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div>
                <h3 class="text-xl font-bold mb-2">Energy Efficiency</h3>
                <p>We use energy-efficient equipment and processes to minimize our energy consumption and reduce our carbon footprint.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Waste Reduction</h3>
                <p>We implement waste reduction strategies throughout our production process to minimize waste and maximize resource efficiency.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Water Conservation</h3>
                <p>We use water-efficient technologies and practices to conserve water resources and minimize our water footprint.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Community Engagement</h3>
                <p>We engage with our local communities to promote sustainable practices and support environmental conservation initiatives.</p>
            </div>
        </div>
    </div>

    <div class="mt-12 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-baraka mb-6">Certifications</h2>
        <p class="mb-4">Baraka Agro PLC is committed to meeting the highest standards of quality and safety in the production of our organic liquid fertilizers. We have obtained the following certifications to demonstrate our commitment to excellence:</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <div>
                <h3 class="text-xl font-bold mb-2">ISO 9001:2015</h3>
                <p>This certification demonstrates that our quality management system meets the requirements of the ISO 9001 standard, ensuring that we consistently deliver high-quality products and services.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">ISO 14001:2015</h3>
                <p>This certification shows that our environmental management system meets the requirements of the ISO 14001 standard, demonstrating our commitment to sustainable practices and environmental protection.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Organic Certification</h3>
                <p>Our organic certification ensures that our fertilizers are produced using organic ingredients and meet the strict requirements of organic farming standards.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-2">Ethiopian Food and Drug Administration (EFDA) Approval</h3>
                <p>Our EFDA approval demonstrates that our fertilizers meet the regulatory requirements for safety and efficacy in Ethiopia.</p>
            </div>
        </div>
    </div>
@endsection
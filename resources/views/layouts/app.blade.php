<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraka Agro PLC - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .bg-baraka {
            background-color: #2e7d32;
        }
        .text-baraka {
            color: #2e7d32;
        }
        .border-baraka {
            border-color: #2e7d32;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Baraka Agro PLC Logo" class="h-12 w-auto">
                    <span class="ml-3 text-xl font-bold text-baraka">Baraka Agro PLC</span>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-baraka">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-baraka">About</a>
                    <a href="{{ route('product') }}" class="text-gray-700 hover:text-baraka">Product</a>
                    <a href="{{ route('manufacturing') }}" class="text-gray-700 hover:text-baraka">Manufacturing</a>
                    <a href="{{ route('sustainability') }}" class="text-gray-700 hover:text-baraka">Sustainability</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-baraka">Contact</a>
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-baraka">Dashboard</a>
                    @endauth
                </nav>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-baraka hover:bg-gray-50">Home</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-baraka hover:bg-gray-50">About</a>
                <a href="{{ route('product') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-baraka hover:bg-gray-50">Product</a>
                <a href="{{ route('manufacturing') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-baraka hover:bg-gray-50">Manufacturing</a>
                <a href="{{ route('sustainability') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-baraka hover:bg-gray-50">Sustainability</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-baraka hover:bg-gray-50">Contact</a>
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-baraka hover:bg-gray-50">Dashboard</a>
                @endauth
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-baraka text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Baraka Agro PLC</h3>
                    <p>Premium organic liquid fertilizer for all types of crops.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>
                        <li><a href="{{ route('product') }}" class="hover:underline">Product</a></li>
                        <li><a href="{{ route('manufacturing') }}" class="hover:underline">Manufacturing</a></li>
                        <li><a href="{{ route('sustainability') }}" class="hover:underline">Sustainability</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Contact Us</h4>
                    <p>Shashemene, Oromia, Ethiopia</p>
                    <p>Phone: +251 911 111 111</p>
                    <p>Email: info@barakaagro.com</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-gray-300">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="hover:text-gray-300">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M23.998 3.227a9.969 9.969 0 01-2.697.658 4.975 4.975 0 002.165-2.672c-.951.546-1.979.986-3.047 1.318a4.976 4.976 0 00-8.392 4.48 13.947 13.947 0 01-5.556-2.183A4.977 4.977 0 00.576 8.107a4.975 4.975 0 002.166 2.671c-.954-.545-1.982-1 3.049-1.319a4.977 4.977 0 008.393-4.48 13.948 13.948 0 01-5.557 2.182A4.976 4.976 0 0023.427 4.528a9.968 9.968 0 01.571 3.7v.003c0 5.523-4.477 10-10 10a9.968 9.968 0 01-7.071-2.93c2.096.959 4.339 1.62 6.617 1.769-2.084-.675-3.9-1.656-5.556-3.35a4.975 4.975 0 006.039-7.447A9.967 9.967 0 0124 2.664a10 10 0 00-.002 3.223z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-white/20 text-center">
                <p>&copy; {{ date('Y') }} Baraka Agro PLC. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    @yield('scripts')
</body>
</html>
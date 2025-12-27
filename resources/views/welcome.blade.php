<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        },
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'bounce-gentle': 'bounceGentle 2s infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        bounceGentle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-5px)' }
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <div class="flex items-center">
                <div class="text-2xl font-bold text-primary-600">Business<span class="text-secondary-600">Dashboard</span></div>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-600 hover:text-primary-600 transition-colors duration-200">Home</a>
                <a href="#features" class="text-gray-600 hover:text-primary-600 transition-colors duration-200">Features</a>
                <a href="#about" class="text-gray-600 hover:text-primary-600 transition-colors duration-200">About</a>
                <a href="#testimonials" class="text-gray-600 hover:text-primary-600 transition-colors duration-200">Testimonials</a>
                <a href="#contact" class="text-gray-600 hover:text-primary-600 transition-colors duration-200">Contact</a>
                <a href="{{ route('admin.login') }}" class="text-gray-600 hover:text-primary-600 transition-colors duration-200">Admin</a>
            </nav>
            <button class="md:hidden text-gray-600 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary-500 to-primary-600 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in">Transform Your Business with Advanced Analytics</h1>
                <p class="text-xl mb-8 animate-slide-up animation-delay-200">Get real-time insights, track performance, and make data-driven decisions with our comprehensive business dashboard.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 animate-slide-up animation-delay-400">
                    <a href="#features" class="bg-white text-primary-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">Explore Features</a>
                    <a href="#contact" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary-600 transition-colors duration-200">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Powerful Features</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Discover the advanced tools that will help you manage your business more effectively.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($features as $feature)
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-{{ $feature['color'] }}-100 text-{{ $feature['color'] }}-600 rounded-xl flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-{{ $feature['icon'] }} text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 text-center">{{ $feature['title'] }}</h3>
                    <p class="text-gray-600 text-center">{{ $feature['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="https://image.pollinations.ai/prompt/modern%20business%20analytics%20dashboard%20screenshot%20professional%20ui%20design%20clean%20minimalist/1200/800" alt="Business Dashboard" class="rounded-xl shadow-lg">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">About Our Platform</h2>
                    <p class="text-gray-600 mb-6">Our business analytics platform is designed to provide you with the insights you need to make informed decisions. With our comprehensive suite of tools, you can track performance, analyze trends, and optimize your operations.</p>
                    <p class="text-gray-600 mb-6">We understand that every business is unique, which is why our platform is highly customizable. You can tailor the dashboard to display the metrics that matter most to you and your team.</p>
                    <a href="#contact" class="inline-block bg-primary-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-700 transition-colors duration-200">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-gradient-to-r from-primary-500 to-primary-600 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">What Our Clients Say</h2>
                <p class="text-primary-100 max-w-2xl mx-auto">Hear from businesses that have transformed their operations with our platform.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20">
                    <div class="flex items-center mb-4">
                        <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h3 class="font-semibold">{{ $testimonial['name'] }}</h3>
                            <p class="text-sm text-primary-100">{{ $testimonial['position'] }}</p>
                        </div>
                    </div>
                    <p class="text-primary-50 italic">"{{ $testimonial['quote'] }}"</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Get Started Today</h2>
                <p class="text-gray-600">Ready to transform your business with our advanced analytics platform? Contact us today to learn more about our solutions.</p>
            </div>

            <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md">
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary-600 text-white py-3 rounded-lg font-semibold hover:bg-primary-700 transition-colors duration-200">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Business<span class="text-primary-400">Dashboard</span></h3>
                    <p class="text-gray-400">Transforming businesses with advanced analytics and data-driven insights.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Home</a></li>
                        <li><a href="#features" class="text-gray-400 hover:text-white transition-colors duration-200">Features</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors duration-200">About</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white transition-colors duration-200">Testimonials</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors duration-200">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Analytics</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Reporting</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Consulting</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Training</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span class="text-gray-400">123 Business Ave, Suite 100</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            <span class="text-gray-400">(555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            <span class="text-gray-400">info@businessdashboard.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">© {{ date('Y') }} Business Dashboard. All rights reserved.</p>
                <p class="text-gray-400 mt-2">Made with ❤️ by LaraCopilot</p>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Mobile menu toggle
            $('.md\\:hidden').click(function() {
                $('nav').toggleClass('hidden');
            });

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();

                var target = this.hash;
                var $target = $(target);

                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 80
                }, 900, 'swing', function() {
                    window.location.hash = target;
                });
            });

            // Animation delays
            $('.animation-delay-200').css('animation-delay', '0.2s');
            $('.animation-delay-400').css('animation-delay', '0.4s');
        });
    </script>
</body>
</html>
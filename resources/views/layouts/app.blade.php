<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Verve Management - Leading Event Management Company in the Middle East')</title>
    <meta name="description" content="@yield('description', 'Verve Management delivers world-class business summits and conferences across the Middle East, connecting industry leaders and driving innovation.')">
    
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>

<body class="antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed w-full top-0 z-50 transition-all duration-300 bg-white">
        <div class="container-custom">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Verve Management" class="h-10 w-auto">
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#E31E24] font-medium transition-colors">Home</a>
                    <a href="{{ route('home') }}#events" class="text-gray-700 hover:text-[#E31E24] font-medium transition-colors">Events</a>
                    <a href="{{ route('home') }}#about" class="text-gray-700 hover:text-[#E31E24] font-medium transition-colors">About</a>
                    <a href="#contact" class="px-6 py-3 bg-[#E31E24] text-white rounded-lg font-semibold hover:bg-[#c51a1f] transition-all duration-300">Contact Us</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-[#E31E24]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="container-custom py-4 space-y-3">
                <a href="{{ route('home') }}" class="block text-gray-700 hover:text-[#E31E24] font-medium transition-colors py-2">Home</a>
                <a href="{{ route('home') }}#events" class="block text-gray-700 hover:text-[#E31E24] font-medium transition-colors py-2">Events</a>
                <a href="{{ route('home') }}#about" class="block text-gray-700 hover:text-[#E31E24] font-medium transition-colors py-2">About</a>
                <a href="#contact" class="block px-6 py-3 bg-[#E31E24] text-white rounded-lg font-semibold hover:bg-[#c51a1f] transition-all duration-300 text-center">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container-custom section-padding">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- About -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('images/logo.png') }}" alt="Verve Management" class="h-10 w-auto">
                    </div>
                        <span class="text-2xl font-bold">
                            <span class="text-white">VERVE</span>
                            <span class="text-[#E31E24]"> MANAGEMENT</span>
                        </span>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        Verve Management is a leading event management company specializing in organizing world-class business summits, conferences, and corporate events across the Middle East. We connect industry leaders, foster innovation, and create impactful experiences.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/vervemanagementdubai" target="_blank" class="w-10 h-10 bg-white/10 hover:bg-[#E31E24] rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://twitter.com/vervemanagement" target="_blank" class="w-10 h-10 bg-white/10 hover:bg-[#E31E24] rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/company/verve-management" target="_blank" class="w-10 h-10 bg-white/10 hover:bg-[#E31E24] rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-[#E31E24] transition-colors">Home</a></li>
                        <li><a href="{{ route('home') }}#events" class="text-gray-300 hover:text-[#E31E24] transition-colors">Events</a></li>
                        <li><a href="{{ route('home') }}#about" class="text-gray-300 hover:text-[#E31E24] transition-colors">About Us</a></li>
                        <li><a href="https://www.verve-management.com" target="_blank" class="text-gray-300 hover:text-[#E31E24] transition-colors">Main Website</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-bold mb-6">Contact</h3>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-[#E31E24] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Dubai, United Arab Emirates</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-[#E31E24] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:info@verve-management.com" class="hover:text-[#E31E24]">info@verve-management.com</a>
                        </li>
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-[#E31E24] mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>+971 4 243 4677</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Verve Management. All rights reserved. | Visit us at <a href="https://www.verve-management.com" target="_blank" class="text-[#E31E24] hover:underline">verve-management.com</a></p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    @stack('scripts')
</body>
</html>
@extends('layouts.app')

@section('title', 'Summit Events - Leading Business Conferences in the Middle East')
@section('description', 'Join industry leaders at world-class business summits across Dubai, Riyadh, and the Middle East. Connect, learn, and grow with the best.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
    <!-- Animated Background -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-20 w-72 h-72 bg-[#E31E24] rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
        <div class="absolute top-40 right-20 w-72 h-72 bg-gray-600 rounded-full mix-blend-multiply filter blur-3xl animate-pulse animation-delay-2000"></div>
        <div class="absolute -bottom-20 left-40 w-72 h-72 bg-[#E31E24] rounded-full mix-blend-multiply filter blur-3xl animate-pulse animation-delay-4000"></div>
    </div>

    <div class="container-custom relative z-10 text-center text-white py-24 px-6">
        <div data-aos="fade-up">
            <!-- Verve Logo with proper spacing -->
            <div class="mb-12 mt-8">
                <img src="{{ asset('images/logo.png') }}" alt="Verve Management" class="h-20 md:h-24 mx-auto object-contain">
            </div>

            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-shadow-lg leading-tight px-4">
                World-Class Events That
                <span class="block mt-2 text-[#E31E24]">
                    Drive Innovation
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed px-4">
                Verve Management delivers exceptional business summits and conferences across the Middle East.
            </p>
            <p class="text-lg text-gray-300 mb-12 max-w-2xl mx-auto px-4">
                Connecting industry leaders, fostering collaboration, and creating memorable experiences that transform businesses.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center px-4">
                <a href="#events" class="px-8 py-4 bg-[#E31E24] text-white rounded-lg font-semibold hover:bg-[#c51a1f] transition-all duration-300 inline-flex items-center gap-2 group">
                    Explore Events
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="#about" class="px-8 py-4 border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-gray-900 transition-all duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Stats with proper spacing from bottom -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-24 mb-12 px-4" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold mb-2 counter text-[#E31E24]" data-target="{{ $stats['total_events'] }}">0</div>
                <div class="text-gray-300 uppercase tracking-wider text-sm">Total Events</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold mb-2 counter text-[#E31E24]" data-target="{{ $stats['total_attendees'] }}">0</div>
                <div class="text-gray-300 uppercase tracking-wider text-sm">Attendees</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold mb-2 counter text-[#E31E24]" data-target="{{ $stats['total_speakers'] }}">0</div>
                <div class="text-gray-300 uppercase tracking-wider text-sm">Speakers</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold mb-2 counter text-[#E31E24]" data-target="{{ $stats['total_organizations'] }}">0</div>
                <div class="text-gray-300 uppercase tracking-wider text-sm">Organizations</div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator with proper spacing from bottom -->
    <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Featured Events Section -->
<section id="events" class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-primary-900 mb-4">
                Featured <span class="gradient-text">Events</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Discover our flagship events bringing together industry leaders and innovators
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($featuredEvents as $event)
                <div class="card card-hover overflow-hidden group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <!-- Event Image -->
                    <div class="relative h-64 overflow-hidden" style="background: linear-gradient(135deg, {{ $event->primary_color }} 0%, {{ $event->secondary_color }} 100%);">
                        @if($event->hero_image)
                            <img src="{{ Storage::url($event->hero_image) }}" alt="{{ $event->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center">
                                @if($event->logo)
                                    <img src="{{ Storage::url($event->logo) }}" alt="{{ $event->name }}" class="max-w-[60%] max-h-[60%] object-contain">
                                @endif
                            </div>
                        @endif
                        <div class="absolute top-4 right-4">
                            <span class="bg-white/90 backdrop-blur-sm text-primary-900 px-4 py-2 rounded-full text-sm font-semibold">
                                {{ $event->formatted_date }}
                            </span>
                        </div>
                    </div>

                    <!-- Event Content -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-sm text-gray-600 mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            {{ $event->location }}
                        </div>

                        <h3 class="text-2xl font-bold text-primary-900 mb-3 group-hover:text-accent transition-colors">
                            {{ $event->name }}
                        </h3>

                        @if($event->tagline)
                            <p class="text-gray-600 mb-4 italic">{{ $event->tagline }}</p>
                        @endif

                        <p class="text-gray-600 mb-6 line-clamp-3">
                            {{ Str::limit($event->description, 150) }}
                        </p>

                        <!-- Event Stats -->
                        <div class="grid grid-cols-3 gap-4 mb-6 pb-6 border-b">
                            @if($event->expected_attendees)
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-accent">{{ number_format($event->expected_attendees) }}+</div>
                                    <div class="text-xs text-gray-500">Attendees</div>
                                </div>
                            @endif
                            @if($event->speakers_count)
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-accent">{{ $event->speakers_count }}+</div>
                                    <div class="text-xs text-gray-500">Speakers</div>
                                </div>
                            @endif
                            @if($event->organizations_count)
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-accent">{{ $event->organizations_count }}+</div>
                                    <div class="text-xs text-gray-500">Companies</div>
                                </div>
                            @endif
                        </div>

                        <a href="{{ route('events.show', $event->slug) }}" class="btn btn-primary w-full group">
                            View Event Details
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-20">
                    <div class="text-6xl mb-4">📅</div>
                    <h3 class="text-2xl font-bold text-gray-700 mb-2">No Events Yet</h3>
                    <p class="text-gray-600">Check back soon for exciting upcoming events!</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- About Verve Management Section -->
<section id="about" class="section-padding bg-white">
    <div class="container-custom">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Content -->
                <div data-aos="fade-right">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        About <span class="text-[#E31E24]">Verve Management</span>
                    </h2>
                    <p class="text-xl text-gray-600 mb-6 leading-relaxed">
                        Verve Management is a premier event management company specializing in creating impactful business summits, conferences, and corporate events across the Middle East.
                    </p>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        With years of experience and a proven track record, we bring together industry leaders, innovators, and decision-makers to foster meaningful connections, share knowledge, and drive business growth.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Our events span diverse industries including technology, finance, real estate, healthcare, and more, providing platforms for thought leadership and innovation.
                    </p>
                    <a href="https://www.verve-management.com" target="_blank" class="inline-flex items-center gap-2 px-8 py-4 bg-[#E31E24] text-white rounded-lg font-semibold hover:bg-[#c51a1f] transition-all duration-300">
                        Visit Our Main Website
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>

                <!-- Features -->
                <div data-aos="fade-left">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="p-6 bg-gray-50 rounded-xl">
                            <div class="w-12 h-12 bg-[#E31E24] text-white rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Expert Event Management</h3>
                            <p class="text-gray-600">End-to-end event planning and execution with meticulous attention to detail.</p>
                        </div>

                        <div class="p-6 bg-gray-50 rounded-xl">
                            <div class="w-12 h-12 bg-[#E31E24] text-white rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Strategic Networking</h3>
                            <p class="text-gray-600">Connecting the right people at the right time for maximum business impact.</p>
                        </div>

                        <div class="p-6 bg-gray-50 rounded-xl">
                            <div class="w-12 h-12 bg-[#E31E24] text-white rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Regional Expertise</h3>
                            <p class="text-gray-600">Deep understanding of Middle East markets and business culture.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-gradient-to-r from-accent to-accent-600 text-white">
    <div class="container-custom text-center" data-aos="zoom-in">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Ready to Transform Your Business?
        </h2>
        <p class="text-xl mb-10 max-w-2xl mx-auto opacity-90">
            Don't miss out on the opportunity to connect with industry leaders and shape the future of your sector.
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <a href="#events" class="btn bg-white text-accent hover:bg-gray-100 btn-lg">
                Browse Events
            </a>
            <a href="#contact" class="btn border-2 border-white text-white hover:bg-white hover:text-accent btn-lg">
                Contact Us
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-primary-900 mb-4">
                Get In <span class="gradient-text">Touch</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Have questions? We're here to help you find the perfect event for your needs.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Email</h3>
                    <p class="text-gray-600">info@summitevents.com</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Phone</h3>
                    <p class="text-gray-600">+971 4 243 4677</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2">Location</h3>
                    <p class="text-gray-600">Dubai, UAE</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('title', $event->name . ' - Summit Events')
@section('description', Str::limit($event->description, 160))

@push('styles')
<style>
    .event-hero {
        background: linear-gradient(135deg, {{ $event->primary_color }} 0%, {{ $event->secondary_color }} 100%);
    }
    .accent-color {
        color: {{ $event->secondary_color }};
    }
    .accent-bg {
        background-color: {{ $event->secondary_color }};
    }
    .accent-border {
        border-color: {{ $event->secondary_color }};
    }
    .primary-bg {
        background-color: {{ $event->primary_color }};
    }
</style>
@endpush

@section('content')
<!-- Event Hero Section -->
<section class="event-hero relative min-h-[70vh] flex items-center justify-center text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-white rounded-full mix-blend-overlay filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-72 h-72 bg-white rounded-full mix-blend-overlay filter blur-3xl animate-pulse animation-delay-2000"></div>
    </div>

    @if($event->hero_image)
        <div class="absolute inset-0">
            <img src="{{ Storage::url($event->hero_image) }}" alt="{{ $event->name }}" class="w-full h-full object-cover opacity-20">
        </div>
    @endif

    <div class="container-custom relative z-10 text-center py-20">
        @if($event->logo)
            <div class="mb-8" data-aos="fade-down">
                <img src="{{ Storage::url($event->logo) }}" alt="{{ $event->name }}" class="h-32 mx-auto object-contain">
            </div>
        @endif

        <div data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-shadow-lg">
                {{ $event->name }}
            </h1>

            @if($event->tagline)
                <p class="text-xl md:text-2xl text-gray-100 mb-8 italic">
                    "{{ $event->tagline }}"
                </p>
            @endif

            <div class="flex flex-wrap justify-center gap-6 mb-8 text-lg">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="font-semibold">{{ $event->formatted_date }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="font-semibold">{{ $event->venue }}, {{ $event->location }}</span>
                </div>
            </div>

            <a href="#register" class="btn bg-white text-primary-900 hover:bg-gray-100 btn-lg">
                Register Now
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Event Stats Bar -->
<section class="py-12 bg-white shadow-lg relative z-10 -mt-20 mx-4 md:mx-8 rounded-2xl" data-aos="fade-up">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @if($event->expected_attendees)
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold accent-color mb-2">{{ number_format($event->expected_attendees) }}+</div>
                    <div class="text-gray-600 uppercase tracking-wider text-sm">Expected Attendees</div>
                </div>
            @endif
            @if($event->speakers_count)
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold accent-color mb-2">{{ $event->speakers_count }}+</div>
                    <div class="text-gray-600 uppercase tracking-wider text-sm">Industry Speakers</div>
                </div>
            @endif
            @if($event->organizations_count)
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold accent-color mb-2">{{ $event->organizations_count }}+</div>
                    <div class="text-gray-600 uppercase tracking-wider text-sm">Leading Organizations</div>
                </div>
            @endif
            @if($event->stats)
                @foreach(array_slice($event->stats, 0, 1) as $key => $value)
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-bold accent-color mb-2">{{ $value }}</div>
                        <div class="text-gray-600 uppercase tracking-wider text-sm">{{ Str::headline($key) }}</div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<!-- About Event Section -->
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-primary-900 mb-8 text-center" data-aos="fade-up">
                About The <span class="accent-color">Event</span>
            </h2>

            <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="100">
                <p class="text-xl text-gray-700 leading-relaxed mb-6">
                    {{ $event->description }}
                </p>

                @if($event->overview)
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {{ $event->overview }}
                    </p>
                @endif
            </div>

            @if($event->industries->count() > 0)
                <div class="mt-12" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-2xl font-bold text-primary-900 mb-6">Industries Covered</h3>
                    <div class="flex flex-wrap gap-3">
                        @foreach($event->industries as $industry)
                            <span class="px-6 py-3 accent-bg text-white rounded-full font-semibold text-sm">
                                {{ $industry->name }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- Topics Section -->
@if($event->topics->count() > 0)
<section class="section-padding bg-white">
    <div class="container-custom">
        <h2 class="text-4xl font-bold text-primary-900 mb-12 text-center" data-aos="fade-up">
            Topic <span class="accent-color">Highlights</span>
        </h2>

        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($event->topics as $index => $topic)
                    <div class="flex items-start gap-4 p-6 bg-gray-50 rounded-xl hover:shadow-lg transition-all duration-300" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        <div class="flex-shrink-0 w-12 h-12 accent-bg text-white rounded-lg flex items-center justify-center font-bold text-xl">
                            {{ $loop->iteration }}
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-primary-900 mb-2">{{ $topic->title }}</h3>
                            @if($topic->description)
                                <p class="text-gray-600 text-sm">{{ $topic->description }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

<!-- Speakers Section -->
@if($event->speakers->count() > 0)
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <h2 class="text-4xl font-bold text-primary-900 mb-12 text-center" data-aos="fade-up">
            Featured <span class="accent-color">Speakers</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($event->speakers as $index => $speaker)
                <div class="card text-center overflow-hidden group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="relative overflow-hidden">
                        @if($speaker->photo)
                            <img src="{{ Storage::url($speaker->photo) }}" alt="{{ $speaker->name }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <div class="w-full h-64 primary-bg flex items-center justify-center">
                                <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary-900 mb-1">{{ $speaker->name }}</h3>
                        <p class="text-gray-600 font-semibold mb-1">{{ $speaker->title }}</p>
                        @if($speaker->company)
                            <p class="text-gray-500 text-sm mb-4">{{ $speaker->company }}</p>
                        @endif
                        @if($speaker->linkedin)
                            <a href="{{ $speaker->linkedin }}" target="_blank" class="text-accent hover:underline inline-flex items-center gap-1 text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                                LinkedIn
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Why Attend Section -->
@if($event->why_attend)
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-primary-900 mb-12 text-center" data-aos="fade-up">
                Why <span class="accent-color">Attend?</span>
            </h2>

            <div class="prose prose-lg max-w-none text-gray-700" data-aos="fade-up" data-aos-delay="100">
                {!! nl2br(e($event->why_attend)) !!}
            </div>
        </div>
    </div>
</section>
@endif

<!-- Sponsors Section -->
@if($event->sponsors->count() > 0)
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <h2 class="text-4xl font-bold text-primary-900 mb-12 text-center" data-aos="fade-up">
            Our <span class="accent-color">Partners & Sponsors</span>
        </h2>

        @php
            $sponsorsByTier = $event->sponsors->groupBy('tier');
            $tierOrder = ['platinum', 'gold', 'silver', 'bronze', 'partner'];
            $tierLabels = [
                'platinum' => 'Platinum Sponsors',
                'gold' => 'Gold Sponsors',
                'silver' => 'Silver Sponsors',
                'bronze' => 'Bronze Sponsors',
                'partner' => 'Partners'
            ];
        @endphp

        @foreach($tierOrder as $tier)
            @if(isset($sponsorsByTier[$tier]) && $sponsorsByTier[$tier]->count() > 0)
                <div class="mb-16" data-aos="fade-up">
                    <h3 class="text-2xl font-bold text-center mb-8 uppercase tracking-wider accent-color">
                        {{ $tierLabels[$tier] }}
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
                        @foreach($sponsorsByTier[$tier] as $sponsor)
                            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex items-center justify-center">
                                <a href="{{ $sponsor->website }}" target="_blank" class="block">
                                    <img src="{{ Storage::url($sponsor->logo) }}" alt="{{ $sponsor->name }}" class="max-h-16 w-auto mx-auto grayscale hover:grayscale-0 transition-all duration-300">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>
@endif

<!-- Why Sponsor Section -->
@if($event->why_sponsor)
<section class="section-padding primary-bg text-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8" data-aos="fade-up">
                Interested in <span class="text-accent">Sponsoring?</span>
            </h2>

            <div class="prose prose-lg prose-invert max-w-none mb-10" data-aos="fade-up" data-aos-delay="100">
                {!! nl2br(e($event->why_sponsor)) !!}
            </div>

            <a href="#register" class="btn accent-bg text-white hover:opacity-90 btn-lg" data-aos="fade-up" data-aos-delay="200">
                Become a Sponsor
            </a>
        </div>
    </div>
</section>
@endif

<!-- Registration Section -->
<section id="register" class="section-padding bg-gradient-to-br from-gray-50 to-white">
    <div class="container-custom">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-primary-900 mb-4">
                    Register Your <span class="accent-color">Interest</span>
                </h2>
                <p class="text-xl text-gray-600">
                    Fill out the form below and our team will get in touch with you shortly
                </p>
            </div>

            <div class="card p-8 md:p-12" data-aos="fade-up" data-aos-delay="100">
                <form id="registration-form" onsubmit="handleRegistration(event, '{{ $event->slug }}')">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Full Name *</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email Address *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                            <input type="tel" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Company</label>
                            <input type="text" name="company" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Job Title</label>
                            <input type="text" name="job_title" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Registration Type *</label>
                            <select name="registration_type" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
                                <option value="delegate">Delegate</option>
                                <option value="sponsor">Sponsor</option>
                                <option value="speaker">Speaker</option>
                                <option value="exhibitor">Exhibitor</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Additional Message</label>
                        <textarea name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition-all" placeholder="Tell us more about your interest..."></textarea>
                    </div>

                    <button type="submit" class="btn accent-bg text-white hover:opacity-90 w-full btn-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Submit Registration
                    </button>

                    <p class="text-center text-gray-500 text-sm mt-4">
                        By submitting this form, you agree to be contacted by our team regarding this event.
                    </p>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                @if($event->contact_email)
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-12 h-12 accent-bg text-white rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <p class="font-semibold text-gray-700">Email</p>
                        <p class="text-gray-600 text-sm">{{ $event->contact_email }}</p>
                    </div>
                @endif

                @if($event->contact_phone)
                    <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-12 h-12 accent-bg text-white rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <p class="font-semibold text-gray-700">Phone</p>
                        <p class="text-gray-600 text-sm">{{ $event->contact_phone }}</p>
                    </div>
                @endif

                @if($event->website_url)
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="w-12 h-12 accent-bg text-white rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <p class="font-semibold text-gray-700">Website</p>
                        <a href="{{ $event->website_url }}" target="_blank" class="text-accent hover:underline text-sm">{{ $event->website_url }}</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
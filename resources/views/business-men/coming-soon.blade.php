@extends('layouts.app')

@section('title', 'Business Men Services - Coming Soon')

@section('content')
<div class="min-h-screen bg-careway-bg flex items-center justify-center p-4">
    <div class="max-w-4xl w-full text-center">
        <!-- Logo Section -->
        <div class="mb-12">
            <div class="logo-container">
                <div class="luxury-square w-56 h-56 mx-auto mb-6 flex items-center justify-center p-7">
                    <img src="{{ asset('images/logos/logo1.png') }}" alt="Business Men Services Logo" class="w-full h-full object-contain">
                </div>
            </div>
            <h1 class="text-2xl md:text-3xl lg:text-5xl font-bold text-black mb-4 px-4">
                CARE WAY BUSINESS MEN SERVICES
            </h1>
        </div>

        <!-- Coming Soon Content -->
        <div class="bg-white rounded-2xl card-shadow p-6 md:p-8 lg:p-12 mb-8">
            <div class="mb-8">
                <h2 class="text-3xl md:text-4xl lg:text-6xl font-bold text-black mb-6">
                    Coming <span class="text-careway-gold">Soon</span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    We're working hard to bring you comprehensive business services tailored for the UAE market. 
                    Our team of experts is preparing exceptional solutions for entrepreneurs, investors, and business owners.
                </p>
            </div>

            <!-- Features Preview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mb-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto bg-careway-gold rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-black mb-2">Business Setup</h3>
                    <p class="text-gray-600 text-sm">Company formation & licensing</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto bg-careway-gold rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-black mb-2">Visa Services</h3>
                    <p class="text-gray-600 text-sm">Immigration & visa processing</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto bg-careway-gold rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-black mb-2">HR Services</h3>
                    <p class="text-gray-600 text-sm">Recruitment & payroll management</p>
                </div>
            </div>
            
            <!-- More Services Note -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center bg-careway-gold bg-opacity-10 text-careway-brown px-6 py-3 rounded-full">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="font-medium">And many more services available - Contact us for details</span>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="border-t border-gray-200 pt-8">
                <p class="text-gray-600 mb-4">
                    Interested in our services? Get in touch with us:
                </p>
                <div class="flex flex-col gap-4 justify-center items-center">
                    <div class="flex items-center text-careway-brown">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>info@careway.ae</span>
                    </div>
                    <div class="flex items-center text-careway-brown">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Ph: 02-5551662</span>
                    </div>
                    <div class="flex items-center text-careway-brown">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Fax: 02-5551663</span>
                    </div>
                    <div class="flex items-center text-careway-brown text-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Abu Dhabi 39752 United Arab Emirates</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Home -->
        <a href="{{ route('home') }}" 
           class="inline-flex items-center text-careway-brown hover:text-careway-gold font-semibold transition-colors duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Home
        </a>
    </div>
</div>
@endsection 
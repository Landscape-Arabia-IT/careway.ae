@extends('layouts.app')

@section('title', 'Careway - Choose Your Service')

@section('content')
<div class="min-h-screen bg-careway-bg flex items-center justify-center p-4">
    <div class="max-w-6xl w-full">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl lg:text-6xl font-bold text-black mb-4">
                Welcome to <span class="text-careway-gold">Careway</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto px-4">
                Choose from our specialized services to meet your business needs in the UAE
            </p>
        </div>

        <!-- Company Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 max-w-4xl mx-auto">
            <!-- Business Men Services Card -->
            <div class="bg-white rounded-2xl card-shadow hover-scale p-6 md:p-8 text-center">
                <div class="mb-6">
                    <!-- Business Men Services logo -->
                    <div class="logo-container">
                        <div class="luxury-square w-44 h-44 mx-auto mb-4 flex items-center justify-center p-5">
                            <img src="{{ asset('images/logos/logo1.png') }}" alt="Business Men Services Logo" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
                
                <h2 class="text-xl md:text-2xl font-bold text-black mb-6">
                    CARE WAY BUSINESS MEN SERVICES
                </h2>
                
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Professional business consulting and management services tailored for entrepreneurs and business owners in the UAE.
                </p>
                
                <a href="{{ route('business-men.coming-soon') }}" 
                   class="inline-block bg-careway-gold hover:bg-careway-brown text-white font-semibold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105">
                    Explore Services
                </a>
            </div>

            <!-- Transport and Customs Clearance Card -->
            <div class="bg-white rounded-2xl card-shadow hover-scale p-6 md:p-8 text-center">
                <div class="mb-6">
                    <!-- Transport and Customs logo -->
                    <div class="logo-container">
                        <div class="luxury-square w-44 h-44 mx-auto mb-4 flex items-center justify-center p-5">
                            <img src="{{ asset('images/logos/logo2.png') }}" alt="Transport and Customs Logo" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
                
                <h2 class="text-xl md:text-2xl font-bold text-black mb-6">
                    CARE WAY TRANSPORT AND CUSTOMS CLEARANCE
                </h2>
                
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Comprehensive transportation solutions and customs clearance services for international trade in the UAE.
                </p>
                
                <a href="{{ route('transport.coming-soon') }}" 
                   class="inline-block bg-careway-gold hover:bg-careway-brown text-white font-semibold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105">
                    Explore Services
                </a>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-white rounded-2xl card-shadow p-6 md:p-8 mt-12 max-w-2xl mx-auto">
            <h3 class="text-2xl font-bold text-black text-center mb-6">Contact Information</h3>
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

        <!-- Footer -->
        <div class="text-center mt-8">
            <p class="text-gray-500 text-sm">
                © 2025 Careway. All rights reserved. | UAE
            </p>
        </div>
    </div>
</div>
@endsection 
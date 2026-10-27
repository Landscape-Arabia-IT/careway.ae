@extends('layouts.app')

@section('title', 'Transport & Customs Clearance - Coming Soon')

@section('content')
<div class="min-h-screen bg-careway-bg flex items-center justify-center p-4">
    <div class="max-w-4xl w-full text-center">
        <!-- Logo Section -->
        <div class="mb-12">
            <div class="logo-container">
                <div class="luxury-square w-56 h-56 mx-auto mb-6 flex items-center justify-center p-7">
                    <img src="{{ asset('images/logos/logo2.png') }}" alt="Transport and Customs Logo" class="w-full h-full object-contain">
                </div>
            </div>
            <h1 class="text-2xl md:text-3xl lg:text-5xl font-bold text-black mb-4 px-4">
                CARE WAY TRANSPORT AND CUSTOMS CLEARANCE
            </h1>
        </div>

        <!-- Coming Soon Content -->
        <div class="bg-white rounded-2xl card-shadow p-6 md:p-8 lg:p-12 mb-8">
            <div class="mb-8">
                <h2 class="text-3xl md:text-4xl lg:text-6xl font-bold text-bold text-black mb-6">
                    Coming <span class="text-careway-gold">Soon</span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    We're preparing comprehensive transportation and customs clearance solutions for your international trade needs. 
                    Our expert team is building something extraordinary for seamless global commerce in the UAE and beyond.
                </p>
            </div>

            <!-- Features Preview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mb-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto bg-careway-gold rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-black mb-2">Customs Clearance</h3>
                    <p class="text-gray-600 text-sm">Expert documentation and clearance</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto bg-careway-gold rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-black mb-2">Logistics Solutions</h3>
                    <p class="text-gray-600 text-sm">End-to-end supply chain management</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto bg-careway-gold rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m-6 3l6-3"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-black mb-2">Global Shipping</h3>
                    <p class="text-gray-600 text-sm">Worldwide transportation services</p>
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
                    Need transportation or customs services? Contact us:
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
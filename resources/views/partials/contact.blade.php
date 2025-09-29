{{-- Location & Map Section --}}
<section class="relative py-20 bg-gradient-to-br from-slate-50 to-slate-100 overflow-hidden">
    {{-- Background Elements --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 right-10 w-72 h-72 bg-amber-200/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-16 w-96 h-96 bg-orange-200/15 rounded-full blur-3xl"></div>
        {{-- Grid Pattern --}}
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23f59e0b" fill-opacity="0.03"%3E%3Cpath d="m36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500/10 to-orange-500/10 border border-amber-500/20 text-amber-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                Find Our Location
            </div>
            
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                Visit Our 
                <span class="bg-gradient-to-r from-amber-500 via-amber-600 to-orange-600 bg-clip-text text-transparent">
                    Garage
                </span>
            </h2>
            
            <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                Located in the heart of Nairobi, we're easily accessible and ready to serve all your automotive needs with professional care and expertise.
            </p>
        </div>

        {{-- Location Content --}}
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            {{-- Contact Information --}}
            <div class="space-y-8">
              {{-- Address Card --}}
<div class="bg-white rounded-2xl shadow-xl border border-slate-200/50 p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
    <div class="flex items-start gap-4">
        <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-500 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div>
            <h3 class="text-xl font-bold text-slate-900 mb-2">Our Address</h3>
            <p class="text-slate-600 leading-relaxed mb-4">
                Thika Road, Opposite Roasters Hotel<br>
                Nairobi County<br>
                Kenya
            </p>
            <a href="https://www.google.com/maps/dir/?api=1&destination=-1.233830124885616,36.87070541804251" 
               target="_blank" 
               class="inline-flex items-center gap-2 text-amber-600 hover:text-amber-700 font-medium transition-colors group">
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                Get Directions
            </a>
        </div>
    </div>
</div>

                {{-- Contact Details --}}
                <div class="grid sm:grid-cols-2 gap-6">
                    {{-- Phone --}}
                    <div class="bg-white rounded-2xl shadow-lg border border-slate-200/50 p-6 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Call Us</h4>
                                <a href="tel:+254710442339" class="text-slate-600 hover:text-blue-600 transition-colors">
                                    +254 710 442339
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="bg-white rounded-2xl shadow-lg border border-slate-200/50 p-6 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-green-500/10 rounded-lg flex items-center justify-center group-hover:bg-green-500/20 transition-colors">
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Email Us</h4>
                                <a href="mailto:info@boldbeyond.co.ke" class="text-slate-600 hover:text-green-600 transition-colors">
                                    info@boldbeyond.co.ke
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Business Hours --}}
                <div class="bg-gradient-to-br from-slate-800 to-slate-900 rounded-2xl shadow-xl p-8 text-white">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-amber-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Business Hours</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-slate-700/50">
                            <span class="text-slate-300">Monday - Friday</span>
                            <span class="font-medium text-amber-400">8:00 AM - 7:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-slate-700/50">
                            <span class="text-slate-300">Saturday</span>
                            <span class="font-medium text-amber-400">8:30 AM - 6:30 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-300">Sunday</span>
                            <span class="font-medium text-red-400">Closed</span>
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-amber-500/10 border border-amber-500/20 rounded-xl">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-amber-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <p class="text-amber-200 font-medium mb-1">24/7 Emergency Service Available</p>
                                <p class="text-slate-300 text-sm">Call us anytime for urgent automotive assistance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          {{-- Map Container with Fixed Coordinates --}}
<div class="space-y-6">
    {{-- Interactive Map with Correct Location --}}
    <div class="bg-white rounded-2xl shadow-xl border border-slate-200/50 overflow-hidden">
        <div class="p-6 bg-gradient-to-r from-slate-50 to-slate-100 border-b border-slate-200">
            <h3 class="text-xl font-bold text-slate-900 mb-2">Find Us on Map</h3>
            <p class="text-slate-600">Explore our exact location and get directions to our garage</p>
        </div>
        
        <div class="relative">
            {{-- Simple Embedded Google Map with Exact Coordinates --}}
            <div id="garage-map" class="w-full h-96 relative overflow-hidden rounded-b-2xl">
                <iframe 
                    src="https://maps.google.com/maps?q=-1.233830124885616,36.87070541804251&hl=en&z=16&output=embed"
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Bold Beyond Auto Garage Location"
                    class="w-full h-full">
                </iframe>
            </div>

            {{-- Map Action Buttons --}}
            <div class="absolute top-4 right-4 flex flex-col gap-2 z-30">
                <a href="https://www.google.com/maps/dir/?api=1&destination=-1.233830124885616,36.87070541804251" 
                   target="_blank"
                   title="Get Directions"
                   class="group w-12 h-12 bg-white hover:bg-amber-50 shadow-lg rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-105 border border-amber-200/50">
                    <svg class="w-5 h-5 text-amber-600 group-hover:text-amber-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </a>
                
                <a href="https://www.google.com/maps?q=-1.233830124885616,36.87070541804251" 
                   target="_blank"
                   title="Open in Google Maps"
                   class="group w-12 h-12 bg-white hover:bg-slate-50 shadow-lg rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-105">
                    <svg class="w-5 h-5 text-slate-600 group-hover:text-slate-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
            </div>

            {{-- Enhanced Location Info Overlay --}}
            <div class="absolute bottom-4 left-4 right-16 z-30">
                <div class="bg-white/95 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-white/50">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-gradient-to-br from-amber-500 to-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-semibold text-slate-900 text-sm truncate">Bold Beyond Auto Garage</h4>
                            <p class="text-xs text-slate-600 mt-1">Professional automotive services</p>
                            <p class="text-xs text-slate-500 mt-1">📍 Nairobi, Kenya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Actions with Correct Coordinates --}}
    <div class="grid sm:grid-cols-2 gap-4">
        <a href="https://www.google.com/maps/dir/?api=1&destination=-1.233830124885616,36.87070541804251" 
           target="_blank"
           class="group flex items-center gap-3 p-4 bg-blue-500 hover:bg-blue-600 text-white rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg">
            <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
            </svg>
            <div>
                <div class="font-semibold">Google Maps</div>
                <div class="text-sm text-blue-100">Get Directions</div>
            </div>
        </a>

        <a href="tel:+254710442339" 
           class="group flex items-center gap-3 p-4 bg-green-500 hover:bg-green-600 text-white rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg">
            <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            <div>
                <div class="font-semibold">Call Now</div>
                <div class="text-sm text-green-100">+254 710 442339</div>
            </div>
        </a>
    </div>
</div>




        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Exact coordinates for Bold Beyond Auto Garage
    const GARAGE_LAT = -1.233830124885616;
    const GARAGE_LNG = 36.87070541804251;

    // Verify iframe is loaded
    const iframe = document.querySelector('#garage-map iframe');
    if (iframe) {
        iframe.addEventListener('load', function() {
            console.log('Map loaded successfully at coordinates:', GARAGE_LAT, GARAGE_LNG);
        });
    }

    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const targetElement = document.querySelector(href);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Public API for external use
    window.BoldBeyondGarage = {
        coordinates: {
            lat: GARAGE_LAT,
            lng: GARAGE_LNG
        },
        openDirections: function() {
            window.open(`https://www.google.com/maps/dir/?api=1&destination=${GARAGE_LAT},${GARAGE_LNG}`, '_blank');
        },
        openInMaps: function() {
            window.open(`https://www.google.com/maps?q=${GARAGE_LAT},${GARAGE_LNG}`, '_blank');
        }
    };
});
</script>


{{-- Google Maps API (uncomment and add your API key) --}}
{{-- 
<script async defer 
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initializeMap">
</script> 
--}}





<style>
    /* Fullscreen map styles */
    .fullscreen-map {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        z-index: 9999 !important;
        border-radius: 0 !important;
    }

    .fullscreen-map iframe {
        width: 100vw !important;
        height: 100vh !important;
    }

    /* Loading animation */
    @keyframes mapPulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    #map-loading .animate-pulse {
        animation: mapPulse 2s infinite;
    }

    /* Map visibility animation */
    .map-visible {
        animation: fadeInUp 0.6s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        #garage-map {
            height: 300px;
        }
        
        .absolute.bottom-4.left-4.right-16 {
            left: 1rem;
            right: 1rem;
            bottom: 1rem;
        }
        
        .absolute.top-4.right-4 {
            top: 1rem;
            right: 1rem;
            flex-direction: row;
            gap: 0.5rem;
        }
    }

    /* Enhanced button hover effects */
    .group:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    /* Map iframe focus styles for accessibility */
    iframe:focus {
        outline: 2px solid #f59e0b;
        outline-offset: 2px;
    }
</style>
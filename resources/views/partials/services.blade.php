{{-- Services Section with Background Image Overlay --}}
<section class="relative py-20 overflow-hidden">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0">
        {{-- Replace with your actual garage/automotive background image --}}
        <div class="absolute inset-0 bg-gradient-to-br from-slate-800 via-slate-900 to-navy-900"
             style="background-image: url('https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); 
                    background-size: cover; 
                    background-position: center; 
                    background-attachment: fixed;">
        </div>
        
        {{-- Navy Blue Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900/85 via-blue-900/90 to-navy-900/95"></div>
        
        {{-- Pattern Overlay --}}
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <defs>
                    <pattern id="service-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1" fill="currentColor" opacity="0.3"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#service-pattern)" class="text-white"/>
            </svg>
        </div>
        
        {{-- Floating Elements --}}
        <div class="absolute top-20 left-10 w-32 h-32 bg-amber-400/10 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-32 right-16 w-48 h-48 bg-blue-400/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-amber-300/15 rounded-full blur-xl animate-pulse" style="animation-delay: 4s;"></div>
    </div>

    {{-- Content --}}
    <div class="container mx-auto px-4 relative z-10">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-amber-500/20 border border-amber-400/30 text-amber-300 px-6 py-3 rounded-full text-sm font-medium mb-8 backdrop-blur-sm">
                <svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Professional Automotive Services
            </div>
            
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Our Expert
                <span class="bg-gradient-to-r from-amber-400 via-amber-500 to-orange-400 bg-clip-text text-transparent block">
                    Services
                </span>
            </h2>
            
            <p class="text-xl text-blue-100/80 max-w-3xl mx-auto leading-relaxed">
                From routine maintenance to complex repairs, we provide comprehensive automotive solutions with cutting-edge technology and certified expertise.
            </p>
        </div>

        {{-- Services Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            {{-- Engine Repair & Maintenance --}}
            <div class="group">
                <div class="relative bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
                    <div class="absolute -top-6 left-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="pt-8">
                        <h3 class="text-xl font-bold text-white mb-4">Engine Repair & Maintenance</h3>
                        <p class="text-blue-100/70 mb-6 leading-relaxed">
                            Complete engine diagnostics, repairs, and preventive maintenance to keep your vehicle running smoothly and efficiently.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Engine diagnostics & troubleshooting
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Oil changes & filter replacements
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Timing belt & chain services
                            </li>
                        </ul>
                    </div>
                    
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-red-500 to-red-600 rounded-b-2xl transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
            </div>

            {{-- Brake System Services --}}
            <div class="group">
                <div class="relative bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
                    <div class="absolute -top-6 left-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="pt-8">
                        <h3 class="text-xl font-bold text-white mb-4">Brake System Services</h3>
                        <p class="text-blue-100/70 mb-6 leading-relaxed">
                            Expert brake repairs and maintenance to ensure your safety on the road with reliable stopping power.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Brake pad & disc replacement
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Brake fluid changes
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                ABS system diagnostics
                            </li>
                        </ul>
                    </div>
                    
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-orange-500 to-orange-600 rounded-b-2xl transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
            </div>

            {{-- Electrical Systems --}}
            <div class="group">
                <div class="relative bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
                    <div class="absolute -top-6 left-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="pt-8">
                        <h3 class="text-xl font-bold text-white mb-4">Electrical Systems</h3>
                        <p class="text-blue-100/70 mb-6 leading-relaxed">
                            Advanced electrical diagnostics and repairs for all modern vehicle electronic systems and components.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Battery & alternator testing
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Starter motor repairs
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Wiring & lighting systems
                            </li>
                        </ul>
                    </div>
                    
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-blue-600 rounded-b-2xl transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
            </div>

            {{-- Transmission Services --}}
            <div class="group">
                <div class="relative bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
                    <div class="absolute -top-6 left-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="pt-8">
                        <h3 class="text-xl font-bold text-white mb-4">Transmission Services</h3>
                        <p class="text-blue-100/70 mb-6 leading-relaxed">
                            Professional transmission repairs and maintenance for both manual and automatic systems.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Transmission fluid service
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Clutch repairs & replacement
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Automatic transmission repair
                            </li>
                        </ul>
                    </div>
                    
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-green-500 to-green-600 rounded-b-2xl transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
            </div>

            {{-- AC & Heating --}}
            <div class="group">
                <div class="relative bg-white/10 backdrop-blur-lg border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:scale-105">
                    <div class="absolute -top-6 left-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4 4 4 0 004-4V5z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="pt-8">
                        <h3 class="text-xl font-bold text-white mb-4">AC & Heating Systems</h3>
                        <p class="text-blue-100/70 mb-6 leading-relaxed">
                            Climate control system repairs and maintenance to ensure comfort in all weather conditions.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                AC system recharge
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Compressor repairs
                            </li>
                            <li class="flex items-center gap-2 text-blue-100/60 text-sm">
                                <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Heater core replacement
                            </li>
                        </ul>
                    </div>
                    
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-500 to-cyan-600 rounded-b-2xl transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
            </div>

        </div>

    </section>



    
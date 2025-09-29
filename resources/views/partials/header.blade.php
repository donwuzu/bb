{{-- Top Contact Bar --}}
<div class="bg-gradient-to-r from-slate-800 to-slate-700 text-sm py-3 px-4 border-b border-slate-600">
    <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center gap-3">
        <div class="flex flex-wrap items-center gap-6">
            <a href="tel:+254710442339" 
               class="flex items-center gap-2 text-amber-400 hover:text-amber-300 transition-colors duration-200 group">
                <div class="w-5 h-5 bg-amber-400/20 rounded-full flex items-center justify-center group-hover:bg-amber-300/30 transition-colors">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
                <span class="font-medium">+254 710 442 339</span>
            </a>
            
            <a href="mailto:info@boldbeyond.co.ke" 
               class="flex items-center gap-2 text-amber-400 hover:text-amber-300 transition-colors duration-200 group">
                <div class="w-5 h-5 bg-amber-400/20 rounded-full flex items-center justify-center group-hover:bg-amber-300/30 transition-colors">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                </div>
                <span class="font-medium">info@boldbeyond.co.ke</span>
            </a>
            
            <div class="hidden md:flex items-center gap-2 text-slate-300">
                <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm">Mon-Fri: 8AM-7PM | Sat: 9AM-6PM</span>
            </div>
        </div>
        
      
    </div>
</div>

{{-- Main Header --}}
<header class="sticky top-0 z-50 bg-slate-900/95 backdrop-blur-xl border-b border-amber-500/30 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            {{-- Logo --}}
            <div class="flex items-center gap-4">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-amber-500 to-orange-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-300"></div>
                    <div class="relative w-14 h-14 bg-gradient-to-br from-amber-400 via-amber-500 to-orange-500 rounded-xl flex items-center justify-center shadow-xl">
                        <svg class="w-8 h-8 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl font-bold bg-gradient-to-r from-amber-400 via-amber-500 to-orange-500 bg-clip-text text-transparent">
                        BoldBeyond
                    </h1>
                    <p class="text-xs text-slate-400 font-medium">Auto Garage & Services</p>
                </div>
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center gap-2">
                <a href="{{ url('/') }}" 
                   class="px-4 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('home') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg transform scale-105' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    Home
                </a>
                {{-- <a href="" 
                   class="px-4 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('about') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg transform scale-105' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    About
                </a> --}}
                <a href="{{ url('/services') }}" 
                   class="px-4 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('services') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg transform scale-105' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    Services
                </a>
                {{-- <a href="" 
                   class="px-4 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('repairs') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg transform scale-105' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    Repairs
                </a> --}}
                {{-- <a href="" 
                   class="px-4 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('parts') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg transform scale-105' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    Parts
                </a> --}}
                <a href="{{ url('/contact') }}" 
                   class="px-4 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('contact') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg transform scale-105' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    Contact
                </a>
            </nav>

            {{-- CTA & Mobile Menu --}}
            <div class="flex items-center gap-4">
                {{-- <a href="#" 
                   class="hidden sm:inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-400 hover:to-orange-400 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Get Quote
                </a> --}}
                
                {{-- Mobile Menu Button --}}
                <button id="mobile-menu-button" 
                        class="lg:hidden p-3 rounded-xl text-amber-400 hover:text-amber-300 hover:bg-slate-700/50 transition-all duration-300"
                        aria-expanded="false" aria-controls="mobile-menu">
                    <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="close-icon" class="hidden w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="lg:hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
            <div class="py-6 space-y-3 border-t border-slate-700">
                <a href="{{ url('/') }}" 
                   class="mobile-nav-item flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('home') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9v8a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4H9v4a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8z"/>
                    </svg>
                    Home
                </a>
                {{-- <a href="" 
                   class="mobile-nav-item flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('about') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"/>
                    </svg>
                    About Us
                </a> --}}
                <a href="{{ url('/services') }}" 
                   class="mobile-nav-item flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('services') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l3-1 3 1-.75-3M4 7h16M4 7a2 2 0 012-2h12a2 2 0 012 2M4 7v10a2 2 0 002 2h12a2 2 0 002-2V7"/>
                    </svg>
                    Services
                </a>
                {{-- <a href="" 
                   class="mobile-nav-item flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('repairs') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.24 7.76l-8.48 8.48a4 4 0 01-5.66 0l-1.06-1.06a4 4 0 010-5.66L10.5 3.5M14 7l3 3"/>
                    </svg>
                    Repairs
                </a> --}}
                {{-- <a href="" 
                   class="mobile-nav-item flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('parts') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a2 2 0 00-2-2h-5l-2-2H6a2 2 0 00-2 2v6M3 13v6a2 2 0 002 2h14a2 2 0 002-2v-6M8 21v-8"/>
                    </svg>
                    Parts
                </a> --}}
                <a href="{{ url('/contact') }}" 
                   class="mobile-nav-item flex items-center gap-3 px-4 py-3 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('contact') ? 'bg-gradient-to-r from-amber-500 to-orange-500 text-white shadow-lg' : 'text-slate-300 hover:text-white hover:bg-slate-700/50' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Contact
                </a>
                
                {{-- <div class="pt-4 mt-4 border-t border-slate-700">
                    <a href="#" 
                       class="flex items-center justify-center gap-2 w-full bg-gradient-to-r from-amber-500 to-orange-500 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:from-amber-400 hover:to-orange-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        Get Free Quote
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</header>

{{-- Enhanced JavaScript with corrected selectors --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    // Safety check - ensure all elements exist
    if (!menuButton || !mobileMenu || !hamburgerIcon || !closeIcon) {
        console.warn('Mobile menu elements not found');
        return;
    }

    // Enhanced toggle function with smooth animations
    function toggleMenu() {
        const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
        
        // Update aria-expanded attribute
        menuButton.setAttribute('aria-expanded', !isExpanded);
        
        // Animate icons with scale and rotation effects
        if (isExpanded) {
            // Closing menu
            hamburgerIcon.style.transform = 'rotate(90deg) scale(0.8)';
            closeIcon.style.transform = 'rotate(-90deg) scale(0.8)';
            
            setTimeout(() => {
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                hamburgerIcon.style.transform = 'rotate(0deg) scale(1)';
            }, 150);
            
            // Smooth close animation
            mobileMenu.style.maxHeight = '0px';
            mobileMenu.style.paddingTop = '0px';
            mobileMenu.style.paddingBottom = '0px';
            
        } else {
            // Opening menu
            closeIcon.style.transform = 'rotate(90deg) scale(0.8)';
            hamburgerIcon.style.transform = 'rotate(-90deg) scale(0.8)';
            
            setTimeout(() => {
                closeIcon.classList.remove('hidden');
                hamburgerIcon.classList.add('hidden');
                closeIcon.style.transform = 'rotate(0deg) scale(1)';
            }, 150);
            
            // Smooth open animation
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 40 + 'px'; // Extra padding
            mobileMenu.style.paddingTop = '1.5rem';
            mobileMenu.style.paddingBottom = '1.5rem';
        }
        
        // Add bounce effect to button
        menuButton.style.transform = 'scale(0.95)';
        setTimeout(() => {
            menuButton.style.transform = 'scale(1)';
        }, 150);
    }

    // Event listeners
    menuButton.addEventListener('click', toggleMenu);

    // Close menu on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && menuButton.getAttribute('aria-expanded') === 'true') {
            toggleMenu();
        }
    });

    // Enhanced click handling for mobile navigation
    mobileMenu.addEventListener('click', function(e) {
        const clickedLink = e.target.closest('a');
        if (clickedLink && window.innerWidth < 1024) { // lg breakpoint
            // Add active state animation
            clickedLink.style.transform = 'scale(0.98)';
            setTimeout(() => {
                clickedLink.style.transform = 'scale(1)';
                if (menuButton.getAttribute('aria-expanded') === 'true') {
                    toggleMenu(); // Close menu after selection
                }
            }, 100);
        }
    });

    // Smooth resize handling
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            if (window.innerWidth >= 1024) { // lg breakpoint
                // Reset mobile menu state on desktop
                mobileMenu.style.maxHeight = '';
                mobileMenu.style.paddingTop = '';
                mobileMenu.style.paddingBottom = '';
                menuButton.setAttribute('aria-expanded', 'false');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                
                // Reset icon transforms
                hamburgerIcon.style.transform = '';
                closeIcon.style.transform = '';
                menuButton.style.transform = '';
            }
        }, 250);
    });

    // Add smooth scroll behavior for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Stagger animation for mobile menu items
    function animateMobileMenuItems() {
        const mobileNavItems = document.querySelectorAll('.mobile-nav-item');
        mobileNavItems.forEach(function(item, index) {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
            
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, 100 + (index * 50));
        });
    }

    // Trigger animation when menu opens
    const originalToggle = toggleMenu;
    toggleMenu = function() {
        const wasExpanded = menuButton.getAttribute('aria-expanded') === 'true';
        originalToggle();
        
        if (!wasExpanded) {
            // Menu is opening
            setTimeout(animateMobileMenuItems, 200);
        }
    };

    // Performance optimization - throttle scroll events
    let ticking = false;
    function updateScrollPosition() {
        // Add scroll-based effects here if needed
        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateScrollPosition);
            ticking = true;
        }
    });
});
</script>

{{-- Custom CSS for additional animations --}}
<style>
    /* Navigation animations */
    #main-menu {
        transition: max-height 0.7s cubic-bezier(0.4, 0, 0.2, 1),
                   padding 0.7s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Icon transitions */
    #hamburger-icon, #close-icon {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Button hover effects */
    #mobile-menu-button {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Navigation item stagger animation for mobile */
    @media (max-width: 767px) {
        #main-menu li {
            opacity: 0;
            transform: translateY(10px);
            animation: slideInUp 0.4s ease-out forwards;
        }
        
        #main-menu li:nth-child(1) { animation-delay: 0.1s; }
        #main-menu li:nth-child(2) { animation-delay: 0.15s; }
        #main-menu li:nth-child(3) { animation-delay: 0.2s; }
        #main-menu li:nth-child(4) { animation-delay: 0.25s; }
        #main-menu li:nth-child(5) { animation-delay: 0.3s; }
        #main-menu li:nth-child(6) { animation-delay: 0.35s; }
        #main-menu li:nth-child(7) { animation-delay: 0.4s; }
        #main-menu li:nth-child(8) { animation-delay: 0.45s; }
    }
    
    /* Slide in up animation */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Fade in animation */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    /* Scale bounce animation */
    @keyframes scaleBounce {
        0% { transform: scale(1); }
        50% { transform: scale(0.95); }
        100% { transform: scale(1); }
    }
    
    /* Glow pulse animation */
    @keyframes glowPulse {
        0%, 100% { 
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
            opacity: 0.8;
        }
        50% { 
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.6);
            opacity: 1;
        }
    }
    
    /* Background gradient animation */
    @keyframes backgroundShift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    /* Floating animation for background elements */
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        33% { transform: translateY(-10px) rotate(1deg); }
        66% { transform: translateY(-5px) rotate(-1deg); }
    }
    
    /* Enhanced hover states */
    .nav-item-hover {
        position: relative;
        overflow: hidden;
    }
    
    .nav-item-hover::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(245, 158, 11, 0.1), transparent);
        transition: left 0.5s ease;
    }
    
    .nav-item-hover:hover::before {
        left: 100%;
    }
    
    /* Custom scrollbar for mobile menu */
    #main-menu::-webkit-scrollbar {
        width: 4px;
    }
    
    #main-menu::-webkit-scrollbar-track {
        background: rgba(71, 85, 105, 0.2);
        border-radius: 2px;
    }
    
    #main-menu::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #f59e0b, #d97706);
        border-radius: 2px;
    }
    
    #main-menu::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #fbbf24, #f59e0b);
    }
    
    /* Glass morphism effect */
    .glass-nav {
        background: rgba(15, 23, 42, 0.8);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(148, 163, 184, 0.1);
    }
    
    /* Active section highlight */
    .active-section {
        position: relative;
    }
    
    .active-section::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 2px;
        background: linear-gradient(to right, #f59e0b, #d97706);
        border-radius: 1px;
        animation: expandWidth 0.3s ease-out;
    }
    
    @keyframes expandWidth {
        from { width: 0; }
        to { width: 20px; }
    }
    
    /* Mobile menu backdrop */
    .mobile-menu-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 40;
    }
    
    .mobile-menu-backdrop.active {
        opacity: 1;
        visibility: visible;
    }
    
    /* Logo rotation animation */
    .logo-rotate {
        animation: slowRotate 20s linear infinite;
    }
    
    @keyframes slowRotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    /* Text gradient animation */
    .animated-gradient {
        background: linear-gradient(-45deg, #f59e0b, #d97706, #ea580c, #f59e0b);
        background-size: 400% 400%;
        animation: gradientShift 4s ease infinite;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    /* Ripple effect for buttons */
    .ripple {
        position: relative;
        overflow: hidden;
    }
    
    .ripple::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }
    
    .ripple:active::before {
        width: 300px;
        height: 300px;
    }
    
    /* Smooth focus styles */
    .focus-visible {
        outline: 2px solid #f59e0b;
        outline-offset: 2px;
        border-radius: 8px;
    }
    
    /* Prefers reduced motion */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
    
    /* High contrast mode */
    @media (prefers-contrast: high) {
        .nav-item-hover {
            border: 2px solid currentColor;
        }
        
        .glass-nav {
            background: rgba(0, 0, 0, 0.9);
            border: 2px solid #f59e0b;
        }
    }
    
    /* Dark mode preferences */
    @media (prefers-color-scheme: dark) {
        .glass-nav {
            background: rgba(15, 23, 42, 0.9);
        }
    }
    
    /* Loading state animation */
    .loading-shimmer {
        background: linear-gradient(90deg, 
            rgba(148, 163, 184, 0.1) 25%, 
            rgba(148, 163, 184, 0.3) 50%, 
            rgba(148, 163, 184, 0.1) 75%);
        background-size: 200% 100%;
        animation: shimmer 2s infinite;
    }
    
    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }
    
    /* Micro interactions */
    .micro-bounce:hover {
        animation: microBounce 0.3s ease;
    }
    
    @keyframes microBounce {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    
    /* Typography enhancements */
    .text-shadow-glow {
        text-shadow: 0 0 10px rgba(245, 158, 11, 0.5);
    }
    
    /* Border gradient animation */
    .border-gradient-animated {
        background: linear-gradient(45deg, #f59e0b, #d97706, #ea580c, #f59e0b);
        background-size: 400% 400%;
        animation: gradientBorder 3s ease infinite;
    }
    
    @keyframes gradientBorder {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    /* Particle effect background */
    .particles::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            radial-gradient(circle at 20% 80%, rgba(245, 158, 11, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(217, 119, 6, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 40%, rgba(234, 88, 12, 0.1) 0%, transparent 50%);
        animation: particleFloat 6s ease-in-out infinite alternate;
    }
    
    @keyframes particleFloat {
        0% { transform: translate(0, 0) rotate(0deg); }
        100% { transform: translate(-10px, -10px) rotate(1deg); }
    }
</style>
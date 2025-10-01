{{-- Hero Section with Advanced Carousel --}}
<section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 min-h-screen flex items-center">
    {{-- Background Effects --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0 bg-black/30"></div>
        {{-- Animated Grid Pattern --}}
        <svg class="absolute inset-0 w-full h-full opacity-5" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <defs>
                <pattern id="hero-grid" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M60 0H0V60" fill="none" stroke="currentColor" stroke-width="1" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#hero-grid)" />
        </svg>
        {{-- Floating Elements --}}
        <div class="absolute top-20 left-10 w-40 h-40 bg-amber-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-32 right-16 w-64 h-64 bg-orange-500/5 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/3 w-32 h-32 bg-amber-400/15 rounded-full blur-2xl animate-pulse" style="animation-delay: 4s;"></div>
    </div>

    {{-- Carousel Container --}}
    <div class="relative container mx-auto px-4 py-16 z-10">
        <div class="carousel-wrapper relative">
            {{-- Carousel Slides --}}
            <div class="carousel-container overflow-hidden rounded-2xl">
                <div id="carousel-track" class="carousel-track flex transition-transform duration-700 ease-in-out">
                    
                    {{-- Slide 1: Main Services --}}
                    <div class="carousel-slide w-full flex-shrink-0">
                        <div class="grid lg:grid-cols-2 gap-12 items-center min-h-[80vh] px-6">
                            {{-- Content --}}
                            <div class="order-2 lg:order-1 space-y-8 text-center lg:text-left">
                                <div class="space-y-6">
                                    {{-- <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500/20 to-orange-500/20 border border-amber-500/30 text-amber-400 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">
                                        <div class="w-2 h-2 bg-amber-400 rounded-full animate-pulse"></div>
                                        Professional Auto Care Since 2010
                                    </div> --}}
                                    
                                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-white">
                                        <span class="block">BOLD</span>
                                        <span class="bg-gradient-to-r from-amber-400 via-amber-500 to-orange-500 bg-clip-text text-transparent">BEYOND</span>
                                        <span class="block text-xl md:text-2xl lg:text-3xl font-medium text-slate-300 mt-2">Auto Garage & Services</span>
                                    </h1>
                                    
                                    <p class="text-lg md:text-xl text-slate-300 leading-relaxed max-w-2xl">
                                        Expert automotive repair and maintenance services with unmatched customer care in Thika Rd Nairobi.
                                    </p>
                                </div>

                               <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
    <a href="{{ url('/services') }}" 
       class="group inline-flex items-center justify-center gap-2 bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-full font-semibold text-base transition-colors duration-300 shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        Our Services
    </a>
</div>
                            </div>



                            {{-- Visual --}}
                         <div class="order-1 lg:order-2 relative">
    <div class="relative max-w-2xl mx-auto">
        <div class="absolute -inset-4 bg-gradient-to-r from-amber-500/20 to-orange-500/20 rounded-3xl blur-2xl"></div>
        <div class="relative bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-xl border border-slate-700/50 rounded-3xl p-2 shadow-2xl">
            <div class="aspect-square rounded-2xl flex items-center justify-center border border-amber-500/20 overflow-hidden">
                <img src="{{ asset('images/bb.jpg') }}" alt="BB Image" 
                    class="w-full h-full object-cover rounded-2xl">
            </div>
        </div>
    </div>
</div>

                            


                        </div>
                    </div>

                    {{-- Slide 2: Repair Services --}}
                    <div class="carousel-slide w-full flex-shrink-0">
                        <div class="grid lg:grid-cols-2 gap-12 items-center min-h-[80vh] px-6">
                            <div class="order-2 lg:order-1 space-y-8 text-center lg:text-left">
                                <div class="space-y-6">
                                    {{-- <div class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 border border-blue-500/30 text-blue-400 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">
                                        <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></div>
                                        Expert Repair Services
                                    </div> --}}
                                    
                                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-white">
                                        <span class="block">EXPERT</span>
                                        <span class="bg-gradient-to-r from-blue-400 via-blue-500 to-cyan-500 bg-clip-text text-transparent">REPAIRS</span>
                                        <span class="block text-xl md:text-2xl lg:text-3xl font-medium text-slate-300 mt-2">Engine to Electronics</span>
                                    </h2>
                                    
                                    <p class="text-lg md:text-xl text-slate-300 leading-relaxed max-w-2xl">
                                        From engine diagnostics to electronic systems, we handle all your automotive repair needs with precision.
                                    </p>
                                </div>

                              <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
    <a href="{{ url('/contact') }}" 
       class="group inline-flex items-center justify-center gap-2 bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-full font-semibold text-base transition-colors duration-300 shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.24 7.76l-8.48 8.48a4 4 0 01-5.66 0l-1.06-1.06a4 4 0 010-5.66L10.5 3.5M14 7l3 3"/>
        </svg>
        Contact Us
    </a>
</div>
                            </div>



                            <div class="order-1 lg:order-2 relative">
    <div class="relative max-w-2xl mx-auto">
        <div class="absolute -inset-4 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-3xl blur-2xl"></div>
        <div class="relative bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-xl border border-slate-700/50 rounded-3xl p-2 shadow-2xl">
            <div class="aspect-square rounded-2xl flex items-center justify-center border border-amber-500/20 overflow-hidden">
                <img src="{{ asset('images/autel.jpg') }}" alt="BB Image" 
                    class="w-full h-full object-cover rounded-2xl">
            </div>
        </div>
    </div>
</div>



                        </div>
                    </div>

                    {{-- Slide 3: Parts & Accessories --}}
                    <div class="carousel-slide w-full flex-shrink-0">
                        <div class="grid lg:grid-cols-2 gap-12 items-center min-h-[80vh] px-6">
                            <div class="order-2 lg:order-1 space-y-8 text-center lg:text-left">
                                <div class="space-y-6">
                                    {{-- <div class="inline-flex items-center gap-2 bg-gradient-to-r from-green-500/20 to-emerald-500/20 border border-green-500/30 text-green-400 px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">
                                        <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                                        Quality Parts & Accessories
                                    </div> --}}
                                    
                                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-white">
                                        <span class="block">GENUINE</span>
                                        <span class="bg-gradient-to-r from-green-400 via-green-500 to-emerald-500 bg-clip-text text-transparent">PARTS</span>
                                    </h2>
                                    
                                    <p class="text-lg md:text-xl text-slate-300 leading-relaxed max-w-2xl">
                                        Premium automotive parts and accessories. Everything you need to keep your vehicle running at its best.
                                    </p>
                                </div>

                            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
    <a href="{{ url('/services') }}" 
       class="group inline-flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full font-semibold text-base transition-colors duration-300 shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        Our Services
    </a>
</div>


                            </div>



                          <div class="order-1 lg:order-2 relative">
    <div class="relative max-w-2xl mx-auto">
        <div class="absolute -inset-4 bg-gradient-to-r from-green-500/20 to-emerald-500/20 rounded-3xl blur-2xl"></div>
        <div class="relative bg-gradient-to-br from-slate-800/80 to-slate-900/80 backdrop-blur-xl border border-slate-700/50 rounded-3xl p-2 shadow-2xl">
            <div class="aspect-square rounded-2xl flex items-center justify-center border border-amber-500/20 overflow-hidden">
                <img src="{{ asset('images/acgas.jpg') }}" alt="BB Image" 
                    class="w-full h-full object-cover rounded-2xl">
            </div>
        </div>
    </div>
</div>



                        </div>
                    </div>
                </div>
            </div>
<br><br><br><br><br><br>
            {{-- Carousel Navigation --}}
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex items-center gap-4 z-20">
                {{-- Previous Button --}}
                <button id="prev-btn" 
                        class="group p-3 bg-slate-800/80 hover:bg-slate-700/80 border border-slate-600/50 rounded-full transition-all duration-300 hover:scale-110 backdrop-blur-sm"
                        aria-label="Previous slide">
                    <svg class="w-5 h-5 text-white group-hover:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                {{-- Dots Indicator --}}
                <div class="flex items-center gap-2" id="carousel-dots">
                    <button class="carousel-dot w-3 h-3 rounded-full bg-amber-500 transition-all duration-300" data-slide="0" aria-label="Go to slide 1"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-slate-500 hover:bg-slate-400 transition-all duration-300" data-slide="1" aria-label="Go to slide 2"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-slate-500 hover:bg-slate-400 transition-all duration-300" data-slide="2" aria-label="Go to slide 3"></button>
                </div>

                {{-- Next Button --}}
                <button id="next-btn" 
                        class="group p-3 bg-slate-800/80 hover:bg-slate-700/80 border border-slate-600/50 rounded-full transition-all duration-300 hover:scale-110 backdrop-blur-sm"
                        aria-label="Next slide">
                    <svg class="w-5 h-5 text-white group-hover:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>

            {{-- Progress Bar --}}
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-slate-700/50">
                <div id="progress-bar" class="h-full bg-gradient-to-r from-amber-500 to-orange-500 transition-all duration-300 ease-out" style="width: 33.33%"></div>
            </div>
        </div>

        {{-- Trust Indicators --}}
        <div class="mt-16 grid grid-cols-3 gap-6 pt-8 border-t border-slate-700/50">
            {{-- <div class="text-center group cursor-pointer">
                <div class="text-3xl lg:text-4xl font-bold bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent mb-2 group-hover:scale-110 transition-transform">
                    500+
                </div>
                <div class="text-sm text-slate-400 font-medium">Happy Customers</div>
            </div> --}}
            {{-- <div class="text-center group cursor-pointer">
                <div class="text-3xl lg:text-4xl font-bold bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent mb-2 group-hover:scale-110 transition-transform">
                    15+
                </div>
                <div class="text-sm text-slate-400 font-medium">Years Experience</div>
            </div> --}}
            <div class="text-center group cursor-pointer">
                <div class="text-3xl lg:text-4xl font-bold bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent mb-2 group-hover:scale-110 transition-transform">
                    24/7
                </div>
                <div class="text-sm text-slate-400 font-medium">Emergency Support</div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('carousel-track');
    const slides = track.querySelectorAll('.carousel-slide');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dots = document.querySelectorAll('.carousel-dot');
    const progressBar = document.getElementById('progress-bar');
    
    let currentSlide = 0;
    let totalSlides = slides.length;
    let isTransitioning = false;
    let autoSlideInterval;
    let startX = 0;
    let startY = 0;
    let currentX = 0;
    let isDragging = false;
    let isHorizontalSwipe = false; 
    let hasUserInteracted = false;

    // Initialize carousel
    function init() {
        if (!track || slides.length === 0) {
            console.warn('Carousel elements not found');
            return;
        }
        
        updateCarousel(0);
        startAutoSlide();
        addEventListeners();
    }

    // Update carousel position and indicators
    function updateCarousel(slideIndex, animate = true) {
        if (isTransitioning) return;
        
        isTransitioning = true;
        currentSlide = slideIndex;
        
        // Ensure slideIndex is within bounds
        if (slideIndex < 0) slideIndex = totalSlides - 1;
        if (slideIndex >= totalSlides) slideIndex = 0;
        currentSlide = slideIndex;
        
        // Update transform with smooth transition
        const translateX = -slideIndex * 100;
        track.style.transform = `translateX(${translateX}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.remove('bg-amber-500', 'scale-125');
            dot.classList.add('bg-slate-500');
            
            if (index === slideIndex) {
                dot.classList.remove('bg-slate-500');
                dot.classList.add('bg-amber-500', 'scale-125');
            }
        });
        
        // Update progress bar
        const progress = ((slideIndex + 1) / totalSlides) * 100;
        progressBar.style.width = `${progress}%`;
        
        // Add slide-specific gradient to progress bar
        const gradients = [
            'from-amber-500 to-orange-500',
            'from-blue-500 to-cyan-500', 
            'from-green-500 to-emerald-500'
        ];
        
        progressBar.className = `h-full bg-gradient-to-r ${gradients[slideIndex]} transition-all duration-300 ease-out`;
        
        // Reset transition flag
        setTimeout(() => {
            isTransitioning = false;
        }, 700);
        
        // Trigger slide change animations
        animateSlideContent(slideIndex);
    }

    // Animate slide content when changing
    function animateSlideContent(slideIndex) {
        const currentSlideElement = slides[slideIndex];
        const content = currentSlideElement.querySelector('.space-y-8');
        const visual = currentSlideElement.querySelector('.relative.max-w-lg');
        
        if (content) {
            content.style.opacity = '0';
            content.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                content.style.transition = 'all 0.6s ease-out';
                content.style.opacity = '1';
                content.style.transform = 'translateY(0)';
            }, 100);
        }
        
        if (visual) {
            visual.style.opacity = '0';
            visual.style.transform = 'translateX(30px)';
            
            setTimeout(() => {
                visual.style.transition = 'all 0.6s ease-out 0.2s';
                visual.style.opacity = '1';
                visual.style.transform = 'translateX(0)';
            }, 100);
        }
    }

    // Navigate to next slide
    function nextSlide() {
        const next = (currentSlide + 1) % totalSlides;
        updateCarousel(next);
    }

    // Navigate to previous slide
    function prevSlide() {
        const prev = (currentSlide - 1 + totalSlides) % totalSlides;
        updateCarousel(prev);
    }

    // Auto slide functionality
    function startAutoSlide() {
        // Only start auto-slide after initial load, and pause if user has interacted recently
        autoSlideInterval = setInterval(() => {
            if (!isDragging && !hasUserInteracted) {
                nextSlide();
            }
            // Reset user interaction flag after some time
            if (hasUserInteracted) {
                setTimeout(() => {
                    hasUserInteracted = false;
                }, 10000); // Resume auto-slide after 10 seconds of no interaction
            }
        }, 6000); // 6 seconds per slide
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    function resetAutoSlide() {
        stopAutoSlide();
        hasUserInteracted = true;
        setTimeout(startAutoSlide, 1000);
    }

    // Touch/Mouse drag functionality
   function handleStart(e) {
    isDragging = true;
    startX = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
    startY = e.type === 'mousedown' ? e.clientY : e.touches[0].clientY;
    isHorizontalSwipe = false;
    stopAutoSlide();
    track.style.cursor = 'grabbing';
    track.style.userSelect = 'none';
    hasUserInteracted = true;
}

 // Update handleMove function
function handleMove(e) {
    if (!isDragging) return;
    
    currentX = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
    const currentY = e.type === 'mousemove' ? e.clientY : e.touches[0].clientY;
    const deltaX = currentX - startX;
    const deltaY = currentY - startY;
    
    // Determine swipe direction on first significant movement
    if (!isHorizontalSwipe && (Math.abs(deltaX) > 5 || Math.abs(deltaY) > 5)) {
        if (Math.abs(deltaX) > Math.abs(deltaY)) {
            isHorizontalSwipe = true;
        } else {
            // It's a vertical scroll, release control immediately
            isDragging = false;
            track.style.cursor = '';
            track.style.userSelect = '';
            return; // Exit early to allow vertical scroll
        }
    }
    
    // Only handle carousel drag if confirmed horizontal swipe
    if (isHorizontalSwipe) {
        e.preventDefault();
        
        const resistance = Math.abs(deltaX) > 100 ? 0.5 : 0.8;
        const dragOffset = (deltaX * resistance) / track.offsetWidth * 100;
        
        track.style.transform = `translateX(${-currentSlide * 100 + dragOffset}%)`;
    }
}

    function handleEnd() {
        if (!isDragging) return;
        
        isDragging = false;
        track.style.cursor = 'grab';
        track.style.userSelect = '';
        
        const deltaX = currentX - startX;
        const threshold = 80; // Minimum drag distance to trigger slide change
        
        if (Math.abs(deltaX) > threshold) {
            if (deltaX > 0) {
                prevSlide();
            } else {
                nextSlide();
            }
        } else {
            // Snap back to current slide
            updateCarousel(currentSlide);
        }
        
        resetAutoSlide();
    }

    // Keyboard navigation
    function handleKeyDown(e) {
        if (e.key === 'ArrowLeft') {
            e.preventDefault();
            prevSlide();
            resetAutoSlide();
        } else if (e.key === 'ArrowRight') {
            e.preventDefault();
            nextSlide();
            resetAutoSlide();
        }
    }

   
  // Add all event listeners
function addEventListeners() {
    // Button navigation
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            resetAutoSlide();
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            resetAutoSlide();
        });
    }
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            updateCarousel(index);
            resetAutoSlide();
        });
    });
    
    // Touch events for mobile
    track.addEventListener('touchstart', handleStart, { passive: true });
    track.addEventListener('touchmove', handleMove, { passive: false });
    track.addEventListener('touchend', handleEnd);
    
    // Mouse events for desktop
    track.addEventListener('mousedown', handleStart);
    track.addEventListener('mousemove', handleMove);
    track.addEventListener('mouseup', handleEnd);
    track.addEventListener('mouseleave', handleEnd);
    
    // Prevent context menu on long press
    track.addEventListener('contextmenu', (e) => e.preventDefault());
    
    // Keyboard navigation
    document.addEventListener('keydown', handleKeyDown);
    
    // Pause auto-slide when page is not visible
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAutoSlide();
        } else {
            startAutoSlide();
        }
    });
    
    // Pause on hover (desktop only)
    if (!('ontouchstart' in window)) {
        track.addEventListener('mouseenter', stopAutoSlide);
        track.addEventListener('mouseleave', () => {
            if (!hasUserInteracted) {
                startAutoSlide();
            }
        });
    }
    
    // Handle window resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            updateCarousel(currentSlide, false);
        }, 250);
    });
    
    // Intersection Observer for performance
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (!autoSlideInterval) startAutoSlide();
                } else {
                    stopAutoSlide();
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(track.parentElement);
    }
}

    // Handle smooth scrolling for anchor links in carousel
    function setupSmoothScrolling() {
        const links = track.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Initialize everything
    init();
    setupSmoothScrolling();

    // Expose some methods globally for external control if needed
    window.carouselController = {
        next: nextSlide,
        prev: prevSlide,
        goTo: (index) => updateCarousel(index),
        pause: stopAutoSlide,
        resume: startAutoSlide,
        getCurrentSlide: () => currentSlide
    };

    // Enhanced error handling
    window.addEventListener('error', (e) => {
        if (e.target === track) {
            console.error('Carousel error:', e);
            // Fallback: show first slide
            updateCarousel(0, false);
        }
    });
});

/// CSS-in-JS for additional styling that might be needed
const style = document.createElement('style');
style.textContent = `
    .carousel-track {
        will-change: transform;
        backface-visibility: hidden;
        perspective: 1000px;
    }
    
    .carousel-slide {
        backface-visibility: hidden;
        will-change: transform;
    }
    
    /* Allow vertical scrolling through carousel */
    .carousel-slide * {
        pointer-events: auto;
    }
    
    /* Don't let links and buttons block carousel swipe detection */
    .carousel-slide a,
    .carousel-slide button {
        touch-action: auto;
    }
    
    @media (prefers-reduced-motion: reduce) {
        .carousel-track {
            transition: none !important;
        }
        
        .carousel-slide * {
            animation: none !important;
            transition: none !important;
        }
    }
    
    /* Improve touch performance on mobile - CRITICAL FIX */
    .carousel-container {
        touch-action: manipulation;
        -webkit-overflow-scrolling: touch;
    }
    
    .carousel-track {
        touch-action: pan-y pinch-zoom;
    }
    
    /* Better focus states for accessibility */
    .carousel-dot:focus,
    #prev-btn:focus,
    #next-btn:focus {
        outline: 2px solid #f59e0b;
        outline-offset: 2px;
    }
`;

document.head.appendChild(style);



</script>
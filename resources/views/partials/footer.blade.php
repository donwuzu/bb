<footer class="bg-gray-900 text-gray-300 pt-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 pb-12">
            
            <!-- Brand -->
            <div>
                <h3 class="text-2xl font-bold text-white mb-4">BOLD BEYOND</h3>
                <p class="text-sm leading-relaxed">
                    Professional automotive care and repair services. Your trusted partner for all vehicle maintenance needs.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-amber-500 transition">Home</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">About Us</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">Services</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Our Services</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-amber-500 transition">Vehicle Diagnostics</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">Engine Repair</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">Oil Changes</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">Brake Services</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Contact Us</h3>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt text-amber-500 mr-3"></i>
                        <span>Nairobi, Kenya</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone-alt text-amber-500 mr-3"></i>
                        <a href="tel:+254710442339" class="hover:text-amber-500 transition">+254 710 442339</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-amber-500 mr-3"></i>
                        <a href="mailto:info@boldbeyond.co.ke" class="hover:text-amber-500 transition">info@boldbeyond.co.ke</a>
                    </li>
                </ul>

                <!-- Social Icons -->
                <div class="flex space-x-4 mt-6">
                    <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-amber-500 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-amber-500 transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-amber-500 transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-amber-500 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-700 pt-6 pb-8 text-center text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} <span class="font-semibold text-white">Bold Beyond Auto Garage</span>. All rights reserved.</p>
        </div>
    </div>

    {{-- WhatsApp Floating Button --}}
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/254710442339?text=Hello%20Bold%20Beyond%20Auto%20Garage,%20I%20would%20like%20to%20inquire%20about%20your%20services" 
           target="_blank"
           rel="noopener noreferrer"
           class="whatsapp-float group flex items-center gap-3 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-2xl transition-all duration-300 hover:scale-110"
           aria-label="Chat on WhatsApp">
            
            {{-- Icon and Text Container --}}
            <div class="flex items-center gap-3 px-5 py-4">
                {{-- WhatsApp Icon --}}
                <svg class="w-7 h-7 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.521.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.521-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                
                {{-- Text (hidden on mobile) --}}
                <span class="hidden sm:block font-semibold whitespace-nowrap">Chat with us</span>
            </div>
            
            {{-- Notification Badge --}}
            <div class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full animate-pulse"></div>
        </a>
    </div>
</footer>

<style>
/* WhatsApp Button Glow Effect */
.whatsapp-float {
    animation: whatsapp-pulse 2s infinite;
}

.whatsapp-float::before {
    content: '';
    position: absolute;
    inset: -4px;
    background: linear-gradient(45deg, #25D366, #128C7E, #25D366);
    border-radius: 9999px;
    opacity: 0;
    z-index: -1;
    animation: glow-pulse 2s infinite;
    filter: blur(10px);
}

.whatsapp-float:hover::before {
    opacity: 0.8;
    animation: glow-pulse-hover 1s infinite;
}

@keyframes whatsapp-pulse {
    0%, 100% {
        box-shadow: 0 0 20px rgba(37, 211, 102, 0.5),
                    0 0 40px rgba(37, 211, 102, 0.3),
                    0 0 60px rgba(37, 211, 102, 0.2);
    }
    50% {
        box-shadow: 0 0 30px rgba(37, 211, 102, 0.6),
                    0 0 50px rgba(37, 211, 102, 0.4),
                    0 0 70px rgba(37, 211, 102, 0.3);
    }
}

@keyframes glow-pulse {
    0%, 100% {
        opacity: 0.3;
        transform: scale(1);
    }
    50% {
        opacity: 0.5;
        transform: scale(1.05);
    }
}

@keyframes glow-pulse-hover {
    0%, 100% {
        opacity: 0.6;
        transform: scale(1.05);
    }
    50% {
        opacity: 0.8;
        transform: scale(1.1);
    }
}

/* Smooth entrance animation */
@keyframes slideInRight {
    from {
        transform: translateX(100px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.whatsapp-float {
    animation: slideInRight 0.5s ease-out, whatsapp-pulse 2s infinite 0.5s;
}

/* Mobile optimizations */
@media (max-width: 640px) {
    .whatsapp-float > div {
        padding: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const whatsappBtn = document.querySelector('.whatsapp-float');
    
    // Track click for analytics (optional)
    if (whatsappBtn) {
        whatsappBtn.addEventListener('click', function() {
            console.log('WhatsApp button clicked - Bold Beyond Auto Garage');
        });
    }
});
</script>
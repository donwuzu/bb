<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a365d',
                        secondary: '#2c5282',
                        accent: '#d69e2e',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-primary text-white shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="bg-white p-2 rounded-lg">
                        <span class="text-primary font-bold text-2xl">BB</span>
                    </div>
                    <div class="ml-3">
                        <h1 class="text-xl font-bold">BOLDBEYOND</h1>
                        <p class="text-sm text-gray-300">Kenya</p>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-6 text-sm">
                    <div class="flex items-center">
                        <i class="fas fa-phone-alt mr-2 text-accent"></i>
                        <span>+254 722 123456</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope mr-2 text-accent"></i>
                        <span>info@pinnaclesystemskenya.net</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="bg-secondary">
            <div class="container mx-auto px-4">
                <div class="md:hidden py-3 flex justify-between items-center">
                    <span class="font-medium">Menu</span>
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
                
                <ul id="menu" class="hidden md:flex flex-col md:flex-row md:space-x-2 py-2">
                    <li><a href="#" class="block py-2 px-4 hover:bg-primary rounded transition">Home</a></li>
                    <li><a href="#" class="block py-2 px-4 hover:bg-primary rounded transition">About Us</a></li>
                    <li><a href="#" class="block py-2 px-4 hover:bg-primary rounded transition">Services</a></li>
                    <li><a href="#" class="block py-2 px-4 hover:bg-primary rounded transition">Products</a></li>
                    <li><a href="#" class="block py-2 px-4 hover:bg-primary rounded transition">Solutions</a></li>
                    <li><a href="#" class="block py-2 px-4 hover:bg-primary rounded transition">Support</a></li>
                    <li><a href="#" class="block py-2 px-4 hover:bg-primary rounded transition">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary to-secondary text-white py-16 md:py-24">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-4">IT Solutions for Your Business</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">We provide cutting-edge technology solutions to drive your business forward</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="bg-accent hover:bg-yellow-600 px-6 py-3 rounded-lg font-medium transition">Our Services</a>
                <a href="#" class="bg-transparent border-2 border-white hover:bg-white hover:text-primary px-6 py-3 rounded-lg font-medium transition">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-primary">Our Services</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-gray-50 rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <div class="text-4xl text-accent mb-4">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">IT Infrastructure</h3>
                    <p class="text-gray-600">We design, implement and maintain robust IT infrastructure solutions for businesses of all sizes.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-gray-50 rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <div class="text-4xl text-accent mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Cyber Security</h3>
                    <p class="text-gray-600">Protect your business from cyber threats with our comprehensive security solutions.</p>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-gray-50 rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <div class="text-4xl text-accent mb-4">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Cloud Services</h3>
                    <p class="text-gray-600">Migrate to the cloud with our expert guidance and managed cloud services.</p>
                </div>
                
                <!-- Service 4 -->
                <div class="bg-gray-50 rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <div class="text-4xl text-accent mb-4">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Networking</h3>
                    <p class="text-gray-600">Design and implementation of secure and reliable network infrastructure.</p>
                </div>
                
                <!-- Service 5 -->
                <div class="bg-gray-50 rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <div class="text-4xl text-accent mb-4">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Software Development</h3>
                    <p class="text-gray-600">Custom software solutions tailored to your specific business needs.</p>
                </div>
                
                <!-- Service 6 -->
                <div class="bg-gray-50 rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <div class="text-4xl text-accent mb-4">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">IT Support</h3>
                    <p class="text-gray-600">24/7 expert IT support to keep your systems running smoothly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold text-primary mb-4">About Pinnacle Systems Kenya</h2>
                    <p class="text-gray-600 mb-4">
                        Pinnacle Systems Kenya is a leading provider of innovative IT solutions and services. 
                        With years of experience in the industry, we have established ourselves as a trusted 
                        partner for businesses seeking to leverage technology for growth.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Our team of certified professionals is dedicated to delivering exceptional service 
                        and cutting-edge solutions tailored to meet your specific business requirements.
                    </p>
                    <a href="#" class="bg-primary hover:bg-blue-900 text-white px-6 py-3 rounded-lg font-medium transition">Learn More</a>
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         alt="Our Team" class="rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-primary">Our Clients</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                <div class="flex justify-center">
                    <div class="h-16 w-16 md:h-24 md:w-24 bg-gray-200 rounded-full flex items-center justify-center">
                        <span class="font-bold text-gray-500">Client 1</span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="h-16 w-16 md:h-24 md:w-24 bg-gray-200 rounded-full flex items-center justify-center">
                        <span class="font-bold text-gray-500">Client 2</span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="h-16 w-16 md:h-24 md:w-24 bg-gray-200 rounded-full flex items-center justify-center">
                        <span class="font-bold text-gray-500">Client 3</span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="h-16 w-16 md:h-24 md:w-24 bg-gray-200 rounded-full flex items-center justify-center">
                        <span class="font-bold text-gray-500">Client 4</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Contact Us</h2>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block mb-1">Name</label>
                            <input type="text" id="name" class="w-full px-4 py-2 rounded text-gray-800">
                        </div>
                        <div>
                            <label for="email" class="block mb-1">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 rounded text-gray-800">
                        </div>
                        <div>
                            <label for="message" class="block mb-1">Message</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 rounded text-gray-800"></textarea>
                        </div>
                        <button type="submit" class="bg-accent hover:bg-yellow-600 px-6 py-3 rounded-lg font-medium transition">Send Message</button>
                    </form>
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold mb-2">Get in Touch</h3>
                        <p class="mb-4">We'd love to hear from you. Here's how you can reach us.</p>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-accent"></i>
                            <p>123 Tech Street, Nairobi, Kenya</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-accent"></i>
                            <p>+254 722 123456</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-accent"></i>
                            <p>info@pinnaclesystemskenya.net</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock mr-3 text-accent"></i>
                            <p>Mon-Fri: 8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4"> Systems</h3>
                    <p>Providing innovative IT solutions for businesses in Kenya and beyond.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-accent transition">Home</a></li>
                        <li><a href="#" class="hover:text-accent transition">About Us</a></li>
                        <li><a href="#" class="hover:text-accent transition">Services</a></li>
                        <li><a href="#" class="hover:text-accent transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-accent transition">IT Infrastructure</a></li>
                        <li><a href="#" class="hover:text-accent transition">Cyber Security</a></li>
                        <li><a href="#" class="hover:text-accent transition">Cloud Services</a></li>
                        <li><a href="#" class="hover:text-accent transition">IT Support</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-accent transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-accent transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-accent transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-accent transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p>&copy; 2023 BOLD BEYOND Kenya. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
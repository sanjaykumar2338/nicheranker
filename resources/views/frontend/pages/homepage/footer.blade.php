<footer class="footer-section"><div class="w-embed w-iframe w-script">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'nr-orange': '#ef8450',
                        'nr-green': '#10393b',
                        'nr-dark': '#092627',
                        'nr-light': '#f8f9fa',
                    }
                },
                fontFamily: {
                    'sans': ['Montserrat', 'sans-serif'],
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
        }
        
        .footer-wave {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .footer-wave svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 70px;
        }

        .footer-wave .shape-fill {
            fill: #FFFFFF; /* This should be the color of the section ABOVE the footer */
        }
        
        .footer-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        
        .footer-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .footer-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #ef8450;
            transition: width 0.3s ease;
        }
        
        .footer-link:hover::after {
            width: 100%;
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
            color: #ef8450;
        }
        
        .newsletter-input {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .newsletter-input:focus {
            border-color: #ef8450;
            box-shadow: 0 0 0 2px rgba(239, 132, 80, 0.2);
        }
        
        .submit-btn {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
            z-index: -1;
        }
        
        .submit-btn:hover::before {
            left: 100%;
        }
        
        .footer-badge {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .footer-badge:hover {
            transform: scale(1.05);
        }
        
        .footer-badge::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.6s ease;
        }
        
        .footer-badge:hover::before {
            opacity: 1;
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .scroll-top {
            transition: all 0.3s ease;
        }
        
        .scroll-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .glow {
            animation: glow 2s infinite alternate;
        }
        
        @keyframes glow {
            from { box-shadow: 0 0 5px -5px #ef8450; }
            to { box-shadow: 0 0 20px -5px #ef8450; }
        }
        
        .footer-map {
            filter: grayscale(100%) invert(92%) sepia(5%) saturate(0%) hue-rotate(155deg) brightness(95%) contrast(86%);
            opacity: 0.2;
            transition: all 0.5s ease;
        }
        
        .footer-map:hover {
            filter: grayscale(0%) invert(0%);
            opacity: 0.8;
        }
        
        .awards-marquee {
            overflow: hidden;
            white-space: nowrap;
        }
        
        .awards-marquee-content {
            display: inline-block;
            animation: marquee 30s linear infinite;
        }
        
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
    </style>


    <footer class="relative pt-24 pb-12 bg-gradient-to-b from-nr-green to-nr-dark">
        <!-- Wave Divider -->
         <div class="footer-wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="-scale-y-100"> <!-- Tailwind class for vertical flip -->
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-6"> <!-- Reduced mb-8 to mb-6 -->
                <!-- Company Info -->
                <div class="md:col-span-4">
                    <div class="mb-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-nr-orange rounded-lg flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-white">Niche Ranker</h3>
                                <p class="text-nr-orange text-sm">SEO &amp; Link Building Experts</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6">
                        Expert SEO and backlink building services designed to boost your website's authority and search engine rankings, driving organic traffic and growth.
                    </p>
                    <div class="flex space-x-4 mb-8">
                        <a href="https://www.facebook.com/profile.php?id=61564310395125" target="_blank" rel="noopener noreferrer" class="social-icon text-white hover:text-nr-orange">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/nicheranker" target="_blank" rel="noopener noreferrer" class="social-icon text-white hover:text-nr-orange">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                        <a href="https://www.youtube.com/@NicheRanker" target="_blank" rel="noopener noreferrer" class="social-icon text-white hover:text-nr-orange">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/nicheranker" target="_blank" rel="noopener noreferrer" class="social-icon text-white hover:text-nr-orange">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://mx.pinterest.com/nicheranker/" target="_blank" rel="noopener noreferrer" class="social-icon text-white hover:text-nr-orange">
                            <i class="fab fa-pinterest text-xl"></i>
                        </a>
                    </div>
                    
                    <!-- Awards Marquee -->
                    <div class="bg-nr-dark bg-opacity-50 rounded-lg p-3 mb-6">
                        <p class="text-xs text-gray-400 mb-2 text-center">RECOGNIZED BY</p>
                        <div class="awards-marquee">
                            <div class="awards-marquee-content">
                                <div class="inline-flex items-center space-x-8">
                                    <div class="text-white opacity-70 hover:opacity-100 transition-opacity">
                                        <i class="fas fa-award text-nr-orange mr-1"></i> Award-Winning SEO
                                    </div>
                                    <div class="text-white opacity-70 hover:opacity-100 transition-opacity">
                                        <i class="fas fa-star text-nr-orange mr-1"></i> Top Rated Agency
                                    </div>
                                    <div class="text-white opacity-70 hover:opacity-100 transition-opacity">
                                        <i class="fas fa-trophy text-nr-orange mr-1"></i> SEO Excellence
                                    </div>
                                    <div class="text-white opacity-70 hover:opacity-100 transition-opacity">
                                        <i class="fas fa-certificate text-nr-orange mr-1"></i> Google Partner
                                    </div>
                                    <div class="text-white opacity-70 hover:opacity-100 transition-opacity">
                                        <i class="fas fa-award text-nr-orange mr-1"></i> Award-Winning SEO
                                    </div>
                                    <div class="text-white opacity-70 hover:opacity-100 transition-opacity">
                                        <i class="fas fa-star text-nr-orange mr-1"></i> Top Rated Agency
                                    </div>
                                    <div class="text-white opacity-70 hover:opacity-100 transition-opacity">
                                        <i class="fas fa-trophy text-nr-orange mr-1"></i> SEO Excellence
                                    </div>
                                    <div class="text-white opacity-70 hover:opacity-100 transition-opacity">
                                        <i class="fas fa-certificate text-nr-orange mr-1"></i> Google Partner
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="md:col-span-2">
                    <h4 class="text-white font-bold mb-6 text-lg">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">About Us</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Services</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Case Studies</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Testimonials</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="md:col-span-2">
                    <h4 class="text-white font-bold mb-6 text-lg">Our Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">SEO Audit</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Backlink Building</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Keyword Research</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Content Strategy</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Local SEO</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Technical SEO</a></li>
                        <li><a href="#" class="footer-link text-gray-300 hover:text-white">Analytics &amp; Reporting</a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div class="md:col-span-4">
                    <h4 class="text-white font-bold mb-6 text-lg">Subscribe to Our Newsletter</h4>
                    <p class="text-gray-300 mb-4">
                        Get the latest SEO insights, backlink strategies, and ranking tips delivered straight to your inbox.
                    </p>
                    <form action="mailto:info@nicheranker.com" method="POST" enctype="text/plain" class="mb-6">
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="email" name="subscriber_email" placeholder="Your email address" class="newsletter-input bg-white bg-opacity-10 text-white placeholder-gray-400 px-4 py-3 rounded-lg focus:outline-none flex-grow" required="">
                            <input type="hidden" name="subject" value="Newsletter Subscription from NicheRanker Website">
                            <button type="submit" class="submit-btn bg-nr-orange text-white font-semibold px-6 py-3 rounded-lg hover:bg-opacity-90 transition duration-300">
                                Subscribe
                            </button>
                        </div>
                    </form>
                    
                    <!-- Contact Info -->
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-nr-orange bg-opacity-20 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="fas fa-map-marker-alt text-nr-orange"></i>
                            </div>
                            <div>
                                <h5 class="text-white font-semibold">Our Location</h5>
                                <p class="text-gray-300">123 SEO Drive, Suite 500<br>Digital City, Web 10001</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-nr-orange bg-opacity-20 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="fas fa-phone-alt text-nr-orange"></i>
                            </div>
                            <div>
                                <h5 class="text-white font-semibold">Call Us</h5>
                                <a href="tel:8445917988" class="text-gray-300 hover:text-nr-orange">(844) 591-7988</a>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-nr-orange bg-opacity-20 rounded-full flex items-center justify-center mr-3 mt-1">
                                <i class="fas fa-envelope text-nr-orange"></i>
                            </div>
                            <div>
                                <h5 class="text-white font-semibold">Email Us</h5>
                                <a href="mailto:info@nicheranker.com" class="text-gray-300 hover:text-nr-orange">info@nicheranker.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Interactive Map Section (Stats) -->
            <div class="bg-nr-dark bg-opacity-50 rounded-xl p-6 mb-6 relative overflow-hidden"> <!-- Reduced mb-8 to mb-6 -->
                <div class="absolute inset-0 opacity-10">
                       <div class="footer-map w-full h-100px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059353029!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1619826381244!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                
                <div class="relative z-10 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-nr-orange bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-nr-orange text-2xl"></i>
                        </div>
                        <h4 class="text-white font-bold text-2xl mb-2 pulse">10,000+</h4> <!-- Updated -->
                        <p class="text-gray-300">Clients Served</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-16 h-16 bg-nr-orange bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-chart-line text-nr-orange text-2xl"></i>
                        </div>
                        <h4 class="text-white font-bold text-2xl mb-2 pulse">10,000,000+</h4> <!-- Updated -->
                        <p class="text-gray-300">Keywords Ranked</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-16 h-16 bg-nr-orange bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-trophy text-nr-orange text-2xl"></i>
                        </div>
                        <h4 class="text-white font-bold text-2xl mb-2 pulse">99.9%</h4>
                        <p class="text-gray-300">Client Satisfaction</p>
                    </div>
                </div>
            </div>
            
            <!-- Trust Badges -->
            <div class="flex flex-wrap justify-center gap-6 mb-10">
                <div class="footer-badge bg-nr-dark bg-opacity-50 p-4 rounded-lg flex items-center">
                    <i class="fab fa-google text-nr-orange text-2xl mr-2"></i>
                    <div>
                        <div class="flex">
                            <i class="fas fa-star text-nr-orange text-xs"></i>
                            <i class="fas fa-star text-nr-orange text-xs"></i>
                            <i class="fas fa-star text-nr-orange text-xs"></i>
                            <i class="fas fa-star text-nr-orange text-xs"></i>
                            <i class="fas fa-star text-nr-orange text-xs"></i>
                        </div>
                        <p class="text-white text-xs">Google Partner</p>
                    </div>
                </div>
                
                <div class="footer-badge bg-nr-dark bg-opacity-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-shield-alt text-nr-orange text-2xl mr-2"></i>
                    <p class="text-white text-xs">SSL Secured</p>
                </div>
                
                <div class="footer-badge bg-nr-dark bg-opacity-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-credit-card text-nr-orange text-2xl mr-2"></i>
                    <p class="text-white text-xs">Secure Payments</p>
                </div>
                
                <div class="footer-badge bg-nr-dark bg-opacity-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-headset text-nr-orange text-2xl mr-2"></i>
                    <p class="text-white text-xs">24/7 Support</p>
                </div>
                
                <div class="footer-badge bg-nr-dark bg-opacity-50 p-4 rounded-lg flex items-center">
                    <i class="fas fa-certificate text-nr-orange text-2xl mr-2"></i>
                    <p class="text-white text-xs">SEO Certified</p>
                </div>
            </div>
            
            <!-- CTA Banner -->
            <div class="bg-gradient-to-r from-nr-orange to-nr-green rounded-xl p-8 mb-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -mr-20 -mt-20"></div>
                <div class="absolute bottom-0 left-0 w-40 h-40 bg-white opacity-10 rounded-full -ml-10 -mb-10"></div>
                
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-6 md:mb-0 text-center md:text-left">
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">Ready to Boost Your Search Rankings?</h3>
                        <p class="text-white text-opacity-90">
                            Get your free SEO audit and discover untapped growth opportunities.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 mt-6 md:mt-0">
                        <a href="https://clients.nicheranker.com/signup" target="_blank" rel="noopener noreferrer" class="bg-white text-nr-green font-bold py-3 px-8 rounded-lg text-lg shadow-lg hover:bg-opacity-90 transition duration-300 glow text-center">
                            Get Started
                        </a>
                        <a href="https://ask.nicheranker.com/?_gl=1*17xsn3a*_gcl_au*NDE4OTU5NzY2LjE3NDczMzYwNzE.*_ga*MTcwMzA0OTE1MS4xNzQ3MzM2MDcx*_ga_B3KEFHDLDZ*czE3NDczMzYwNzEkbzEkZzEkdDE3NDczMzY0MjgkajAkbDAkaDA.*_ga_L1TJNYY52V*czE3NDczMzYwNzEkbzEkZzEkdDE3NDczMzY0MjgkajAkbDAkaDA.*_ga_V5L99S9JES*czE3NDczMzYwNzEkbzEkZzEkdDE3NDczMzY0MjgkajAkbDAkaDA." target="_blank" rel="noopener noreferrer" class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-lg text-lg shadow-lg hover:bg-white hover:bg-opacity-10 transition duration-300 text-center">
                            Schedule a Call
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-gray-400 text-sm">
                        © 2025 Niche Ranker. All rights reserved.
                    </p>
                </div>
                
                <div class="flex flex-wrap justify-center gap-x-4 gap-y-2 mb-4 md:mb-0">
                    <a href="https://www.nicheranker.com/privacy-policy" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="https://www.nicheranker.com/terms-and-conditions" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white text-sm">Terms and Conditions</a>
                    <a href="https://nicheranker.com/sitemap.xml" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white text-sm">Sitemap</a>
                </div>
                
                <div>
                    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" title="Scroll to top" class="scroll-top bg-nr-orange text-white p-3 rounded-full hover:bg-opacity-80 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="hidden md:block">
            <div class="absolute bottom-40 left-10 floating" style="animation-delay: 0.5s;">
                <i class="fas fa-link text-nr-orange opacity-30 text-4xl"></i>
            </div>
            
            <div class="absolute top-40 right-10 floating" style="animation-delay: 1s;">
                <i class="fas fa-chart-bar text-nr-orange opacity-30 text-4xl"></i>
            </div>
            
            <div class="absolute bottom-60 right-20 floating" style="animation-delay: 1.5s;">
                 <i class="fas fa-cogs text-nr-orange opacity-30 text-3xl"></i>
            </div>
        </div>
    </footer>
<!-- The script below this line was present in the original HTML. It seems related to Cloudflare. -->
<!-- <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'94036f1b173cb3cb',t:'MTc0NzMyMDQ4My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script> -->

</div></footer>
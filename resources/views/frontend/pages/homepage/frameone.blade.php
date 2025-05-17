

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NicheRanker</title>
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
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            min-height: 200vh; /* Just to demonstrate the sticky effect */
        }
        
        /* Header styles */
        .header {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .header.scrolled {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .contact-item {
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            color: #ef8450;
        }
        
        .header-btn {
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease;
        }
        
        .header-btn::before {
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
        
        .header-btn:hover::before {
            left: 100%;
        }
        
        .mobile-menu {
            transition: all 0.3s ease;
            transform: translateY(-100%);
            opacity: 0;
            visibility: hidden;
        }
        
        .mobile-menu.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }
        
        /* Logo styles */
        .logo-container {
            height: 40px;
            display: flex;
            align-items: center;
        }
        
        .logo-container img {
            height: 100%;
            width: auto;
            object-fit: contain;
        }
        
        /* Dropdown menu styles */
        .dropdown {
            position: relative;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            min-width: 300px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            z-index: 100;
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.3s, transform 0.3s;
            max-height: 80vh;
            overflow-y: auto;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }
        
        .dropdown-section {
            padding: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .dropdown-section:last-child {
            border-bottom: none;
        }
        
        .dropdown-section-title {
            font-weight: 700;
            color: #10393b;
            margin-bottom: 0.75rem;
            display: block;
        }
        
        .dropdown-item {
            display: flex;
            align-items: center;
            padding: 0.5rem 0;
            color: #4b5563;
            transition: all 0.2s;
        }
        
        .dropdown-item:hover {
            color: #ef8450;
            transform: translateX(5px);
        }
        
        .dropdown-item .emoji {
            margin-right: 0.5rem;
            font-size: 1.1rem;
        }
        
        .dropdown-item .tag {
            margin-left: 0.5rem;
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.15rem 0.4rem;
            border-radius: 0.25rem;
            text-transform: uppercase;
        }
        
        .tag-new {
            background-color: #10b981;
            color: white;
        }
        
        .tag-popular {
            background-color: #ef8450;
            color: white;
        }
        
        .tag-powerful {
            background-color: #8b5cf6;
            color: white;
        }
        
        .tag-updated {
            background-color: #3b82f6;
            color: white;
        }
        
        /* Menu button styles */
        .menu-button {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
            font-weight: 600;
            color: #10393b;
            border-radius: 0.375rem;
            transition: all 0.2s;
        }
        
        .menu-button:hover {
            background-color: rgba(16, 57, 59, 0.05);
        }
        
        .menu-button svg {
            margin-left: 0.5rem;
            transition: transform 0.2s;
        }
        
        .dropdown:hover .menu-button svg {
            transform: rotate(180deg);
        }
    </style>
</head>
<body>
    <!-- Sticky Header -->
    <header class="header fixed top-0 left-0 right-0 z-50 py-3 px-4 md:px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="logo-container mr-4">
                        <img src="https://cdn.prod.website-files.com/626dfdcea621228faa739353/6272a19db46537bab339c0d2_niche6-orange%20and%20white-final.png" alt="NicheRanker Logo" class="h-10">
                    </a>
                    
                    <!-- Dropdown Menu -->
                    <div class="dropdown hidden md:block">
                        <button class="menu-button">
                            Menu
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-content">
                            <!-- Backlinks Section -->
                            <div class="dropdown-section">
                                <span class="dropdown-section-title">Backlinks</span>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">🏪</span>
                                    <span>GMB Ranker Links</span>
                                    <span class="tag tag-new">New!</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">💎</span>
                                    <span>Max OBL Links</span>
                                    <span class="tag tag-powerful">Powerful!</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">📝</span>
                                    <span>HQ Outreach Links</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">🔗</span>
                                    <span>Niche Edits</span>
                                    <span class="tag tag-popular">Popular!</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">📝</span>
                                    <span>Guest Posts</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">♟️</span>
                                    <span>DR 30+ 500+ Traffic Links</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">🕵️</span>
                                    <span>Niche PBN Links</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">💬</span>
                                    <span>Niche Forum Comments</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">🗺️</span>
                                    <span>Niche & Local Directories</span>
                                    <span class="tag tag-updated">Updated</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">🔨</span>
                                    <span>Foundation Links</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">🛡️</span>
                                    <span>Google Power Stack</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">✍️</span>
                                    <span>Quora Links</span>
                                </a>
                            </div>
                            
                            <!-- Services Section -->
                            <div class="dropdown-section">
                                <span class="dropdown-section-title">Services</span>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">🚀</span>
                                    <span>Managed SEO</span>
                                    <span class="tag tag-popular">Popular!</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">🏷️</span>
                                    <span>White-Label SEO</span>
                                    <span class="tag tag-popular">Popular!</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">⚡</span>
                                    <span>Site Speed Increaser</span>
                                    <span class="tag tag-new">New!</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">💻</span>
                                    <span>PPC Ads Management</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">📙</span>
                                    <span>Managed Link Building</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span class="emoji">#️⃣</span>
                                    <span>Social Media Management</span>
                                </a>
                            </div>
                            
                            <!-- Industries Section -->
                            <div class="dropdown-section">
                                <span class="dropdown-section-title">Industries</span>
                                <a href="#" class="dropdown-item">
                                    <span>Adult</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span>SEO</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span>And more...</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Middle Section - Contact Info -->
                <div class="hidden lg:flex items-center space-x-6">
                    <a href="mailto:info@nicheranker.com" class="contact-item flex items-center text-gray-700 hover:text-nr-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <span>info@nicheranker.com</span>
                    </a>
                    <a href="tel:8445917988" class="contact-item flex items-center text-gray-700 hover:text-nr-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span>(844) 591-7988</span>
                    </a>
                </div>
                
                <!-- Right Section - Action Buttons -->
                <div class="flex items-center space-x-4">
                    <a href="https://ask.nicheranker.com/" class="header-btn hidden md:flex items-center px-4 py-2 bg-nr-orange text-white font-medium rounded-lg hover:bg-opacity-90 transition-colors duration-300 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        Book A Zoom Call
                    </a>
                    <a href="https://clients.nicheranker.com/signup" class="header-btn flex items-center px-4 py-2 border-2 border-nr-green text-nr-green font-medium rounded-lg hover:bg-nr-green hover:text-white transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                        </svg>
                        Sign In
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-button" class="md:hidden flex items-center p-2 rounded-md text-gray-700 hover:text-nr-orange hover:bg-gray-100 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu md:hidden absolute left-0 right-0 top-full bg-white shadow-lg rounded-b-lg overflow-hidden">
                <div class="p-4 space-y-4">
                    <!-- Mobile Menu Sections -->
                    <div class="border-b border-gray-100 pb-4">
                        <div class="font-bold text-nr-green mb-2">Backlinks</div>
                        <div class="grid grid-cols-1 gap-2">
                            <a href="#" class="flex items-center text-gray-700">
                                <span class="emoji mr-2">🏪</span>
                                <span>GMB Ranker Links</span>
                                <span class="ml-2 text-xs font-bold text-green-500">New!</span>
                            </a>
                            <a href="#" class="flex items-center text-gray-700">
                                <span class="emoji mr-2">💎</span>
                                <span>Max OBL Links</span>
                                <span class="ml-2 text-xs font-bold text-purple-500">Powerful!</span>
                            </a>
                            <!-- More backlinks items -->
                        </div>
                    </div>
                    
                    <div class="border-b border-gray-100 pb-4">
                        <div class="font-bold text-nr-green mb-2">Services</div>
                        <div class="grid grid-cols-1 gap-2">
                            <a href="#" class="flex items-center text-gray-700">
                                <span class="emoji mr-2">🚀</span>
                                <span>Managed SEO</span>
                                <span class="ml-2 text-xs font-bold text-nr-orange">Popular!</span>
                            </a>
                            <!-- More services items -->
                        </div>
                    </div>
                    
                    <div class="pb-4">
                        <div class="font-bold text-nr-green mb-2">Industries</div>
                        <div class="grid grid-cols-1 gap-2">
                            <a href="#" class="flex items-center text-gray-700">
                                <span>Adult</span>
                            </a>
                            <a href="#" class="flex items-center text-gray-700">
                                <span>SEO</span>
                            </a>
                            <!-- More industries items -->
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-100 pt-4">
                        <a href="mailto:info@nicheranker.com" class="contact-item flex items-center text-gray-700 hover:text-nr-orange p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span>info@nicheranker.com</span>
                        </a>
                        <a href="tel:8445917988" class="contact-item flex items-center text-gray-700 hover:text-nr-orange p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span>(844) 591-7988</span>
                        </a>
                    </div>
                    
                    <div class="pt-2">
                        <a href="https://ask.nicheranker.com/" class="block w-full py-3 px-4 text-center font-medium rounded-lg bg-nr-orange text-white hover:bg-opacity-90 transition-colors duration-300 shadow-md mb-3">
                            Book A Zoom Call
                        </a>
                        <a href="https://clients.nicheranker.com/signup" class="block w-full py-3 px-4 text-center font-medium rounded-lg border-2 border-nr-green text-nr-green hover:bg-nr-green hover:text-white transition-colors duration-300">
                            Sign In
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="pt-24 px-4 max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-nr-green">Scroll down to see the sticky header in action</h1>
        <p class="mt-4 text-gray-700">The header will stay at the top as you scroll down the page.</p>
    </div>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });
        
        // Header scroll effect
        const header = document.querySelector('.header');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.remove('active');
            }
        });
    </script>
<script>
</body>
</html>

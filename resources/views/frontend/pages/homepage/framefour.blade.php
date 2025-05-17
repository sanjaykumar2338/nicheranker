<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niche Ranker - Testimonials</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'nr-orange': '#ef8450',
                        'nr-green': '#10393b',
                    }
                },
                fontFamily: {
                    'sans': ['Montserrat', 'sans-serif'],
                    'serif': ['Merriweather', 'serif'],
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Merriweather:wght@300;400;700&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
        }
        
        .testimonial-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2310393b' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        .quote-mark {
            font-family: 'Merriweather', serif;
            font-size: 120px;
            line-height: 0;
            position: absolute;
            top: 50px;
            left: 20px;
            color: rgba(239, 132, 80, 0.1);
            z-index: 0;
        }
        
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 0.5rem;
        }
        
        .video-card {
            transition: all 0.3s ease;
            position: relative;
        }
        
        .video-card:hover {
            transform: translateY(-5px);
        }
        
        .video-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 0.75rem;
            padding: 3px;
            background: linear-gradient(135deg, #ef8450, #10393b);
            -webkit-mask: 
                linear-gradient(#fff 0 0) content-box, 
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
            opacity: 0.7;
        }
        
        .video-card:hover::before {
            opacity: 1;
        }
        
        .read-more {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .read-more::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ef8450;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }
        
        .read-more:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .star-rating {
            color: #ef8450;
        }
        
        .section-divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, #ef8450, transparent);
        }
        
        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in-1 { animation-delay: 0.1s; }
        .fade-in-2 { animation-delay: 0.2s; }
        .fade-in-3 { animation-delay: 0.3s; }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Montserrat, sans-serif;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.relative{position:relative}.z-10{z-index:10}.mx-auto{margin-left:auto;margin-right:auto}.my-12{margin-top:3rem;margin-bottom:3rem}.mb-12{margin-bottom:3rem}.mb-16{margin-bottom:4rem}.mb-2{margin-bottom:0.5rem}.mb-3{margin-bottom:0.75rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.ml-1{margin-left:0.25rem}.mr-3{margin-right:0.75rem}.mt-16{margin-top:4rem}.mt-4{margin-top:1rem}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-1{height:0.25rem}.h-10{height:2.5rem}.h-12{height:3rem}.h-4{height:1rem}.w-10{width:2.5rem}.w-12{width:3rem}.w-24{width:6rem}.w-4{width:1rem}.w-full{width:100%}.max-w-3xl{max-width:48rem}.max-w-6xl{max-width:72rem}.max-w-md{max-width:28rem}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-xl{border-radius:0.75rem}.border-l-4{border-left-width:4px}.border-t{border-top-width:1px}.border-gray-100{--tw-border-opacity:1;border-color:rgb(243 244 246 / var(--tw-border-opacity, 1))}.border-nr-orange{--tw-border-opacity:1;border-color:rgb(239 132 80 / var(--tw-border-opacity, 1))}.bg-nr-green{--tw-bg-opacity:1;background-color:rgb(16 57 59 / var(--tw-bg-opacity, 1))}.bg-nr-orange{--tw-bg-opacity:1;background-color:rgb(239 132 80 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-opacity-10{--tw-bg-opacity:0.1}.p-4{padding:1rem}.p-6{padding:1.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.pt-4{padding-top:1rem}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:0.75rem;line-height:1rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.font-semibold{font-weight:600}.italic{font-style:italic}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-nr-green{--tw-text-opacity:1;color:rgb(16 57 59 / var(--tw-text-opacity, 1))}.text-nr-orange{--tw-text-opacity:1;color:rgb(239 132 80 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.text-opacity-90{--tw-text-opacity:0.9}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.hover\:bg-opacity-90:hover{--tw-bg-opacity:0.9}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.md\:text-5xl{font-size:3rem;line-height:1}}@media (min-width: 1024px){.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}}</style><link rel="stylesheet" type="text/css" href="chrome-extension://gdnpkbipbholkoaggmlblpbmgemddbgb/css/awebChromeHelperInjected.min.css"></head>
<body class="bg-white">
    <!-- Testimonials Section -->
    <section class="py-16 px-4 testimonial-pattern">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <span class="inline-block py-1 px-3 bg-nr-orange bg-opacity-10 text-nr-orange font-semibold rounded-full text-sm mb-4">CLIENT SUCCESS STORIES</span>
                <h2 class="text-4xl md:text-5xl font-bold text-nr-green mb-4">What Our Clients Say</h2>
                <div class="w-24 h-1 bg-nr-orange mx-auto mb-6"></div>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                    Don't just take our word for it. Hear directly from law firms who have transformed their online presence and client acquisition with our specialized SEO services.
                </p>
            </div>
            
            <!-- Video Testimonials Section -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-nr-green mb-8 text-center">Video Testimonials</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Video 1 -->
                    <div class="video-card rounded-xl overflow-hidden shadow-xl bg-white fade-in fade-in-1">
                        <div class="p-4">
                            <div class="video-container mb-4">
                                <iframe src="https://www.youtube.com/embed/Z7fw_y0Ndkk" title="Client Testimonial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                            <div class="flex items-center mb-3">
                                <div class="w-12 h-12 bg-nr-green text-white rounded-full flex items-center justify-center font-bold text-xl mr-3">
                                    JD
                                </div>
                                <div>
                                    <h4 class="font-bold text-nr-green">James Davidson</h4>
                                    <p class="text-sm text-gray-600">Davidson Family Law</p>
                                </div>
                            </div>
                            <div class="star-rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-700 text-sm italic">
                                "Niche Ranker transformed our online presence. We've seen a 215% increase in qualified leads."
                            </p>
                        </div>
                    </div>
                    
                    <!-- Video 2 -->
                    <div class="video-card rounded-xl overflow-hidden shadow-xl bg-white fade-in fade-in-2">
                        <div class="p-4">
                            <div class="video-container mb-4">
                                <iframe src="https://www.youtube.com/embed/O8m7SGlKzxg" title="Client Testimonial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                            <div class="flex items-center mb-3">
                                <div class="w-12 h-12 bg-nr-green text-white rounded-full flex items-center justify-center font-bold text-xl mr-3">
                                    SM
                                </div>
                                <div>
                                    <h4 class="font-bold text-nr-green">Sarah Miller</h4>
                                    <p class="text-sm text-gray-600">Miller &amp; Associates</p>
                                </div>
                            </div>
                            <div class="star-rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-700 text-sm italic">
                                "Our firm now ranks #1 for our most valuable keywords. The ROI has been incredible."
                            </p>
                        </div>
                    </div>
                    
                    <!-- Video 3 -->
                    <div class="video-card rounded-xl overflow-hidden shadow-xl bg-white fade-in fade-in-3">
                        <div class="p-4">
                            <div class="video-container mb-4">
                                <iframe src="https://www.youtube.com/embed/5xmw5WSQxOw" title="Client Testimonial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                            <div class="flex items-center mb-3">
                                <div class="w-12 h-12 bg-nr-green text-white rounded-full flex items-center justify-center font-bold text-xl mr-3">
                                    RJ
                                </div>
                                <div>
                                    <h4 class="font-bold text-nr-green">Robert Johnson</h4>
                                    <p class="text-sm text-gray-600">Johnson Legal Group</p>
                                </div>
                            </div>
                            <div class="star-rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-700 text-sm italic">
                                "Working with Niche Ranker was the best marketing decision we've made in years."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Decorative Divider -->
            <div class="section-divider max-w-md mx-auto my-12"></div>
            
            <!-- Written Testimonials Section -->
            <div>
                <h3 class="text-2xl font-bold text-nr-green mb-8 text-center">Client Reviews</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card bg-white rounded-xl p-6 shadow-xl border-l-4 border-nr-orange relative">
                        <span class="quote-mark">"</span>
                        <div class="relative z-10">
                            <div class="star-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="text-xl font-bold text-nr-green mb-2">Absolutely Thrilled</h4>
                            <p class="text-gray-700 mb-4">
                                "I am absolutely thrilled with my experience using Niche Ranker! From start to finish, this platform has exceeded my expectations in every way possible."
                            </p>
                            <a href="#" class="read-more inline-flex items-center text-nr-orange font-medium">
                                <span>Read Full Review</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                                <div>
                                    <h5 class="font-semibold text-nr-green">Keshawn Paucek</h5>
                                    <p class="text-xs text-gray-500">Mar 9, 2024</p>
                                </div>
                                <div class="w-10 h-10 bg-nr-green text-white rounded-full flex items-center justify-center font-bold text-sm">
                                    KP
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="testimonial-card bg-white rounded-xl p-6 shadow-xl border-l-4 border-nr-orange relative">
                        <span class="quote-mark">"</span>
                        <div class="relative z-10">
                            <div class="star-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="text-xl font-bold text-nr-green mb-2">Experienced SEO</h4>
                            <p class="text-gray-700 mb-4">
                                "I was looking for experienced SEO service and stumbled upon Niche Ranker. I have been using this for a while now, and every single keyword I am targeting is always ending up on the top 10."
                            </p>
                            <a href="#" class="read-more inline-flex items-center text-nr-orange font-medium">
                                <span>Read Full Review</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                                <div>
                                    <h5 class="font-semibold text-nr-green">Max Nelson</h5>
                                    <p class="text-xs text-gray-500">Mar 18, 2024</p>
                                </div>
                                <div class="w-10 h-10 bg-nr-green text-white rounded-full flex items-center justify-center font-bold text-sm">
                                    MN
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card bg-white rounded-xl p-6 shadow-xl border-l-4 border-nr-orange relative">
                        <span class="quote-mark">"</span>
                        <div class="relative z-10">
                            <div class="star-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="text-xl font-bold text-nr-green mb-2">The Best</h4>
                            <p class="text-gray-700 mb-4">
                                "I've been working with Niche Ranker for quite some time. And these guys are the best to do business with. All jobs are completed on time without any hassle."
                            </p>
                            <a href="#" class="read-more inline-flex items-center text-nr-orange font-medium">
                                <span>Read Full Review</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                                <div>
                                    <h5 class="font-semibold text-nr-green">Kal P.</h5>
                                    <p class="text-xs text-gray-500">Mar 7, 2024</p>
                                </div>
                                <div class="w-10 h-10 bg-nr-green text-white rounded-full flex items-center justify-center font-bold text-sm">
                                    KP
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 4 -->
                    <div class="testimonial-card bg-white rounded-xl p-6 shadow-xl border-l-4 border-nr-orange relative">
                        <span class="quote-mark">"</span>
                        <div class="relative z-10">
                            <div class="star-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="text-xl font-bold text-nr-green mb-2">Truly Outstanding</h4>
                            <p class="text-gray-700 mb-4">
                                "The team behind Niche Ranker is truly outstanding! Their efforts have helped my page flourish, attracting numerous new and engaged followers. I highly recommend them."
                            </p>
                            <a href="#" class="read-more inline-flex items-center text-nr-orange font-medium">
                                <span>Read Full Review</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                                <div>
                                    <h5 class="font-semibold text-nr-green">SEO Master</h5>
                                    <p class="text-xs text-gray-500">Mar 15, 2024</p>
                                </div>
                                <div class="w-10 h-10 bg-nr-green text-white rounded-full flex items-center justify-center font-bold text-sm">
                                    SM
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 5 -->
                    <div class="testimonial-card bg-white rounded-xl p-6 shadow-xl border-l-4 border-nr-orange relative">
                        <span class="quote-mark">"</span>
                        <div class="relative z-10">
                            <div class="star-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="text-xl font-bold text-nr-green mb-2">On-Time Delivery</h4>
                            <p class="text-gray-700 mb-4">
                                "On-time delivery and quality as promised, definitely would order again!"
                            </p>
                            <a href="#" class="read-more inline-flex items-center text-nr-orange font-medium">
                                <span>Read Full Review</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                                <div>
                                    <h5 class="font-semibold text-nr-green">TMG</h5>
                                    <p class="text-xs text-gray-500">Mar 7, 2024</p>
                                </div>
                                <div class="w-10 h-10 bg-nr-green text-white rounded-full flex items-center justify-center font-bold text-sm">
                                    TM
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA Card -->
                    <div class="bg-nr-green rounded-xl p-6 shadow-xl flex flex-col justify-center">
                        <div class="text-center">
                            <h4 class="text-xl font-bold text-white mb-3">Ready to Join Our Success Stories?</h4>
                            <p class="text-white text-opacity-90 mb-6">
                                Get started with a free SEO audit and see how we can transform your law firm's online presence.
                            </p>
                            <button class="bg-nr-orange text-white font-bold py-3 px-6 rounded-lg text-lg shadow-lg hover:bg-opacity-90 transition duration-300 w-full">
                                Get Your Free SEO Audit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Trust Indicators -->
            <div class="mt-16 text-center">
                <p class="text-gray-500 mb-4 font-medium">TRUSTED BY LAW FIRMS ACROSS PRACTICE AREAS</p>
                <div class="flex flex-wrap justify-center gap-8 items-center">
                    <div class="text-gray-400 font-bold text-lg">Personal Injury</div>
                    <div class="text-gray-400 font-bold text-lg">Family Law</div>
                    <div class="text-gray-400 font-bold text-lg">Criminal Defense</div>
                    <div class="text-gray-400 font-bold text-lg">Estate Planning</div>
                    <div class="text-gray-400 font-bold text-lg">Immigration</div>
                    <div class="text-gray-400 font-bold text-lg">Business Law</div>
                </div>
            </div>
        </div>
    </section>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9408c561e58f91b5',t:'MTc0NzM3NjQ0Ni4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>
<div id="awebChromeHelper" data-version="1.24.4"></div></body></html>
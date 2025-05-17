<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Section - Niche Ranker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'nr-orange': '#ef8450',
                        'nr-green': '#10393b',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: #ffffff;
        }
        
        .highlight-text {
            position: relative;
            display: inline-block;
            z-index: 1;
        }
        
        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background-color: rgba(239, 132, 80, 0.2);
            z-index: -1;
            transform: skewX(-5deg);
        }
        
        .blog-card {
            transition: all 0.4s ease;
            overflow: hidden;
        }
        
        .blog-card:hover {
            transform: translateY(-10px);
        }
        
        .blog-card:hover .blog-image img {
            transform: scale(1.05);
        }
        
        .blog-image {
            overflow: hidden;
        }
        
        .blog-image img {
            transition: transform 0.6s ease;
        }
        
        .blog-tag {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 8px;
            margin-bottom: 8px;
        }
        
        .blog-date {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(16, 57, 59, 0.9);
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            z-index: 10;
        }
        
        .blog-author {
            display: flex;
            align-items: center;
            margin-top: 16px;
        }
        
        .blog-author-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 12px;
        }
        
        .blog-read-more {
            position: relative;
            display: inline-flex;
            align-items: center;
            font-weight: 600;
            color: #ef8450;
            transition: all 0.3s ease;
        }
        
        .blog-read-more::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #ef8450;
            transition: width 0.3s ease;
        }
        
        .blog-read-more:hover::after {
            width: 100%;
        }
        
        .blog-read-more svg {
            transition: transform 0.3s ease;
            margin-left: 6px;
        }
        
        .blog-read-more:hover svg {
            transform: translateX(5px);
        }
        
        .featured-post {
            position: relative;
            overflow: hidden;
            border-radius: 16px;
        }
        
        .featured-post-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 24px;
            background: linear-gradient(to top, rgba(16, 57, 59, 0.9) 0%, rgba(16, 57, 59, 0) 100%);
            color: white;
        }
        
        .featured-post-image {
            transition: transform 0.6s ease;
        }
        
        .featured-post:hover .featured-post-image {
            transform: scale(1.05);
        }
        
        .featured-tag {
            position: absolute;
            top: 16px;
            left: 16px;
            background: #ef8450;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            z-index: 10;
        }
        
        .newsletter-bg {
            background: linear-gradient(135deg, #10393b 0%, #0a2425 100%);
        }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.relative{position:relative}.z-10{z-index:10}.mx-auto{margin-left:auto;margin-right:auto}.mb-1{margin-bottom:0.25rem}.mb-12{margin-bottom:3rem}.mb-16{margin-bottom:4rem}.mb-2{margin-bottom:0.5rem}.mb-3{margin-bottom:0.75rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.ml-2{margin-left:0.5rem}.mr-2{margin-right:0.5rem}.mr-3{margin-right:0.75rem}.mr-4{margin-right:1rem}.mt-20{margin-top:5rem}.line-clamp-1{overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:1}.line-clamp-2{overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2}.line-clamp-3{overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3}.inline-block{display:inline-block}.inline{display:inline}.flex{display:flex}.grid{display:grid}.h-10{height:2.5rem}.h-24{height:6rem}.h-4{height:1rem}.h-48{height:12rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-\[400px\]{min-height:400px}.w-10{width:2.5rem}.w-24{width:6rem}.w-4{width:1rem}.w-5{width:1.25rem}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-4xl{max-width:56rem}.max-w-\[200px\]{max-width:200px}.flex-shrink-0{flex-shrink:0}.flex-grow{flex-grow:1}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-4{gap:1rem}.gap-8{gap:2rem}.overflow-hidden{overflow:hidden}.whitespace-nowrap{white-space:nowrap}.rounded-2xl{border-radius:1rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-xl{border-radius:0.75rem}.border{border-width:1px}.border-gray-100{--tw-border-opacity:1;border-color:rgb(243 244 246 / var(--tw-border-opacity, 1))}.bg-nr-orange{--tw-bg-opacity:1;background-color:rgb(239 132 80 / var(--tw-bg-opacity, 1))}.bg-nr-orange\/10{background-color:rgb(239 132 80 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-white\/20{background-color:rgb(255 255 255 / 0.2)}.object-cover{object-fit:cover}.p-6{padding:1.5rem}.p-8{padding:2rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-8{padding-left:2rem;padding-right:2rem}.py-20{padding-top:5rem;padding-bottom:5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.pb-6{padding-bottom:1.5rem}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:0.75rem;line-height:1rem}.font-bold{font-weight:700}.font-semibold{font-weight:600}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.text-nr-green{--tw-text-opacity:1;color:rgb(16 57 59 / var(--tw-text-opacity, 1))}.text-nr-orange{--tw-text-opacity:1;color:rgb(239 132 80 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.text-white\/80{color:rgb(255 255 255 / 0.8)}.text-white\/90{color:rgb(255 255 255 / 0.9)}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.hover\:bg-nr-orange\/90:hover{background-color:rgb(239 132 80 / 0.9)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-nr-orange:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(239 132 80 / var(--tw-ring-opacity, 1))}@media (min-width: 640px){.sm\:flex-row{flex-direction:row}}@media (min-width: 768px){.md\:mb-0{margin-bottom:0px}.md\:line-clamp-3{overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3}.md\:w-1\/3{width:33.333333%}.md\:w-2\/3{width:66.666667%}.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:flex-row{flex-direction:row}.md\:p-12{padding:3rem}.md\:pr-8{padding-right:2rem}.md\:text-3xl{font-size:1.875rem;line-height:2.25rem}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}}@media (min-width: 1024px){.lg\:col-span-1{grid-column:span 1 / span 1}.lg\:col-span-2{grid-column:span 2 / span 2}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}}</style><link rel="stylesheet" type="text/css" href="chrome-extension://gdnpkbipbholkoaggmlblpbmgemddbgb/css/awebChromeHelperInjected.min.css"></head>
<body>
    <!-- Blog Section -->
    <section class="py-20 relative overflow-hidden" id="blog">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-nr-green mb-4">
                    <span class="highlight-text">Latest Articles</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Insights, tips, and industry updates to keep you informed
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                <!-- Featured Post -->
                <div class="lg:col-span-2">
                    <div class="featured-post h-full">
                        <div class="featured-tag">Featured</div>
                        <div class="featured-post-image h-full">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80" alt="Featured post" class="w-full h-full object-cover min-h-[400px]">
                        </div>
                        <div class="featured-post-content">
                            <div class="flex flex-wrap mb-3">
                                <span class="blog-tag bg-white/20 text-white mr-2">Business</span>
                                <span class="blog-tag bg-white/20 text-white">Strategy</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold mb-3">10 Strategies to Grow Your Business in 2023</h3>
                            <p class="text-white/80 mb-4 line-clamp-2 md:line-clamp-3">Learn the most effective strategies that successful businesses are implementing this year to stay ahead of the competition.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-nr-orange flex items-center justify-center text-white font-bold text-sm mr-3">
                                        JD
                                    </div>
                                    <span class="text-white/90 text-sm">John Doe</span>
                                </div>
                                <a href="#" class="blog-read-more text-white">
                                    Read Article
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Posts Column -->
                <div class="lg:col-span-1">
                    <h3 class="text-xl font-bold text-nr-green mb-6">Recent Posts</h3>
                    
                    <!-- Recent Post 1 -->
                    <div class="flex mb-6">
                        <div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0 mr-4">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80" alt="Marketing" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <span class="blog-tag bg-nr-orange/10 text-nr-orange">Marketing</span>
                            <h4 class="font-bold text-nr-green mb-1 line-clamp-2">Digital Marketing Trends You Can't Ignore</h4>
                            <p class="text-gray-600 text-sm mb-2 line-clamp-1">Stay ahead with these cutting-edge marketing strategies.</p>
                            <a href="#" class="blog-read-more text-sm">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Recent Post 2 -->
                    <div class="flex mb-6">
                        <div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0 mr-4">
                            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80" alt="Finance" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <span class="blog-tag bg-nr-orange/10 text-nr-orange">Finance</span>
                            <h4 class="font-bold text-nr-green mb-1 line-clamp-2">Investment Strategies for Small Businesses</h4>
                            <p class="text-gray-600 text-sm mb-2 line-clamp-1">Smart ways to invest your business profits.</p>
                            <a href="#" class="blog-read-more text-sm">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Recent Post 3 -->
                    <div class="flex">
                        <div class="w-24 h-24 rounded-lg overflow-hidden flex-shrink-0 mr-4">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80" alt="Technology" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <span class="blog-tag bg-nr-orange/10 text-nr-orange">Technology</span>
                            <h4 class="font-bold text-nr-green mb-1 line-clamp-2">How AI is Transforming Customer Service</h4>
                            <p class="text-gray-600 text-sm mb-2 line-clamp-1">The impact of artificial intelligence on customer experience.</p>
                            <a href="#" class="blog-read-more text-sm">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Blog Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Blog Card 1 -->
                <div class="blog-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="relative">
                        <div class="blog-image h-48">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80" alt="Leadership" class="w-full h-full object-cover">
                        </div>
                        <div class="blog-date">June 12, 2023</div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap mb-3">
                            <span class="blog-tag bg-nr-orange/10 text-nr-orange">Leadership</span>
                        </div>
                        <h3 class="text-xl font-bold text-nr-green mb-3 line-clamp-2">5 Leadership Skills Every Entrepreneur Needs</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Discover the essential leadership qualities that can help you build and manage a successful team in today's competitive business environment.</p>
                        <div class="blog-author">
                            <div class="blog-author-image">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Author" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-semibold text-nr-green text-sm">Sarah Miller</p>
                                <p class="text-gray-500 text-xs">Business Coach</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="#" class="blog-read-more">
                            Read Full Article
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Blog Card 2 -->
                <div class="blog-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="relative">
                        <div class="blog-image h-48">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1415&amp;q=80" alt="Marketing" class="w-full h-full object-cover">
                        </div>
                        <div class="blog-date">May 28, 2023</div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap mb-3">
                            <span class="blog-tag bg-nr-orange/10 text-nr-orange">Marketing</span>
                        </div>
                        <h3 class="text-xl font-bold text-nr-green mb-3 line-clamp-2">Content Marketing Strategies That Drive Results</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Learn how to create a content marketing strategy that engages your audience and drives measurable business results.</p>
                        <div class="blog-author">
                            <div class="blog-author-image">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-semibold text-nr-green text-sm">Robert Johnson</p>
                                <p class="text-gray-500 text-xs">Marketing Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="#" class="blog-read-more">
                            Read Full Article
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Blog Card 3 -->
                <div class="blog-card bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                    <div class="relative">
                        <div class="blog-image h-48">
                            <img src="https://images.unsplash.com/photo-1434626881859-194d67b2b86f?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1474&amp;q=80" alt="Finance" class="w-full h-full object-cover">
                        </div>
                        <div class="blog-date">May 15, 2023</div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap mb-3">
                            <span class="blog-tag bg-nr-orange/10 text-nr-orange">Finance</span>
                        </div>
                        <h3 class="text-xl font-bold text-nr-green mb-3 line-clamp-2">Financial Planning for Small Business Owners</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">Essential financial planning strategies that every small business owner should implement to ensure long-term success and stability.</p>
                        <div class="blog-author">
                            <div class="blog-author-image">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Author" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-semibold text-nr-green text-sm">Amanda Lee</p>
                                <p class="text-gray-500 text-xs">Financial Advisor</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="#" class="blog-read-more">
                            Read Full Article
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- View All Button -->
            <div class="text-center">
                <a href="#all-posts" class="inline-block bg-nr-orange hover:bg-nr-orange/90 text-white font-bold py-3 px-8 rounded-lg transition-all duration-300">
                    View All Articles
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 inline" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Newsletter Signup -->
            <div class="mt-20">
                <div class="newsletter-bg rounded-2xl p-8 md:p-12 max-w-4xl mx-auto shadow-xl">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-2/3 mb-8 md:mb-0 md:pr-8">
                            <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Subscribe to Our Newsletter</h3>
                            <p class="text-white/80 mb-6">
                                Get the latest articles, resources, and insights delivered straight to your inbox.
                            </p>
                            <form class="flex flex-col sm:flex-row gap-4">
                                <input type="email" placeholder="Enter your email" class="flex-grow px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-nr-orange" required="">
                                <button type="submit" class="bg-nr-orange text-white font-bold px-6 py-3 rounded-lg hover:bg-nr-orange/90 transition-all duration-300 whitespace-nowrap">
                                    Subscribe
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 inline" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="md:w-1/3">
                            <svg class="w-full max-w-[200px] mx-auto" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <rect x="40" y="60" width="120" height="80" rx="8" fill="white" opacity="0.9"></rect>
                                <rect x="50" y="70" width="100" height="60" rx="4" fill="#ef8450" opacity="0.2"></rect>
                                <path d="M50,80 L100,110 L150,80" stroke="white" stroke-width="4" fill="none"></path>
                                <circle cx="100" cy="110" r="5" fill="#ef8450"></circle>
                                <rect x="70" y="90" width="60" height="4" rx="2" fill="white" opacity="0.5"></rect>
                                <rect x="70" y="100" width="40" height="4" rx="2" fill="white" opacity="0.5"></rect>
                                <rect x="70" y="110" width="50" height="4" rx="2" fill="white" opacity="0.5"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
</body></html>
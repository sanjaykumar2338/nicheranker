<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niche Ranker - Premium Backlink Provider</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'nr-green': '#10393b',
                        'nr-orange': '#ef8450',
                        'nr-dark': '#000000',
                        'nr-light': '#ffffff',
                        'nr-mint': '#3ebe8a',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                        'spin-slow': 'spin 8s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
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
            background-color: #ffffff;
        }
        
        .hero-section {
            background-color: #ffffff;
            position: relative;
            overflow: hidden;
        }
        
        .hero-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2310393b' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
            z-index: 0;
        }
        
        .accent-gradient {
            background: linear-gradient(135deg, #ef8450 0%, #f49b6b 100%);
        }
        
        .mint-gradient {
            background: linear-gradient(135deg, #3ebe8a 0%, #2ca875 100%);
        }
        
        .cta-button {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }
        
        .cta-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: all 0.6s ease;
        }
        
        .cta-button:hover::after {
            left: 100%;
        }
        
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }
        
        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            z-index: 0;
            animation: pulse-slow 8s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        .blob-1 {
            width: 300px;
            height: 300px;
            background-color: rgba(239, 132, 80, 0.08);
            top: -100px;
            right: 10%;
        }
        
        .blob-2 {
            width: 400px;
            height: 400px;
            background-color: rgba(16, 57, 59, 0.08);
            bottom: -200px;
            left: -100px;
            animation-delay: 2s;
        }
        
        .blob-3 {
            width: 250px;
            height: 250px;
            background-color: rgba(62, 190, 138, 0.08);
            top: 40%;
            right: 30%;
            animation-delay: 1s;
        }
        
        .hero-stats {
            background: #ffffff;
            border: 1px solid rgba(16, 57, 59, 0.1);
            border-radius: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .hero-stats:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .stat-number {
            background: linear-gradient(to right, #ef8450, #f49b6b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .lottie-container {
            position: relative;
            filter: drop-shadow(0 0 15px rgba(62, 190, 138, 0.4));
        }
        
        .lottie-container::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 20px;
            background: radial-gradient(ellipse at center, rgba(62, 190, 138, 0.3) 0%, rgba(62, 190, 138, 0) 70%);
            border-radius: 50%;
            filter: blur(5px);
            z-index: -1;
        }
        
        .highlight-text {
            position: relative;
            display: inline-block;
            color: #ef8450;
            font-weight: 800;
        }
        
        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 0;
            width: 100%;
            height: 40%;
            background-color: rgba(239, 132, 80, 0.2);
            z-index: -1;
            transform: skewX(-10deg);
        }
        
        .grid-pattern {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(16, 57, 59, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(16, 57, 59, 0.03) 1px, transparent 1px);
            background-size: 20px 20px;
            z-index: 0;
        }
        
        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: rgba(16, 57, 59, 0.2);
            animation: float 10s infinite;
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
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .fade-in-up-1 {
            animation-delay: 0.2s;
            opacity: 0;
        }
        
        .fade-in-up-2 {
            animation-delay: 0.4s;
            opacity: 0;
        }
        
        .fade-in-up-3 {
            animation-delay: 0.6s;
            opacity: 0;
        }
        
        .fade-in-up-4 {
            animation-delay: 0.8s;
            opacity: 0;
        }
        
        .serp-widget {
            position: absolute;
            bottom: -80px;
            right: 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 220px;
            overflow: hidden;
            transform: rotate(6deg);
            animation: float 6s ease-in-out infinite;
            animation-delay: 1.5s;
            z-index: 20;
            border: 1px solid rgba(16, 57, 59, 0.1);
        }
        
        .serp-result {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }
        
        .serp-result-1 {
            border-left-color: #ef8450;
            background-color: rgba(239, 132, 80, 0.05);
        }
        
        .serp-position {
            font-weight: bold;
            color: #10393b;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 8px;
        }
        
        .serp-position-1 {
            background-color: rgba(239, 132, 80, 0.2);
            color: #ef8450;
        }
        
        .link-icon {
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #10393b, #0a2627);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            box-shadow: 0 4px 10px rgba(16, 57, 59, 0.2);
        }
        
        .link-icon::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px dashed rgba(239, 132, 80, 0.5);
            animation: spin-slow 8s linear infinite;
        }
        
        .rank-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #ef8450;
            color: white;
            font-size: 10px;
            font-weight: bold;
            padding: 4px 8px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(239, 132, 80, 0.3);
            animation: pulse-slow 2s infinite;
        }
        
        .keyword-pill {
            display: inline-block;
            background: rgba(16, 57, 59, 0.1);
            color: #10393b;
            font-size: 10px;
            padding: 2px 8px;
            border-radius: 12px;
            margin-top: 4px;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(16, 57, 59, 0.1);
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .get-ranked-highlight {
            position: relative;
            display: inline-block;
            color: #ef8450;
            font-weight: 800;
        }
        
        .get-ranked-highlight::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 4px;
            background: #ef8450;
            border-radius: 2px;
        }
        
        /* Enhanced button hover effects */
        .register-btn {
            background-size: 200% auto;
            transition: all 0.5s ease;
        }
        
        .register-btn:hover {
            background-position: right center;
        }
        
        .zoom-btn {
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .zoom-btn:hover {
            background-color: rgba(62, 190, 138, 0.9);
        }
        
        .zoom-btn:hover .btn-icon {
            transform: scale(1.2);
        }
        
        .btn-icon {
            transition: transform 0.3s ease;
        }
        
        .backlink-icon {
            position: relative;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #10393b, #0a2627);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 12px rgba(16, 57, 59, 0.3);
            z-index: 10;
        }
        
        .backlink-icon::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px dashed rgba(239, 132, 80, 0.5);
            animation: spin-slow 8s linear infinite;
        }
        
        .plus-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ef8450;
            color: white;
            font-size: 12px;
            font-weight: bold;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(239, 132, 80, 0.3);
            animation: pulse-slow 2s infinite;
        }
        
        .dot-pattern {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(rgba(16, 57, 59, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            z-index: 0;
        }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Montserrat, sans-serif;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.left-10{left:2.5rem}.top-10{top:2.5rem}.right-0{right:0px}.right-10{right:2.5rem}.top-1\/2{top:50%}.z-10{z-index:10}.z-20{z-index:20}.mx-auto{margin-left:auto;margin-right:auto}.mb-1{margin-bottom:0.25rem}.mb-10{margin-bottom:2.5rem}.mb-12{margin-bottom:3rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.mr-2{margin-right:0.5rem}.mt-12{margin-top:3rem}.flex{display:flex}.grid{display:grid}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-10{height:2.5rem}.h-2{height:0.5rem}.h-3{height:0.75rem}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-2{width:0.5rem}.w-3{width:0.75rem}.max-w-7xl{max-width:80rem}.max-w-md{max-width:28rem}.max-w-xl{max-width:36rem}.-translate-y-1\/2{--tw-translate-y:-50%;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-center{justify-content:center}.gap-4{gap:1rem}.truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-nr-mint{--tw-bg-opacity:1;background-color:rgb(62 190 138 / var(--tw-bg-opacity, 1))}.bg-nr-green\/90{background-color:rgb(16 57 59 / 0.9)}.bg-nr-orange{--tw-bg-opacity:1;background-color:rgb(239 132 80 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-white{--tw-gradient-from:#fff var(--tw-gradient-from-position);--tw-gradient-to:rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.to-white\/0{--tw-gradient-to:rgb(255 255 255 / 0) var(--tw-gradient-to-position)}.p-4{padding:1rem}.p-3{padding:0.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-8{padding-left:2rem;padding-right:2rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-4{padding-top:1rem;padding-bottom:1rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-\[10px\]{font-size:10px}.text-xs{font-size:0.75rem;line-height:1rem}.font-bold{font-weight:700}.font-extrabold{font-weight:800}.font-medium{font-weight:500}.leading-tight{line-height:1.25}.text-nr-green{--tw-text-opacity:1;color:rgb(16 57 59 / var(--tw-text-opacity, 1))}.text-nr-green\/70{color:rgb(16 57 59 / 0.7)}.text-nr-green\/80{color:rgb(16 57 59 / 0.8)}.text-nr-green\/90{color:rgb(16 57 59 / 0.9)}.text-nr-orange{--tw-text-opacity:1;color:rgb(239 132 80 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}@media (min-width: 640px){.sm\:flex-row{flex-direction:row}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}}@media (min-width: 768px){.md\:py-24{padding-top:6rem;padding-bottom:6rem}.md\:text-5xl{font-size:3rem;line-height:1}}@media (min-width: 1024px){.lg\:mb-0{margin-bottom:0px}.lg\:w-1\/2{width:50%}.lg\:flex-row{flex-direction:row}.lg\:px-8{padding-left:2rem;padding-right:2rem}.lg\:pl-12{padding-left:3rem}.lg\:text-6xl{font-size:3.75rem;line-height:1}}</style><link rel="stylesheet" type="text/css" href="chrome-extension://gdnpkbipbholkoaggmlblpbmgemddbgb/css/awebChromeHelperInjected.min.css"></head>
<body>
    <!-- Hero Section -->
    <section class="hero-section min-h-screen flex items-center py-16 md:py-24 relative">
        <!-- Decorative elements -->
        <div class="hero-pattern"></div>
        <div class="grid-pattern"></div>
        <div class="dot-pattern"></div>
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
        
        <!-- Particles -->
        <div class="particle" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
        <div class="particle" style="top: 30%; left: 20%; animation-delay: 2s;"></div>
        <div class="particle" style="top: 70%; left: 80%; animation-delay: 1s;"></div>
        <div class="particle" style="top: 40%; left: 70%; animation-delay: 3s;"></div>
        <div class="particle" style="top: 80%; left: 30%; animation-delay: 2.5s;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-12 lg:mb-0">
                    <div class="max-w-xl">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-nr-green mb-6 leading-tight fade-in-up fade-in-up-1">
                            Buy Niche Backlinks That <span class="get-ranked-highlight">Get You Ranked.</span>
                        </h1>
                        <p class="text-xl text-nr-green/90 mb-8 fade-in-up fade-in-up-2">
                            Niche Ranker is the source backlink provider for more than <span class="font-bold text-nr-orange">500 SEO agencies</span> and backlink resellers every month.
                        </p>
                        <p class="text-lg text-nr-green/80 mb-10 fade-in-up fade-in-up-3">
                            Rank at the top of search engines with our reseller-priced, powerful backlinks.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 fade-in-up fade-in-up-4">
                            <a href="#register" class="cta-button register-btn accent-gradient text-white font-bold px-8 py-4 rounded-lg text-center">
                                Register For Free
                            </a>
                            <a href="#zoom-call" class="cta-button zoom-btn bg-nr-mint text-white font-medium px-6 py-4 rounded-lg flex items-center justify-center">
                                <span class="btn-icon mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                                    </svg>
                                </span>
                                Book A Strategy Zoom Call
                            </a>
                        </div>
                    </div>
                    
                    <!-- Stats -->
                    <div class="mt-12 grid grid-cols-2 gap-4 max-w-md fade-in-up fade-in-up-4" style="animation-delay: 1s;">
                        <div class="hero-stats p-4">
                            <p class="text-nr-green/70 text-sm mb-1">Trusted by</p>
                            <p class="stat-number text-2xl font-bold">500+</p>
                            <p class="text-nr-green text-sm">SEO Agencies</p>
                        </div>
                        <div class="hero-stats p-4">
                            <p class="text-nr-green/70 text-sm mb-1">Success Rate</p>
                            <p class="stat-number text-2xl font-bold">98.7%</p>
                            <p class="text-nr-green text-sm">Ranking Improvement</p>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 lg:pl-12 relative">
                    <!-- Backlink icon at top left of Lottie -->
                    <div class="absolute top-10 left-10 floating-element z-20" style="animation-delay: 1.2s;">
                        <div class="backlink-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                            <div class="plus-badge">+1</div>
                        </div>
                    </div>
                    
                    <div class="lottie-container floating-element">
                        <lottie-player src="https://cdn.prod.website-files.com/626dfdcea621228faa739353/679bc48468e31a5663768341_stairs%20climbing.json" background="transparent" speed="1" style="width: 100%; height: 500px;" loop="" autoplay="">
                        </lottie-player>
                    </div>
                    
                    <!-- Floating elements around the Lottie -->
                    <div class="absolute top-10 right-10 glass-card p-3 rounded-full shadow-lg floating-element" style="animation-delay: 1.5s;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    
                    <div class="absolute top-1/2 right-0 transform -translate-y-1/2 glass-card py-2 px-4 rounded-lg shadow-lg floating-element" style="animation-delay: 1s;">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-nr-orange mr-2"></div>
                            <span class="text-nr-green text-sm">Ranking</span>
                        </div>
                    </div>
                    
                    <!-- Creative SERP Widget - Moved much lower -->
                    <div class="serp-widget" style="bottom: -80px; right: 10px;">
                        <div class="bg-nr-green/90 text-white text-xs font-medium py-2 px-4">
                            <div class="flex items-center justify-center">
                                Search Results
                            </div>
                        </div>
                        
                        <div class="serp-result serp-result-1">
                            <div class="serp-position serp-position-1">1</div>
                            <div>
                                <div class="text-xs font-medium text-nr-green truncate" style="max-width: 150px;">Your Website</div>
                                <div class="text-[10px] text-gray-500">www.yoursite.com</div>
                                <div class="keyword-pill">Target Keyword</div>
                            </div>
                            <div class="rank-badge">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="serp-result">
                            <div class="serp-position">2</div>
                            <div>
                                <div class="text-xs text-gray-600 truncate" style="max-width: 150px;">Competitor Site</div>
                                <div class="text-[10px] text-gray-500">www.competitor.com</div>
                            </div>
                        </div>
                        
                        <div class="serp-result">
                            <div class="serp-position">3</div>
                            <div>
                                <div class="text-xs text-gray-600 truncate" style="max-width: 150px;">Another Site</div>
                                <div class="text-[10px] text-gray-500">www.another.com</div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-b from-white to-white/0 h-10"></div>
                    </div>
                </div>
            </div>
        </div>
    <div class="particle" style="top: 59.0722%; left: 70.1933%; width: 2.36391px; height: 2.36391px; opacity: 0.332591; animation-delay: 8.42871s;"></div><div class="particle" style="top: 12.7638%; left: 15.8604%; width: 5.34035px; height: 5.34035px; opacity: 0.22715; animation-delay: 5.84249s;"></div><div class="particle" style="top: 92.8639%; left: 77.5351%; width: 5.97803px; height: 5.97803px; opacity: 0.147192; animation-delay: 3.76772s;"></div><div class="particle" style="top: 59.2694%; left: 37.6959%; width: 3.29468px; height: 3.29468px; opacity: 0.289735; animation-delay: 5.08719s;"></div><div class="particle" style="top: 88.4128%; left: 6.51839%; width: 5.98489px; height: 5.98489px; opacity: 0.223074; animation-delay: 0.591573s;"></div><div class="particle" style="top: 10.7311%; left: 59.812%; width: 2.4483px; height: 2.4483px; opacity: 0.318691; animation-delay: 7.76841s;"></div><div class="particle" style="top: 71.4094%; left: 14.7394%; width: 2.43052px; height: 2.43052px; opacity: 0.314373; animation-delay: 1.8114s;"></div><div class="particle" style="top: 41.3784%; left: 30.4727%; width: 2.42155px; height: 2.42155px; opacity: 0.282618; animation-delay: 9.73183s;"></div><div class="particle" style="top: 83.3058%; left: 44.4427%; width: 5.28082px; height: 5.28082px; opacity: 0.376093; animation-delay: 2.36093s;"></div><div class="particle" style="top: 98.0498%; left: 48.6153%; width: 4.98842px; height: 4.98842px; opacity: 0.107181; animation-delay: 7.13268s;"></div><div class="particle" style="top: 34.4821%; left: 70.5873%; width: 4.02081px; height: 4.02081px; opacity: 0.180394; animation-delay: 4.08941s;"></div><div class="particle" style="top: 75.4022%; left: 85.8899%; width: 4.6906px; height: 4.6906px; opacity: 0.188949; animation-delay: 7.40323s;"></div><div class="particle" style="top: 47.8725%; left: 24.8468%; width: 5.15421px; height: 5.15421px; opacity: 0.153991; animation-delay: 9.51538s;"></div><div class="particle" style="top: 56.67%; left: 22.7488%; width: 5.33625px; height: 5.33625px; opacity: 0.119137; animation-delay: 9.1185s;"></div><div class="particle" style="top: 54.0919%; left: 79.3742%; width: 3.62375px; height: 3.62375px; opacity: 0.362922; animation-delay: 1.73679s;"></div></section>

    <script>
        // Create random floating particles
        function createParticles() {
            const heroSection = document.querySelector('.hero-section');
            const particleCount = 15;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random position
                const top = Math.random() * 100;
                const left = Math.random() * 100;
                
                // Random size
                const size = Math.random() * 4 + 2;
                
                // Random opacity
                const opacity = Math.random() * 0.3 + 0.1;
                
                // Random animation delay
                const delay = Math.random() * 10;
                
                particle.style.top = `${top}%`;
                particle.style.left = `${left}%`;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.opacity = opacity;
                particle.style.animationDelay = `${delay}s`;
                
                heroSection.appendChild(particle);
            }
        }
        
        // Call the function when the page loads
        window.addEventListener('load', createParticles);
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9408eef2d18791d6',t:'MTc0NzM3ODE0OC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>
<div id="awebChromeHelper" data-version="1.24.4"></div></body></html>
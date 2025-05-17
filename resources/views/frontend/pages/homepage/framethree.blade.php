<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niche Ranker - Premium Backlink Provider</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
            background: #f8fafc;
            overflow-x: hidden;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #10393b 0%, #0d2e30 100%);
        }
        
        .accent-gradient {
            background: linear-gradient(135deg, #ef8450 0%, #f49b6b 100%);
        }
        
        .mint-gradient {
            background: linear-gradient(135deg, #3ebe8a 0%, #2ca875 100%);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .pulse-slow {
            animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            z-index: 0;
            opacity: 0.6;
        }
        
        .blob-1 {
            width: 300px;
            height: 300px;
            background-color: rgba(239, 132, 80, 0.3);
            top: -100px;
            right: 10%;
            animation: blob-move-1 15s infinite alternate ease-in-out;
        }
        
        .blob-2 {
            width: 400px;
            height: 400px;
            background-color: rgba(16, 57, 59, 0.2);
            bottom: -200px;
            left: -100px;
            animation: blob-move-2 20s infinite alternate ease-in-out;
        }
        
        .blob-3 {
            width: 250px;
            height: 250px;
            background-color: rgba(62, 190, 138, 0.2);
            top: 40%;
            right: 30%;
            animation: blob-move-3 18s infinite alternate ease-in-out;
        }
        
        @keyframes blob-move-1 {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(50px, 50px) scale(1.2); }
        }
        
        @keyframes blob-move-2 {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(70px, -30px) scale(1.3); }
        }
        
        @keyframes blob-move-3 {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(-50px, 30px) scale(1.1); }
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
        
        .step-card {
            transition: all 0.5s ease;
            position: relative;
            overflow: hidden;
        }
        
        .step-card:hover {
            transform: translateY(-10px);
        }
        
        .step-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #ef8450, #f49b6b);
        }
        
        .service-card {
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            transform: translateY(0);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-card::after {
            content: '';
            position: absolute;
            top: -100%;
            left: -100%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(239, 132, 80, 0.1) 0%, transparent 70%);
            transition: all 0.6s ease;
        }
        
        .service-card:hover::after {
            top: -50%;
            left: -50%;
        }
        
        .price-tag {
            position: relative;
            overflow: hidden;
        }
        
        .price-tag::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: all 0.6s ease;
        }
        
        .price-tag:hover::before {
            left: 100%;
        }
        
        .order-button {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            z-index: 1;
        }
        
        .order-button::before {
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
        
        .order-button:hover::before {
            left: 100%;
        }
        
        .order-button:hover svg {
            transform: translateX(5px);
        }
        
        .order-button svg {
            transition: transform 0.3s ease;
        }
        
        .testimonial-card {
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 20px;
            font-size: 120px;
            font-weight: 900;
            color: rgba(239, 132, 80, 0.1);
            font-family: serif;
            line-height: 1;
        }
        
        .grid-pattern {
            background-image: 
                linear-gradient(rgba(16, 57, 59, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(16, 57, 59, 0.03) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        
        .dot-pattern {
            background-image: radial-gradient(rgba(16, 57, 59, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-element {
            opacity: 0;
            transform: translateY(30px);
        }
        
        .fade-in-element.visible {
            animation: fadeInUp 0.8s ease forwards;
        }
        
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .scale-in-element {
            opacity: 0;
            transform: scale(0.9);
        }
        
        .scale-in-element.visible {
            animation: scaleIn 0.8s ease forwards;
        }
        
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        .stagger-5 { animation-delay: 0.5s; }
        .stagger-6 { animation-delay: 0.6s; }
        
        .hexagon {
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        }
        
        .service-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 12px;
            z-index: 10;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .popular-badge {
            background: linear-gradient(135deg, #ef8450 0%, #f49b6b 100%);
            color: white;
        }
        
        .wave-divider {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }
        
        .wave-divider svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 70px;
        }
        
        .wave-divider .shape-fill {
            fill: #FFFFFF;
        }
        
        .wave-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }
        
        .wave-top svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 70px;
        }
        
        .wave-top .shape-fill {
            fill: #FFFFFF;
        }
        
        .counter-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .counter {
            font-size: 2.5rem;
            font-weight: 700;
            color: #10393b;
        }
        
        .counter-suffix {
            font-size: 1.5rem;
            font-weight: 600;
            color: #ef8450;
            margin-left: 0.25rem;
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 1rem;
            background: rgba(16, 57, 59, 0.05);
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            background: rgba(239, 132, 80, 0.1);
            transform: scale(1.1);
        }
        
        .feature-card {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }
        
        .marquee {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
        }
        
        .marquee-content {
            display: inline-block;
            animation: marquee 30s linear infinite;
        }
        
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.visible{visibility:visible}.absolute{position:absolute}.relative{position:relative}.inset-0{inset:0px}.left-0{left:0px}.top-1\/2{top:50%}.z-0{z-index:0}.z-10{z-index:10}.mx-4{margin-left:1rem;margin-right:1rem}.mx-auto{margin-left:auto;margin-right:auto}.mb-16{margin-bottom:4rem}.mb-2{margin-bottom:0.5rem}.mb-3{margin-bottom:0.75rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.ml-2{margin-left:0.5rem}.mr-2{margin-right:0.5rem}.mr-4{margin-right:1rem}.mt-16{margin-top:4rem}.mt-20{margin-top:5rem}.mt-6{margin-top:1.5rem}.inline-block{display:inline-block}.inline{display:inline}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.hidden{display:none}.h-1{height:0.25rem}.h-10{height:2.5rem}.h-12{height:3rem}.h-16{height:4rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-8{height:2rem}.h-full{height:100%}.w-10{width:2.5rem}.w-12{width:3rem}.w-16{width:4rem}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-8{width:2rem}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-4xl{max-width:56rem}.-translate-y-1\/2{--tw-translate-y:-50%;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.space-y-2 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.5rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.rounded-2xl{border-radius:1rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-xl{border-radius:0.75rem}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-nr-green{--tw-bg-opacity:1;background-color:rgb(16 57 59 / var(--tw-bg-opacity, 1))}.bg-nr-orange{--tw-bg-opacity:1;background-color:rgb(239 132 80 / var(--tw-bg-opacity, 1))}.bg-nr-orange\/10{background-color:rgb(239 132 80 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-r{background-image:linear-gradient(to right, var(--tw-gradient-stops))}.from-nr-orange\/20{--tw-gradient-from:rgb(239 132 80 / 0.2) var(--tw-gradient-from-position);--tw-gradient-to:rgb(239 132 80 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-nr-orange{--tw-gradient-to:rgb(239 132 80 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #ef8450 var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-nr-orange\/20{--tw-gradient-to:rgb(239 132 80 / 0.2) var(--tw-gradient-to-position)}.p-6{padding:1.5rem}.p-8{padding:2rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-20{padding-top:5rem;padding-bottom:5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.py-4{padding-top:1rem;padding-bottom:1rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.text-nr-green{--tw-text-opacity:1;color:rgb(16 57 59 / var(--tw-text-opacity, 1))}.text-nr-green\/70{color:rgb(16 57 59 / 0.7)}.text-nr-green\/80{color:rgb(16 57 59 / 0.8)}.text-nr-green\/90{color:rgb(16 57 59 / 0.9)}.text-nr-orange{--tw-text-opacity:1;color:rgb(239 132 80 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.text-white\/80{color:rgb(255 255 255 / 0.8)}.text-yellow-400{--tw-text-opacity:1;color:rgb(250 204 21 / var(--tw-text-opacity, 1))}.opacity-30{opacity:0.3}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.hover\:shadow-2xl:hover{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}@media (min-width: 768px){.md\:block{display:block}.md\:w-1\/3{width:33.333333%}.md\:w-1\/4{width:25%}.md\:w-3\/4{width:75%}.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:flex-row{flex-direction:row}.md\:items-start{align-items:flex-start}.md\:p-10{padding:2.5rem}.md\:p-12{padding:3rem}.md\:text-2xl{font-size:1.5rem;line-height:2rem}.md\:text-3xl{font-size:1.875rem;line-height:2.25rem}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}}@media (min-width: 1024px){.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}}</style><link rel="stylesheet" type="text/css" href="chrome-extension://gdnpkbipbholkoaggmlblpbmgemddbgb/css/awebChromeHelperInjected.min.css"></head>
<body>
    <!-- Process Section -->
    <section class="py-20 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-nr-green mb-4 scale-in-element visible">
                    <span class="highlight-text">How It Works</span>
                </h2>
                <p class="text-lg text-nr-green/70 max-w-2xl mx-auto scale-in-element stagger-1 visible">
                    Our simple 3-step process to boost your website's rankings
                </p>
            </div>
            
            <div class="flex flex-col md:flex-row gap-6 relative">
                <!-- Connection Lines (Desktop Only) -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-nr-orange/20 via-nr-orange to-nr-orange/20 transform -translate-y-1/2 z-0"></div>
                
                <!-- Step 1 -->
                <div class="md:w-1/3 relative z-10 scale-in-element visible">
                    <div class="bg-white rounded-xl shadow-xl p-8 h-full transform transition-all hover:shadow-2xl">
                        <div class="hexagon w-16 h-16 bg-nr-orange flex items-center justify-center mb-6 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-nr-green mb-3 text-center">Create Account</h3>
                        <p class="text-nr-green/70 text-center">Create a free account to get access to our pricing and exclusive backlink opportunities.</p>
                        
                        <div class="mt-6 flex justify-center">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-nr-green text-white font-bold text-xl">1</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="md:w-1/3 relative z-10 scale-in-element stagger-2 visible">
                    <div class="bg-white rounded-xl shadow-xl p-8 h-full transform transition-all hover:shadow-2xl">
                        <div class="hexagon w-16 h-16 bg-nr-orange flex items-center justify-center mb-6 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-nr-green mb-3 text-center">Place Order</h3>
                        <p class="text-nr-green/70 text-center">Place an order for any of our various backlink services tailored to your needs.</p>
                        
                        <div class="mt-6 flex justify-center">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-nr-green text-white font-bold text-xl">2</span>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="md:w-1/3 relative z-10 scale-in-element stagger-3 visible">
                    <div class="bg-white rounded-xl shadow-xl p-8 h-full transform transition-all hover:shadow-2xl">
                        <div class="hexagon w-16 h-16 bg-nr-orange flex items-center justify-center mb-6 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-nr-green mb-3 text-center">Rank Higher</h3>
                        <p class="text-nr-green/70 text-center">Watch your search engine rankings increase as our powerful backlinks take effect.</p>
                        
                        <div class="mt-6 flex justify-center">
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-nr-green text-white font-bold text-xl">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <!-- Background Blobs -->
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-nr-green mb-4 scale-in-element visible">
                    <span class="highlight-text">Why Choose Us</span>
                </h2>
                <p class="text-lg text-nr-green/70 max-w-2xl mx-auto scale-in-element stagger-1 visible">
                    High-quality backlinks that make a real difference
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg scale-in-element visible">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-nr-green mb-2">Effective Links</h3>
                    <p class="text-nr-green/70">High metric links from websites in your niche. The type of links Google gives all of the value to in 2025.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg scale-in-element stagger-2 visible">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-nr-green mb-2">Affordable Pricing</h3>
                    <p class="text-nr-green/70">Get premium backlinks at 50% less than our competitors with our reseller pricing structure.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card bg-white p-6 rounded-xl shadow-lg scale-in-element stagger-3 visible">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-nr-green mb-2">Fast Results</h3>
                    <p class="text-nr-green/70">Our clients typically see ranking improvements within weeks of implementing our backlink strategy.</p>
                </div>
            </div>
            
            <!-- Testimonial -->
            <div class="mt-20 scale-in-element stagger-4 visible">
                <div class="bg-white rounded-xl shadow-xl p-8 md:p-10 max-w-4xl mx-auto testimonial-card">
                    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                        <div class="md:w-3/4">
                            <svg class="w-12 h-12 text-nr-orange mb-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"></path>
                            </svg>
                            <p class="text-xl md:text-2xl font-medium text-nr-green/90 mb-6">
                                "Niche Ranker is the biggest reason I am able to remain in first position for all of the competitive SEO keywords in my City."
                            </p>
                            <div class="flex items-center">
                                <div class="mr-4">
                                    <div class="w-16 h-16 rounded-full bg-nr-green flex items-center justify-center text-white text-xl font-bold">
                                        JB
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-nr-green">Josh Bolstad</h4>
                                    <p class="text-nr-green/70 text-sm">CEO, updigital.ca</p>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/4 flex flex-col items-center justify-center">
                            <div class="flex mb-2">
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <p class="text-nr-green/70 text-sm">Verified Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 relative overflow-hidden" id="pricing">
        <!-- Background Elements -->
        <div class="blob blob-3" style="top: 10%; left: 5%;"></div>
        <div class="blob blob-1" style="bottom: 10%; right: 5%;"></div>
        <div class="dot-pattern absolute inset-0 opacity-30"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-nr-green mb-4 scale-in-element visible">
                    <span class="highlight-text">Reseller Pricing</span>
                </h2>
                <p class="text-lg text-nr-green/70 max-w-2xl mx-auto scale-in-element stagger-1 visible">
                    Backlinks without the markup. Premium quality at wholesale prices.
                </p>
            </div>
            
            <!-- Pricing Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Card 1: Niche Edits -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden scale-in-element visible">
                    <div class="service-badge popular-badge">Popular</div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-nr-orange/10 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nr-green">Niche Edits</h3>
                        </div>
                        
                        <p class="text-nr-green/70 mb-6">
                            Powerful links that are placed within aged, indexed content.
                        </p>
                        
                        <div class="price-tag bg-nr-green text-white font-bold py-2 px-4 rounded-lg inline-block mb-6">
                            For as low as $21/link
                        </div>
                        
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Aged, indexed content</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Contextual placement</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Niche-relevant sites</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="p-6 bg-gray-50">
                        <a href="#order" class="order-button bg-nr-orange text-white font-bold py-3 px-6 rounded-lg w-full flex items-center justify-center">
                            CLICK HERE TO ORDER
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Card 2: Max OBL Links -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden scale-in-element stagger-2 visible">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-nr-orange/10 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nr-green">Max OBL Links</h3>
                        </div>
                        
                        <p class="text-nr-green/70 mb-6">
                            Homepage links for websites in competitive industries.
                        </p>
                        
                        <div class="price-tag bg-nr-green text-white font-bold py-2 px-4 rounded-lg inline-block mb-6">
                            For as low as $9.95/link
                        </div>
                        
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Homepage placement</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">High authority sites</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Competitive industries</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="p-6 bg-gray-50">
                        <a href="#order" class="order-button bg-nr-orange text-white font-bold py-3 px-6 rounded-lg w-full flex items-center justify-center">
                            CLICK HERE TO ORDER
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Card 3: Forum Comments -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden scale-in-element stagger-3 visible">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-nr-orange/10 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nr-green">Forum Comments</h3>
                        </div>
                        
                        <p class="text-nr-green/70 mb-6">
                            Social links that push rankings and drive traffic.
                        </p>
                        
                        <div class="price-tag bg-nr-green text-white font-bold py-2 px-4 rounded-lg inline-block mb-6">
                            For as low as $4.50/link
                        </div>
                        
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Active forum placement</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Drives referral traffic</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Natural link profile</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="p-6 bg-gray-50">
                        <a href="#order" class="order-button bg-nr-orange text-white font-bold py-3 px-6 rounded-lg w-full flex items-center justify-center">
                            CLICK HERE TO ORDER
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Additional Services -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                <!-- DR 30+, 500+ Traffic Links -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden scale-in-element stagger-4 visible">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-nr-orange/10 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nr-green">DR 30+, 500+ Traffic Links</h3>
                        </div>
                        
                        <p class="text-nr-green/70 mb-6">
                            Links with a domain rating of 30+ and 500+ Traffic.
                        </p>
                        
                        <div class="price-tag bg-nr-green text-white font-bold py-2 px-4 rounded-lg inline-block mb-6">
                            For as low as $59/link
                        </div>
                        
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Domain Rating 30+</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">500+ Monthly Traffic</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Powerful ranking boost</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="p-6 bg-gray-50">
                        <a href="#order" class="order-button bg-nr-orange text-white font-bold py-3 px-6 rounded-lg w-full flex items-center justify-center">
                            CLICK HERE TO ORDER
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- DR 30+, 500+ Traffic Guest Posts -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden scale-in-element stagger-5 visible">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-nr-orange/10 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nr-green">DR 30+, 500+ Traffic Guest Posts</h3>
                        </div>
                        
                        <p class="text-nr-green/70 mb-6">
                            Contextual backlinks from authoritative websites.
                        </p>
                        
                        <div class="price-tag bg-nr-green text-white font-bold py-2 px-4 rounded-lg inline-block mb-6">
                            For as low as $59/link
                        </div>
                        
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Full article creation</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Contextual placement</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">High authority sites</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="p-6 bg-gray-50">
                        <a href="#order" class="order-button bg-nr-orange text-white font-bold py-3 px-6 rounded-lg w-full flex items-center justify-center">
                            CLICK HERE TO ORDER
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Niche PBN Links -->
                <div class="service-card bg-white rounded-xl shadow-lg overflow-hidden scale-in-element stagger-6 visible">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-nr-orange/10 flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-nr-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-nr-green">Niche PBN Links</h3>
                        </div>
                        
                        <p class="text-nr-green/70 mb-6">
                            Our heavy-hitting, private inventory, "Niche PBN Links".
                        </p>
                        
                        <div class="price-tag bg-nr-green text-white font-bold py-2 px-4 rounded-lg inline-block mb-6">
                            For as low as $5.40/Link
                        </div>
                        
                        <ul class="mb-6 space-y-2">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Private blog network</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Niche-relevant sites</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-nr-orange mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-nr-green/80">Powerful ranking boost</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="p-6 bg-gray-50">
                        <a href="#order" class="order-button bg-nr-orange text-white font-bold py-3 px-6 rounded-lg w-full flex items-center justify-center">
                            CLICK HERE TO ORDER
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- CTA Section -->
            <div class="mt-16 text-center scale-in-element visible">
                <div class="bg-nr-green rounded-2xl p-8 md:p-12 max-w-4xl mx-auto shadow-xl">
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-6">Ready to Boost Your Rankings?</h3>
                    <p class="text-white/80 mb-8 max-w-2xl mx-auto">
                        Create your free account today and get access to our wholesale backlink pricing.
                    </p>
                    <a href="#register" class="inline-block accent-gradient text-white font-bold px-10 py-5 rounded-lg text-xl order-button">
                        Create Free Account
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 inline" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Banner -->
    <div class="bg-nr-orange py-4 overflow-hidden">
        <div class="marquee">
            <div class="marquee-content">
                <span class="text-white font-bold mx-4">50% LESS THAN COMPETITORS</span>
                <span class="text-white mx-4">•</span>
                <span class="text-white font-bold mx-4">HIGH QUALITY BACKLINKS</span>
                <span class="text-white mx-4">•</span>
                <span class="text-white font-bold mx-4">RANK HIGHER IN GOOGLE</span>
                <span class="text-white mx-4">•</span>
                <span class="text-white font-bold mx-4">WHOLESALE PRICING</span>
                <span class="text-white mx-4">•</span>
                <span class="text-white font-bold mx-4">50% LESS THAN COMPETITORS</span>
                <span class="text-white mx-4">•</span>
                <span class="text-white font-bold mx-4">HIGH QUALITY BACKLINKS</span>
                <span class="text-white mx-4">•</span>
                <span class="text-white font-bold mx-4">RANK HIGHER IN GOOGLE</span>
                <span class="text-white mx-4">•</span>
                <span class="text-white font-bold mx-4">WHOLESALE PRICING</span>
            </div>
        </div>
    </div>

    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        
        document.addEventListener('DOMContentLoaded', () => {
            // Observe all fade-in and scale-in elements
            document.querySelectorAll('.fade-in-element, .scale-in-element').forEach(el => {
                observer.observe(el);
            });
            
            // Counter animation
            const counters = document.querySelectorAll('.counter');
            const speed = 200;
            
            counters.forEach(counter => {
                const animate = () => {
                    const value = +counter.getAttribute('data-target');
                    const data = +counter.innerText;
                    
                    const time = value / speed;
                    if (data < value) {
                        counter.innerText = Math.ceil(data + time);
                        setTimeout(animate, 1);
                    } else {
                        counter.innerText = value;
                    }
                }
                
                animate();
            });
        });
    </script>
</body></html>
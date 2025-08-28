<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💖 فاطمة - رسالة حب خاصة</title>
    <meta name="description" content="رسالة حب رومانسية خاصة لفاطمة - تصميم احترافي مع رسائل حب عربية">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💖</text></svg>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Amiri:ital,wght@0,400;0,700;1,400&family=Cairo:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --background: hsl(0, 0%, 1%);
            --foreground: hsl(0, 0%, 98%);
            --card: hsl(220, 13%, 7%);
            --card-foreground: hsl(0, 0%, 95%);
            --muted-foreground: hsl(0, 0%, 60%);
            --border: hsl(220, 13%, 18%);
            --romantic-pink: hsl(340, 100%, 70%);
            --romantic-gold: hsl(45, 100%, 60%);
            --romantic-purple: hsl(280, 100%, 70%);
            --romantic-coral: hsl(350, 100%, 65%);
            --glass-bg: rgba(255, 255, 255, 0.02);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: var(--background);
            color: var(--foreground);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .font-amiri { font-family: 'Amiri', serif; }
        .font-cairo { font-family: 'Cairo', sans-serif; }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        @keyframes sparkle {
            0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.7; }
            50% { transform: scale(1.2) rotate(180deg); opacity: 1; }
        }

        @keyframes breathe {
            0%, 100% { transform: scale(1); filter: blur(0px); }
            50% { transform: scale(1.05); filter: blur(0.5px); }
        }

        @keyframes gradientFlow {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes floatUp {
            0% { transform: translateY(0) rotate(0deg) scale(0); opacity: 0; }
            10% { opacity: 1; transform: translateY(-10vh) rotate(36deg) scale(1); }
            100% { transform: translateY(-100vh) rotate(360deg) scale(0.8); opacity: 0; }
        }

        .floating-heart { animation: float 6s ease-in-out infinite; }
        .floating-heart:nth-child(odd) { animation-delay: 2s; }
        .floating-heart:nth-child(3n) { animation-delay: 4s; }
        
        .animate-sparkle { animation: sparkle 2s ease-in-out infinite; }
        .animate-breathe { animation: breathe 4s ease-in-out infinite; }
        .animate-float-up { animation: floatUp 3s ease-out forwards; }

        .gradient-text {
            background: linear-gradient(135deg, #FFD700 0%, #FF1493 25%, #BA55D3 50%, #FF69B4 75%, #FFD700 100%);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientFlow 4s ease-in-out infinite;
        }

        .text-glow {
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.8), 0 0 40px rgba(255, 20, 147, 0.6), 0 0 60px rgba(186, 85, 211, 0.4);
        }

        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.1), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        .glass-intense {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4), inset 0 2px 0 rgba(255, 255, 255, 0.15), inset 0 -2px 0 rgba(0, 0, 0, 0.15);
            border-radius: 12px;
        }

        .romantic-border {
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .romantic-border::before {
            content: '';
            position: absolute;
            inset: -1px;
            padding: 1px;
            background: linear-gradient(135deg, #FFD700, #FF1493, #BA55D3);
            border-radius: inherit;
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: xor;
            -webkit-mask-composite: xor;
        }

        .premium-shadow {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 8px 25px rgba(255, 20, 147, 0.15), 0 12px 35px rgba(186, 85, 211, 0.1);
        }

        .ultra-glow {
            position: relative;
            overflow: hidden;
        }

        .ultra-glow::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, #FF1493, transparent, #FFD700, transparent, #BA55D3, transparent);
            animation: rotate 4s linear infinite;
            z-index: -1;
        }

        .ultra-glow::after {
            content: '';
            position: absolute;
            inset: 2px;
            background: var(--background);
            border-radius: inherit;
            z-index: -1;
        }

        /* Colors */
        .text-romantic-coral { color: var(--romantic-coral); }
        .text-romantic-gold { color: var(--romantic-gold); }
        .text-romantic-purple { color: var(--romantic-purple); }
        .text-romantic-pink { color: var(--romantic-pink); }
        .text-muted-foreground { color: var(--muted-foreground); }
        .text-foreground { color: var(--foreground); }

        /* Layout */
        .fixed { position: fixed; }
        .absolute { position: absolute; }
        .relative { position: relative; }
        .inset-0 { top: 0; right: 0; bottom: 0; left: 0; }
        .z-0 { z-index: 0; }
        .z-10 { z-index: 10; }
        .z-50 { z-index: 50; }
        .pointer-events-none { pointer-events: none; }

        /* Flexbox & Grid */
        .flex { display: flex; }
        .grid { display: grid; }
        .items-center { align-items: center; }
        .justify-center { justify-content: center; }
        .text-center { text-align: center; }
        .grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        .gap-6 { gap: 24px; }
        .gap-8 { gap: 32px; }
        .gap-10 { gap: 40px; }

        /* Spacing */
        .p-6 { padding: 24px; }
        .p-8 { padding: 32px; }
        .p-10 { padding: 40px; }
        .p-12 { padding: 48px; }
        .p-16 { padding: 64px; }
        .py-12 { padding-top: 48px; padding-bottom: 48px; }
        .px-6 { padding-left: 24px; padding-right: 24px; }
        .px-12 { padding-left: 48px; padding-right: 48px; }
        .mb-2 { margin-bottom: 8px; }
        .mb-4 { margin-bottom: 16px; }
        .mb-6 { margin-bottom: 24px; }
        .mb-8 { margin-bottom: 32px; }
        .mb-10 { margin-bottom: 40px; }
        .mb-12 { margin-bottom: 48px; }
        .mb-16 { margin-bottom: 64px; }
        .mb-20 { margin-bottom: 80px; }
        .mt-4 { margin-top: 16px; }
        .mt-6 { margin-top: 24px; }
        .mt-8 { margin-top: 32px; }
        .mx-2 { margin-left: 8px; margin-right: 8px; }
        .mx-3 { margin-left: 12px; margin-right: 12px; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .ml-3 { margin-left: 12px; }

        /* Typography */
        .text-lg { font-size: 18px; }
        .text-xl { font-size: 20px; }
        .text-2xl { font-size: 24px; }
        .text-3xl { font-size: 30px; }
        .text-4xl { font-size: 36px; }
        .text-5xl { font-size: 48px; }
        .text-7xl { font-size: 72px; }
        .text-9xl { font-size: 128px; }
        .font-bold { font-weight: 700; }
        .leading-relaxed { line-height: 1.625; }

        /* Sizing */
        .min-h-screen { min-height: 100vh; }
        .max-w-2xl { max-width: 672px; }
        .max-w-3xl { max-width: 768px; }
        .max-w-4xl { max-width: 896px; }
        .max-w-6xl { max-width: 1152px; }

        /* Effects */
        .opacity-90 { opacity: 0.9; }
        .opacity-40 { opacity: 0.4; }
        .opacity-35 { opacity: 0.35; }
        .opacity-30 { opacity: 0.3; }
        .opacity-25 { opacity: 0.25; }
        .opacity-20 { opacity: 0.2; }
        .drop-shadow-lg { filter: drop-shadow(0 10px 8px rgba(0, 0, 0, 0.04)) drop-shadow(0 4px 3px rgba(0, 0, 0, 0.1)); }
        .drop-shadow-xl { filter: drop-shadow(0 20px 13px rgba(0, 0, 0, 0.03)) drop-shadow(0 8px 5px rgba(0, 0, 0, 0.08)); }

        /* Positioning */
        .top-10 { top: 40px; }
        .top-20 { top: 80px; }
        .top-32 { top: 128px; }
        .top-60 { top: 240px; }
        .top-1\/2 { top: 50%; }
        .top-1\/3 { top: 33.333333%; }
        .bottom-20 { bottom: 80px; }
        .bottom-40 { bottom: 160px; }
        .bottom-1\/3 { bottom: 33.333333%; }
        .left-10 { left: 40px; }
        .left-16 { left: 64px; }
        .left-1\/3 { left: 33.333333%; }
        .left-1\/4 { left: 25%; }
        .right-10 { right: 40px; }
        .right-20 { right: 80px; }
        .right-1\/3 { right: 33.333333%; }
        .right-1\/4 { right: 25%; }
        .-top-6 { top: -24px; }
        .-right-6 { right: -24px; }
        .-bottom-6 { bottom: -24px; }
        .-left-6 { left: -24px; }
        .-right-12 { right: -48px; }

        /* Transforms */
        .transform { transform: translateX(var(--tw-translate-x, 0)) translateY(var(--tw-translate-y, 0)) rotate(var(--tw-rotate, 0)) skewX(var(--tw-skew-x, 0)) skewY(var(--tw-skew-y, 0)) scaleX(var(--tw-scale-x, 1)) scaleY(var(--tw-scale-y, 1)); }
        .-translate-y-1\/2 { --tw-translate-y: -50%; }

        /* Transitions */
        .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .transition-opacity { transition-property: opacity; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .transition-colors { transition-property: color, background-color, border-color, text-decoration-color, fill, stroke; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .transition-transform { transition-property: transform; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .duration-300 { transition-duration: 300ms; }
        .duration-500 { transition-duration: 500ms; }

        /* Hover effects */
        .hover\\:scale-105:hover { transform: scale(1.05); }
        .hover\\:scale-110:hover { transform: scale(1.1); }
        .hover\\:scale-\\[1\\.02\\]:hover { transform: scale(1.02); }
        .hover\\:rotate-1:hover { transform: rotate(1deg); }
        .hover\\:-rotate-1:hover { transform: rotate(-1deg); }
        .hover\\:rotate-12:hover { transform: rotate(12deg); }
        .hover\\:opacity-100:hover { opacity: 1; }
        .hover\\:text-romantic-gold:hover { color: var(--romantic-gold); }
        .hover\\:text-romantic-coral:hover { color: var(--romantic-coral); }
        .hover\\:text-romantic-purple:hover { color: var(--romantic-purple); }
        .hover\\:text-foreground:hover { color: var(--foreground); }
        .group:hover .group-hover\\:text-romantic-gold { color: var(--romantic-gold); }
        .group:hover .group-hover\\:text-romantic-coral { color: var(--romantic-coral); }
        .group:hover .group-hover\\:text-romantic-purple { color: var(--romantic-purple); }
        .group:hover .group-hover\\:text-foreground { color: var(--foreground); }
        .group:hover .group-hover\\:rotate-12 { transform: rotate(12deg); }

        /* Button styles */
        .btn-surprise {
            position: relative;
            overflow: hidden;
            color: white;
            font-weight: 700;
            font-size: 24px;
            padding: 24px 48px;
            border-radius: 9999px;
            border: none;
            cursor: pointer;
            transition: all 0.5s;
        }

        .btn-surprise:hover {
            transform: scale(1.1);
        }

        .btn-surprise .btn-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, var(--romantic-coral), var(--romantic-purple), var(--romantic-gold));
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .btn-surprise:hover .btn-bg {
            opacity: 1;
        }

        .btn-content {
            position: relative;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Responsive */
        @media (min-width: 768px) {
            .md\\:text-2xl { font-size: 24px; }
            .md\\:text-3xl { font-size: 30px; }
            .md\\:text-4xl { font-size: 36px; }
            .md\\:text-5xl { font-size: 48px; }
            .md\\:text-9xl { font-size: 128px; }
            .md\\:p-12 { padding: 48px; }
            .md\\:p-16 { padding: 64px; }
            .md\\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .md\\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
        }

        /* Background gradients */
        .bg-gradient-to-br {
            background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
        }

        .bg-gradient-to-tr {
            background-image: linear-gradient(to top right, var(--tw-gradient-stops));
        }

        .from-background { --tw-gradient-from: var(--background); --tw-gradient-to: var(--background); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to); }
        .via-black { --tw-gradient-to: black; --tw-gradient-stops: var(--tw-gradient-from), black, var(--tw-gradient-to); }
        .to-background { --tw-gradient-to: var(--background); }
        .from-romantic-pink\/10 { --tw-gradient-from: hsla(340, 100%, 70%, 0.1); --tw-gradient-to: hsla(340, 100%, 70%, 0); --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to); }
        .via-transparent { --tw-gradient-to: transparent; --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to); }
        .to-romantic-purple\/10 { --tw-gradient-to: hsla(280, 100%, 70%, 0.1); }

        /* Space utility */
        .space-y-6 > * + * { margin-top: 24px; }
        .space-y-8 > * + * { margin-top: 32px; }

        /* Inline block */
        .inline-block { display: inline-block; }

        /* Overflow */
        .overflow-hidden { overflow: hidden; }

        /* Float */
        .float-left { float: left; }
    </style>
</head>
<body>
    <div class="min-h-screen relative overflow-hidden" dir="rtl">
        <!-- Animated Background -->
        <div class="fixed inset-0 bg-gradient-to-br from-background via-black to-background">
            <div class="absolute inset-0 bg-gradient-to-tr from-romantic-pink/10 via-transparent to-romantic-purple/10"></div>
            <div class="absolute inset-0" style="background: radial-gradient(circle at 50% 50%, rgba(255,20,147,0.1), transparent 50%);"></div>
        </div>
        
        <!-- Floating Hearts -->
        <div class="fixed inset-0 pointer-events-none z-0">
            <i class="fas fa-heart floating-heart absolute top-10 left-10 text-romantic-coral opacity-40 drop-shadow-lg animate-sparkle" style="font-size: 30px;"></i>
            <i class="fas fa-heart floating-heart absolute top-32 right-20 text-romantic-gold opacity-35 drop-shadow-lg animate-sparkle" style="font-size: 24px; animation-delay: 1s;"></i>
            <i class="fas fa-heart floating-heart absolute top-60 left-1/4 text-romantic-purple opacity-30 drop-shadow-lg animate-sparkle" style="font-size: 24px; animation-delay: 2s;"></i>
            <i class="fas fa-heart floating-heart absolute bottom-40 right-10 text-romantic-coral opacity-40 drop-shadow-lg animate-sparkle" style="font-size: 30px; animation-delay: 3s;"></i>
            <i class="fas fa-heart floating-heart absolute bottom-20 left-16 text-romantic-gold opacity-35 drop-shadow-lg animate-sparkle" style="font-size: 24px; animation-delay: 4s;"></i>
            <i class="fas fa-heart floating-heart absolute top-1/3 right-1/3 text-romantic-purple opacity-30 drop-shadow-lg animate-sparkle" style="font-size: 24px; animation-delay: 5s;"></i>
            <i class="fas fa-sparkles floating-heart absolute top-20 right-1/4 text-romantic-gold opacity-25 drop-shadow-lg animate-sparkle" style="font-size: 20px; animation-delay: 1.5s;"></i>
            <i class="fas fa-sparkles floating-heart absolute bottom-1/3 left-10 text-romantic-coral opacity-20 drop-shadow-lg animate-sparkle" style="font-size: 18px; animation-delay: 2.5s;"></i>
            <i class="fas fa-star floating-heart absolute top-1/2 left-1/3 text-romantic-purple opacity-25 drop-shadow-lg animate-sparkle" style="font-size: 18px; animation-delay: 3.5s;"></i>
        </div>

        <!-- Main Container -->
        <div class="relative z-10 container mx-auto px-6 py-12 max-w-6xl">
            
            <!-- Header Section -->
            <header class="text-center mb-20">
                <div class="relative inline-block animate-breathe">
                    <h1 class="font-amiri text-7xl md:text-9xl font-bold gradient-text text-glow mb-6 ultra-glow p-8" style="border-radius: 16px;">
                        فاطمة
                    </h1>
                    <div class="absolute -top-6 -right-6">
                        <i class="fas fa-heart animate-sparkle text-romantic-coral drop-shadow-lg" style="font-size: 36px;"></i>
                    </div>
                    <div class="absolute -bottom-6 -left-6">
                        <i class="fas fa-heart animate-sparkle text-romantic-gold drop-shadow-lg" style="font-size: 30px; animation-delay: 1s;"></i>
                    </div>
                    <div class="absolute top-1/2 -right-12 transform -translate-y-1/2">
                        <i class="fas fa-sparkles animate-sparkle text-romantic-purple drop-shadow-lg" style="font-size: 24px; animation-delay: 2s;"></i>
                    </div>
                </div>
                <p class="font-cairo text-2xl text-muted-foreground mt-8 max-w-2xl mx-auto leading-relaxed">
                    رسالة حب خاصة ومميزة لأجمل إنسانة في هذا العالم
                </p>
            </header>

            <!-- Main Message Card -->
            <div class="glass-intense p-10 md:p-16 mb-16 text-center romantic-border premium-shadow hover:scale-[1.02] transition-all duration-500" style="border-radius: 24px;">
                <div class="text-center mb-12">
                    <i class="fas fa-heart text-romantic-coral mb-6 animate-sparkle drop-shadow-xl" style="font-size: 48px;"></i>
                    <h2 class="font-amiri text-4xl md:text-5xl font-bold text-foreground mb-8 leading-relaxed">
                        حبيبتي الغالية فاطمة
                    </h2>
                </div>
                
                <div class="space-y-8 font-cairo text-xl md:text-2xl leading-relaxed text-foreground">
                    <p class="text-center opacity-90 hover:opacity-100 transition-opacity duration-300">
                        في كل صباح أستيقظ وأحمد الله على وجودك في حياتي
                    </p>
                    <p class="text-center opacity-90 hover:opacity-100 transition-opacity duration-300">
                        أنت نور عيني وضوء قلبي وسر سعادتي
                    </p>
                    <p class="text-center opacity-90 hover:opacity-100 transition-opacity duration-300">
                        معك تصبح الحياة أجمل والأيام أحلى
                    </p>
                    <p class="text-center font-bold text-romantic-coral text-2xl md:text-3xl gradient-text">
                        أحبك أكثر من كلماتي وأعمق من مشاعري
                    </p>
                </div>
            </div>

            <!-- Romantic Quotes Section -->
            <div class="grid md:grid-cols-2 gap-10 mb-16">
                <!-- Quote 1 -->
                <div class="glass-card p-8 romantic-border premium-shadow hover:scale-105 hover:rotate-1 transition-all duration-500 group">
                    <i class="fas fa-quote-right text-romantic-gold mb-6 float-left animate-sparkle drop-shadow-lg" style="font-size: 36px;"></i>
                    <p class="font-cairo text-xl text-foreground leading-relaxed group-hover:text-romantic-gold transition-colors duration-300">
                        "أنت الحلم الذي تحقق، والأمنية التي صارت حقيقة"
                    </p>
                    <div class="text-center mt-6">
                        <i class="fas fa-star text-romantic-gold animate-sparkle mx-2"></i>
                        <i class="fas fa-star text-romantic-gold animate-sparkle mx-2" style="animation-delay: 0.5s;"></i>
                        <i class="fas fa-star text-romantic-gold animate-sparkle mx-2" style="animation-delay: 1s;"></i>
                    </div>
                </div>

                <!-- Quote 2 -->
                <div class="glass-card p-8 romantic-border premium-shadow hover:scale-105 hover:-rotate-1 transition-all duration-500 group">
                    <i class="fas fa-quote-right text-romantic-coral mb-6 float-left animate-sparkle drop-shadow-lg" style="font-size: 36px;"></i>
                    <p class="font-cairo text-xl text-foreground leading-relaxed group-hover:text-romantic-coral transition-colors duration-300">
                        "في عينيك أرى مستقبلي، وفي قلبك أجد راحتي"
                    </p>
                    <div class="text-center mt-6">
                        <i class="fas fa-heart text-romantic-coral animate-sparkle mx-2"></i>
                        <i class="fas fa-heart text-romantic-coral animate-sparkle mx-2" style="animation-delay: 0.5s;"></i>
                        <i class="fas fa-heart text-romantic-coral animate-sparkle mx-2" style="animation-delay: 1s;"></i>
                    </div>
                </div>
            </div>

            <!-- Interactive Love Counter -->
            <div class="glass-intense p-10 mb-16 text-center romantic-border premium-shadow ultra-glow" style="border-radius: 24px;">
                <h3 class="font-amiri text-3xl md:text-4xl font-bold text-foreground mb-10 gradient-text">
                    حبي لك يزداد كل ثانية
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="glass-card p-6 hover:scale-110 transition-transform duration-300 group">
                        <div class="text-4xl md:text-5xl font-bold text-romantic-coral mb-2 animate-sparkle group-hover:text-romantic-gold transition-colors duration-300" id="seconds">0</div>
                        <div class="text-lg font-cairo text-muted-foreground group-hover:text-foreground transition-colors duration-300">ثانية</div>
                    </div>
                    <div class="glass-card p-6 hover:scale-110 transition-transform duration-300 group">
                        <div class="text-4xl md:text-5xl font-bold text-romantic-gold mb-2 animate-sparkle group-hover:text-romantic-purple transition-colors duration-300" id="minutes">0</div>
                        <div class="text-lg font-cairo text-muted-foreground group-hover:text-foreground transition-colors duration-300">دقيقة</div>
                    </div>
                    <div class="glass-card p-6 hover:scale-110 transition-transform duration-300 group">
                        <div class="text-4xl md:text-5xl font-bold text-romantic-purple mb-2 animate-sparkle group-hover:text-romantic-coral transition-colors duration-300" id="hours">0</div>
                        <div class="text-lg font-cairo text-muted-foreground group-hover:text-foreground transition-colors duration-300">ساعة</div>
                    </div>
                    <div class="glass-card p-6 hover:scale-110 transition-transform duration-300 group">
                        <div class="text-4xl md:text-5xl font-bold text-romantic-coral mb-2 animate-sparkle group-hover:text-romantic-gold transition-colors duration-300" id="days">0</div>
                        <div class="text-lg font-cairo text-muted-foreground group-hover:text-foreground transition-colors duration-300">يوم</div>
                    </div>
                </div>
                <p class="font-cairo text-muted-foreground mt-8 text-xl">
                    منذ إنشاء هذه الرسالة الخاصة بك
                </p>
            </div>

            <!-- Promise Section -->
            <div class="glass-intense p-10 md:p-16 mb-16 romantic-border premium-shadow ultra-glow" style="border-radius: 24px;">
                <div class="text-center">
                    <i class="fas fa-infinity text-romantic-gold mb-8 animate-sparkle drop-shadow-xl" style="font-size: 48px;"></i>
                    <h3 class="font-amiri text-4xl md:text-5xl font-bold text-foreground mb-10 gradient-text">
                        وعد الحب الأبدي
                    </h3>
                    <div class="space-y-6 font-cairo text-xl md:text-2xl leading-relaxed text-foreground max-w-4xl mx-auto">
                        <p class="opacity-90 hover:opacity-100 transition-opacity duration-300">أعدك أن أحبك في كل الأوقات</p>
                        <p class="opacity-90 hover:opacity-100 transition-opacity duration-300">في السراء والضراء، في الفرح والحزن</p>
                        <p class="opacity-90 hover:opacity-100 transition-opacity duration-300">أعدك أن أكون سندك وحبيبك إلى الأبد</p>
                        <p class="font-bold text-romantic-coral text-2xl md:text-3xl gradient-text mt-8">
                            حبي لك لا نهاية له، مثل اتساع السماء وعمق البحار
                        </p>
                    </div>
                </div>
            </div>

            <!-- Interactive Button -->
            <div class="text-center mb-16">
                <button onclick="showSurprise()" class="btn-surprise glass-intense premium-shadow" id="surpriseBtn">
                    <span class="btn-content">
                        <i class="fas fa-gift ml-3 animate-sparkle transition-transform duration-300" style="font-size: 24px;"></i>
                        اضغطي للمفاجأة
                    </span>
                    <div class="btn-bg"></div>
                </button>
            </div>

            <!-- Hidden Surprise Message -->
            <div id="surpriseMessage" class="glass-intense p-10 mb-16 text-center romantic-border premium-shadow ultra-glow animate-breathe" style="display: none; border-radius: 16px;">
                <i class="fas fa-sparkles text-romantic-gold mb-6 animate-sparkle drop-shadow-xl" style="font-size: 48px;"></i>
                <h4 class="font-amiri text-3xl md:text-4xl font-bold text-foreground mb-6 gradient-text">
                    المفاجأة الخاصة بك يا فاطمة!
                </h4>
                <p class="font-cairo text-xl md:text-2xl text-foreground leading-relaxed max-w-3xl mx-auto">
                    أنت أجمل ما حدث في حياتي، وهذه الرسالة مجرد قطرة من بحر حبي لك
                </p>
                <div class="mt-8">
                    <i class="fas fa-heart text-romantic-coral mx-3 animate-sparkle drop-shadow-lg" style="font-size: 30px;"></i>
                    <i class="fas fa-star text-romantic-gold mx-3 animate-sparkle drop-shadow-lg" style="font-size: 30px; animation-delay: 0.5s;"></i>
                    <i class="fas fa-heart text-romantic-purple mx-3 animate-sparkle drop-shadow-lg" style="font-size: 30px; animation-delay: 1s;"></i>
                </div>
            </div>

            <!-- Footer -->
            <footer class="text-center py-12">
                <div class="glass-card p-8 inline-block romantic-border premium-shadow hover:scale-105 transition-all duration-300">
                    <p class="font-cairo text-muted-foreground mb-4 text-lg">
                        تم إنشاء هذه الرسالة بكل الحب في:
                    </p>
                    <p class="font-cairo font-bold text-foreground text-xl md:text-2xl gradient-text" id="currentDate"></p>
                    <div class="mt-6">
                        <i class="fas fa-heart text-romantic-coral mx-2 animate-sparkle text-lg"></i>
                        <i class="fas fa-heart text-romantic-gold mx-2 animate-sparkle text-lg" style="animation-delay: 0.3s;"></i>
                        <i class="fas fa-heart text-romantic-purple mx-2 animate-sparkle text-lg" style="animation-delay: 0.6s;"></i>
                        <i class="fas fa-heart text-romantic-coral mx-2 animate-sparkle text-lg" style="animation-delay: 0.9s;"></i>
                        <i class="fas fa-heart text-romantic-gold mx-2 animate-sparkle text-lg" style="animation-delay: 1.2s;"></i>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        // Love Counter
        const startTime = Date.now();
        
        function updateCounter() {
            const elapsed = Date.now() - startTime;
            const seconds = Math.floor(elapsed / 1000) % 60;
            const minutes = Math.floor(elapsed / (1000 * 60)) % 60;
            const hours = Math.floor(elapsed / (1000 * 60 * 60)) % 24;
            const days = Math.floor(elapsed / (1000 * 60 * 60 * 24));

            document.getElementById('seconds').textContent = seconds;
            document.getElementById('minutes').textContent = minutes;
            document.getElementById('hours').textContent = hours;
            document.getElementById('days').textContent = days;
        }

        setInterval(updateCounter, 1000);

        // Surprise Button
        let surpriseClicked = false;
        function showSurprise() {
            if (!surpriseClicked) {
                surpriseClicked = true;
                document.getElementById('surpriseMessage').style.display = 'block';
                
                // Create floating hearts animation
                for (let i = 0; i < 5; i++) {
                    setTimeout(() => {
                        createFloatingHeart();
                    }, i * 200);
                }
            }
        }

        function createFloatingHeart() {
            const heart = document.createElement('div');
            heart.innerHTML = '<i class="fas fa-heart text-romantic-coral" style="font-size: 30px;"></i>';
            heart.className = 'fixed pointer-events-none z-50 animate-float-up';
            heart.style.left = Math.random() * window.innerWidth + 'px';
            heart.style.top = window.innerHeight + 'px';
            
            document.body.appendChild(heart);
            
            setTimeout(() => {
                heart.remove();
            }, 3000);
        }

        // Current Date
        const currentDate = new Date().toLocaleDateString('ar-SA', {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        });
        document.getElementById('currentDate').textContent = currentDate;

        // Initialize counter
        updateCounter();
    </script>
</body>
</html>

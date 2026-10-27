<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>@yield('title', 'Careway')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'careway-gold': '#d1af7e',
                        'careway-brown': '#886c4d',
                        'careway-bg': '#f4f3f3',
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f3f3;
            color: #000000;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #d1af7e 0%, #886c4d 100%);
        }
        
        .card-shadow {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.05);
        }
        
        .luxury-square {
            background: #f4f4f4;
            border: 3px solid #d1af7e;
            border-radius: 20px;
            box-shadow: 
                0 20px 40px rgba(209, 175, 126, 0.15),
                0 8px 16px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .luxury-square:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 
                0 25px 50px rgba(209, 175, 126, 0.25),
                0 12px 24px rgba(0, 0, 0, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
            border-color: #886c4d;
        }
        
        .logo-container {
            position: relative;
            display: inline-block;
        }
        
        .logo-container::before {
            content: '';
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            background: linear-gradient(45deg, #d1af7e, #886c4d, #d1af7e);
            border-radius: 25px;
            z-index: -1;
            opacity: 0.3;
            transition: opacity 0.3s ease;
        }
        
        .logo-container:hover::before {
            opacity: 0.5;
        }
        
        /* Modern Door Opening Animation */
        .door-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            pointer-events: none;
        }
        
        .door-left, .door-right {
            position: absolute;
            top: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(135deg, #d1af7e 0%, #886c4d 100%);
            transform-origin: left;
            transition: transform 1.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .door-right {
            left: 50%;
            transform-origin: right;
        }
        
        .door-left.open {
            transform: translateX(-100%);
        }
        
        .door-right.open {
            transform: translateX(100%);
        }
        
        .door-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            opacity: 0;
            transition: opacity 0.8s ease;
        }
        
        .door-content.show {
            opacity: 1;
        }
        
        .door-logo {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }
        
        .door-text {
            font-size: 2rem;
            font-weight: 300;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }
        
        .door-subtitle {
            font-size: 1rem;
            opacity: 0.8;
            letter-spacing: 1px;
        }
        
        /* Page content animation */
        .page-content {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .page-content.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Loading animation */
        @keyframes pulse {
            0%, 100% { opacity: 0.6; }
            50% { opacity: 1; }
        }
        
        .loading-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
        }
        
        .loading-dot {
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
            animation: pulse 1.5s infinite;
        }
        
        .loading-dot:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .loading-dot:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .door-text {
                font-size: 1.5rem;
                letter-spacing: 1px;
            }
            
            .door-subtitle {
                font-size: 0.9rem;
            }
            
            .door-logo {
                width: 80px;
                height: 80px;
                margin-bottom: 15px;
            }
            
            .door-logo span {
                font-size: 2rem !important;
            }
            
            .luxury-square {
                width: 120px !important;
                height: 120px !important;
                padding: 12px !important;
            }
            
            .card-shadow {
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            }
            
            .page-content {
                padding: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .door-text {
                font-size: 1.2rem;
            }
            
            .door-subtitle {
                font-size: 0.8rem;
            }
            
            .door-logo {
                width: 60px;
                height: 60px;
                margin-bottom: 12px;
            }
            
            .door-logo span {
                font-size: 1.5rem !important;
            }
            
            .luxury-square {
                width: 100px !important;
                height: 100px !important;
                padding: 10px !important;
            }
            
            .loading-dots {
                gap: 6px;
            }
            
            .loading-dot {
                width: 6px;
                height: 6px;
            }
        }
        
        /* Touch Device Optimizations */
        @media (hover: none) and (pointer: coarse) {
            .hover-scale:hover {
                transform: none;
            }
            
            .luxury-square:hover {
                transform: none;
            }
            
            .logo-container:hover::before {
                opacity: 0.3;
            }
        }
        
        /* iOS Safari Specific Fixes */
        @supports (-webkit-touch-callout: none) {
            .door-animation {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            
            .luxury-square {
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
        }
        
        /* Android Chrome Optimizations */
        @media screen and (-webkit-min-device-pixel-ratio: 0) {
            .door-animation {
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body class="min-h-screen">
    <!-- Door Opening Animation -->
    <div class="door-animation" id="doorAnimation">
        <div class="door-left" id="doorLeft"></div>
        <div class="door-right" id="doorRight"></div>
        <div class="door-content" id="doorContent">
            <div class="door-logo">
                <span style="font-size: 3rem; font-weight: bold;">CW</span>
            </div>
            <div class="door-text">CAREWAY</div>
            <div class="door-subtitle">Welcome to Excellence</div>
            <div class="loading-dots">
                <div class="loading-dot"></div>
                <div class="loading-dot"></div>
                <div class="loading-dot"></div>
            </div>
        </div>
    </div>
    
    <!-- Page Content -->
    <div class="page-content" id="pageContent">
        @yield('content')
    </div>
    
    <script>
        // Modern Door Opening Animation
        document.addEventListener('DOMContentLoaded', function() {
            const doorLeft = document.getElementById('doorLeft');
            const doorRight = document.getElementById('doorRight');
            const doorContent = document.getElementById('doorContent');
            const pageContent = document.getElementById('pageContent');
            const doorAnimation = document.getElementById('doorAnimation');
            
            // Show door content after a brief delay
            setTimeout(() => {
                doorContent.classList.add('show');
            }, 300);
            
            // Start door opening animation
            setTimeout(() => {
                doorLeft.classList.add('open');
                doorRight.classList.add('open');
            }, 2000);
            
            // Show page content and hide doors
            setTimeout(() => {
                pageContent.classList.add('show');
                setTimeout(() => {
                    doorAnimation.style.display = 'none';
                }, 1200);
            }, 2800);
        });
    </script>
    
    @yield('scripts')
</body>
</html> 
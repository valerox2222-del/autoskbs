<!DOCTYPE html>
<html class="light" lang="es">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php
// Variables por defecto si no están definidas
$page_title = isset($page_title) ? $page_title : "AutoSKBS - Taller de Chapa y Pintura en Barcelona";
$page_description = isset($page_description) ? $page_description : "AutoSKBS - Taller de chapa y pintura en Barcelona. Servicios profesionales de reparación de carrocería, pintura al horno, detailing y gestión de seguros.";
$page_keywords = isset($page_keywords) ? $page_keywords : "taller chapa y pintura Barcelona, reparación carrocería, pintura coche, detailing Barcelona";
$page_canonical = isset($page_canonical) ? $page_canonical : "https://autoskbs.com/";
?>
<meta name="description" content="<?php echo htmlspecialchars($page_description); ?>"/>
<meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>"/>
<meta name="author" content="AutoSKBS"/>
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"/>
<link rel="canonical" href="<?php echo htmlspecialchars($page_canonical); ?>"/>

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo htmlspecialchars($page_canonical); ?>"/>
<meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>"/>
<meta property="og:image" content="https://autoskbs.com/og-image.jpg"/>

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image"/>
<meta property="twitter:url" content="<?php echo htmlspecialchars($page_canonical); ?>"/>
<meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>"/>
<meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>"/>
<meta property="twitter:image" content="https://autoskbs.com/og-image.jpg"/>

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="/favicon.ico"/>

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>

<title><?php echo htmlspecialchars($page_title); ?></title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "primary-dark": "#0b5cb3",
                        "background-light": "#ffffff",
                        "background-off": "#f9fafb",
                        "background-dark": "#101922",
                        "text-main": "#1e293b",
                        "text-muted": "#64748b",
                        "card-light": "#ffffff",
                        "card-dark": "#1c2b39",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.375rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                    boxShadow: {
                        'soft': '0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)',
                        'glow': '0 0 15px rgba(19, 127, 236, 0.3)',
                    }
                },
            },
        }
    </script>
    <?php if (isset($custom_styles) && $custom_styles): ?>
    <style>
        <?php echo $custom_styles; ?>
    </style>
    <?php endif; ?>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .clip-path-slant {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        
        /* Carrusel de aseguradoras */
        .carousel-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }
        
        .carousel-track {
            display: flex;
            animation: scroll 40s linear infinite;
            gap: 2rem;
        }
        
        .carousel-track:hover {
            animation-play-state: paused;
        }
        
        .carousel-item {
            flex-shrink: 0;
            white-space: nowrap;
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        .carousel-wrapper {
            position: relative;
        }
        
        .carousel-wrapper::before,
        .carousel-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            width: 150px;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }
        
        .carousel-wrapper::before {
            left: 0;
            background: linear-gradient(to right, #f9fafb 0%, rgba(249, 250, 251, 0.8) 50%, transparent 100%);
        }
        
        .carousel-wrapper::after {
            right: 0;
            background: linear-gradient(to left, #f9fafb 0%, rgba(249, 250, 251, 0.8) 50%, transparent 100%);
        }
        
        @media (max-width: 768px) {
            .carousel-wrapper::before,
            .carousel-wrapper::after {
                width: 50px;
            }
        }
        
        /* Animaciones mejoradas */
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
        
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Mejoras de accesibilidad */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }
        
        /* Focus visible mejorado */
        *:focus-visible {
            outline: 2px solid #137fec;
            outline-offset: 2px;
            border-radius: 4px;
        }
        
        /* Banner de Cookies */
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            border-top: 1px solid #e5e7eb;
            box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transform: translateY(100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .cookie-banner.show {
            transform: translateY(0);
        }
        
        .dark .cookie-banner {
            background: #1a2634;
            border-top-color: #374151;
        }
    </style>
    
    <?php if (isset($structured_data) && $structured_data): ?>
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    <?php echo json_encode($structured_data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
    </script>
    <?php endif; ?>
</head>
<body class="bg-background-light text-text-main antialiased selection:bg-primary/20 selection:text-primary">


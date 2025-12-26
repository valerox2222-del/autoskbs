<?php
// Configuración de la página
$page_title = "AutoSKBS - Taller de Chapa y Pintura en Barcelona | Presupuesto Gratuito";
$page_description = "AutoSKBS - Taller de chapa y pintura en Barcelona. Servicios profesionales de reparación de carrocería, pintura al horno, detailing y gestión de seguros. Dos ubicaciones: Sant Joan Despí y L'Hospitalet. Presupuesto gratuito.";
$page_keywords = "taller chapa y pintura Barcelona, reparación carrocería, pintura coche, detailing Barcelona, taller automóvil Sant Joan Despí, L'Hospitalet, gestión seguros, presupuesto gratuito";
$page_canonical = "https://autoskbs.com/";

// Structured Data
$structured_data = [
    [
        "@context" => "https://schema.org",
        "@type" => "AutoRepair",
        "name" => "AutoSKBS",
        "image" => "https://autoskbs.com/logo.jpg",
        "@id" => "https://autoskbs.com",
        "url" => "https://autoskbs.com",
        "telephone" => "+34635204624",
        "email" => "info@autoskbs.com",
        "address" => [
            [
                "@type" => "PostalAddress",
                "streetAddress" => "Calle Domenec, 40",
                "addressLocality" => "Sant Joan Despí",
                "addressRegion" => "Barcelona",
                "postalCode" => "08970",
                "addressCountry" => "ES"
            ],
            [
                "@type" => "PostalAddress",
                "streetAddress" => "Calle de la Mina, 69",
                "addressLocality" => "L'Hospitalet de Llobregat",
                "addressRegion" => "Barcelona",
                "postalCode" => "08906",
                "addressCountry" => "ES"
            ]
        ],
        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => "41.3675",
            "longitude" => "2.0576"
        ],
        "openingHoursSpecification" => [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens" => "08:00",
            "closes" => "18:00"
        ],
        "sameAs" => ["https://autoskbs.com"],
        "priceRange" => "$$",
        "areaServed" => [
            "@type" => "City",
            "name" => "Barcelona"
        ],
        "serviceType" => [
            "Chapa y Pintura",
            "Reparación de Carrocería",
            "Detailing",
            "Gestión de Seguros"
        ]
    ],
    [
        "@context" => "https://schema.org",
        "@type" => "Organization",
        "name" => "AutoSKBS",
        "url" => "https://autoskbs.com",
        "logo" => "https://autoskbs.com/logo.jpg",
        "contactPoint" => [
            "@type" => "ContactPoint",
            "telephone" => "+34-635-204-624",
            "contactType" => "customer service",
            "areaServed" => "ES",
            "availableLanguage" => ["Spanish", "Catalan"]
        ],
        "sameAs" => []
    ]
];

// Incluir header
include 'templates/_header.php';
?>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/34635204624?text=Hola,%20me%20gustaría%20solicitar%20información%20sobre%20sus%20servicios" target="_blank" class="fixed bottom-6 right-6 z-50 bg-[#25D366] hover:bg-[#20BA5A] text-white rounded-full p-4 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 group" aria-label="Contactar por WhatsApp">
    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
    </svg>
    <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-900 text-white text-sm px-3 py-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Contactar por WhatsApp</span>
</a>

<?php include 'templates/_menu.php'; ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-white via-blue-50/30 to-white pt-16 pb-20 lg:pt-24 lg:pb-28 animate-fade-in-up" aria-labelledby="hero-heading">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="grid gap-12 lg:grid-cols-2 lg:gap-8 items-center">
<div class="max-w-2xl">
<div class="inline-flex items-center rounded-full border border-green-200 bg-green-50 px-3 py-1 text-sm font-medium text-green-700 mb-6 animate-fade-in-up">
<span class="flex h-2 w-2 rounded-full bg-green-500 mr-2 animate-pulse" aria-hidden="true"></span>
                        Disponibilidad inmediata
                    </div>
<h1 id="hero-heading" class="text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl mb-6 leading-[1.1]">
                        Tu coche, como <span class="text-primary">recién salido</span> de fábrica.
                    </h1>
<p class="text-lg text-slate-600 mb-8 leading-relaxed max-w-lg">
                        Expertos en chapa y pintura con tecnología de precisión. Restauramos la seguridad y estética de tu vehículo con acabados garantizados de por vida.
                    </p>
<div class="flex flex-col sm:flex-row gap-4">
<a href="presupuesto.php" class="inline-flex items-center justify-center rounded-lg bg-primary px-6 py-3.5 text-base font-bold text-white shadow-lg shadow-primary/25 hover:bg-primary-dark hover:shadow-glow transition-all active:scale-95">
                            Agendar Cita Ahora
                            <span class="material-symbols-outlined ml-2 text-[20px]">arrow_forward</span>
</a>
<a href="galeria.php" class="inline-flex items-center justify-center rounded-lg border border-slate-200 bg-white px-6 py-3.5 text-base font-bold text-slate-700 hover:bg-slate-50 hover:text-primary hover:border-primary/30 transition-all active:scale-95">
<span class="material-symbols-outlined mr-2 text-[20px]">photo_library</span>
                            Ver Galería
                        </a>
</div>
<div class="mt-8 flex items-center gap-4 text-sm text-slate-500">
<div class="flex -space-x-2">
<img alt="Portrait of a happy customer" class="inline-block h-8 w-8 rounded-full ring-2 ring-white object-cover" data-alt="Small avatar of a smiling woman" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYZgfq3WguGJ1Ipf0ans_9MeydKI1K0tK9LSakCRfigv9O0oxWeVM6VfMDeT3Ge9alwW65QH7_BgjL1iJIfY3_8akw2YZjQUSZKPH6enDQGKOd_OXuu7RgI9o1X9KkmmbKQKNrOQnZ4tTPzUZYR-EB-f4I9xGEA2KADshcawwmqi6vxF6P2Oo3aB6mmUb2Y9unGq2UTnelPGSf8fvY1TSNr3yoLy0mCltApuAMcZrGb-xcXrbo2TMGjiFPbyn0ZSjqcR7V7CeWoho"/>
<img alt="Portrait of a happy customer" class="inline-block h-8 w-8 rounded-full ring-2 ring-white object-cover" data-alt="Small avatar of a smiling man" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUMkaazU77rAqZdyOJFac6zauTJtHVWUf9ACexJ41hC2n4E2VlHsPTQqboLMaC61IXMljh0b4Nwpj8XoHCsfuVJhdX3o0mjN8zVuADdp-DYvMiji8WCIlERbFp4po9KJZLWPpAYdytc24vDHaq6OMj8_O8rNoEACfcfEQv_25flwqXcv_kH3TEkp0ry8ne065ly_92Scv-7z-JjadoXG9-YMPBV1c0Lo0cjMpJOQxeX4nheHPAHC5Gw6UR0xnn8u--9H-55yhiEhs"/>
<img alt="Portrait of a happy customer" class="inline-block h-8 w-8 rounded-full ring-2 ring-white object-cover" data-alt="Small avatar of another man" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXvxxTeuNRarzd3DIOODb3PFrhL2KlDzEtsd9XfeHpOotIPd1m-rE-Z9GbE426yVmHw55lkA6WQdpupI_eXt81_WixFbWhc_vneQMsXhZStEJKdilWQAlLRn7easGdOwKQoh6dAgRtQnZ_6SYWJ2Ii4P3eLPCmN96hYRGbRIYswQfjoOXnj4wzYiCo1n0KIl72ph6KSmP0hZE51kAcAFnYKB7FMWjXjixyFwR-x4nKTztaHDyjHrIvhO0BU-1ZkjpHjmIfLZkp7ng"/>
</div>
<p>Más de <span class="font-bold text-slate-900">500+</span> clientes satisfechos este año.</p>
</div>
</div>
<div class="relative lg:ml-auto">
<div class="relative overflow-hidden rounded-2xl bg-slate-100 shadow-2xl transform transition-transform hover:scale-[1.02] duration-300">
<div class="absolute inset-0 bg-gradient-to-tr from-primary/10 to-transparent mix-blend-multiply"></div>
<img alt="Proceso profesional de pintura de vehículos en cabina presurizada - AutoSKBS" class="h-full w-full object-cover" loading="eager" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZ6Mcyx1AGU3YppPgcE0gTrG8nIhN9QgfHfHAdwTNCrQdfz5e-RxsE_dIUecUeAtCD_IctYcPMj4gIWIjSvF6hayfDxnKfulAYibJC80C6JZMes-DZtNI3odaiKQZZFSqQSY2t35dFLP-X2PdhoucGR3rmQLV6DrhmAld0yF3N-LK7frw1fCIurYXTZpVHHn630cyIGL-UEs2ste0BeywZUBFe8PD_Cb94Qv1CIk2jBCG_yeKYSBb3_3-ad44fq6ljZOJDepo9wns" width="800" height="600"/>
</div>
<!-- Decorative elements -->
<div class="absolute -bottom-6 -left-6 -z-10 h-full w-full rounded-2xl bg-slate-100/50"></div>
<div class="absolute -top-6 -right-6 -z-10 h-64 w-64 rounded-full bg-primary/5 blur-3xl animate-pulse"></div>
</div>
</div>
</div>
</section>
<!-- Trust Banner con Carrusel -->
<section class="border-y border-slate-100 bg-background-off py-12" aria-label="Aseguradoras colaboradoras">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<p class="text-center text-sm font-semibold text-slate-400 mb-8 uppercase tracking-wider">Trabajamos con las principales aseguradoras</p>
<div class="carousel-wrapper">
<div class="carousel-container">
<div class="carousel-track">
<!-- Primera vuelta -->
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">health_and_safety</span> MAPFRE</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">shield</span> Allianz</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">security</span> AXA</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">verified_user</span> Zurich</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">local_police</span> Generali</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">gpp_good</span> Catalana Occidente</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">check_circle</span> Liberty Seguros</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">savings</span> Línea Directa</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">account_balance</span> Reale Seguros</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">business</span> Mutua Madrileña</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">shield_with_heart</span> Pelayo</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">security_update_good</span> Plus Ultra</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">favorite</span> Caser</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">verified</span> Helvetia</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">workspace_premium</span> HDI Seguros</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">medical_services</span> Asisa</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">admin_panel_settings</span> Direct Seguros</span>
<!-- Segunda vuelta (duplicado para efecto infinito) -->
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">health_and_safety</span> MAPFRE</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">shield</span> Allianz</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">security</span> AXA</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">verified_user</span> Zurich</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">local_police</span> Generali</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">gpp_good</span> Catalana Occidente</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">check_circle</span> Liberty Seguros</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">savings</span> Línea Directa</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">account_balance</span> Reale Seguros</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">business</span> Mutua Madrileña</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">shield_with_heart</span> Pelayo</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">security_update_good</span> Plus Ultra</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">favorite</span> Caser</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">verified</span> Helvetia</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">workspace_premium</span> HDI Seguros</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">medical_services</span> Asisa</span>
<span class="carousel-item text-base font-bold text-slate-700 flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity"><span class="material-symbols-outlined">admin_panel_settings</span> Direct Seguros</span>
</div>
</div>
</div>
</div>
</section>
<!-- Services Section -->
<section class="py-20 bg-white" aria-labelledby="services-heading">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="mb-16 md:text-center max-w-3xl mx-auto">
<h2 id="services-heading" class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Soluciones integrales para tu vehículo</h2>
<p class="mt-4 text-lg text-slate-600">Desde pequeños arañazos hasta restauraciones completas. Utilizamos materiales de primera calidad y tecnología punta.</p>
</div>
<div class="grid grid-cols-1 gap-8 md:grid-cols-3">
<!-- Card 1 -->
<div class="group relative rounded-2xl border border-slate-200 bg-white p-8 transition-all hover:-translate-y-1 hover:shadow-xl hover:border-primary/20">
<div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-[28px]">build</span>
</div>
<h3 class="mb-3 text-xl font-bold text-slate-900">Chapa y Carrocería</h3>
<p class="text-slate-600 leading-relaxed">Reparación estructural con bancada universal y soldadura de última generación para devolver la rigidez original.</p>
<a class="mt-6 inline-flex items-center text-sm font-bold text-primary hover:text-primary-dark" href="servicios.php">
                        Saber más <span class="material-symbols-outlined ml-1 text-[16px]">arrow_forward</span>
</a>
</div>
<!-- Card 2 -->
<div class="group relative rounded-2xl border border-slate-200 bg-white p-8 transition-all hover:-translate-y-1 hover:shadow-xl hover:border-primary/20">
<div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-[28px]">syringe</span>
</div>
<h3 class="mb-3 text-xl font-bold text-slate-900">Pintura al Horno</h3>
<p class="text-slate-600 leading-relaxed">Cabinas presurizadas y pintura base agua ecológica. Colorimetría digital para un igualado de color perfecto.</p>
<a class="mt-6 inline-flex items-center text-sm font-bold text-primary hover:text-primary-dark" href="servicios.php">
                        Saber más <span class="material-symbols-outlined ml-1 text-[16px]">arrow_forward</span>
</a>
</div>
<!-- Card 3 -->
<div class="group relative rounded-2xl border border-slate-200 bg-white p-8 transition-all hover:-translate-y-1 hover:shadow-xl hover:border-primary/20">
<div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-[28px]">auto_awesome</span>
</div>
<h3 class="mb-3 text-xl font-bold text-slate-900">Detailing y Pulido</h3>
<p class="text-slate-600 leading-relaxed">Tratamientos cerámicos, corrección de barniz y limpieza integral para que tu coche luzca mejor que nuevo.</p>
<a class="mt-6 inline-flex items-center text-sm font-bold text-primary hover:text-primary-dark" href="servicios.php">
                        Saber más <span class="material-symbols-outlined ml-1 text-[16px]">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>
<!-- Portfolio / Work Section -->
<section class="bg-slate-50 py-20" aria-labelledby="portfolio-heading">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
<div class="max-w-2xl">
<h2 id="portfolio-heading" class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Resultados que hablan por sí mismos</h2>
<p class="mt-4 text-lg text-slate-600">Una selección de nuestros trabajos más recientes. Pasión por el detalle en cada vehículo.</p>
</div>
<a href="galeria.php" class="hidden md:inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-5 py-2.5 text-sm font-bold text-slate-700 hover:bg-slate-50 transition-colors">
                    Ver Portafolio Completo
                </a>
</div>
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
<!-- Image 1 -->
<article class="group relative aspect-[4/3] overflow-hidden rounded-2xl bg-slate-200 shadow-lg hover:shadow-2xl transition-all duration-300">
<img alt="Ferrari 488 GTB restaurado - trabajo de chapa y pintura profesional" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJY29TqgSHlqgRsKH9__JXC-usxkC-72gVSUSLCmJV3horppcS92hXNiHS6wLA47yIk-oKDftRk3As7EhhQEynQeke_VNhCEKiGSilqZ9AVa5D8kqi50Uic-X73vvR7C6laICMOSvgMdXP656DAZgb7UM-LDRxnXYp20jB5L3b_-uPqfW9Y6RJkMTl0Ora2R4dllqGVymdQT5Klv98FyJLO2QX9uE91ife2XWzy1BsFqw7MhIf42QnKiMLRHeqXDCYcrzbOXQeLLU" width="600" height="450"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
<div class="absolute bottom-0 left-0 p-6 opacity-0 transition-all duration-300 translate-y-4 group-hover:translate-y-0 group-hover:opacity-100">
<p class="text-sm font-medium text-white/80">Restauración</p>
<h4 class="text-xl font-bold text-white">Ferrari 488 GTB</h4>
</div>
</article>
<!-- Image 2 -->
<article class="group relative aspect-[4/3] overflow-hidden rounded-2xl bg-slate-200 shadow-lg hover:shadow-2xl transition-all duration-300">
<img alt="Mercedes Benz clásico con pintura profesional restaurada" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2URSzYgvW7Bwh7vjO_IVe-Fgr8eYJtWuOyCX3p8WVAOZDweLxm4Iwdr52cNYJ5NP9xrRqTo6g0JKQSZRGduf02eWm3g55B0SKgB43bNQMfDEt6ciPm3RVQUV-iGQ-xqZdx42uxJ2365SR0XVjmPOgew86AVitaKrnpMRiWzOGqrypAv7uT0748gGDNMEHuAHUDRJcl59TAoPtjofEXrj2PUMOKNk07IpgSdjmayShgkIp81JD_RfttxC5omi2HmsMFdl8rHxphHs" width="600" height="450"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
<div class="absolute bottom-0 left-0 p-6 opacity-0 transition-all duration-300 translate-y-4 group-hover:translate-y-0 group-hover:opacity-100">
<p class="text-sm font-medium text-white/80">Pintura</p>
<h4 class="text-xl font-bold text-white">Mercedes Benz Clásico</h4>
</div>
</article>
<!-- Image 3 -->
<article class="group relative aspect-[4/3] overflow-hidden rounded-2xl bg-slate-200 shadow-lg hover:shadow-2xl transition-all duration-300">
<img alt="Aplicación de protección cerámica en vehículo - servicio de detailing premium" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXpsO3kb4Mz-fjYfHpKhJ2K5jC0PqigcVk2kUZ9-YatNxwiRzpDyBwl8CtXU3bhokmyxDtpLRzhSRfzH58KB7EICz5j0h7zpkJZoYqz0Buhb1K2_k-a_i2r9OfYrlb9qe2724m0Z4rl4geTN4u6LPzm85swCf8debDVEW8diorxL7icdcks1yOz-ecJLw9bNCCttDWM02AO3shLG6ebQwjcJ4EnyFieSmuSdiQsLxvFtrhJdgJx96TqUrpuY-TIzucL6cjQ1T6SZc" width="600" height="450"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
<div class="absolute bottom-0 left-0 p-6 opacity-0 transition-all duration-300 translate-y-4 group-hover:translate-y-0 group-hover:opacity-100">
<p class="text-sm font-medium text-white/80">Detailing</p>
<h4 class="text-xl font-bold text-white">Protección Cerámica</h4>
</div>
</article>
</div>
<div class="mt-8 text-center md:hidden">
<a href="galeria.php" class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-5 py-2.5 text-sm font-bold text-slate-700 hover:bg-slate-50 transition-colors">
                    Ver Portafolio Completo
                </a>
</div>
</div>
</section>
<!-- Testimonials -->
<section class="py-20 bg-white" aria-labelledby="testimonials-heading">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<h2 id="testimonials-heading" class="text-center text-3xl font-extrabold tracking-tight text-slate-900 mb-16">Lo que dicen nuestros clientes</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Review 1 -->
<div class="rounded-2xl bg-slate-50 p-8">
<div class="flex gap-1 text-yellow-400 mb-4">
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
</div>
<p class="text-slate-700 font-medium leading-relaxed mb-6">"Increíble trabajo. Mi coche tenía un golpe considerable en la puerta y ha quedado como si nunca hubiera pasado nada. El trato fue excelente."</p>
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">JD</div>
<div>
<p class="text-sm font-bold text-slate-900">Javier Delgado</p>
<p class="text-xs text-slate-500">BMW Serie 3</p>
</div>
</div>
</div>
<!-- Review 2 -->
<div class="rounded-2xl bg-slate-50 p-8">
<div class="flex gap-1 text-yellow-400 mb-4">
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
</div>
<p class="text-slate-700 font-medium leading-relaxed mb-6">"Rápidos y profesionales. Me gestionaron todo con el seguro y me dejaron un coche de sustitución impecable. 100% recomendados."</p>
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-bold">MR</div>
<div>
<p class="text-sm font-bold text-slate-900">Marta Rodriguez</p>
<p class="text-xs text-slate-500">Audi Q3</p>
</div>
</div>
</div>
<!-- Review 3 -->
<div class="rounded-2xl bg-slate-50 p-8">
<div class="flex gap-1 text-yellow-400 mb-4">
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
<span class="material-symbols-outlined text-sm filled">star</span>
</div>
<p class="text-slate-700 font-medium leading-relaxed mb-6">"Llevé mi clásico para pintar entero y el resultado ha superado mis expectativas. Se nota que aman lo que hacen."</p>
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-bold">AG</div>
<div>
<p class="text-sm font-bold text-slate-900">Antonio García</p>
<p class="text-xs text-slate-500">Seat 600</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Large CTA Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 py-24" aria-labelledby="cta-heading">
<div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
<div class="absolute top-0 right-0 -mt-20 -mr-20 h-[500px] w-[500px] rounded-full bg-primary/20 blur-[100px] animate-pulse"></div>
<div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
<h2 id="cta-heading" class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">¿Listo para renovar tu coche?</h2>
<p class="mx-auto mt-6 max-w-2xl text-xl text-slate-300">Recibe un presupuesto personalizado en menos de 24 horas sin compromiso. Tu coche se merece el mejor trato.</p>
<div class="mt-10 flex flex-col justify-center gap-4 sm:flex-row">
<a href="presupuesto.php" class="inline-flex items-center justify-center rounded-lg bg-primary px-8 py-4 text-lg font-bold text-white shadow-lg hover:bg-primary-dark transition-all hover:scale-105">
                    Pedir Presupuesto Gratis
                </a>
<a href="contacto.php" class="inline-flex items-center justify-center rounded-lg border border-slate-700 bg-transparent px-8 py-4 text-lg font-bold text-white hover:bg-slate-800 transition-colors">
                    Llamar al Taller
                </a>
</div>
</div>
</section>

<?php 
include 'templates/_footer.php';
include 'templates/_scripts_footer.php';
?>


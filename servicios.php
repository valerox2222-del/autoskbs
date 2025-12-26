<?php
// Configuración de la página
$page_title = "Nuestros Servicios - AutoSKBS | Chapa y Pintura Barcelona";
$page_description = "Servicios de chapa y pintura profesional en AutoSKBS Barcelona. Reparación de carrocería, pintura al horno, detailing, restauración de clásicos y gestión de seguros. Presupuesto gratuito.";
$page_keywords = "servicios chapa y pintura, reparación carrocería, pintura coche Barcelona, detailing profesional, restauración coches clásicos, gestión seguros automóvil";
$page_canonical = "https://autoskbs.com/servicios.php";
$custom_styles = "body { font-family: 'Inter', sans-serif; } .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }";

// Incluir header
include 'templates/_header.php';
include 'templates/_whatsapp_button.php';
include 'templates/_menu.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-white dark:bg-background-dark pt-16 pb-12 lg:pt-24 lg:pb-20">
<div class="absolute inset-0 z-0 opacity-30 dark:opacity-10" style="background-image: radial-gradient(#137fec 1px, transparent 1px); background-size: 32px 32px;"></div>
<div class="layout-container relative z-10 flex flex-col items-center justify-center px-4 md:px-10 lg:px-40">
<div class="max-w-[800px] text-center">
<div class="mb-4 inline-flex items-center rounded-full border border-blue-100 bg-blue-50 px-3 py-1 text-xs font-semibold text-primary dark:border-blue-900/30 dark:bg-blue-900/20 dark:text-blue-300">
<span class="mr-1 h-2 w-2 rounded-full bg-primary"></span> Nueva tecnología de pintura
                    </div>
<h1 class="mb-6 text-4xl font-black leading-tight tracking-[-0.033em] text-[#111418] dark:text-white md:text-5xl lg:text-6xl">
                        Nuestros Servicios
                    </h1>
<p class="mb-8 text-lg font-normal leading-relaxed text-slate-600 dark:text-slate-400">
                        Soluciones integrales para su vehículo con los estándares más altos de la industria. Desde reparaciones estéticas hasta mecánica de precisión.
                    </p>
</div>
</div>
</section>
<!-- Services Grid (FeatureSection) -->
<section class="bg-background-light py-12 dark:bg-background-dark/50">
<div class="layout-container flex justify-center px-4 md:px-10 lg:px-40">
<div class="w-full max-w-[1200px]">
<div class="mb-10 flex flex-col justify-between gap-4 md:flex-row md:items-end">
<div class="max-w-2xl">
<h2 class="text-3xl font-bold tracking-tight text-[#111418] dark:text-white">Especialidades Técnicas</h2>
<p class="mt-2 text-slate-600 dark:text-slate-400">Seleccione un servicio para conocer más detalles sobre nuestro proceso.</p>
</div>
</div>
<!-- Cards Grid -->
<div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
<!-- Card 1 -->
<div class="group relative flex flex-col rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-gray-800 dark:bg-gray-900">
<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-primary dark:bg-blue-900/20 dark:text-blue-400">
<span class="material-symbols-outlined">directions_car</span>
</div>
<h3 class="mb-2 text-xl font-bold text-[#111418] dark:text-white">Reparación de Chapa</h3>
<p class="mb-6 flex-grow text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Reparación estructural y cosmética de carrocería utilizando bancos de enderezado de precisión milimétrica.
                            </p>
</div>
<!-- Card 2 -->
<div class="group relative flex flex-col rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-gray-800 dark:bg-gray-900">
<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-primary dark:bg-blue-900/20 dark:text-blue-400">
<span class="material-symbols-outlined">syringe</span>
</div>
<h3 class="mb-2 text-xl font-bold text-[#111418] dark:text-white">Pintura al Horno</h3>
<p class="mb-6 flex-grow text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Cabinas presurizadas y pintura al agua ecológica para acabados de fábrica duraderos y perfectos.
                            </p>
</div>
<!-- Card 3 -->
<div class="group relative flex flex-col rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-gray-800 dark:bg-gray-900">
<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-primary dark:bg-blue-900/20 dark:text-blue-400">
<span class="material-symbols-outlined">flare</span>
</div>
<h3 class="mb-2 text-xl font-bold text-[#111418] dark:text-white">Pulido de Faros</h3>
<p class="mb-6 flex-grow text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Devolvemos la transparencia y potencia lumínica a sus faros para garantizar su seguridad en carretera.
                            </p>
</div>
<!-- Card 4 -->
<div class="group relative flex flex-col rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-gray-800 dark:bg-gray-900">
<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-primary dark:bg-blue-900/20 dark:text-blue-400">
<span class="material-symbols-outlined">build</span>
</div>
<h3 class="mb-2 text-xl font-bold text-[#111418] dark:text-white">Mecánica Rápida</h3>
<p class="mb-6 flex-grow text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Cambios de aceite, frenos, filtros y revisiones pre-ITV. Servicio ágil para no detener su día a día.
                            </p>
</div>
<!-- Card 5 -->
<div class="group relative flex flex-col rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-gray-800 dark:bg-gray-900">
<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-primary dark:bg-blue-900/20 dark:text-blue-400">
<span class="material-symbols-outlined">shield</span>
</div>
<h3 class="mb-2 text-xl font-bold text-[#111418] dark:text-white">Sustitución de Lunas</h3>
<p class="mb-6 flex-grow text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Cambio y reparación de parabrisas con cristales homologados y calibración de sensores ADAS.
                            </p>
</div>
<!-- Card 6 -->
<div class="group relative flex flex-col rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-gray-800 dark:bg-gray-900">
<div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-primary dark:bg-blue-900/20 dark:text-blue-400">
<span class="material-symbols-outlined">assignment_turned_in</span>
</div>
<h3 class="mb-2 text-xl font-bold text-[#111418] dark:text-white">Gestión de Seguros</h3>
<p class="mb-6 flex-grow text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Tramitamos directamente el parte con su compañía aseguradora. Nos encargamos de todo el papeleo.
                            </p>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="bg-white py-16 dark:bg-background-dark">
<div class="layout-container flex justify-center px-4 md:px-10 lg:px-40">
<div class="w-full max-w-[1200px] overflow-hidden rounded-2xl bg-[#111418] text-white shadow-2xl dark:bg-gray-800">
<div class="relative flex flex-col items-center gap-6 px-6 py-16 text-center md:px-12 md:py-20 lg:flex-row lg:text-left">
<!-- Background decoration -->
<div class="absolute right-0 top-0 -mt-10 -mr-10 h-64 w-64 rounded-full bg-primary opacity-20 blur-3xl"></div>
<div class="relative z-10 flex flex-1 flex-col gap-4">
<h2 class="text-3xl font-black leading-tight tracking-tight md:text-4xl">
                                ¿Listo para renovar su coche?
                            </h2>
<p class="max-w-[600px] text-lg text-gray-300">
                                Solicite un presupuesto sin compromiso online o reserve su cita previa hoy mismo. Devolvemos a su vehículo su aspecto original.
                            </p>
</div>
<div class="relative z-10 flex shrink-0 flex-col gap-4 sm:flex-row">
<a href="presupuesto.php" class="flex h-12 min-w-[160px] items-center justify-center rounded-lg bg-primary px-6 text-base font-bold text-white transition hover:bg-blue-600">
                                Pedir Cita Previa
                            </a>
<a href="contacto.php" class="flex h-12 min-w-[160px] items-center justify-center rounded-lg border border-white/20 bg-transparent px-6 text-base font-bold text-white transition hover:bg-white/10">
                                Ver Ubicación
                            </a>
</div>
</div>
</div>
</div>
</section>

<?php 
include 'templates/_footer.php';
include 'templates/_scripts_footer.php';
?>


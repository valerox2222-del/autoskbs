<?php
$page_title = "Contacto y Ubicación - AutoSKBS | Taller Chapa y Pintura Barcelona";
$page_description = "Contacta con AutoSKBS - Taller de chapa y pintura en Barcelona. Dos ubicaciones: Sant Joan Despí (Calle Domenec 40) y L'Hospitalet (Calle de la Mina 69). Teléfono: +34 635 20 46 24.";
$page_keywords = "contacto taller chapa pintura Barcelona, taller Sant Joan Despí, taller L'Hospitalet, dirección AutoSKBS, teléfono taller automóvil Barcelona";
$page_canonical = "https://autoskbs.com/contacto.php";
$custom_styles = "body { font-family: 'Inter', sans-serif; } .material-symbols-outlined { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }";

include '../templates/_header.php';
include '../templates/_whatsapp_button.php';
include '../templates/_menu.php';
?>

<main class="flex-grow flex flex-col items-center w-full py-8 md:py-12 px-4 sm:px-10">
<div class="w-full max-w-[1400px] flex flex-col gap-12">
<!-- Page Heading -->
<div class="flex flex-col gap-3">
<h1 class="text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] text-[#111418] dark:text-white">
                    Contacto y Ubicación
                </h1>
<p class="text-slate-500 dark:text-slate-400 text-lg md:text-xl font-normal max-w-2xl">
                    Estamos aquí para ayudarte a restaurar tu vehículo. Dos ubicaciones estratégicas en Barcelona para tu comodidad.
                </p>
</div>

<!-- Contact Info Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Phone Card -->
<div class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm flex items-start gap-4">
<div class="bg-primary/10 p-3 rounded-lg text-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined">call</span>
</div>
<div>
<h3 class="text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wide mb-1">Teléfono</h3>
<a class="text-lg font-semibold hover:text-primary transition-colors block text-[#111418] dark:text-white" href="tel:+34635204624">+34 635 20 46 24</a>
<p class="text-sm text-slate-500 mt-1">Llámanos para presupuestos rápidos.</p>
</div>
</div>
<!-- Email Card -->
<div class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm flex items-start gap-4">
<div class="bg-primary/10 p-3 rounded-lg text-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined">mail</span>
</div>
<div>
<h3 class="text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wide mb-1">Email</h3>
<a class="text-lg font-semibold hover:text-primary transition-colors block text-[#111418] dark:text-white" href="mailto:info@autoskbs.com">info@autoskbs.com</a>
<p class="text-sm text-slate-500 mt-1">Respondemos en menos de 24h.</p>
</div>
</div>
<!-- WhatsApp Card -->
<div class="bg-card-light dark:bg-card-dark p-6 rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm flex items-start gap-4">
<div class="bg-[#25D366]/10 p-3 rounded-lg text-[#25D366] flex items-center justify-center shrink-0">
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
</svg>
</div>
<div>
<h3 class="text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wide mb-1">WhatsApp</h3>
<a class="text-lg font-semibold hover:text-[#25D366] transition-colors block text-[#111418] dark:text-white" href="https://wa.me/34635204624" target="_blank">Escribir ahora</a>
<p class="text-sm text-slate-500 mt-1">Respuesta inmediata.</p>
</div>
</div>
</div>

<!-- Two Locations Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<!-- Location 1: Sant Joan Despí -->
<div class="bg-card-light dark:bg-card-dark rounded-2xl border border-gray-100 dark:border-gray-800 shadow-lg overflow-hidden">
<div class="p-6 border-b border-gray-100 dark:border-gray-800 bg-gray-50/50 dark:bg-gray-800/50">
<h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-2">Taller Sant Joan Despí</h2>
<p class="text-slate-600 dark:text-slate-400">Fácil acceso desde C-32</p>
</div>
<div class="p-6 flex flex-col gap-6">
<div class="flex items-start gap-4">
<div class="bg-primary/10 p-2 rounded-lg text-primary shrink-0">
<span class="material-symbols-outlined">location_on</span>
</div>
<div>
<h3 class="text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wide mb-1">Dirección</h3>
<p class="text-base font-semibold text-[#111418] dark:text-white">Calle Domenec, 40</p>
<p class="text-sm text-slate-600 dark:text-slate-400">08970 Sant Joan Despí, Barcelona</p>
<a href="https://www.google.com/maps/search/?api=1&query=Calle+Domenec+40,+08970+Sant+Joan+Despí,+Barcelona" target="_blank" class="text-sm text-primary hover:underline mt-2 inline-block">Ver en Google Maps</a>
</div>
</div>
<!-- Map Sant Joan Despí -->
<div class="relative w-full h-64 rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<iframe class="w-full h-full" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Calle+Domenec+40,+08970+Sant+Joan+Despí,+Barcelona&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0;"></iframe>
</div>
</div>
</div>

<!-- Location 2: L'Hospitalet -->
<div class="bg-card-light dark:bg-card-dark rounded-2xl border border-gray-100 dark:border-gray-800 shadow-lg overflow-hidden">
<div class="p-6 border-b border-gray-100 dark:border-gray-800 bg-gray-50/50 dark:bg-gray-800/50">
<h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-2">Taller L'Hospitalet</h2>
<p class="text-slate-600 dark:text-slate-400">Acceso directo desde la B-10</p>
</div>
<div class="p-6 flex flex-col gap-6">
<div class="flex items-start gap-4">
<div class="bg-primary/10 p-2 rounded-lg text-primary shrink-0">
<span class="material-symbols-outlined">location_on</span>
</div>
<div>
<h3 class="text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wide mb-1">Dirección</h3>
<p class="text-base font-semibold text-[#111418] dark:text-white">Calle de la Mina, 69</p>
<p class="text-sm text-slate-600 dark:text-slate-400">08906 L'Hospitalet de Llobregat, Barcelona</p>
<a href="https://www.google.com/maps/search/?api=1&query=Calle+de+la+Mina+69,+08906+L'Hospitalet+de+Llobregat,+Barcelona" target="_blank" class="text-sm text-primary hover:underline mt-2 inline-block">Ver en Google Maps</a>
</div>
</div>
<!-- Map L'Hospitalet -->
<div class="relative w-full h-64 rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<iframe class="w-full h-full" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Calle+de+la+Mina+69,+08906+L'Hospitalet+de+Llobregat,+Barcelona&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0;"></iframe>
</div>
</div>
</div>
</div>

<!-- Opening Hours -->
<div class="bg-card-light dark:bg-card-dark rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm overflow-hidden">
<div class="px-6 py-4 border-b border-gray-100 dark:border-gray-800 bg-gray-50/50 dark:bg-gray-800/50 flex items-center gap-3">
<span class="material-symbols-outlined text-primary">schedule</span>
<h3 class="font-bold text-lg">Horario de atención</h3>
</div>
<div class="p-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-3">
<div class="flex justify-between items-center text-base">
<span class="font-medium text-[#111418] dark:text-white">Lunes - Viernes</span>
<span class="text-slate-600 dark:text-slate-300 font-semibold">08:00 - 18:00</span>
</div>
<div class="w-full h-px bg-gray-100 dark:bg-gray-700"></div>
<div class="flex justify-between items-center text-base">
<span class="font-medium text-[#111418] dark:text-white">Sábados</span>
<span class="text-slate-600 dark:text-slate-300 font-semibold">09:00 - 13:00</span>
</div>
<div class="w-full h-px bg-gray-100 dark:bg-gray-700"></div>
<div class="flex justify-between items-center text-base">
<span class="font-medium text-slate-400">Domingos</span>
<span class="px-3 py-1 rounded bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 text-xs font-bold uppercase">Cerrado</span>
</div>
</div>
<div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
<p class="text-sm text-slate-600 dark:text-slate-400 mb-2"><strong class="text-[#111418] dark:text-white">Ambos talleres</strong> comparten el mismo horario de atención.</p>
<p class="text-sm text-slate-500">Puedes llamarnos o escribirnos por WhatsApp para solicitar cita previa.</p>
</div>
</div>
</div>
</div>
</div>
</main>

<?php 
include '../templates/_footer.php';
include '../templates/_scripts_footer.php';
?>


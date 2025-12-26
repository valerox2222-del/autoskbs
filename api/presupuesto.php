<?php
$page_title = "Solicitar Presupuesto Gratuito - AutoSKBS | Chapa y Pintura Barcelona";
$page_description = "Solicita tu presupuesto gratuito de chapa y pintura en AutoSKBS Barcelona. Contacta por WhatsApp o email. Respuesta en menos de 24 horas.";
$page_keywords = "presupuesto chapa pintura, presupuesto gratuito taller, solicitar presupuesto coche, cotización reparación carrocería";
$page_canonical = "https://autoskbs.com/presupuesto.php";
$custom_styles = "";

include '../templates/_header.php';
include '../templates/_whatsapp_button.php';
include '../templates/_menu.php';
?>

<main class="flex flex-col items-center justify-center min-h-screen py-10 px-4 sm:px-10">
<div class="w-full max-w-[900px] flex flex-col gap-8">
<!-- Page Heading -->
<div class="flex flex-col gap-3 text-center">
<h1 class="text-[#111418] dark:text-white text-3xl md:text-4xl lg:text-5xl font-black leading-tight tracking-[-0.033em]">Solicitar Presupuesto</h1>
<p class="text-[#617589] dark:text-gray-400 text-base md:text-lg font-normal leading-normal max-w-2xl mx-auto">
                    Elige la forma que más te convenga para contactarnos. Te responderemos en menos de 24 horas.
                </p>
</div>

<!-- Contact Options Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
<!-- WhatsApp Card -->
<div class="bg-white dark:bg-[#1c2630] rounded-2xl border-2 border-[#25D366]/20 dark:border-[#25D366]/30 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-[#25D366]/40 p-8 text-center group">
<div class="flex justify-center mb-6">
<div class="bg-[#25D366]/10 dark:bg-[#25D366]/20 rounded-full p-6 group-hover:scale-110 transition-transform">
<svg class="w-16 h-16 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24">
<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
</svg>
</div>
</div>
<h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-3">Por WhatsApp</h2>
<p class="text-[#617589] dark:text-gray-400 text-sm mb-6 leading-relaxed">
                        Respuesta inmediata. Envíanos fotos del daño y te haremos un presupuesto rápido.
                    </p>
<a href="https://wa.me/34635204624?text=Hola,%20me%20gustaría%20solicitar%20un%20presupuesto%20para%20mi%20vehículo.%20Adjunto%20información%20del%20daño." target="_blank" class="inline-flex items-center justify-center w-full rounded-lg bg-[#25D366] hover:bg-[#20BA5A] text-white px-6 py-4 text-base font-bold transition-all shadow-lg hover:shadow-xl">
<span class="material-symbols-outlined mr-2">chat</span>
                        Abrir WhatsApp
                    </a>
<div class="mt-4 text-xs text-slate-500">
<p>📱 Funciona en móvil y escritorio</p>
</div>
</div>

<!-- Email Card -->
<div class="bg-white dark:bg-[#1c2630] rounded-2xl border-2 border-primary/20 dark:border-primary/30 shadow-lg hover:shadow-xl transition-all duration-300 hover:border-primary/40 p-8 text-center group">
<div class="flex justify-center mb-6">
<div class="bg-primary/10 dark:bg-primary/20 rounded-full p-6 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary text-6xl">mail</span>
</div>
</div>
<h2 class="text-2xl font-bold text-[#111418] dark:text-white mb-3">Por Email</h2>
<p class="text-[#617589] dark:text-gray-400 text-sm mb-6 leading-relaxed">
                        Envíanos un email con los detalles y fotos. Te responderemos en menos de 24 horas.
                    </p>
<a href="mailto:info@autoskbs.com?subject=Solicitud%20de%20Presupuesto&body=Hola,%0D%0A%0D%0AMe%20gustaría%20solicitar%20un%20presupuesto%20para%20mi%20vehículo.%0D%0A%0D%0ADetalles:%0D%0A-%20Marca%20y%20modelo:%0D%0A-%20Tipo%20de%20daño:%0D%0A-%20Año%20del%20vehículo:%0D%0A%0D%0AGracias" class="inline-flex items-center justify-center w-full rounded-lg bg-primary hover:bg-blue-600 text-white px-6 py-4 text-base font-bold transition-all shadow-lg hover:shadow-xl">
<span class="material-symbols-outlined mr-2">send</span>
                        Enviar Email
                    </a>
<div class="mt-4 text-xs text-slate-500">
<p>📧 info@autoskbs.com</p>
</div>
</div>
</div>

<!-- Info Box -->
<div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-xl p-6 mt-8">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-primary text-3xl shrink-0">info</span>
<div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white mb-2">¿Qué información necesitamos?</h3>
<ul class="text-sm text-[#617589] dark:text-gray-400 space-y-2 list-disc list-inside">
<li>Marca, modelo y año del vehículo</li>
<li>Fotos del daño (cuantas más mejor)</li>
<li>Tipo de reparación necesaria (chapa, pintura, abolladura, etc.)</li>
<li>Preferencia de taller (Sant Joan Despí o L'Hospitalet)</li>
</ul>
</div>
</div>
</div>

<!-- Alternative Contact -->
<div class="text-center mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
<p class="text-sm text-[#617589] dark:text-gray-400 mb-4">¿Prefieres llamarnos directamente?</p>
<a href="tel:+34635204624" class="inline-flex items-center gap-2 text-lg font-bold text-primary hover:text-blue-600">
<span class="material-symbols-outlined">call</span>
                        +34 635 20 46 24
                    </a>
</div>
</div>
</main>

<?php 
include '../templates/_footer.php';
include '../templates/_scripts_footer.php';
?>


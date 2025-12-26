<?php
$page_title = "Blog Coches Españoles y Europeos - AutoSKBS | Historia y Curiosidades";
$page_description = "Blog sobre coches españoles y europeos - AutoSKBS. Artículos sobre marcas, modelos, mantenimiento, restauración y curiosidades del automóvil europeo. Contenido SEO optimizado.";
$page_keywords = "blog coches españoles, coches europeos, Seat, Renault, Peugeot, Volkswagen, BMW, Mercedes, historia automóvil España, marcas coches Europa";
$page_canonical = "https://autoskbs.com/blog.php";
$custom_styles = "html { scroll-behavior: smooth; }";

include '../templates/_header.php';
include '../templates/_whatsapp_button.php';
include '../templates/_menu.php';
?>

<main class="flex-1 flex flex-col">
<!-- Hero Section -->
<section class="relative flex flex-col items-center justify-center py-20 px-4 text-center bg-gradient-to-br from-white via-blue-50/30 to-white dark:from-[#101922] dark:via-[#1a2634] dark:to-[#101922]">
<div class="max-w-[900px] flex flex-col gap-6 z-10">
<div class="flex flex-col gap-4">
<span class="text-primary font-bold tracking-wider text-xs uppercase">Blog de Automoción</span>
<h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-[1.1] tracking-[-0.033em] text-[#111418] dark:text-white">
                    Coches Españoles y Europeos
                </h1>
<p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto leading-relaxed">
                    Descubre la historia, curiosidades y consejos sobre las marcas de coches españolas y europeas más emblemáticas.
                </p>
</div>
</div>
</section>

<!-- Blog Articles Section -->
<section class="py-12 bg-white dark:bg-[#101922]" aria-labelledby="articles-heading">
<div class="container mx-auto px-4 md:px-6 max-w-7xl">
<h2 id="articles-heading" class="text-3xl font-bold text-[#111418] dark:text-white mb-8">Artículos Destacados</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<?php
$articulos = [
    ['titulo' => 'Historia de Seat: De 1950 a la Actualidad', 'desc' => 'Descubre cómo SEAT se convirtió en la marca española más importante. Desde sus inicios en la Barcelona de 1950 hasta convertirse en referencia del automóvil europeo.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB7Hi66TGptqkBHOa8X2L0P84Mrue9UkF4qgDn8QqficKfM7vJFKV_QoXIfAHai497QisT8yZc3yEDHvtJt7wAvqPlzEjeR0CERZt36Ql96IVy3enQyJ6rJPbBTD5DOdkFgHqzahkORx1aJIwu8XF-k7bYrAIgK2uvGxSA-hR_Qb9H3aAOAnRZAjXkGOzoMdbVKwGWVO7MJ9s9cJrLbOazMyy7QusRvgsFz1RdALEDpNHuuXI2d8XDjGnatgjR8W_dKWf54pH6Rprs', 'categoria' => 'Historia', 'color' => 'primary', 'tiempo' => '5 min lectura', 'fecha' => '15 Mar 2024'],
    ['titulo' => 'Top 10 Coches Españoles Más Vendidos de la Historia', 'desc' => 'Un recorrido por los modelos españoles que han marcado época: desde el Seat 600 hasta el moderno Seat León. Descubre cuáles han sido los más exitosos.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBRu7frBTmFODnQEwTOdbypVp9TMUmMRmFguMJ3N7z-R2jNYc1es9wX89T6hFOxAfNLQpvV75iJKYI3hXDmd7g6_AnzMfghQckGyPbum2joZm0-mcYDBBf0JEGOHudoE5PNhyrC5LtY06sa990as45fGGXVnacvSJaDoLvr3IsDi103yMKQNntdMJ8c5iNY3WFKEfjTjwsbGge3ovg7JAW-IOJmBExJ8Hdy3dS_i9PIQuZ-85VGHblDp5VNSsGuCHcTOF8jxXFsIi0', 'categoria' => 'Guía', 'color' => 'green-600', 'tiempo' => '8 min lectura', 'fecha' => '12 Mar 2024'],
    ['titulo' => 'Cuidado y Mantenimiento de Coches Clásicos Europeos', 'desc' => 'Consejos expertos para mantener tu coche clásico europeo en perfecto estado. Desde la chapa y pintura hasta el motor, todo lo que necesitas saber.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC2URSzYgvW7Bwh7vjO_IVe-Fgr8eYJtWuOyCX3p8WVAOZDweLxm4Iwdr52cNYJ5NP9xrRqTo6g0JKQSZRGduf02eWm3g55B0SKgB43bNQMfDEt6ciPm3RVQUV-iGQ-xqZdx42uxJ2365SR0XVjmPOgew86AVitaKrnpMRiWzOGqrypAv7uT0748gGDNMEHuAHUDRJcl59TAoPtjofEXrj2PUMOKNk07IpgSdjmayShgkIp81JD_RfttxC5omi2HmsMFdl8rHxphHs', 'categoria' => 'Mantenimiento', 'color' => 'blue-600', 'tiempo' => '6 min lectura', 'fecha' => '10 Mar 2024'],
    ['titulo' => 'Las Marcas Alemanas en España: BMW, Mercedes y Audi', 'desc' => 'Cómo las grandes marcas alemanas conquistaron el mercado español. Historia, modelos icónicos y por qué son tan populares en nuestro país.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDXpsO3kb4Mz-fjYfHpKhJ2K5jC0PqigcVk2kUZ9-YatNxwiRzpDyBwl8CtXU3bhokmyxDtpLRzhSRfzH58KB7EICz5j0h7zpkJZoYqz0Buhb1K2_k-a_i2r9OfYrlb9qe2724m0Z4rl4geTN4u6LPzm85swCf8debDVEW8diorxL7icdcks1yOz-ecJLw9bNCCttDWM02AO3shLG6ebQwjcJ4EnyFieSmuSdiQsLxvFtrhJdgJx96TqUrpuY-TIzucL6cjQ1T6SZc', 'categoria' => 'Curiosidades', 'color' => 'purple-600', 'tiempo' => '7 min lectura', 'fecha' => '8 Mar 2024'],
    ['titulo' => 'Coches Franceses: Peugeot, Renault y Citroën en España', 'desc' => 'La presencia histórica de las marcas francesas en nuestro país. Desde los Renault de los 80 hasta los modernos híbridos. Evolución y futuro.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBJY29TqgSHlqgRsKH9__JXC-usxkC-72gVSUSLCmJV3horppcS92hXNiHS6wLA47yIk-oKDftRk3As7EhhQEynQeke_VNhCEKiGSilqZ9AVa5D8kqi50Uic-X73vvR7C6laICMOSvgMdXP656DAZgb7UM-LDRxnXYp20jB5L3b_-uPqfW9Y6RJkMTl0Ora2R4dllqGVymdQT5Klv98FyJLO2QX9uE91ife2XWzy1BsFqw7MhIf42QnKiMLRHeqXDCYcrzbOXQeLLU', 'categoria' => 'Tendencias', 'color' => 'orange-600', 'tiempo' => '9 min lectura', 'fecha' => '5 Mar 2024'],
    ['titulo' => 'Restaurar un Seat 600: La Guía Completa', 'desc' => 'Todo lo que necesitas saber para restaurar el icono español por excelencia. Pasos, costes, talleres especializados y consejos de expertos.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCZ6Mcyx1AGU3YppPgcE0gTrG8nIhN9QgfHfHAdwTNCrQdfz5e-RxsE_dIUecUeAtCD_IctYcPMj4gIWIjSvF6hayfDxnKfulAYibJC80C6JZMes-DZtNI3odaiKQZZFSqQSY2t35dFLP-X2PdhoucGR3rmQLV6DrhmAld0yF3N-LK7frw1fCIurYXTZpVHHn630cyIGL-UEs2ste0BeywZUBFe8PD_Cb94Qv1CIk2jBCG_yeKYSBb3_3-ad44fq6ljZOJDepo9wns', 'categoria' => 'Restauración', 'color' => 'red-600', 'tiempo' => '10 min lectura', 'fecha' => '3 Mar 2024']
];

foreach ($articulos as $articulo): ?>
<article class="group flex flex-col bg-white dark:bg-[#1a2634] rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 dark:border-gray-800">
<div class="relative w-full aspect-video overflow-hidden bg-gray-200">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style='background-image: url("<?php echo htmlspecialchars($articulo['img']); ?>");'></div>
<div class="absolute top-4 left-4 bg-<?php echo htmlspecialchars($articulo['color']); ?> text-white px-3 py-1 rounded-full text-xs font-bold"><?php echo htmlspecialchars($articulo['categoria']); ?></div>
</div>
<div class="p-6 flex-grow flex flex-col">
<div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-3">
<span class="material-symbols-outlined text-base">schedule</span>
<span><?php echo htmlspecialchars($articulo['tiempo']); ?></span>
</div>
<h3 class="text-xl font-bold text-[#111418] dark:text-white mb-3 group-hover:text-primary transition-colors">
                        <?php echo htmlspecialchars($articulo['titulo']); ?>
                    </h3>
<p class="text-slate-600 dark:text-slate-400 mb-4 leading-relaxed flex-grow">
                        <?php echo htmlspecialchars($articulo['desc']); ?>
                    </p>
<div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
<span class="text-sm font-medium text-primary">Leer más →</span>
<span class="text-xs text-slate-500"><?php echo htmlspecialchars($articulo['fecha']); ?></span>
</div>
</div>
</article>
<?php endforeach; ?>
</div>
</div>
</section>

<!-- Categories Section -->
<section class="py-12 bg-background-light dark:bg-background-dark">
<div class="container mx-auto px-4 md:px-6 max-w-7xl">
<h2 class="text-3xl font-bold text-[#111418] dark:text-white mb-8">Categorías</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
<a href="#" class="group flex flex-col items-center justify-center p-6 bg-white dark:bg-[#1a2634] rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-800">
<div class="text-4xl mb-3">🇪🇸</div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">Coches Españoles</h3>
<p class="text-sm text-slate-500 dark:text-slate-400 text-center mt-2">SEAT, historia y modelos</p>
</a>
<a href="#" class="group flex flex-col items-center justify-center p-6 bg-white dark:bg-[#1a2634] rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-800">
<div class="text-4xl mb-3">🇩🇪</div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">Coches Alemanes</h3>
<p class="text-sm text-slate-500 dark:text-slate-400 text-center mt-2">BMW, Mercedes, Audi</p>
</a>
<a href="#" class="group flex flex-col items-center justify-center p-6 bg-white dark:bg-[#1a2634] rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-800">
<div class="text-4xl mb-3">🇫🇷</div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">Coches Franceses</h3>
<p class="text-sm text-slate-500 dark:text-slate-400 text-center mt-2">Peugeot, Renault, Citroën</p>
</a>
<a href="#" class="group flex flex-col items-center justify-center p-6 bg-white dark:bg-[#1a2634] rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-800">
<div class="text-4xl mb-3">🔧</div>
<h3 class="text-lg font-bold text-[#111418] dark:text-white group-hover:text-primary transition-colors">Mantenimiento</h3>
<p class="text-sm text-slate-500 dark:text-slate-400 text-center mt-2">Consejos y guías</p>
</a>
</div>
</div>
</section>

<!-- CTA Section -->
<section class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 py-20 px-4">
<div class="container mx-auto max-w-4xl text-center">
<h2 class="text-3xl md:text-4xl font-black text-white mb-6 tracking-tight">
                    ¿Necesitas Restaurar tu Coche Español o Europeo?
                </h2>
<p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
                    En AutoSKBS somos expertos en restauración de coches clásicos y modernos. Contamos con experiencia en todas las marcas europeas.
                </p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="presupuesto.php" class="flex items-center justify-center h-12 px-8 rounded-lg bg-primary hover:bg-primary-dark text-white font-bold text-base transition-all shadow-[0_0_20px_rgba(19,127,236,0.3)] hover:shadow-[0_0_30px_rgba(19,127,236,0.5)]">
                        Solicitar Presupuesto
                    </a>
<a href="contacto.php" class="flex items-center justify-center h-12 px-8 rounded-lg bg-transparent border border-gray-700 hover:bg-white/5 text-white font-medium text-base transition-colors">
                        Contactar con Nosotros
                    </a>
</div>
</div>
</section>
</main>

<?php 
include '../templates/_footer.php';
include '../templates/_scripts_footer.php';
?>


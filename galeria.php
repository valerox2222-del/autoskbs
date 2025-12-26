<?php
$page_title = "Galería de Trabajos - AutoSKBS | Proyectos Chapa y Pintura";
$page_description = "Galería de trabajos realizados por AutoSKBS - Taller de chapa y pintura en Barcelona. Restauraciones, reparaciones y detailing profesional. Ver antes y después.";
$page_keywords = "galería trabajos chapa pintura, restauraciones coches Barcelona, antes después reparaciones, proyectos taller automóvil";
$page_canonical = "https://autoskbs.com/galeria.php";
$custom_styles = "";

include 'templates/_header.php';
include 'templates/_whatsapp_button.php';
include 'templates/_menu.php';
?>

<main class="flex-1 flex flex-col">
<section class="relative flex flex-col items-center justify-center py-20 px-4 text-center bg-white dark:bg-[#101922]">
<div class="max-w-[800px] flex flex-col gap-6 z-10">
<div class="flex flex-col gap-4">
<span class="text-primary font-bold tracking-wider text-xs uppercase">Nuestra Excelencia</span>
<h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-[1.1] tracking-[-0.033em] text-[#111418] dark:text-white">
                        Galería de Transformaciones
                    </h1>
<p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto leading-relaxed">
                        Más que reparaciones, devolvemos la vida a tu vehículo. Explora nuestros proyectos recientes y descubre la diferencia en cada detalle.
                    </p>
</div>
</div>
</section>
<section class="py-12 bg-white dark:bg-[#101922]">
<div class="container mx-auto px-4 md:px-6">
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary">star</span>
<h3 class="text-lg font-bold text-[#111418] dark:text-white uppercase tracking-wide">Proyecto Destacado</h3>
</div>
<div class="group relative overflow-hidden rounded-2xl bg-white dark:bg-[#1a2634] shadow-xl border border-gray-100 dark:border-gray-800">
<div class="grid md:grid-cols-2 gap-0">
<div class="relative min-h-[400px] w-full bg-gray-200 dark:bg-gray-800 overflow-hidden">
<div class="flex h-full w-full">
<div class="w-1/2 h-full relative border-r border-white/30">
<div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB7Hi66TGptqkBHOa8X2L0P84Mrue9UkF4qgDn8QqficKfM7vJFKV_QoXIfAHai497QisT8yZc3yEDHvtJt7wAvqPlzEjeR0CERZt36Ql96IVy3enQyJ6rJPbBTD5DOdkFgHqzahkORx1aJIwu8XF-k7bYrAIgK2uvGxSA-hR_Qb9H3aAOAnRZAjXkGOzoMdbVKwGWVO7MJ9s9cJrLbOazMyy7QusRvgsFz1RdALEDpNHuuXI2d8XDjGnatgjR8W_dKWf54pH6Rprs");'></div>
<div class="absolute bottom-4 left-4 text-white text-xs font-bold drop-shadow-md">ANTES</div>
</div>
<div class="w-1/2 h-full relative">
<div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBRu7frBTmFODnQEwTOdbypVp9TMUmMRmFguMJ3N7z-R2jNYc1es9wX89T6hFOxAfNLQpvV75iJKYI3hXDmd7g6_AnzMfghQckGyPbum2joZm0-mcYDBBf0JEGOHudoE5PNhyrC5LtY06sa990as45fGGXVnacvSJaDoLvr3IsDi103yMKQNntdMJ8c5iNY3WFKEfjTjwsbGge3ovg7JAW-IOJmBExJ8Hdy3dS_i9PIQuZ-85VGHblDp5VNSsGuCHcTOF8jxXFsIi0");'></div>
<div class="absolute bottom-4 right-4 text-white text-xs font-bold drop-shadow-md">DESPUÉS</div>
</div>
</div>
</div>
<div class="p-8 md:p-10 flex flex-col justify-center">
<h2 class="text-3xl font-bold text-[#111418] dark:text-white mb-4">Porsche 911 Carrera '89</h2>
<p class="text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                                Un proceso de restauración meticuloso de 3 meses. Recuperamos el color original "Guards Red", eliminamos óxido estructural en los pasos de rueda y aplicamos un tratamiento cerámico final para garantizar brillo eterno.
                            </p>
</div>
</div>
</div>
</section>
<section class="py-12 bg-background-light dark:bg-background-dark flex-1">
<div class="container mx-auto px-4 md:px-6">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
<?php
$proyectos = [
    ['titulo' => 'Mazda MX-5', 'desc' => 'Reparación de arañazos laterales y pulido completo con cerámica.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC1iQ5d9Oz9y8fVWgwBOWmnhgZOiNy-TtcBMCuNLAPdLtcHXsmybQ5Q4h2y4EfelonKGL1lnjlySGmhOUUpVuRI6fKjzLVoqrCs1ZVzuXK_MUok7b28ktnasEVpbw2hon5WvZX5JbPcken4bSWFIxSGsGrvLIFOi2uMKKfFtyEk4q_Y0VrB9xxf9LZQMgrB3WLszuzaCC676xWjN6SjosfsVXFAq-asWNjsRfOkNlru8sEzDJgQLBWXTWsoeEvmVgu1rfHN_XD5ceY'],
    ['titulo' => 'Ferrari 488 GTB', 'desc' => 'Restauración completa de chapa y pintura. Resultado impecable.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBJY29TqgSHlqgRsKH9__JXC-usxkC-72gVSUSLCmJV3horppcS92hXNiHS6wLA47yIk-oKDftRk3As7EhhQEynQeke_VNhCEKiGSilqZ9AVa5D8kqi50Uic-X73vvR7C6laICMOSvgMdXP656DAZgb7UM-LDRxnXYp20jB5L3b_-uPqfW9Y6RJkMTl0Ora2R4dllqGVymdQT5Klv98FyJLO2QX9uE91ife2XWzy1BsFqw7MhIf42QnKiMLRHeqXDCYcrzbOXQeLLU'],
    ['titulo' => 'Mercedes-Benz Clásico', 'desc' => 'Pintura completa y restauración de detalles. Clásico renovado.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC2URSzYgvW7Bwh7vjO_IVe-Fgr8eYJtWuOyCX3p8WVAOZDweLxm4Iwdr52cNYJ5NP9xrRqTo6g0JKQSZRGduf02eWm3g55B0SKgB43bNQMfDEt6ciPm3RVQUV-iGQ-xqZdx42uxJ2365SR0XVjmPOgew86AVitaKrnpMRiWzOGqrypAv7uT0748gGDNMEHuAHUDRJcl59TAoPtjofEXrj2PUMOKNk07IpgSdjmayShgkIp81JD_RfttxC5omi2HmsMFdl8rHxphHs'],
    ['titulo' => 'BMW Serie 3', 'desc' => 'Tratamiento cerámico y corrección de barniz. Brillante como nuevo.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDXpsO3kb4Mz-fjYfHpKhJ2K5jC0PqigcVk2kUZ9-YatNxwiRzpDyBwl8CtXU3bhokmyxDtpLRzhSRfzH58KB7EICz5j0h7zpkJZoYqz0Buhb1K2_k-a_i2r9OfYrlb9qe2724m0Z4rl4geTN4u6LPzm85swCf8debDVEW8diorxL7icdcks1yOz-ecJLw9bNCCttDWM02AO3shLG6ebQwjcJ4EnyFieSmuSdiQsLxvFtrhJdgJx96TqUrpuY-TIzucL6cjQ1T6SZc'],
    ['titulo' => 'Audi Q5', 'desc' => 'Reparación de daños por golpe y pintura completa. Perfecto acabado.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBRu7frBTmFODnQEwTOdbypVp9TMUmMRmFguMJ3N7z-R2jNYc1es9wX89T6hFOxAfNLQpvV75iJKYI3hXDmd7g6_AnzMfghQckGyPbum2joZm0-mcYDBBf0JEGOHudoE5PNhyrC5LtY06sa990as45fGGXVnacvSJaDoLvr3IsDi103yMKQNntdMJ8c5iNY3WFKEfjTjwsbGge3ovg7JAW-IOJmBExJ8Hdy3dS_i9PIQuZ-85VGHblDp5VNSsGuCHcTOF8jxXFsIi0'],
    ['titulo' => 'Seat León', 'desc' => 'Detailing completo y protección cerámica. Aspecto premium garantizado.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB7Hi66TGptqkBHOa8X2L0P84Mrue9UkF4qgDn8QqficKfM7vJFKV_QoXIfAHai497QisT8yZc3yEDHvtJt7wAvqPlzEjeR0CERZt36Ql96IVy3enQyJ6rJPbBTD5DOdkFgHqzahkORx1aJIwu8XF-k7bYrAIgK2uvGxSA-hR_Qb9H3aAOAnRZAjXkGOzoMdbVKwGWVO7MJ9s9cJrLbOazMyy7QusRvgsFz1RdALEDpNHuuXI2d8XDjGnatgjR8W_dKWf54pH6Rprs'],
    ['titulo' => 'Volkswagen Golf', 'desc' => 'Restauración de parachoques y pintura al horno. Calidad original.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDXvxxTeuNRarzd3DIOODb3PFrhL2KlDzEtsd9XfeHpOotIPd1m-rE-Z9GbE426yVmHw55lkA6WQdpupI_eXt81_WixFbWhc_vneQMsXhZStEJKdilWQAlLRn7easGdOwKQoh6dAgRtQnZ_6SYWJ2Ii4P3eLPCmN96hYRGbRIYswQfjoOXnj4wzYiCo1n0KIl72ph6KSmP0hZE51kAcAFnYKB7FMWjXjixyFwR-x4nKTztaHDyjHrIvhO0BU-1ZkjpHjmIfLZkp7ng'],
    ['titulo' => 'Opel Corsa', 'desc' => 'Pintura completa y corrección de imperfecciones. Renovado al 100%.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAE6FKcOgKoFwz8h6mALY5Yj3JSa7aYJ32XoXXAqr6HEvfmIknnsEk2t0-i7Khc_cv0vX_hwHusssGuJSWO4erZoW75hfSVB_m33nHd25DT5cLNrm6En2IcyCbyK81tK1Twbv1d2nUlqS25iIXG7Dq5rJrdiENMR_dPTjj7wFz8ACcG1g5IGXfc3raH6UCDISs3WX4sKN0vgQdwIsW8Fl5O2rb1j7FoiiXa9x-y9yDUZsUhQaLyWFQbLGtZn_iFK2LKg-3kiEiwj8U'],
    ['titulo' => 'Renault Clio', 'desc' => 'Reparación de chapa y pintura de puertas. Restauración profesional.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCZ6Mcyx1AGU3YppPgcE0gTrG8nIhN9QgfHfHAdwTNCrQdfz5e-RxsE_dIUecUeAtCD_IctYcPMj4gIWIjSvF6hayfDxnKfulAYibJC80C6JZMes-DZtNI3odaiKQZZFSqQSY2t35dFLP-X2PdhoucGR3rmQLV6DrhmAld0yF3N-LK7frw1fCIurYXTZpVHHn630cyIGL-UEs2ste0BeywZUBFe8PD_Cb94Qv1CIk2jBCG_yeKYSBb3_3-ad44fq6ljZOJDepo9wns']
];

foreach ($proyectos as $proyecto): ?>
<article class="group flex flex-col gap-3 cursor-pointer bg-white dark:bg-[#1a2634] p-3 rounded-xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
<div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden bg-gray-100">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" style='background-image: url("<?php echo htmlspecialchars($proyecto['img']); ?>");'></div>
</div>
<div class="px-1 pb-2">
<h3 class="text-[#111418] dark:text-white text-lg font-bold leading-tight mb-1 group-hover:text-primary transition-colors"><?php echo htmlspecialchars($proyecto['titulo']); ?></h3>
<p class="text-slate-500 dark:text-slate-400 text-sm"><?php echo htmlspecialchars($proyecto['desc']); ?></p>
</div>
</article>
<?php endforeach; ?>
</div>
</div>
</section>
<section class="bg-[#101922] py-20 px-4">
<div class="container mx-auto max-w-4xl text-center">
<h2 class="text-3xl md:text-4xl font-black text-white mb-6 tracking-tight">
                    ¿Tu vehículo necesita un cambio así?
                </h2>
<p class="text-gray-400 text-lg mb-10 max-w-2xl mx-auto">
                    Obtén un presupuesto gratuito en menos de 24 horas. Adjunta fotos de tu vehículo y nuestros expertos evaluarán el trabajo.
                </p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="presupuesto.php" class="flex items-center justify-center h-12 px-8 rounded-lg bg-primary hover:bg-primary-dark text-white font-bold text-base transition-all shadow-[0_0_20px_rgba(19,127,236,0.3)] hover:shadow-[0_0_30px_rgba(19,127,236,0.5)]">
                        Pedir Presupuesto Online
                    </a>
<a href="contacto.php" class="flex items-center justify-center h-12 px-8 rounded-lg bg-transparent border border-gray-700 hover:bg-white/5 text-white font-medium text-base transition-colors">
                        Llamar al Taller
                    </a>
</div>
</div>
</section>
</main>

<?php 
include 'templates/_footer.php';
include 'templates/_scripts_footer.php';
?>


<!-- Navigation -->
<nav class="sticky top-0 z-50 w-full border-b border-slate-200 bg-white/95 backdrop-blur-md shadow-sm" role="navigation" aria-label="Navegación principal">
<div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
<div class="flex items-center gap-3">
<a href="index.php" class="flex items-center gap-3 transition-transform hover:scale-105" aria-label="AutoSKBS - Ir a inicio">
<div class="flex size-8 items-center justify-center rounded-lg bg-primary text-white" aria-hidden="true">
<span class="material-symbols-outlined text-[20px]">directions_car</span>
</div>
<span class="text-lg font-bold tracking-tight text-slate-900">AutoSKBS</span>
</a>
</div>
<div class="hidden items-center gap-8 md:flex">
<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
<a class="text-sm font-medium <?php echo ($current_page == 'index.php') ? 'text-primary' : 'text-slate-600 hover:text-primary'; ?> transition-colors relative group" href="index.php">
    Inicio
    <span class="absolute bottom-0 left-0 <?php echo ($current_page == 'index.php') ? 'w-full' : 'w-0'; ?> h-0.5 bg-primary transition-all group-hover:w-full"></span>
</a>
<a class="text-sm font-medium <?php echo ($current_page == 'servicios.php') ? 'text-primary' : 'text-slate-600 hover:text-primary'; ?> transition-colors relative group" href="servicios.php">
    Servicios
    <span class="absolute bottom-0 left-0 <?php echo ($current_page == 'servicios.php') ? 'w-full' : 'w-0'; ?> h-0.5 bg-primary transition-all group-hover:w-full"></span>
</a>
<a class="text-sm font-medium <?php echo ($current_page == 'galeria.php') ? 'text-primary' : 'text-slate-600 hover:text-primary'; ?> transition-colors relative group" href="galeria.php">
    Galería
    <span class="absolute bottom-0 left-0 <?php echo ($current_page == 'galeria.php') ? 'w-full' : 'w-0'; ?> h-0.5 bg-primary transition-all group-hover:w-full"></span>
</a>
<a class="text-sm font-medium <?php echo ($current_page == 'blog.php') ? 'text-primary' : 'text-slate-600 hover:text-primary'; ?> transition-colors relative group" href="blog.php">
    Blog
    <span class="absolute bottom-0 left-0 <?php echo ($current_page == 'blog.php') ? 'w-full' : 'w-0'; ?> h-0.5 bg-primary transition-all group-hover:w-full"></span>
</a>
<a class="text-sm font-medium <?php echo ($current_page == 'sobre-nosotros.php') ? 'text-primary' : 'text-slate-600 hover:text-primary'; ?> transition-colors relative group" href="sobre-nosotros.php">
    Sobre Nosotros
    <span class="absolute bottom-0 left-0 <?php echo ($current_page == 'sobre-nosotros.php') ? 'w-full' : 'w-0'; ?> h-0.5 bg-primary transition-all group-hover:w-full"></span>
</a>
<a class="text-sm font-medium <?php echo ($current_page == 'contacto.php') ? 'text-primary' : 'text-slate-600 hover:text-primary'; ?> transition-colors relative group" href="contacto.php">
    Contacto
    <span class="absolute bottom-0 left-0 <?php echo ($current_page == 'contacto.php') ? 'w-full' : 'w-0'; ?> h-0.5 bg-primary transition-all group-hover:w-full"></span>
</a>
</div>
<div class="flex items-center gap-4">
<a href="presupuesto.php" class="rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-primary-dark hover:shadow-glow transition-all active:scale-95">
                    Pedir Presupuesto
                </a>
</div>
</div>
</nav>


# AutoSKBS - Sitio Web

Sitio web del taller de chapa y pintura AutoSKBS en Barcelona.

## 🚀 Despliegue en Vercel

Este proyecto está configurado para desplegarse en Vercel con soporte PHP.

### Pasos para desplegar:

1. **Instalar Vercel CLI** (opcional, también puedes usar la interfaz web):
   ```bash
   npm i -g vercel
   ```

2. **Desplegar el proyecto**:
   ```bash
   vercel
   ```
   
   O simplemente conecta tu repositorio de GitHub/GitLab/Bitbucket a Vercel desde la interfaz web.

3. **Configuración automática**:
   - Vercel detectará automáticamente los archivos PHP
   - El archivo `vercel.json` ya está configurado
   - No necesitas configuración adicional

### 📁 Estructura del Proyecto

```
├── index.php              # Página principal
├── servicios.php          # Página de servicios
├── contacto.php           # Página de contacto
├── galeria.php            # Galería de trabajos
├── blog.php               # Blog
├── sobre-nosotros.php     # Sobre nosotros
├── presupuesto.php        # Solicitar presupuesto
├── aviso-legal.php        # Aviso legal
├── politica-privacidad.php # Política de privacidad
├── politica-cookies.php   # Política de cookies
├── templates/             # Templates PHP reutilizables
│   ├── _header.php
│   ├── _menu.php
│   ├── _footer.php
│   ├── _whatsapp_button.php
│   └── _scripts_footer.php
├── assets/                # Recursos estáticos
│   ├── css/
│   ├── js/
│   ├── img/
│   └── fonts/
└── vercel.json           # Configuración de Vercel
```

### 🔧 Tecnologías

- **PHP** - Backend
- **Tailwind CSS** - Estilos (via CDN)
- **Material Symbols** - Iconos
- **Vercel** - Hosting y despliegue

### 📝 Notas

- El proyecto usa PHP con sistema de templates modular
- Todos los archivos PHP están listos para producción
- Los assets estáticos se sirven desde la carpeta `assets/`
- El sitio es completamente responsive y optimizado para SEO

### 🌐 URLs de Producción

Una vez desplegado, Vercel te proporcionará una URL como:
- `https://tu-proyecto.vercel.app`

Puedes configurar un dominio personalizado desde el dashboard de Vercel.


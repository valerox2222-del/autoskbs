# 🚀 Cómo Subir tu Proyecto a Vercel

## Opción 1: Arrastrar y Soltar (MÁS FÁCIL) ⭐

### Pasos:
1. **Abre tu navegador** y ve a: https://vercel.com/new
2. **Inicia sesión** o crea una cuenta gratuita en Vercel
3. **Arrastra la carpeta completa** del proyecto a la página
4. **Espera** a que Vercel procese y despliegue tu proyecto
5. **¡Listo!** Te dará una URL como: `https://tu-proyecto.vercel.app`

---

## Opción 2: Con GitHub (RECOMENDADO para actualizaciones)

### Paso 1: Instalar Git (si no lo tienes)
1. Descarga Git desde: https://git-scm.com/download/win
2. Instálalo con las opciones por defecto
3. Reinicia tu terminal

### Paso 2: Crear repositorio en GitHub
1. Ve a https://github.com y crea una cuenta (si no tienes)
2. Haz clic en "New repository"
3. Nombra tu repositorio (ej: `autoskbs-web`)
4. **NO** marques "Initialize with README"
5. Haz clic en "Create repository"

### Paso 3: Subir tu código a GitHub
Abre PowerShell en la carpeta del proyecto y ejecuta:

```powershell
# Inicializar Git
git init

# Agregar todos los archivos
git add .

# Hacer el primer commit
git commit -m "Primera versión del sitio AutoSKBS"

# Conectar con GitHub (reemplaza TU_USUARIO y TU_REPOSITORIO)
git remote add origin https://github.com/TU_USUARIO/TU_REPOSITORIO.git

# Subir el código
git branch -M main
git push -u origin main
```

### Paso 4: Conectar GitHub con Vercel
1. Ve a https://vercel.com
2. Haz clic en "Add New Project"
3. Selecciona "Import Git Repository"
4. Conecta tu cuenta de GitHub
5. Selecciona tu repositorio `autoskbs-web`
6. Haz clic en "Deploy"

**Ventaja:** Cada vez que hagas cambios y los subas a GitHub, Vercel los desplegará automáticamente.

---

## Opción 3: Con Vercel CLI (Para desarrolladores)

### Instalar Vercel CLI:
```powershell
npm install -g vercel
```

### Desplegar:
```powershell
# En la carpeta del proyecto
vercel

# Sigue las instrucciones:
# - ¿Set up and deploy? → Y
# - ¿Which scope? → Tu cuenta
# - ¿Link to existing project? → N
# - ¿Project name? → autoskbs (o el que quieras)
# - ¿Directory? → . (punto)
```

---

## ✅ Después del Despliegue

1. **URL de producción:** Vercel te dará una URL como `https://autoskbs.vercel.app`
2. **Dominio personalizado:** Puedes agregar tu dominio desde el dashboard de Vercel
3. **Actualizaciones:** Si usas GitHub, cada push se desplegará automáticamente

---

## 🆘 Problemas Comunes

### Error: "No se encuentra PHP"
- Vercel detecta PHP automáticamente, pero si hay problemas, verifica que `vercel.json` existe

### Error: "Build failed"
- Verifica que todos los archivos PHP estén en la raíz o en las rutas correctas
- Asegúrate de que `templates/` y `assets/` estén incluidos

### Los includes no funcionan
- Verifica que las rutas en los `include` sean relativas correctamente
- Ejemplo: `include 'templates/_header.php';` (no `include '/templates/_header.php';`)

---

## 📞 ¿Necesitas Ayuda?

- Documentación de Vercel: https://vercel.com/docs
- Soporte de Vercel: https://vercel.com/support


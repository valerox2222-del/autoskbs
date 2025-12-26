# 📤 Cómo Subir tu Código a GitHub

Ya tienes el repositorio creado: https://github.com/valerox2222-del/autoskbs.git

## Paso 1: Instalar Git (si no lo tienes)

1. Descarga Git desde: https://git-scm.com/download/win
2. Instálalo con las opciones por defecto
3. **Reinicia PowerShell** después de instalar

## Paso 2: Configurar Git (solo la primera vez)

Abre PowerShell y ejecuta:

```powershell
git config --global user.name "Tu Nombre"
git config --global user.email "tu-email@ejemplo.com"
```

## Paso 3: Subir tu código al repositorio

Ejecuta estos comandos en PowerShell **dentro de la carpeta del proyecto**:

```powershell
# Inicializar Git
git init

# Agregar todos los archivos
git add .

# Hacer el primer commit
git commit -m "Primera versión del sitio AutoSKBS"

# Conectar con tu repositorio de GitHub
git remote add origin https://github.com/valerox2222-del/autoskbs.git

# Cambiar a la rama main
git branch -M main

# Subir el código
git push -u origin main
```

**Nota:** Te pedirá tu usuario y contraseña de GitHub. Si tienes autenticación de dos factores, necesitarás un token de acceso personal.

## Paso 4: Crear Token de Acceso (si es necesario)

1. Ve a: https://github.com/settings/tokens
2. Haz clic en "Generate new token (classic)"
3. Dale un nombre (ej: "Vercel Deployment")
4. Selecciona el scope `repo` (acceso completo a repositorios)
5. Haz clic en "Generate token"
6. **Copia el token** (solo se muestra una vez)
7. Úsalo como contraseña cuando Git te la pida

## Paso 5: Conectar con Vercel

1. Ve a: https://vercel.com
2. Haz clic en "Add New Project"
3. Selecciona "Import Git Repository"
4. Conecta tu cuenta de GitHub (si no lo has hecho)
5. Selecciona el repositorio `valerox2222-del/autoskbs`
6. Haz clic en "Deploy"

¡Listo! Cada vez que hagas cambios y los subas a GitHub, Vercel los desplegará automáticamente.


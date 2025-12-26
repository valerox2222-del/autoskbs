# Script para subir el proyecto a GitHub
# Ejecuta este script DESPUÉS de instalar Git

Write-Host "=== Subiendo proyecto a GitHub ===" -ForegroundColor Cyan

# Verificar que Git está instalado
try {
    $gitVersion = git --version
    Write-Host "Git encontrado: $gitVersion" -ForegroundColor Green
} catch {
    Write-Host "ERROR: Git no está instalado. Por favor instálalo desde: https://git-scm.com/download/win" -ForegroundColor Red
    exit 1
}

# Inicializar Git
Write-Host "`n1. Inicializando Git..." -ForegroundColor Yellow
git init

# Agregar todos los archivos
Write-Host "2. Agregando archivos..." -ForegroundColor Yellow
git add .

# Hacer el primer commit
Write-Host "3. Creando commit..." -ForegroundColor Yellow
git commit -m "Primera versión del sitio AutoSKBS"

# Conectar con GitHub
Write-Host "4. Conectando con GitHub..." -ForegroundColor Yellow
git remote add origin https://github.com/valerox2222-del/autoskbs.git

# Cambiar a la rama main
Write-Host "5. Configurando rama main..." -ForegroundColor Yellow
git branch -M main

# Subir el código
Write-Host "6. Subiendo código a GitHub..." -ForegroundColor Yellow
Write-Host "   (Te pedirá tu usuario y contraseña de GitHub)" -ForegroundColor Cyan
git push -u origin main

Write-Host "`n¡Listo! Tu código está en GitHub." -ForegroundColor Green
Write-Host "Ahora ve a https://vercel.com y conecta tu repositorio." -ForegroundColor Cyan


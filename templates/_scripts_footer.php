<!-- Cookie Banner -->
<div id="cookieBanner" class="cookie-banner" role="dialog" aria-labelledby="cookieTitle" aria-live="polite">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
<div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
<div class="flex-1">
<div class="flex items-center gap-3 mb-2">
<span class="material-symbols-outlined text-primary text-2xl">cookie</span>
<h3 id="cookieTitle" class="text-lg font-bold text-slate-900 dark:text-white">Uso de Cookies</h3>
</div>
<p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                Utilizamos cookies para mejorar tu experiencia de navegación, analizar el tráfico del sitio y personalizar el contenido. Al hacer clic en "Aceptar todas", consientes el uso de todas las cookies. También puedes configurar tus preferencias o rechazar las cookies no esenciales.
            </p>
<div class="mt-3 flex flex-wrap gap-4 text-sm">
<a href="politica-cookies.php" class="text-primary hover:underline font-medium">Más información</a>
</div>
</div>
<div class="flex flex-col sm:flex-row gap-3 shrink-0">
<button id="rejectCookies" class="px-6 py-2.5 rounded-lg border border-slate-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 font-medium hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
                    Rechazar
                </button>
<button id="acceptCookies" class="px-6 py-2.5 rounded-lg bg-primary hover:bg-primary-dark text-white font-medium shadow-md hover:shadow-lg transition-all">
                    Aceptar todas
                </button>
</div>
</div>
</div>
</div>

<script>
        // Cookie Banner Management
        (function() {
            const COOKIE_CONSENT_KEY = 'autoskbs_cookie_consent';
            const COOKIE_BANNER_ID = 'cookieBanner';
            const ACCEPT_BUTTON_ID = 'acceptCookies';
            const REJECT_BUTTON_ID = 'rejectCookies';
            
            function getCookieConsent() {
                return localStorage.getItem(COOKIE_CONSENT_KEY);
            }
            
            function setCookieConsent(consent) {
                localStorage.setItem(COOKIE_CONSENT_KEY, consent);
                const expiryDate = new Date();
                expiryDate.setFullYear(expiryDate.getFullYear() + 1);
                document.cookie = `${COOKIE_CONSENT_KEY}=${consent}; expires=${expiryDate.toUTCString()}; path=/; SameSite=Lax`;
            }
            
            function showCookieBanner() {
                const banner = document.getElementById(COOKIE_BANNER_ID);
                if (banner) {
                    setTimeout(() => {
                        banner.classList.add('show');
                    }, 500);
                }
            }
            
            function hideCookieBanner() {
                const banner = document.getElementById(COOKIE_BANNER_ID);
                if (banner) {
                    banner.classList.remove('show');
                    setTimeout(() => {
                        banner.style.display = 'none';
                    }, 300);
                }
            }
            
            function acceptCookies() {
                setCookieConsent('accepted');
                hideCookieBanner();
                // Aquí puedes inicializar servicios de analytics si los usas
                // Por ejemplo: gtag('consent', 'update', { 'analytics_storage': 'granted' });
            }
            
            function rejectCookies() {
                setCookieConsent('rejected');
                hideCookieBanner();
                // Aquí puedes desactivar servicios de analytics si los usas
                // Por ejemplo: gtag('consent', 'update', { 'analytics_storage': 'denied' });
            }
            
            // Inicialización
            document.addEventListener('DOMContentLoaded', function() {
                const consent = getCookieConsent();
                
                if (!consent) {
                    showCookieBanner();
                } else {
                    const banner = document.getElementById(COOKIE_BANNER_ID);
                    if (banner) {
                        banner.style.display = 'none';
                    }
                }
                
                // Event listeners
                const acceptBtn = document.getElementById(ACCEPT_BUTTON_ID);
                const rejectBtn = document.getElementById(REJECT_BUTTON_ID);
                
                if (acceptBtn) {
                    acceptBtn.addEventListener('click', acceptCookies);
                }
                
                if (rejectBtn) {
                    rejectBtn.addEventListener('click', rejectCookies);
                }
            });
        })();
    </script>
</body></html>


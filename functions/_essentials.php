<?php
/**
 * Funciones esenciales del sitio
 */

// Prevenir acceso directo
if (!defined('IN_SITE')) {
    define('IN_SITE', true);
}

// Configuración básica
define('SITE_URL', 'https://autoskbs.com');
define('SITE_NAME', 'AutoSKBS');

/**
 * Sanitizar salida HTML
 */
function esc_html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Obtener URL base
 */
function get_base_url() {
    return SITE_URL;
}


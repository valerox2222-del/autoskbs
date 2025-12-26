<?php
/**
 * Gestión de URLs
 */

/**
 * Generar URL completa
 */
function get_url($path = '') {
    $base = rtrim(SITE_URL, '/');
    $path = ltrim($path, '/');
    return $base . '/' . $path;
}


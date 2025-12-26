<?php
/**
 * Helper para generar páginas PHP
 */

/**
 * Obtener contenido del body desde HTML
 */
function get_body_content($html_file) {
    $content = file_get_contents($html_file);
    
    // Extraer contenido entre <body> y </body>
    preg_match('/<body[^>]*>(.*?)<\/body>/is', $content, $matches);
    
    if (isset($matches[1])) {
        $body = $matches[1];
        
        // Remover WhatsApp button si existe (ya está en template)
        $body = preg_replace('/<!-- WhatsApp Floating Button -->.*?<\/a>/is', '', $body);
        
        // Remover header/nav si existe (ya está en template)
        $body = preg_replace('/<!--.*?Navigation.*?-->/is', '', $body);
        $body = preg_replace('/<header[^>]*>.*?<\/header>/is', '', $body);
        
        // Remover footer si existe (ya está en template)
        $body = preg_replace('/<footer[^>]*>.*?<\/footer>/is', '', $body);
        
        // Remover cookie banner si existe (ya está en template)
        $body = preg_replace('/<!-- Cookie Banner -->.*?<\/div>\s*<\/div>/is', '', $body);
        $body = preg_replace('/<script>.*?Cookie.*?<\/script>/is', '', $body);
        
        return trim($body);
    }
    
    return '';
}


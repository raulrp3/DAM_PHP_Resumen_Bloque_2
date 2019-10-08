<?php
    define('MI_SITIO', 'miSitio.com');
    $autores = ['Victor Hugo', 'Charles Baudelaire', 'Arthur Rimbaud', 'Paul Verlaine'];
    function analizar_vocales($nombre, &$numero, &$empiza_por){
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        $numero = strlen($nomnre);
        $empiza_por = in_array(strtolower($nombre[0]), $vocales);
    }
?>
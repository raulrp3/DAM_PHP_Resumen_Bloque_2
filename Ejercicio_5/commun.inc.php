<?php
    function analizar_vocales($nombre, &$numero, &$empieza_por){
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        $numero = strlen($nombre);
        $empieza_por = in_array(strtolower($nombre[0]), $vocales);
    }
?>
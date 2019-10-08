<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumen Bloque 2</title>
</head>
<body>
    <?php
        include 'commun.inc.php'; 
        $nombre = 'Raul';
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        $index = array_rand($autores);
        $other = array_rand($autores);
        setlocale(LC_ALL, 'es_ES');
        echo '<p>Hola '.$nombre.'.</p>';
        echo '<p>Bienvenido a '.MI_SITIO.'.</p>';
        echo '<p>Hoy es '.strftime('%A').' '.strftime('%d').' '.strftime('%B').' de '.strftime('%G').'.</p>';
        echo '<p>Su nombre tiene '.(strlen($nombre)).' letras.</p>';
        if (in_array(strtolower($nombre[0]), $vocales)){
            echo '<p>Su nombre empieza por una vocal.</p>';
        }else{
            echo '<p>Su nombre empieza por una consonante.</p>';
        }
        preg_match_all('#[aeiou]#', strtolower($nombre), $matches);
        if (!empty($matches[0])){
            if (count($matches[0]) > 1){
                echo '<p>Su nombre tiene '.count($matches[0]).' vocales.</p>';
            }else{
                echo '<p>Su nombre tiene 1 vocal.</p>';
            }
        }
        if (!empty($autores)){
            if (count($autores) > 1){
                echo '<p>Hay '.count($autores).' autores en la lista.</p>';
            }else{
                echo '<p>Hay 1 autor en la lista.</p>';
            }
        }else{
            echo '<p>No hay autores en la lista.</p>';
        }
        echo '<p>'.explode(' ', $autores[$index])[0].' ('.explode(' ', $autores[$index])[1].') es mi autor preferido.</p>';
        echo '<p>Otro autor.</p>';
        echo '<p>'.preg_split('#[\s,]+#', $autores[$other])[0].' ('.preg_split('#[\s,]+#', $autores[$other])[1].').</p>'

    ?>
</body>
</html>
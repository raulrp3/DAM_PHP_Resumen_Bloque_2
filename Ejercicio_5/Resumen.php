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
        $numero = 0;
        $empieza_por = false;
        analizar_vocales($nombre, $numero, $empieza_por);
        echo '<p>Hola '.$nombre.'.</p>';
        echo '<p>Su nombre tiene '.$numero.' letras.</p>';
        if ($empieza_por){
            echo '<p>Su nombre empieza por una vocal.</p>';
        }else{
            echo '<p>Su nombre empieza por una consonante.</p>';
        }
    ?>
</body>
</html>
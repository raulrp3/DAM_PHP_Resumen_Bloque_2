<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardar autores</title>
</head>
<body>
    <?php
        include 'commun.inc.php';
        $fichero = fopen('autores.txt', 'w');
        for($i = 0; $i < count($autores) - 1; $i++){
            fwrite($fichero, $autores[$i] .PHP_EOL);
        }
        fwrite($fichero, $autores[count($autores) - 1]);
        fclose($fichero);
        header('Location: Leer_autores.php');
    ?>
</body>
</html>
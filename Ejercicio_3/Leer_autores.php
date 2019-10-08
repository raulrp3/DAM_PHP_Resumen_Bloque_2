<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leer autores</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Autores</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $fichero = fopen('autores.txt', 'r');
                while(!feof($fichero)){
                    echo '<tr><td>'.fgets($fichero).'</td></tr>';
                }
                fclose($fichero);
            ?>
        </tbody>
    </table>
</body>
</html>
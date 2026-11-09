<?php
const GRAV_TIERRA = 9.8;
const GRAV_MARTE = 3.7;

$masa = trim($_GET['peso'] ?? 60);
$peso_tierra = $masa * GRAV_TIERRA;
$peso_marte = $masa * GRAV_MARTE;


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body >
    <h1>PESOS</h1>
    <form action="" method="get">
        <input type="text" name="peso" placeholder="Escribe tu nombre">
        <input type="submit" value="Enviar">
    </form> <br>
    <ul>
        <li>    
            <?php 
            echo "Calculando peso del objeto en la Tierra: ";
            echo "$peso_tierra Newtons";
            ?>
        </li>
        <li>
            <?php
            echo "Calculando peso del objeto en la Marte: ";
            echo "$peso_marte Newtons";
            ?>
        </li>
    </ul>


</body>
</html>

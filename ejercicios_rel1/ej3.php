<?php

$base = ($_GET['base'] ?? 1);
$altura = ($_GET['altura'] ?? 1);
$area = $base * $altura;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body >
    <h1>AREA RECTANGULO</h1>
    <form action="" method="get">
        <h3>Base:</h3>
        <input type="text" name="base" placeholder="Introduce la base">
        <h3>Altura:</h3>
        <input type="text" name="altura" placeholder="Introduce la altura"> <br> <br>
        <input type="submit" value="Enviar"> <br>
    </form> <br>
  
    <?php 
    echo "<h3>Calculando el area del rectangulo: $area m^2</h3>";
    ?>



</body>
</html>

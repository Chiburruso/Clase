<?php

$uptime_sec = (int)file_get_contents('/proc/uptime');

$horas = (int)($uptime_sec / 3600);

$segundos_restantes = $uptime_sec % 3600;

$minutos = (int)($segundos_restantes / 60);
$segundos = $segundos_restantes % 60; // El residuo final son los segundos en pantalla

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body >
    <h1>Tiempo de vida del servidor:</h1>

    <?php 
    echo "<h3>El servidor lleva en funcionamiento $horas horas, $minutos minutos y $segundos segundos</h3>";
    ?>



</body>
</html>

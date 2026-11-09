<?php
$mensaje_nombre = "";
$mensaje_ciudad = "";

if ($_SERVER["REQUEST_METHOD"] === "GET") {

    if (!empty($_GET['nombre'])){
        $nombre = $_GET['nombre'];
    }   else {
        $nombre = 'Invitado';
    }
    
    if (!empty($_GET['ciudad'])){
        $ciudad = $_GET['ciudad'];
    }   else {
        $ciudad = 'Desconocida';
    }

    $mensaje_nombre = "<p>Hola $nombre</p>";
    $mensaje_ciudad = "<p>Tu ciudad es $ciudad</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <!-- 3. Añadido el punto y coma correspondiente -->
    <?php echo $mensaje_nombre; echo $mensaje_ciudad; ?>

    <form action="" method="get">
        <input type="text" name="nombre" placeholder="Escribe tu nombre">
        <input type="text" name="ciudad" placeholder="Escribe tu ciudad">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>

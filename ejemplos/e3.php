<?php
// 1. Inicializamos la variable vacía o con un valor por defecto
$mensaje = "";

// 2. Comprobamos si el formulario realmente se ha enviado por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Usamos el operador ?? para evitar errores si el campo viaja vacío
    $nombre = $_POST['nombre'] ?? 'Invitado';
    
    if (!empty($nombre)) {
        $mensaje = "<p>Hola $nombre</p>";
    }
}
?>

<!DOCTYPEDOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>

    <!-- 3. Mostramos el mensaje aquí abajo solo si hay algo que mostrar -->
    <?php echo $mensaje; ?>

    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Escribe tu nombre">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>

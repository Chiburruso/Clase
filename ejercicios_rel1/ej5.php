<?php

// Capturamos las entradas, si no viene nada por la URL por defecto es 0 para que no calcule precio
$entradas = $_GET['n_entradas'] ?? 0;

// Expresión ternaria perfecta: si es menor o igual a 10 precio normal, si es mayor aplica 20% desc.
$precio_entradas = ($entradas <= 10) ? ($entradas * 50) : ($entradas * 50 * 0.8);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Compra de entradas</h1>
    <h2>Cada entrada cuesta 50$, si compras más de 10 entradas se aplica 20% de descuento</h2>

    <!-- CORRECCIÓN: method="get" y action vacío para procesar en el mismo archivo -->
    <form action="" method="get">
        <label for="n_entradas">Introduce el número de entradas que deseas: </label>
        <!-- MEJORA: Añadimos min="0" y value para recordar lo que el usuario escribió -->
        <input type="number" name="n_entradas" min="0" value="<?php echo $entradas; ?>"/> <br> <br>
        <input type="submit" value="Calcular Total">
    </form>

    <?php 
    // Solo mostramos el total si el usuario ya ha solicitado al menos 1 entrada
    if ($entradas > 0) {
        echo "<h3>Has solicitado $entradas entradas. El precio total de tu compra es: $precio_entradas$</h3>";
    }
    ?>

</body>
</html>

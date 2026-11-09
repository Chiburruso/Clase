<?php

    $VCPU = 1;
    $GBRAM = 1;
    $GBSSD = 1;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Forzamos a entero (int) o flotante (float) para mayor seguridad en los cálculos matemáticos
        $VCPU  = ($_POST["vCPU"]  !== "") ? (int)$_POST["vCPU"]  : 1;
        $GBRAM = ($_POST["GBRAM"] !== "") ? (int)$_POST["GBRAM"] : 1;
        $GBSSD = ($_POST["GBSSD"] !== "") ? (int)$_POST["GBSSD"] : 1;
    }
    
    $total_VCPU = $VCPU * 10;
    $total_GBRAM = $GBRAM * 5;
    $total_GBSSD = $GBSSD * 0.1;

    // Calculamos el coste total acumulado
    $coste_total = $total_VCPU + $total_GBRAM + $total_GBSSD;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Introduce tu infraestructura</h1>

    <form action="" method="post">

        <label for="vCPU">Introduce las vCPUs: </label>
        <!-- Añadimos value="<?php echo $VCPU; ?>" para conservar el valor tras el envío -->
        <input type="number" name="vCPU" min="1" value="<?php echo $VCPU; ?>" /> <br> <br>

        <label for="GBRAM">Introduce los GB de RAM: </label>
        <input type="number" name="GBRAM" min="1" value="<?php echo $GBRAM; ?>" /> <br> <br>

        <label for="GBSSD">Introduce las GB SSD: </label>
        <input type="number" name="GBSSD" min="1" value="<?php echo $GBSSD; ?>" /> <br> <br>

        <input type="submit" value="Enviar">

    </form>

    <?php 
    // Solo mostramos los resultados si el formulario ya se ha enviado por POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Desglose de costes:</h2>";
        echo "<p>El coste total de la vCPU: $total_VCPU €</p>";
        echo "<p>El coste total de los GBRAM: $total_GBRAM €</p>";
        echo "<p>El coste total de los GBSSD: $total_GBSSD €</p>";
        echo "<h3>El coste total de la infraestructura es de: $coste_total €</h3>";
    }
    ?>

</body>
</html>

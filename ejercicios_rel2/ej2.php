<?php 

$resultado = "";
$clase_css = "info";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $porc_user = $_POST['porcentaje_disco'] ?? '';

    if ($porc_user === "") {
        $resultado = "No se ha introducido ningún valor.";
        $clase_css = "error";
    } elseif (!is_numeric($porc_user) || $porc_user < 0 || $porc_user > 100) {
        $resultado = "Por favor, introduce un número válido entre 0 y 100.";
        $clase_css = "error";
    } else {
        $porc_user = (float)$porc_user;

        if ($porc_user >= 90) {
            $resultado = "Nivel A: Espacio críticamente bajo.";
            $clase_css = "critico";
        } elseif ($porc_user >= 70) { 
            $resultado = "Nivel B: Se recomienda limpieza inmediata.";
            $clase_css = "advertencia";
        } elseif ($porc_user >= 50) {
            $resultado = "Nivel C: Estado Aceptable.";
            $clase_css = "aceptable";
        } else {
            $resultado = "Nivel F: Estado Óptimo.";
            $clase_css = "optimo";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
    <style>
        .error { color: #d32f2f; font-weight: bold; }
        .critico { color: #b71c1c; font-weight: bold; }
        .advertencia { color: #ef6c00; }
        .aceptable { color: #fbc02d; }
        .optimo { color: #2e7d32; }
    </style>
</head>
<body>
    <h3>Introduce el porcentaje de espacio ocupado en disco:</h3>
    <form method="post">
        <!-- Mantenemos el valor en el input tras el envío -->
        <input name="porcentaje_disco" type="text" placeholder="0 - 100" step="any" value="<?= htmlspecialchars($_POST['percentage_disco'] ?? $_POST['porcentaje_disco'] ?? '') ?>">
        <input type="submit" value="Revisar">
    </form>
    <br>
    
    <?php if (!empty($resultado)): ?>
        <p>Analizando resultado...</p>
        <p class="<?= $clase_css ?>"><?= htmlspecialchars($resultado) ?></p>
    <?php endif; ?>
</body>
</html>

<?php
$resultado = "";
$servicio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servicio = $_POST['servicios'] ?? '';

    if (empty($servicio) || !is_numeric($servicio) || $servicio < 1 || $servicio > 7) {
        $resultado = "Por favor, selecciona un servicio válido.";
    } else {
        switch ($servicio) {
            case '1':
                $resultado = "DHCP (Puerto 67)";
                break;
            case '2':
                $resultado = "DNS (Puerto 53)";
                break;
            case '3':
                $resultado = "Apache HTTP (Puerto 80)";
                break;
            case '4':
                $resultado = "Apache HTTPS (Puerto 443)";
                break;
            case '5':
                $resultado = "MySQL / MariaDB (Puerto 3306)";
                break;
            case '6':
                $resultado = "FTP (Puerto 21)";
                break;
            case '7':
                $resultado = "SSH (Puerto 22)";
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej3</title>
</head>
<body>
    <h3>Servicios y puertos</h3>
    <form method="post">
        <select name="servicios" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
        <input type="submit" value="Consultar">
    </form>
    <br>
    <?php echo htmlspecialchars($resultado); ?>
</body>
</html>

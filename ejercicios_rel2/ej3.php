<?php
    $resultado = "";
    $servicio = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servicio = $_POST['servicios'] ?? '';
        if (empty($servicio) || !is_numeric($servicio) || $servicio < 1 || $servicio > 7) {
            $resultado = "";
        }
        switch ($servicio) {
            case 'dhcp':
            echo
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
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
        <input type="submit">
    </form>
    <?php echo $servicio; ?>
</body>
</html>
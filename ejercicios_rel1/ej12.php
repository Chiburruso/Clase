<?php

    $resultado = "";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user_ip = $_POST['ip'] ?? '';

        if (!empty($user_ip)) {

            if ($user_ip == "192.168.0.45") {
                $resultado = "Accediendo como es_admin = 1 via puerto 22 SSH";
            } else {

                if (filter_var($user_ip, FILTER_VALIDATE_IP)) {
                    $resultado = "Accediendo como es_admin = false via puerto 80 HTTP";

                } else {
                    $resultado = "Error de sintaxis en la IP";
                }
            }
        } else {
            $resultado = "Accediendo como localhost es_admin = false via puerto 80 HTTP";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej12</title>
</head>
<body>
    <h1>Reglas Firewall</h1>
    <form method="post">
        <p>Introduce tu ip, por defecto: localhost; ip del admin 192.168.0.45</p>
        <input type="text" name="ip">
        <input type="submit">
    </form> <br>
    <?php if(!empty($resultado)): ?>
    <b>Resultado: </b><?php echo htmlspecialchars($resultado); ?>
    <?php endif; ?>
</body>
</html>
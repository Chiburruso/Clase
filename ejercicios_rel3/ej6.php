<?php

    $servidor = [
        "nombre" => "srv-web01",
        "ip" => "192.168.1.10",
        "so" => "Debian 11",
        "estado" => "Activo"
    ];

    $html = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $clave = trim($_POST["clave"] ?? '');

        if ($clave === '') {
            $html = "Error: No has introducido nada en la clave";
        }
        else {
            if ($clave === "secreta") {
                $html = "Se ha accedido con éxito al servidor. ";
                $html .= "Tu IP: " . $servidor["ip"] . " ; Tu SO: " . $servidor["so"] . "";
                $html .= "<br>";
                $html .= "Actualizando el sistema (actualizamos SO e introducimos RAM)...";
                $servidor["so"] = "Debian 12";
                $servidor["ram"] = "16 GB";
                $html .= "<br>";
                $html .= "Mostrando las características actualizadas del servidor: ";
                $html .= "<br>";
                $html .= "<ul>";
                foreach ($servidor as $caracteristica) {
                    $html .= "<li>$caracteristica</li>";
                }
                $html .= "</ul>";
            }
            else {
                $html = "La clave es incorrecta. Pista: (secreta)";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Accede con la clave "secreta" para acceder al servidor: </h2>
    <form method="post">
        <p>IP: 192.168.1.10</p>
        <p>Clave:</p>
        <input type="text" name="clave">
        <input type="submit" value="Acceder">
    </form>
    <?= $html ?>
</body>
</html>
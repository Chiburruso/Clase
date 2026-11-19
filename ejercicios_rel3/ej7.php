<?php

    $comprobacion_dns = "";
    $comprobacion_ftp = "";
    $comprobacion_puertos = "";
    $servicio_3306 = "";

    $servicios = [
        "SSH"   => 22,
        "HTTP"  => 80,
        "HTTPS" => 443,
        "DNS"   => 53,
        "MySQL" => 3306
    ];

    if (array_key_exists("DNS", $servicios)) {
        $comprobacion_dns = "El servicio DNS está configurado";
    }
    else {
        $comprobacion_dns = "El servicio DNS no está comfigurado";
    }

    if (array_key_exists("FTP", $servicios)) {
        $comprobacion_ftp = "El servicio FTP está configurado";
    }
    else {
        $comprobacion_ftp = "El servicio FTP no está configurado";
    }

    if (in_array(443, $servicios, true) && in_array(25, $servicios, true)) {
        $comprobacion_puertos = "Ambos puertos se encuentran en uso";
    }
    else {
        $comprobacion_puertos = "Ambos puertos no se encuentran en uso";
    }

    if (array_search(3306, $servicios) !== false)
        $servicio_3306 = "El servicio con puerto 3306 es: " . array_search(3306, $servicios);
    else {
        $servicio_3306 = "No se ha conseguido encontrar un servicio para el puerto 3306";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Servicios y Puertos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
        }
        th, td {
            border: 1px solid #333;
            padding: 4px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Servicio</th>
                <th>Puerto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servicios as $servicio => $puerto): ?>
                <tr>
                    <td><?= htmlspecialchars($servicio) ?></td>
                    <td><?= htmlspecialchars((string)$puerto) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p><b>Comprobamos la existencia de los servicios DNS y FTP:</b></p>
    <p><?php echo htmlspecialchars($comprobacion_dns); ?></p>
    <p><?php echo htmlspecialchars($comprobacion_ftp); ?></p>
    <p><b>Comprobamos que los puertos 443 y 25 estén en uso:</b></p>
    <p><?php echo htmlspecialchars($comprobacion_puertos); ?></p>
    <p><?php echo htmlspecialchars($servicio_3306); ?></p>
</body>
</html>

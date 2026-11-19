<?php


$servicios = [
    "SSH"   => 22,
    "HTTP"  => 80,
    "HTTPS" => 443,
    "DNS"   => 53,
    "MySQL" => 3306
];

asort($servicios);
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
        }
        tr, td {
            border: 1px solid grey;
        }
        th {
            background-color: lightgrey;
        }
    </style>
</head>

<body>
    <p>1. Servicios ordenados por puerto, de menor a mayor (asort())</p>
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

    <?php
    $servicios = [
        "SSH"   => 22,
        "HTTP"  => 80,
        "HTTPS" => 443,
        "DNS"   => 53,
        "MySQL" => 3306
    ];

    ksort($servicios);
    ?>
    <p>2. Servicios ordenados alfabéticamente por nombre (ksort()).</p>
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


    <?php
    $servicios = [
        "SSH"   => 22,
        "HTTP"  => 80,
        "HTTPS" => 443,
        "DNS"   => 53,
        "MySQL" => 3306
    ];

    unset($servicios["DNS"]);
    ?>
    <p>3. Servicios que quedan tras eliminar DNS con unset(), y cuántos son (count()).</p>
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
    <p>El número de servicios restantes es: <?php echo count($servicios); ?></p>
</body>

</html>
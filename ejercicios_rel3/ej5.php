

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        .verde {
            color: green;
        }
        .naranja {
            color: orange;
        }
        .rojo {
            color: red;
        }
    </style>
</head>
<body>
    <?php

    $pings = [
        23,
        45,
        18,
        60,
        34
    ];

    echo "<table border=1>";
    echo "<tr>";
    echo "<td>Latencia</td>";
    foreach ($pings as $ping) {

        if ($ping < 30) {
            $color = "verde";
        }
        elseif ($ping < 49) {
            $color = "naranja";
        }
        else {
            $color = "rojo";
        }

        echo "<td class='$color'>$ping</td>";
    }
    echo "</tr>";
    

    
    echo "<tr>";
    echo "<td>Prueba</td>";
    for ($i = 1; $i <= count($pings); $i++) {
        echo "<td>$i</td>";
    }
    echo "</tr>";
    echo "</table>";

?>
</body>
</html>
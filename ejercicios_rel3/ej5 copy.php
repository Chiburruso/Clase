
<?php

    $pings = [
        23,
        45,
        18,
        60,
        34
    ];

    $html = "<table border=1>";
    $html .= "<tr>";
    $html .= "<td>Latencia</td>";
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

        $html .= "<td class='$color'>$ping</td>";
    }
    $html .= "</tr>";
    

    
    $html .= "<tr>";
    $html .= "<td>Prueba</td>";
    for ($i = 1; $i <= count($pings); $i++) {
        $html .= "<td>$i</td>";
    }
    $html .= "</tr>";
    $html .= "</table>";

?>
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
    <?=  $html  ?>
</body>
</html>
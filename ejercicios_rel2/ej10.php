<?php

    $par = "[ONLINE – US-East]";
    $impar = "[ONLINE – EU-West]";
    $mantenimiento = "[MANTENIMIENTO]";
    $html = "";

    for ($id = 1; $id <= 24; $id++) {
        $html .= "<tr>";

        if ($id % 5 == 0) {
            $html .= "<td>$id</td>";
            $html .= "<td class='mantenimiento'>$mantenimiento</td>";
        }
        elseif ($id % 2 == 1 || $id == 1) {
            $html .= "<td>$id</td>";
            $html .= "<td class='impar'>$impar</td>";
        }
        elseif ($id % 2 == 0) {
            $html .= "<td>$id</td>";
            $html .= "<td class='par'>$par</td>";
        }
        $html .= "</tr>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej10</title>
    <style>
        .par {
            color: green;
        }
        .impar {
            color: blue;
        }
        .mantenimiento {
            color: red;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>BADGE</td>
        </tr>
        <?php echo $html ?>
    </table>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];

    if ($numero !== "") {

        $numero = intval($numero);
        
        if ($numero >= 0 && $numero <= 10) {

            $html = '<table border="1">';

            for ($fila = 0; $fila <= 10; $fila++) {
                $html .= '<tr>';

                $html .= "<td>$numero x $fila = </td>";
                $html .= "<td>".$numero * $fila."</td>";

                $html .= '</tr>';
            }

            $html .= '</table>';
        } else {
            $html = "Error: Introduce un valor entre 0 - 10";
        }
    } else {
        $html = "Error: No has introducido ningún valor";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej5</title>
</head>

<body>
    <h3>Elige tu número para mostrar su tabla de multiplicar</h3>
    <form method="post">
        <input name="numero" type="text">
        <input type="submit" value="Mostrar">
    </form> <br>
    <?php echo $html ?>
</body>

</html>
<?php

    $numeros = range(1, 100);
    $html = "<ul>";

    foreach ($numeros as $numero) {
        if ($numero % 3 == 0 && $numero % 5 == 0) {
            $html .= "<li>";
            $html .= "Número $numero --> HTTP-HTTPS (Load Balancer)";
            $html .= "</li>";
        }
        elseif ($numero % 3 == 0) {
            $html .= "<li>";
            $html .= "Número $numero --> HTTP";
            $html .= "</li>";
        }
        elseif ($numero % 5 == 0) {
            $html .= "<li>";
            $html .= "Número $numero --> HTTPS";
            $html .= "</li>";
        }
        else {
            $html .= "<li>";
            $html .= "Número $numero --> -";
            $html .= "</li>";
        }
    }
    $html .= "</ul>"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej3</title>
</head>
<body>
    <h3>Bucle for 1-100</h3>

    <?php echo $html; ?>
</body>
</html>
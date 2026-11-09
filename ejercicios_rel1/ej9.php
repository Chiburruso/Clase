<?php

    $nota_examen = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!empty($_POST['examen'])){
            $nota_examen = $_POST['examen'];
        }   else {
            $nota_examen = "No has introducido nota";
        }

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Introduce la nota de tu examen (0-10)</h1>

    <form action="" method="post">
        <label for="examen">Introduce la nota del examen: </label>
        <input type="number" name="examen" min="0" max="10" /> <br> <br>
        <input type="submit" value="Verificar resultado">
    </form>

    <?php 
        echo "<h3>Tu nota es $nota_examen, estás </h3>";
        if ($nota_examen < 5) {
            echo "<h3>Suspenso</h3>";
        }

        elseif ($nota_examen >= 5) {
            echo "<h3>Aprobado</h3>";
        }
        
        else {
            echo "<h3>No has introducido nota</h3>";
        }
    ?>

</body>
</html>

<?php

    $puertos = [
        22,
        80,
        443
    ];

    echo "<pre>";
    print_r($puertos);
    echo "</pre>";

    $indice_80 = array_search(80, $puertos);
    if ($indice_80 !== false) {
        $puertos[$indice_80] = 8080;
    }

    $puertos[] = 3306;
    array_push($puertos, 21);

    echo "<br>";
    echo "<pre>";
    print_r($puertos);
    echo "</pre>";

?>

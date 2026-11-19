<?php

    $pings = [
        23,
        45,
        18,
        60,
        34
    ];

    $total_pings = count($pings);

    $suma_pings = 0;

    foreach ($pings as $ping) {
        $suma_pings = $ping + $suma_pings;
    }

    $media_pings = $suma_pings / $total_pings;

    echo "El tiempo medio de respuesta ha sido de $media_pings milisegundos";
?>
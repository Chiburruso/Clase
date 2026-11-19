<?php

    $equipos = [
        "Servidor-Web",
        "Servidor-BD",
        "Router",
        "Switch",
        "Firewall"
    ];

    echo "<ul>";
    foreach ($equipos as $equipo) {
        echo "<li>Equipo: $equipo</li>";
    }
    echo "</ul>";
?>
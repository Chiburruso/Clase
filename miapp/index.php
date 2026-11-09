<?php
// 1. Configuración de Zona Horaria
date_default_timezone_set("Europe/Madrid");

// 2. INTERACTIVIDAD: Recibir datos dinámicos desde la URL ($_GET)
// Si entras a: http://miapp.local el nombre cambiará solo.
$nombreUsuario = isset($_GET['usuario']) ? htmlspecialchars($_GET['usuario']) : "Estudiante de Oretania";

// 3. DETECCIÓN DEL SISTEMA: PHP puede saber desde qué navegador o sistema operativo entran
$navegador = $_SERVER['HTTP_USER_AGENT'];

// 4. FUNCIONES MATEMÁTICAS Y LÓGICA: Generar un número de la lotería aleatorio en cada recarga
$numeroSuerte = rand(10000, 99999);

$fechaActual = date("d-m-Y");
$horaActual = date("h:i:s A"); 

$tecnologias = ["Apache Web Server", "PHP 8.5 (FPM/FastCGI)", "Visual Studio Code"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demostración PHP Dinámico</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 40px; background-color: #f7f9fa; color: #333; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin-top: 15px; border-left: 5px solid #007acc; }
        .alert { background: #e3f2fd; padding: 10px; border-radius: 4px; border: 1px solid #90caf9; font-weight: bold; }
        li { margin-bottom: 5px; font-weight: bold; color: #007acc; }
    </style>
</head>
<body>

    <!-- El saludo cambia dinámicamente según el parámetro de la URL -->
    <h1>¡Hola de nuevo, <?php echo $nombreUsuario; ?>!</h1>
    
    <div class="alert">
        💡 En una página HTML estática no puedes hacer lo que verás abajo, ya que requiere procesamiento en el servidor.
    </div>

    <!-- 1. Interactividad por URL -->
    <div class="card">
        <h3>1. Parámetros Dinámicos (Variables $_GET)</h3>
        <p>Prueba a cambiar el nombre en tu navegador añadiendo esto al final de la URL: <code>?usuario=TuNombre</code></p>
    </div>

    <!-- 2. Información en tiempo real y cálculo aleatorio -->
    <div class="card">
        <h3>2. Lógica y Datos del Servidor</h3>
        <p>📅 <strong>Fecha actual:</strong> <?php echo $fechaActual; ?></p>
        <p>⏰ <strong>Hora local (Corregida):</strong> <?php echo $horaActual; ?></p>
        <p>🎰 <strong>Tu número de la suerte para esta carga:</strong> <span style="color: #d32f2f; font-size: 1.2em; font-weight:bold;"><?php echo $numeroSuerte; ?></span> (Cambia cada vez que pulsas F5)</p>
    </div>

    <!-- 3. Variables globales del sistema operativo -->
    <div class="card">
        <h3>3. Detección de tu Navegador ($_SERVER)</h3>
        <p style="font-size: 0.9em; color: #666; word-break: break-all;">
            <strong>Estás conectado desde:</strong> <?php echo $navegador; ?>
        </p>
    </div>

    <div class="card">
        <h3>Tecnologías activas:</h3>
        <ul>
            <?php foreach ($tecnologias as $item): ?>
                <li><?php echo $item; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>

<?php
// Configuración de las credenciales de tu base de datos
$host = "localhost";
$db   = "mi_base_de_datos"; // Cambia por el nombre de tu base de datos
$user = "root";             // Tu usuario de la base de datos (suele ser root)
$pass = "tu_contraseña";     // La contraseña de tu base de datos

try {
    // Creamos la conexión usando el driver PDO que instalamos
    $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    
    // Configuramos PDO para que nos avise si hay errores de SQL
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h1>¡Conexión establecida con éxito a la base de datos! 🎉</h1>";

} catch (PDOException $e) {
    // Si algo falla (contraseña mal puesta, base de datos inexistente...), nos lo dirá aquí
    echo "<h1>Error en la conexión ❌</h1>";
    echo "<p>Detalles del error: " . $e->getMessage() . "</p>";
}
?>

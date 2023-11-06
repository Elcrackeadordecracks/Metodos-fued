<?php
$servername = "localhost"; // Nombre del servidor (generalmente es "localhost" para entornos locales)
$username = "root"; // Tu nombre de usuario de MySQL (por defecto es "root" en XAMPP)
$password = ""; // Tu contraseña de MySQL (por defecto está en blanco en XAMPP)
$dbname = "tienda_relojes"; // Nombre de la base de datos que creaste para la tienda de relojes

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

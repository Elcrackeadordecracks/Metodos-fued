<?php
include("config.php");

// Verificar si la solicitud es PATCH
if ($_SERVER["REQUEST_METHOD"] == "PATCH") {
    // Leer los datos del cuerpo de la solicitud
    $datos_patch = json_decode(file_get_contents("php://input"), true);

    // Obtener los datos del formulario PATCH
    $producto_id = $datos_patch['producto_id'];
    $nombre = $datos_patch['nombre'];
    // Otros campos que puedas necesitar actualizar

    // Realizar operaciones con los datos obtenidos del formulario PATCH
    // Por ejemplo, puedes actualizar la información en la base de datos

    // Ejemplo de actualización en la base de datos (esto debe adaptarse según tu estructura de base de datos)
    $sql = "UPDATE compras SET nombre = '$nombre' WHERE producto_id = $producto_id";

    if ($conn->query($sql) === TRUE) {
        echo "Compra actualizada con éxito.";
    } else {
        echo "Error al actualizar la compra: " . $conn->error;
    }
} else {
    // ... (resto del código para manejar otras solicitudes, si es necesario)
}
?>

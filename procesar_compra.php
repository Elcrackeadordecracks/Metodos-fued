<?php
include("config.php");

// Verificar si la solicitud es PUT
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    // Leer los datos del cuerpo de la solicitud
    $datos_put = json_decode(file_get_contents("php://input"), true);

    // Obtener los datos del formulario PUT
    $producto_id = $datos_put['producto_id'];
    $nombre = $datos_put['nombre'];
    $email = $datos_put['email'];
    $cantidad = $datos_put['cantidad'];

    // Realizar operaciones con los datos obtenidos del formulario PUT
    // Por ejemplo, puedes guardarlos en la base de datos o realizar otras acciones necesarias

    // Ejemplo de inserción en la base de datos (esto debe adaptarse según tu estructura de base de datos)
    $sql = "INSERT INTO compras (producto_id, nombre, email, cantidad) VALUES ('$producto_id', '$nombre', '$email', '$cantidad')";

    if ($conn->query($sql) === TRUE) {
        echo "Compra realizada con éxito. Gracias por su compra.";
    } else {
        echo "Error al procesar la compra: " . $conn->error;
    }
} else {
    echo "Acceso no autorizado.";
}
?>

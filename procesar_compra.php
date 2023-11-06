<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $producto_id = $_POST['producto_id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $cantidad = $_POST['cantidad'];

    // Realizar la operación en la base de datos (por ejemplo, inserción en una tabla de compras)
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

<?php
include("config.php");

// ... (código para obtener datos del producto desde la base de datos)

// Verificar si la solicitud es HEAD
if ($_SERVER["REQUEST_METHOD"] === "HEAD") {
    // Verificar si se proporciona un ID válido en la URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $producto_id = $_GET['id'];

        // Consulta para obtener el producto específico desde la base de datos
        $sql = "SELECT * FROM productos WHERE id = $producto_id";
        $result = $conn->query($sql);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            $producto = $result->fetch_assoc();

            // Enviar encabezados relevantes sin cuerpo de respuesta
            header("Producto-Nombre: " . $producto['nombre']);
            header("Producto-Precio: $" . $producto['precio']);
        } else {
            echo "Producto no encontrado.";
        }
    } else {
        echo "ID de producto no válido.";
    }
} else {
    // ... (resto del código para manejar las solicitudes GET)
    // Este código maneja las solicitudes GET, pero puedes ajustarlo según tus necesidades.
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Relojes</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-formulario.css">

<head>
    <!-- Metatags, título y estilos aquí -->
</head>
<body>
    <!-- Contenido de los detalles del producto -->

    <h2>Realizar compra</h2>
    <form id="formularioCompra">
        <!-- Campos del formulario -->
        <input type='hidden' id='producto_id' value='<?php echo $producto_id; ?>'>
        Nombre: <input type='text' id='nombre' required><br>
        Correo electrónico: <input type='email' id='email' required><br>
        Cantidad: <input type='number' id='cantidad' required><br>
        <input type='submit' value='Comprar'>
    </form>

    <br>
    <a href='index.php'>Volver a la tienda</a>

    <!-- ... (resto del código JavaScript) -->
</body>
</html>

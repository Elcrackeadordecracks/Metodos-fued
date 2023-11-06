<?php
include("config.php");

// Verificar si se proporciona un ID válido en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $producto_id = $_GET['id'];

    // Consulta para obtener el producto específico desde la base de datos
    $sql = "SELECT * FROM productos WHERE id = $producto_id";
    $result = $conn->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        $producto = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detalles del Producto</title>
        </head>
        <body>
            <h1><?php echo $producto['nombre']; ?></h1>
            <p><?php echo $producto['descripcion']; ?></p>
            <p>Precio: $<?php echo $producto['precio']; ?></p>

            <h2>Realizar compra</h2>
            <form action='procesar_compra.php' method='post'>
                <input type='hidden' name='producto_id' value='<?php echo $producto_id; ?>'>
                Nombre: <input type='text' name='nombre' required><br>
                Correo electrónico: <input type='email' name='email' required><br>
                Cantidad: <input type='number' name='cantidad' required><br>
                <input type='submit' value='Comprar'>
            </form>

            <br>
            <a href='index.php'>Volver a la tienda</a>
        </body>
        </html>
        <?php
    } else {
        echo "Producto no encontrado.";
    }
} else {
    echo "ID de producto no válido.";
}
?>

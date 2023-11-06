<?php
include("config.php");

// ... (código para obtener datos del producto desde la base de datos)

?>

<!DOCTYPE html>
<html lang="es">
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

    <script>
        document.getElementById("formularioCompra").addEventListener("submit", function(event) {
            event.preventDefault();

            var producto_id = document.getElementById("producto_id").value;
            var nombre = document.getElementById("nombre").value;
            var email = document.getElementById("email").value;
            var cantidad = document.getElementById("cantidad").value;

            // Realizar la solicitud AJAX usando el método PUT
            fetch('procesar_compra.php', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    producto_id: producto_id,
                    nombre: nombre,
                    email: email,
                    cantidad: cantidad
                })
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                // Manejar la respuesta del servidor si es necesario
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>

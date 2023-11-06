<?php
include("config.php");

// Consulta para obtener productos desde la base de datos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Relojes</title>
</head>
<body>
    <h1>Bienvenido a nuestra tienda de relojes</h1>
    <div class="productos">
        <?php
        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            // Mostrar productos desde la base de datos
            while($row = $result->fetch_assoc()) {
                echo "<div class='producto'>";
                echo "<h2>" . $row['nombre'] . "</h2>";
                echo "<p>" . $row['descripcion'] . "</p>";
                echo "<p>Precio: $" . $row['precio'] . "</p>";
                echo "<a href='detalles.php?id=" . $row['id'] . "'>Ver detalles</a>"; // Enlace "Ver detalles"
                echo "</div>";
            }
        } else {
            echo "No hay productos disponibles.";
        }
        ?>
    </div>
</body>
</html>

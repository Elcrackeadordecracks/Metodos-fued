<?php
include("config.php");

// Verificar si la solicitud es OPTIONS
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    // Respondemos a la solicitud OPTIONS con los encabezados necesarios para CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS, TRACE');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Max-Age: 86400'); // 1 día
    exit;
}

// Verificar si la solicitud es TRACE
if ($_SERVER["REQUEST_METHOD"] === "TRACE") {
    // Devolver información de diagnóstico
    header("Content-Type: message/http");
    echo "TRACE / HTTP/1.1\r\n";
    echo "Host: " . $_SERVER['HTTP_HOST'] . "\r\n";
    echo "Content-Length: " . strlen($_SERVER['QUERY_STRING']) . "\r\n";
    echo "Content-Type: text/plain\r\n";
    echo "\r\n";
    echo $_SERVER['QUERY_STRING'];
    exit;
}

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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="menu">
            <a href="#">Relojes</a>
            <a href="#">Nosotros</a>
            <a href="#">Login</a>
        </div>
    </header>

    <!-- Nuevo div con la imagen de relojes -->
    <div class="imagen-relojes"></div>
    <h1>Tienda de Relojes</h1>

    <!-- Nuevo div con productos centrados -->
    <div class="productos-centrados">
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

<?php
require_once __DIR__ . '/conexion.php';

// La categoría llega por la URL, ejemplo: consulta.php?categoria=De Escritorio
$categoria = $_GET['categoria'] ?? 'De Escritorio';
$url = '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio - Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Productos: <?php echo htmlspecialchars($categoria); ?></h2>
    <div class="row">
<?php
// Consulta preparada: el "?" se reemplaza por $categoria de forma segura (evita inyección SQL)
$sql = "SELECT categoria, producto, nombre_producto, modelos, orden, url, image, status
        FROM productos
        WHERE categoria = ? AND status = 'activo'
        ORDER BY orden ASC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $categoria);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
        <div class='col-sm-4 thumbnail'>
            <a href='" . htmlspecialchars($url . $row["url"]) . "'><img src='https://len.com.mx/" . htmlspecialchars($row["image"]) . "' alt='placeholder+image' style='width: 350px;height: 350px;object-fit: contain;'></a>
            <h4 class='text-center'><strong>" . htmlspecialchars($row["producto"]) . "</strong></h4>
            <h4 class='text-center' style='height: 50px;'>" . htmlspecialchars($row["nombre_producto"]) . "</h4>
        </div>
        ";
    }
} else {
    echo "<p>No hay productos activos en esta categoría.</p>";
}

$stmt->close();
$conn->close();
?>
    </div>
</div>
</body>
</html>

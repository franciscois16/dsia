<?php
include 'config.php';
$stmt = $pdo->query("SELECT nombre, descripcion, imagen FROM Productos");
while ($producto = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='producto'>";
    echo "<img src='{$producto['imagen']}' alt='{$producto['nombre']}'>";
    echo "<h3>{$producto['nombre']}</h3>";
    echo "<p>{$producto['descripcion']}</p>";
    echo "</div>";
}
?>

<?php
include 'config.php';
$stmt = $pdo->query("SELECT url_imagen, descripcion FROM Galeria");
while ($imagen = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='imagen'>";
    echo "<img src='{$imagen['url_imagen']}' alt='Imagen de la tienda'>";
    echo "<p>{$imagen['descripcion']}</p>";
    echo "</div>";
}
?>

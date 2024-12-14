<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacén La Pame</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Bienvenido a Almacén La Pame</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="sorteos.html">Sorteos</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="productos-destacados">
        <h2>Productos Destacados</h2>
        <?php include 'productos.php'; ?>
    </section>

    <section class="informacion">
        <h2>Ubicación</h2>
        <div id="mapa">
            <iframe src="https://www.google.com/maps/embed?..."></iframe>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Almacén La Pame</p>
    </footer>

</body>
</html>

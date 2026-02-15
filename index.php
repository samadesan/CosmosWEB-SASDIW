<?php
// 1. CARGA DE DATOS: Usamos la ruta correcta al archivo que ya tienes creado
require_once './includes/planetas.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando el Sistema Solar | Proyecto Final</title>
    <meta name="description" content="Guía interactiva sobre los planetas del sistema solar y planetas enanos.">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <nav>
        <div class="logo">
            <a href="index.php"><h1>CosmosWeb</h1></a>
        </div>
        <ul>
            <?php foreach ($planetas as $id => $datos): ?>
                <li><a href="#<?php echo $id; ?>"><?php echo $datos['nombre']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main>
    <section id="hero">
        <h2>Descubre los Secretos del Espacio</h2>
        <p>Un viaje interactivo por nuestro vecindario galáctico incluyendo planetas enanos.</p>
    </section>

    <?php foreach ($planetas as $id => $datos): ?>
        <section id="<?php echo $id; ?>" class="planeta-card">
            <article>
                <h2><?php echo $datos['nombre']; ?></h2>

                <img src="assets/img/<?php echo $id; ?>.png" alt="Fotografía de <?php echo $datos['nombre']; ?>">

                <p><strong>Tipo:</strong> <?php echo $datos['tipo']; ?></p>
                <p><strong>Distancia al Sol:</strong> <?php echo $datos['distancia']; ?></p>
                <p><?php echo $datos['descripcion']; ?></p>
            </article>
        </section>
    <?php endforeach; ?>
</main>

<footer>
    <p>&copy; 2026 - COSMOSWEB - Samuel Aded Santafé</p>
</footer>

<script src="assets/js/main.js"></script>

</body>
</html>
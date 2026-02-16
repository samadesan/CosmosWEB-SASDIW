<?php
require_once './includes/planetas.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Astrónomos | CosmosWeb</title>
    <link rel="icon" type="image/png" href="assets/img/CWEB-icon.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/CWEB-logo.png" alt="CosmosWeb" height="60">
            </a>
        </div>
    </nav>
</header>

<main class="login-container">
    <section>
        <h2>Únete a la Misión</h2>
        <p class="subtitle">Crea tu cuenta para explorar el sistema solar</p>

        <form action="api/register_handler.php" method="POST">
            <label for="fullname">Nombre Completo:</label>
            <input type="text" id="fullname" name="fullname" placeholder="Ej: Neil Armstrong" required>

            <label for="user">Nombre de Usuario:</label>
            <input type="text" id="user" name="user" placeholder="usuario123" required>

            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" placeholder="••••••••" required>

            <div class="form-actions">
                <button type="submit" class="btn-submit">Crear Cuenta</button>
                <a href="index.php" class="btn-cancel">Cancelar</a>
            </div>
        </form>

        <p class="footer-form">¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </section>
</main>

<footer>
    <p>&copy; 2026 Proyecto Sistema Solar - <a href="aviso-legal.php">Aviso Legal</a></p>
</footer>
</body>
</html>
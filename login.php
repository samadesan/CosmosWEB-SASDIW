<?php
require_once './includes/planetas.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | CosmosWeb</title>
    <link rel="icon" type="image/png" href="assets/img/CWEB-icon.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/CWEB-logo.png" alt="CosmosWeb" height="80">
            </a>
        </div>
    </nav>
</header>

<main class="login-container">
    <section>
        <h2>Acceso para Astrónomos</h2>
        <form action="api/auth.php" method="POST">
            <label for="user">Usuario:</label>
            <input type="text" id="user" name="user" required>

            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>

            <div class="form-actions">
                <button type="submit" class="btn-submit">Entrar al Sistema</button>
                <a href="index.php" class="btn-cancel">Cancelar</a>
            </div>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2026 Proyecto Sistema Solar - <a href="aviso-legal.php">Aviso Legal</a></p>
</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando el Sistema Solar | Proyecto Final</title>
    <meta name="description" content="Guía interactiva sobre los planetas del sistema solar y planetas enanos.">
    <link rel="icon" type="image/png" href="assets/img/CWEB-icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/CWEB-logo.png" alt="CosmosWeb" height="60">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Planetas</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#mercurio">Mercurio</a></li>
                            <li><a class="dropdown-item" href="#venus">Venus</a></li>
                            <li><a class="dropdown-item" href="#tierra">Tierra</a></li>
                            <li><a class="dropdown-item" href="#marte">Marte</a></li>
                            <li><a class="dropdown-item" href="#jupiter">Júpiter</a></li>
                            <li><a class="dropdown-item" href="#saturno">Saturno</a></li>
                            <li><a class="dropdown-item" href="#urano">Urano</a></li>
                            <li><a class="dropdown-item" href="#neptuno">Neptuno</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Enanos</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#ceres">Ceres</a></li>
                            <li><a class="dropdown-item" href="#pluton">Plutón</a></li>
                            <li><a class="dropdown-item" href="#haumea">Haumea</a></li>
                            <li><a class="dropdown-item" href="#makemake">Makemake</a></li>
                            <li><a class="dropdown-item" href="#eris">Eris</a></li>
                        </ul>
                    </li>

                    <?php if (isset($_SESSION['usuario'])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: var(--color-acento);">Exploración Avanzada</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="descubrimientos.php">Nuevos Descubrimientos</a></li>
                                <li><a class="dropdown-item" href="estrellas.php">Tipos de Estrellas</a></li>
                                <li><a class="dropdown-item" href="agujeros-negros.php">Agujeros Negros</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="exoplanetas.php">Exoplanetas</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item ms-lg-4">
                        <?php if (isset($_SESSION['usuario'])): ?>
                        <div class="d-flex align-items-center">
                                <span class="nav-link me-3" style="color: var(--color-acento); font-weight: bold;">
                                    Hola, <?php echo htmlspecialchars($_SESSION['usuario']); ?>
                                </span>
                            <a href="api/logout.php" class="btn btn-outline-danger btn-sm">
                                Cerrar Sesión
                            </a>
                        </div>
                        <?php else: ?>
                        <a class="btn btn-outline-light btn-sm me-2" href="login.php">Iniciar Sesión</a>
                        <a class="btn btn-primary btn-sm" href="registro.php">Registrarse</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
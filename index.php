<?php
session_start();
global $planetas;
require_once './includes/planetas.php';
?>
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

<main>
    <section id="hero" class="hero-space">
        <div class="hero-content text-center">
            <div class="container">
                <h2 class="display-3 fw-bold">Descubre los Secretos del Espacio</h2>
                <p class="lead">Un viaje interactivo por nuestro vecindario galáctico incluyendo planetas enanos.</p>
            </div>
        </div>

        <div id="carouselPlanetas" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $active = true; ?>
                <?php foreach ($planetas as $id => $datos): ?>
                    <div class="carousel-item <?php echo $active ? 'active' : ''; ?>"
                         style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/espacio-fondo.jpg');">

                        <img src="assets/img/<?php echo $id; ?>.png" class="planet-bg-img" alt="<?php echo $datos['nombre']; ?>">

                    </div>
                    <?php $active = false; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php foreach ($planetas as $id => $datos): ?>
        <section id="<?php echo $id; ?>" class="planeta-card">
            <div class="container-planeta">
                <article class="planeta-info">
                    <h2><?php echo $datos['nombre']; ?></h2>
                    <p><strong>Tipo:</strong> <?php echo $datos['tipo']; ?></p>
                    <p><strong>Distancia al Sol:</strong> <?php echo $datos['distancia']; ?></p>
                </article>

                <div class="planeta-media">
                    <img src="assets/img/<?php echo $id; ?>.png"
                         class="d-block mx-auto img-planeta-clicable"
                         style="cursor: zoom-in;"
                         data-bs-toggle="modal"
                         data-bs-target="#modalImagenSolo"
                         data-img="assets/img/<?php echo $id; ?>.png"
                         data-gif="<?php echo $datos['gif']; ?>">
                </div>
            </div>

            <button class="btn btn-outline-primary w-100 mt-3" style="width: fit-content;"
                    data-bs-toggle="modal"
                    data-bs-target="#modalPlaneta"
                    data-nombre="<?php echo $datos['nombre']; ?>"
                    data-tipo="<?php echo $datos['tipo']; ?>"
                    data-distancia="<?php echo $datos['distancia']; ?>"
                    data-desc="<?php echo $datos['descripcion']; ?>"
                    data-gif="<?php echo $datos['gif']; ?>"
                    data-img="assets/img/<?php echo $id; ?>.png"
                    data-datos='<?php echo json_encode($datos['datos']); ?>'>
                Explorar detalles
            </button>
        </section>
    <?php endforeach; ?>
    <!-- Modal Foto -->
    <div class="modal fade" id="modalImagenSolo" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="background: transparent; border: none;">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        style="position: absolute; top: -20px; right: 20px; z-index: 1060; width: 2em; height: 2em;"></button>

                <div class="modal-body text-center">
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-5">
                        <div class="visual-wrapper">
                            <p class="text-acento small mb-2 text-uppercase fw-bold">Vista de Superficie</p>
                            <img id="imgSoloDisplay" src="" class="img-full-view shadow-planet" alt="Planeta Estático">
                        </div>

                        <div class="visual-wrapper">
                            <p class="text-acento small mb-2 text-uppercase fw-bold">Rotación Axial</p>
                            <img id="gifSoloDisplay" src="" class="img-full-view rounded-circle shadow-planet" alt="Rotación">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Explorar Detalles -->
    <div class="modal fade" id="modalPlaneta" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered"> <div class="modal-content bg-dark text-white shadow-lg" style="border: 2px solid var(--color-acento);">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title" id="nombrePlaneta" style="color: var(--color-acento); font-weight: bold; text-transform: uppercase; letter-spacing: 2px;"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="row g-2 text-center">
                                <div class="col-6">
                                    <p class="small text-acento text-uppercase">Vista Estática</p>
                                    <img id="imgPlanetaModal" src="" class="img-fluid shadow-lg-custom" alt="Vista plana">
                                </div>
                                <div class="col-6">
                                    <p class="small text-acento text-uppercase">Rotación Axial</p>
                                    <img id="gifPlaneta" src="" class="img-fluid rounded-circle" style="filter: drop-shadow(0 0 10px rgba(0,123,255,0.4));">
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <span id="tipoPlaneta" class="badge rounded-pill bg-primary px-3 py-2"></span>
                                <p class="text-muted small mt-2"><i class="bi bi-geo-alt"></i> <span id="distanciaPlaneta"></span></p>
                            </div>
                        </div>

                        <div class="col-lg-6" style="border-left: 1px solid rgba(255,255,255,0.1);">
                            <h6 class="text-uppercase mb-3" style="color: var(--color-acento); font-size: 0.8rem; font-weight: 800;">Análisis de Superficie</h6>
                            <p id="descripcionPlaneta" class="lh-lg" style="text-align: justify; font-size: 0.95rem; color: #e0e0e0;"></p>

                            <hr class="border-secondary my-4">

                            <h6 class="text-uppercase mb-3" style="color: var(--color-acento); font-size: 0.8rem; font-weight: 800;">Ficha Técnica</h6>
                            <ul id="listaDatos" class="list-unstyled mb-0"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>&copy; 2026 Proyecto CosmosWEB - <a href="aviso-legal.php">Aviso Legal</a> - Samuel Aded Santafé</p>
</footer>

<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
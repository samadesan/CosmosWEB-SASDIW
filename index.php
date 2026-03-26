<?php
session_start();
global $planetas;
require_once './includes/planetas.php';
require_once './includes/templates/header.php';
?>
    <section class="hero-space" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/espacio-fondo.jpg'); background-size: cover; background-position: center;">
        <div class="hero-content">
            <h1 class="display-1 fw-bold">Descubre los Secretos del Espacio</h1>
            <p class="lead">Un viaje interactivo por nuestro vecindario galáctico.</p>
        </div>

        <div id="carouselPlanetas" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $active = true; ?>
                <?php foreach ($planetas as $id => $datos):
                    $esEnano = (strpos(strtolower($datos['tipo']), 'enano') !== false);
                    $rutaImagenHero = $esEnano ? "assets/img/planetas/enanos/{$id}.png" : "assets/img/planetas/{$id}.png";
                    ?>
                    <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                        <img src="<?php echo $rutaImagenHero; ?>" class="planet-bg-img" alt="Fondo decorativo de <?php echo $datos['nombre']; ?>">
                    </div>
                    <?php $active = false; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <main class="main-content-wrapper">
        <article class="articulo-planetas">
            <?php foreach ($planetas as $id => $datos):
                $tipoLower = strtolower($datos['tipo']);
                $esEnano = (strpos($tipoLower, 'enano') !== false);
                $carpetaBase = $esEnano ? "assets/img/planetas/enanos/" : "assets/img/planetas/";
                $rutaImagenStatic = $carpetaBase . $id . ".png";
                $rutaImagenGif    = $carpetaBase . $id . ".gif";
                $temaColor = '';
                if (strpos($tipoLower, 'rocoso') !== false) { $temaColor = 'rocoso'; }
                elseif (strpos($tipoLower, 'gaseoso') !== false) { $temaColor = 'gaseoso'; }
                elseif (strpos($tipoLower, 'helado') !== false || strpos($tipoLower, 'gélido') !== false) { $temaColor = 'helado'; }
                elseif (strpos($tipoLower, 'enano') !== false) { $temaColor = 'enano'; }

                // Generamos las clases dinámicas
                $claseTheme = "theme-" . $temaColor;
                $claseModal = "modal-" . $temaColor;
                ?>
                <section id="<?php echo $id; ?>" class="planeta-section-container">
                    <div class="planeta-card-v2 <?php echo $claseTheme; ?>">
                        <span class="badge-tipo-v2"><?php echo strtoupper($datos['tipo']); ?></span>
                        <div class="row align-items-center">

                            <div class="col-md-5 planeta-content">
                                <h2 class="planeta-title"><?php echo $datos['nombre']; ?></h2>

                                <div class="planeta-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">DISTANCIA</span>
                                        <span class="stat-value text-km"><?php echo $datos['distancia']; ?></span>
                                    </div>
                                    <div class="stat-divider"></div>
                                    <div class="stat-item">
                                        <span class="stat-label">ID ASTRAL</span>
                                        <span class="stat-value">#<?php echo strtoupper($id); ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 text-center position-relative">
                                <div class="glow-container">
                                    <img src="<?php echo $rutaImagenStatic; ?>"
                                         class="img-fluid img-planeta-v2 img-planeta-clicable"
                                         style="cursor: zoom-in;"
                                         data-bs-toggle="modal"
                                         data-bs-target="#modalImagenSolo"
                                         data-img="<?php echo $rutaImagenStatic; ?>"
                                         data-gif="<?php echo $rutaImagenGif; ?>"
                                         data-tema="<?php echo $claseModal; ?>"
                                         alt="<?php echo $datos['nombre']; ?>">
                                </div>
                            </div>
                        </div>

                        <button class="btn-explorar-v2"
                                data-bs-toggle="modal"
                                data-bs-target="#modalPlaneta"
                                data-nombre="<?php echo $datos['nombre']; ?>"
                                data-tipo="<?php echo $datos['tipo']; ?>"
                                data-distancia="<?php echo $datos['distancia']; ?>"
                                data-desc="<?php echo $datos['descripcion']; ?>"
                                data-img="<?php echo $rutaImagenStatic; ?>"
                                data-gif="<?php echo $rutaImagenGif; ?>"
                                data-tema="<?php echo $claseModal; ?>"
                                data-datos='<?php echo json_encode($datos['datos']); ?>'>
                            EXPLORAR DETALLES <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </section>
            <?php endforeach; ?>
        </article>

        <?php require_once './includes/templates/modals/_imagenSolo.php'; ?>
        <?php require_once './includes/templates/modals/_planeta.php'; ?>
    </main>
<?php require_once './includes/templates/footer.php'; ?>
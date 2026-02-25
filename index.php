<?php
session_start();
global $planetas;
require_once './includes/planetas.php';
require_once './includes/templates/header.php';
?>
    <main>
        <section id="hero" class="hero-space">
            <div class="hero-content text-center">
                <div class="container">
                    <h1 class="display-3 fw-bold">Descubre los Secretos del Espacio</h1>
                    <p class="lead">Un viaje interactivo por nuestro vecindario galáctico incluyendo planetas enanos.</p>
                </div>
            </div>

            <div id="carouselPlanetas" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php $active = true; ?>
                    <?php foreach ($planetas as $id => $datos): ?>
                        <div class="carousel-item <?php echo $active ? 'active' : ''; ?>"
                             style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/img/espacio-fondo.jpg');">
                            <img src="assets/img/<?php echo $id; ?>.png" class="planet-bg-img" alt="Fondo decorativo de <?php echo $datos['nombre']; ?>">
                        </div>
                        <?php $active = false; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php foreach ($planetas as $id => $datos): ?>
            <section id="<?php echo $id; ?>" class="planeta-card">
                <h2 class="visually-hidden">Sección de <?php echo $datos['nombre']; ?></h2>

                <div class="container-planeta">
                    <article class="planeta-info">
                        <h3 class="visually-hidden">Información de <?php echo $datos['nombre']; ?></h3>

                        <p class="h2"><?php echo $datos['nombre']; ?></p>
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
                             data-gif="<?php echo $datos['gif']; ?>"
                             alt="Representación de <?php echo $datos['nombre']; ?>">
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

        <?php require_once './includes/templates/modals/_imagenSolo.php'; ?>
        <?php require_once './includes/templates/modals/_planeta.php'; ?>
    </main>
<?php require_once './includes/templates/footer.php'; ?>
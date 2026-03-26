<?php
session_start();
if (!isset($_SESSION['usuario'])) { header("Location: login.php"); exit(); }
require_once './includes/templates/header.php';
?>

    <main class="container main-content-wrapper">
        <div class="row g-4 justify-content-center" style="margin-top: 20px">
            <h1 class="text-acento mb-5 text-center">Mundos Fuera del Sistema Solar</h1>
            <div class="planeta-card p-5 mb-4">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <img src="assets/img/exoplanetas/kepler-186f.jpeg" class="img-fluid rounded mt-2 d-block mx-auto img-clicable" alt="Kepler-186f">
                    </div>
                    <div class="col-md-9">
                        <h2>Kepler-186f</h2>
                        <p class="badge bg-success">Habitabilidad: Alta</p>
                        <p>Es el primer planeta de tamaño similar a la Tierra descubierto en la zona habitable de otra estrella. Se encuentra a 500 años luz de nosotros.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require_once './includes/templates/footer.php'; ?>
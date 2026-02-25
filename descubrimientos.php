<?php
session_start();
if (!isset($_SESSION['usuario'])) { header("Location: login.php"); exit(); }
require_once './includes/templates/header.php';
?>

    <main class="container mt-5">
        <h1 class="text-acento mb-4">Últimos Hallazgos (2025-2026)</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-dark text-white border-secondary mb-4">
                    <img src="assets/img/descubrimiento1.jpg" class="card-img-top" alt="Agua en Marte">
                    <div class="card-body">
                        <h5 class="card-title text-acento">Manantiales en Marte</h5>
                        <p class="card-text small">Nuevas pruebas del rover Perseverance confirman depósitos de agua líquida estacionales bajo el cráter Jezero.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require_once './includes/templates/footer.php'; ?>
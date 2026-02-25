<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
require_once './includes/templates/header.php';
?>
    <section id="hero" class="hero-space">
        <div class="hero-content text-center">
            <div class="container">
                <h1 class="display-3 fw-bold">AGUJEROS NEGROS</h1>
            </div>
        </div>
    </section>
    <main class="container mt-5">
        <section class="text-center mb-5">
            <div class="planeta-card p-4 mt-4" style="text-align: justify;">
                <h2 class="h5 text-acento text-uppercase">Informe Científico</h2>
                <p>Un agujero negro es una región del espacio-tiempo donde la gravedad es tan fuerte que nada, ni siquiera la luz, puede escapar de ella. La teoría de la relatividad general de Einstein predice que una masa suficientemente compacta puede deformar el espacio-tiempo para formar uno. El límite de no retorno se llama <strong>horizonte de sucesos</strong>.</p>
            </div>
        </section>

        <section class="row g-4 mb-5">
            <div class="col-12">
                <h2 class="text-acento border-bottom border-secondary pb-2">1. Agujeros Negros Supermasivos</h2>
                <p>Se encuentran en el centro de casi todas las galaxias masivas.</p>
            </div>
            <div class="col-md-6">
                <div class="planeta-card h-100">
                    <h3>Sagitario A*</h3>
                    <p class="text-muted small">Ubicación: Centro de la Vía Láctea</p>
                    <p>Nuestra propia "bestia" central. Tiene una masa equivalente a 4 millones de soles.</p>
                    <img src="assets/img/an-sagitario.jpg" class="img-fluid rounded mt-2" alt="Sagitario A*">
                </div>
            </div>
            <div class="col-md-6">
                <div class="planeta-card h-100">
                    <h3>M87*</h3>
                    <p class="text-muted small">Ubicación: Galaxia Virgo A</p>
                    <p>El primer agujero negro fotografiado. Su tamaño es mayor que todo nuestro sistema solar.</p>
                    <img src="assets/img/an-m87.jpg" class="img-fluid rounded mt-2" alt="M87*">
                </div>
            </div>

            <div class="col-12 mt-5">
                <h2 class="text-acento border-bottom border-secondary pb-2">2. Agujeros Negros Estelares</h2>
                <p>Formados por el colapso gravitatorio de estrellas masivas al morir.</p>
            </div>
            <div class="col-md-6">
                <div class="planeta-card h-100">
                    <h3>Cygnus X-1</h3>
                    <p>Uno de los primeros candidatos a agujero negro descubiertos, situado en la constelación del Cisne.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="planeta-card h-100">
                    <h3>V616 Monocerotis</h3>
                    <p>Ubicado a unos 3.000 años luz, es uno de los agujeros negros más cercanos a la Tierra.</p>
                </div>
            </div>
        </section>

        <section class="planeta-card p-4 mb-5">
            <h2 class="text-acento mb-4">Laboratorio de Datos Multimedia</h2>
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="ratio ratio-16x9 shadow-lg">
                        <iframe src="https://www.youtube.com/embed/uD4izuDMUQA" title="Agujero Negro NASA" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h3 class="h6 text-uppercase">Sonificación del Horizonte de Sucesos</h3>
                    <p class="small text-muted">Las ondas de radio captadas han sido convertidas en frecuencias audibles para el ser humano.</p>

                    <div class="audio-player mb-3">
                        <p class="mb-1">Eco del centro galáctico:</p>
                        <audio controls class="w-100">
                            <source src="assets/audio/blackhole_sound.mp3" type="audio/mpeg">
                            Tu navegador no soporta audio.
                        </audio>
                    </div>

                    <div class="audio-player">
                        <p class="mb-1">Colisión de dos agujeros negros (Ondas Gravitacionales):</p>
                        <audio controls class="w-100">
                            <source src="assets/audio/chirp_sound.mp3" type="audio/mpeg">
                            Tu navegador no soporta audio.
                        </audio>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php require_once './includes/templates/footer.php'; ?>
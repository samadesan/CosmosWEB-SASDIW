<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
require_once './includes/templates/header.php';
?>

    <main class="container mt-5">
        <section class="text-center mb-5">
            <h1 class="display-3 fw-bold text-acento">EL CICLO DE VIDA ESTELAR</h1>
            <div class="planeta-card p-4 mt-4" style="border-right: 4px solid var(--color-acento);">
                <h2 class="h5 text-acento text-uppercase">Informe de Astrofísica</h2>
                <p style="text-align: justify;">
                    Las estrellas son motores de fusión nuclear que transforman el hidrógeno en helio, liberando energía en forma de luz y calor. Nacen en nebulosas de gas y polvo, y su destino final depende exclusivamente de su <strong>masa inicial</strong>. Desde las longevas enanas rojas hasta las efímeras supergigantes azules, cada estrella cuenta una historia sobre la evolución química del universo.
                </p>
            </div>
        </section>

        <section class="mb-5">
            <h2 class="text-acento mb-4"><i class="bi bi-diagram-3"></i> Clasificación por Tipos Espectrales</h2>
            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle shadow" style="border: 1px solid #333;">
                    <thead class="table-secondary text-dark">
                    <tr>
                        <th>Tipo</th>
                        <th>Color</th>
                        <th>Temp. Superficial</th>
                        <th>Características Principales</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="fw-bold text-info">Tipo O</td>
                        <td>Azul Intenso</td>
                        <td>> 30.000 K</td>
                        <td>Extremadamente masivas y brillantes. Vida corta (millones de años).</td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-primary">Tipo B</td>
                        <td>Azul-Blanco</td>
                        <td>10.000 - 30.000 K</td>
                        <td>Muy luminosas. Suelen encontrarse en cúmulos jóvenes.</td>
                    </tr>
                    <tr>
                        <td class="fw-bold" style="color: #fff;">Tipo A</td>
                        <td>Blanco</td>
                        <td>7.500 - 10.000 K</td>
                        <td>Líneas de hidrógeno muy fuertes.</td>
                    </tr>
                    <tr>
                        <td class="fw-bold" style="color: #fff5f2;">Tipo F</td>
                        <td>Blanco-Amarillo</td>
                        <td>6.000 - 7.500 K</td>
                        <td>Estrellas de tamaño medio.</td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-warning">Tipo G</td>
                        <td>Amarillo</td>
                        <td>5.200 - 6.000 K</td>
                        <td>Estrellas estables como nuestro Sol.</td>
                    </tr>
                    <tr>
                        <td class="fw-bold" style="color: #ffa500;">Tipo K</td>
                        <td>Naranja</td>
                        <td>3.700 - 5.200 K</td>
                        <td>Más frías y comunes que el Sol.</td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-danger">Tipo M</td>
                        <td>Rojo</td>
                        <td>2.400 - 3.700 K</td>
                        <td>Enanas rojas (el 76% de las estrellas conocidas).</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>



        [Image of Hertzsprung-Russell diagram showing star classification]


        <section class="row g-4">
            <div class="col-12 mt-4">
                <h2 class="text-acento">Ejemplos: Titanes del Cosmos</h2>
            </div>

            <div class="col-md-6">
                <div class="planeta-card h-100 border-info">
                    <h3 class="h4">1. Alnitak (Tipo O)</h3>
                    <img src="assets/img/estrella-alnitak.jpg" class="img-fluid rounded mb-3" alt="Alnitak">
                    <p>Estrella azul en el Cinturón de Orión. Brilla con la potencia de 250.000 soles.</p>
                    <button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalAlnitak">Ver Ficha Wiki</button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="planeta-card h-100 border-danger">
                    <h3 class="h4">2. Betelgeuse (Supergigante Roja)</h3>
                    <img src="assets/img/estrella-betelgeuse.jpg" class="img-fluid rounded mb-3" alt="Betelgeuse">
                    <p>Si estuviera en el lugar del Sol, llegaría hasta la órbita de Júpiter. Está cerca de explotar como Supernova.</p>
                    <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalBetelgeuse">Ver Ficha Wiki</button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="planeta-card h-100 border-warning">
                    <h3 class="h4">3. Alpha Centauri A (Tipo G)</h3>
                    <p>Prácticamente gemela de nuestro Sol. Es la estrella más cercana al Sistema Solar.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="planeta-card h-100" style="border-color: #6a0dad;">
                    <h3 class="h4">4. Sirio B (Enana Blanca)</h3>
                    <p>El núcleo remanente de una estrella muerta. Su densidad es tal que una cucharada pesaría toneladas.</p>
                </div>
            </div>
        </section>

        <section class="planeta-card p-4 my-5 bg-black border-acento">
            <h2 class="text-acento text-center mb-4">Visualización en Vivo</h2>
            <div class="ratio ratio-21x9">
                <iframe src="https://www.youtube.com/embed/P5_Msrdg3Hk" title="Ciclo Estelar" allowfullscreen></iframe>
            </div>
        </section>
    </main>

<?php require_once './includes/templates/footer.php'; ?>
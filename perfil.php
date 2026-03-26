<?php
session_start();
if (!isset($_SESSION['usuario'])) { header("Location: login.php"); exit(); }
require_once './includes/db.php';
require_once './includes/templates/header.php';

// Obtenemos los datos frescos del usuario
$username = $_SESSION['usuario'];
$query = "SELECT * FROM usuarios WHERE username = '$username' OR fullname = '$username' LIMIT 1";
$resultado = mysqli_query($conexion, $query);
$user_data = mysqli_fetch_assoc($resultado);
?>

    <main class="container main-content-wrapper">
        <div class="row g-4 justify-content-center" style="margin-top: 20px">
            <div class="col-lg-4">
                <div class="planeta-card-v2 text-center p-4 shadow-profile position-relative" style="overflow: hidden;">
                    <div class="perfil-glow-bg"></div>

                    <div class="avatar-container-v2 mb-4">
                        <div class="avatar-wrapper">
                            <img src="assets/img/profiles/<?php echo $user_data['foto_perfil']; ?>"
                                 class="avatar-img-v2"
                                 alt="Avatar">
                            <div class="status-indicator online"></div>
                        </div>
                    </div>

                    <div class="perfil-info-z">
                        <span class="badge-tipo-v2"><?php echo htmlspecialchars($user_data['username']); ?></span>
                        <h2 class="planeta-title mt-3" style="font-size: 1.6rem; letter-spacing: 0;"><?php echo htmlspecialchars($user_data['fullname']); ?></h2>

                        <div class="stat-item text-start p-3 rounded bg-black-translucent border border-secondary">
                            <span class="stat-label">BIOGRAFÍA E INFORMACIÓN PERSONAL</span>
                            <p class="stat-value small mb-0 mt-1"><?php echo $user_data['bio'] ?: 'Sin biografía.'; ?></p>
                        </div>

                        <button class="btn-explorar-v2 mt-4 w-100 py-2" style="font-size: 0.8rem;">
                            EDITAR PERFIL
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="planeta-card-v2 mb-4 p-4 border-acento-left h-auto">
                    <h3 class="stat-label mb-3" style="letter-spacing: 2px;">FAVORITOS</h3>
                    <div class="d-flex align-items-center p-3 rounded bg-black-translucent border border-acento-soft">
                        <div class="flex-shrink-0">
                            <i class="bi bi-stars fs-1 text-warning filter-glow"></i>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <h4 class="h5 mb-1 text-white fw-bold"><?php echo strtoupper($user_data['descubrimiento_favorito']); ?></h4>
                        </div>
                    </div>
                </div>

                <div class="planeta-card-v2 p-4 h-50 border-acento-left">
                    <h3 class="stat-label mb-4" style="letter-spacing: 2px;">ACTIVIDAD</h3>
                    <div class="text-center py-5">
                        <div class="spinner-grow text-acento mb-3" role="status" style="width: 2rem; height: 2rem;"></div>
                        <p class="text-white italic small">Sincronizando... <br>Próximamente: Posts y Transmisiones.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require_once './includes/templates/footer.php'; ?>
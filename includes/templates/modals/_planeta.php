<div class="modal fade" id="modalPlaneta" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-dark text-white shadow-lg" style="border: 2px solid var(--color-acento);">
            <div class="modal-header border-secondary">
                <h2 class="modal-title h5" id="nombrePlaneta" style="color: var(--color-acento); font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">Detalles del Planeta</h2>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="row g-2 text-center">
                            <div class="col-6">
                                <p class="small text-acento text-uppercase">Vista Estática</p>
                                <img id="imgPlanetaModal" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="img-fluid shadow-lg-custom" alt="Vista plana del planeta">
                            </div>
                            <div class="col-6">
                                <p class="small text-acento text-uppercase">Rotación Axial</p>
                                <img id="gifPlaneta" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="img-fluid rounded-circle" style="filter: drop-shadow(0 0 10px rgba(0,123,255,0.4));" alt="Giro del planeta">
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <span id="tipoPlaneta" class="badge rounded-pill bg-primary px-3 py-2"></span>
                            <p class="text-muted small mt-2"><span id="distanciaPlaneta"></span></p>
                        </div>
                    </div>

                    <div class="col-lg-6" style="border-left: 1px solid rgba(255,255,255,0.1);">
                        <h3 class="text-uppercase mb-3" style="color: var(--color-acento); font-size: 0.8rem; font-weight: 800;">Análisis de Superficie</h3>
                        <p id="descripcionPlaneta" class="lh-lg" style="text-align: justify; font-size: 0.95rem; color: #e0e0e0;"></p>

                        <hr class="border-secondary my-4">

                        <h3 class="text-uppercase mb-3" style="color: var(--color-acento); font-size: 0.8rem; font-weight: 800;">Ficha Técnica</h3>
                        <ul id="listaDatos" class="list-unstyled mb-0"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
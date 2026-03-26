<div class="modal fade" id="modalPlaneta" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content modal-planeta-detail" id="modalContentPlaneta">

            <div class="modal-header border-0 p-4 pb-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <div class="modal-body p-4 p-md-5 pt-3">
                <h2 class="display-5 fw-bold mb-0 text-uppercase" id="nombrePlaneta" style="letter-spacing: 3px;"></h2>
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                        <div class="row g-4 justify-content-center align-items-center">
                            <div class="col-6">
                                <p class="text-acento small mb-3 text-uppercase fw-bold">Vista de Superficie</p>
                                <div class="visual-container">
                                    <img id="imgPlanetaModal" src="" class="img-fluid shadow-planet" alt="Vista plana">
                                </div>
                            </div>
                            <div class="col-6">
                                <p class="text-acento small mb-3 text-uppercase fw-bold">Rotación Axial</p>
                                <div class="visual-container">
                                    <img id="gifPlaneta" src="" class="img-fluid rounded-circle shadow-planet" alt="Giro">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span id="tipoPlaneta" class="badge-tipo-v2 mt-2"></span>
                            <p class="text-km fs-4 mb-0" id="distanciaPlaneta"></p>
                        </div>
                    </div>

                    <div class="col-lg-6 info-column" style="border-left: 1px solid rgba(255,255,255,0.1);">
                        <div class="ps-lg-4">
                            <h3 class="section-title-modal text-uppercase mb-3" style="font-weight: bold; letter-spacing: 2px;">Análisis de Misión</h3>
                            <p id="descripcionPlaneta" class="description-text mb-4"></p>

                            <hr class="border-secondary my-4 opacity-25">

                            <h3 class="section-title-modal text-uppercase mb-3" style="font-weight: bold; letter-spacing: 2px;">Ficha Técnica</h3>
                            <div class="tech-specs-list" id="listaDatos">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
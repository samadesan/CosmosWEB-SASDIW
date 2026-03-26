document.addEventListener('DOMContentLoaded', function() {

    /*********************| ---------------- |********************/
    /*********************|  Modal Planeta   |*******************/
    /*********************| ---------------- |*******************/
    const modalPlaneta = document.getElementById('modalPlaneta');
    if (modalPlaneta) {
        modalPlaneta.addEventListener('show.bs.modal', function (event) {
            const b = event.relatedTarget; // Botón que activó el modal
            const temaColor = b.getAttribute('data-tema');

            // 1. Gestión de clases de tema para el color dinámico
            this.classList.remove('modal-rocoso', 'modal-gaseoso', 'modal-helado', 'modal-enano');
            if (temaColor) {
                this.classList.add(temaColor);
            }

            // 2. Asignación de textos e imágenes
            document.getElementById('nombrePlaneta').textContent = b.getAttribute('data-nombre');
            document.getElementById('distanciaPlaneta').textContent = b.getAttribute('data-distancia');
            document.getElementById('descripcionPlaneta').textContent = b.getAttribute('data-desc');
            document.getElementById('imgPlanetaModal').src = b.getAttribute('data-img');
            document.getElementById('gifPlaneta').src = b.getAttribute('data-gif');

            // 3. Lógica del Badge (usando la clase unificada badge-tipo-v2)
            const badgeTipo = document.getElementById('tipoPlaneta');
            badgeTipo.textContent = b.getAttribute('data-tipo').toUpperCase();
            badgeTipo.className = 'badge-tipo-v2'; // Mantiene el estilo del CSS nuevo

            // 4. Ficha Técnica (Rejilla de cuadritos)
            const datosExtra = JSON.parse(b.getAttribute('data-datos'));
            const lista = document.getElementById('listaDatos');
            lista.innerHTML = '';

            // Recorremos el JSON. Si es un objeto {etiqueta: valor}, usamos este formato:
            for (const [key, value] of Object.entries(datosExtra)) {
                lista.innerHTML += `
                    <div class="tech-spec-item">
                        <span class="tech-spec-label">${key.replace('_', ' ').toUpperCase()}</span>
                        <span class="tech-spec-value">${value}</span>
                    </div>
                `;
            }
        });
    }

    /*********************| ----------------- |*******************/
    /*********************| Modal Imagen Solo |*******************/
    /*********************| ----------------- |*******************/
    const modalImagenSolo = document.getElementById('modalImagenSolo');
    if (modalImagenSolo) {
        // Corregido: eliminamos el eventListener duplicado que tenías dentro
        modalImagenSolo.addEventListener('show.bs.modal', function (event) {
            const b = event.relatedTarget;
            const imgSrc = b.getAttribute('data-img');
            const gifSrc = b.getAttribute('data-gif');
            const temaColor = b.getAttribute('data-tema');

            // Aplicar tema para el halo y textos
            this.classList.remove('modal-rocoso', 'modal-gaseoso', 'modal-helado', 'modal-enano');
            if (temaColor) {
                this.classList.add(temaColor);
            }

            // Cargar imágenes
            document.getElementById('imgSoloDisplay').src = imgSrc;
            document.getElementById('gifSoloDisplay').src = gifSrc;
        });
    }
});
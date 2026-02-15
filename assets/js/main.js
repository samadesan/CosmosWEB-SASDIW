document.addEventListener('DOMContentLoaded', function() {

    const modalPlaneta = document.getElementById('modalPlaneta');
    modalPlaneta.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const tipoTexto = button.getAttribute('data-tipo').toLowerCase();

        const badgeTipo = document.getElementById('tipoPlaneta');

        badgeTipo.classList.remove('bg-rocoso', 'bg-gaseoso', 'bg-gelido', 'bg-enano', 'bg-primary');
        badgeTipo.classList.add('badge-tipo');

        if (tipoTexto.includes('rocoso')) {
            badgeTipo.classList.add('bg-rocoso');
        } else if (tipoTexto.includes('gaseoso')) {
            badgeTipo.classList.add('bg-gaseoso');
        } else if (tipoTexto.includes('hielo') || tipoTexto.includes('gélido')) {
            badgeTipo.classList.add('bg-gelido');
        } else if (tipoTexto.includes('enano')) {
            badgeTipo.classList.add('bg-enano');
        } else {
            badgeTipo.classList.add('bg-primary'); // Color por defecto
        }

        document.getElementById('nombrePlaneta').textContent = button.getAttribute('data-nombre');
        badgeTipo.textContent = button.getAttribute('data-tipo');

        const b = event.relatedTarget;

        document.getElementById('nombrePlaneta').textContent = b.getAttribute('data-nombre');
        document.getElementById('tipoPlaneta').textContent = b.getAttribute('data-tipo');
        document.getElementById('distanciaPlaneta').textContent = b.getAttribute('data-distancia');
        document.getElementById('descripcionPlaneta').textContent = b.getAttribute('data-desc');
        document.getElementById('imgPlanetaModal').src = b.getAttribute('data-img');
        document.getElementById('gifPlaneta').src = b.getAttribute('data-gif');

        const datosExtra = JSON.parse(b.getAttribute('data-datos'));
        const lista = document.getElementById('listaDatos');
        lista.innerHTML = '';
        datosExtra.forEach(dato => {
            lista.innerHTML += `<li class="mb-2 small"><i class="bi bi-info-circle me-2 text-acento"></i>${dato}</li>`;
        });
    });

    const modalImagenSolo = document.getElementById('modalImagenSolo');

    modalImagenSolo.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;


        const rutaImg = button.getAttribute('data-img');
        const rutaGif = button.getAttribute('data-gif');

        document.getElementById('imgSoloDisplay').src = rutaImg;
        document.getElementById('gifSoloDisplay').src = rutaGif;
    });
});
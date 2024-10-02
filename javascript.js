// Función para mostrar la tarjeta
function showCard(event, expositorId) {
    const expositor = expositores.find(expo => expo.ID_Expositor == expositorId);

    if (expositor) {
        const card = document.getElementById('stand-card');
        const titleElem = document.getElementById('stand-title');
        const descElem = document.getElementById('stand-categori');
        const imgElem = document.getElementById('stand-img');
        const buttonElem = document.getElementById('stand-button'); // Botón para el enlace

        buttonElem.href = expositor.Web;  // Asigna el enlace
        buttonElem.target = '_blank';  // Para que se abra en una nueva pestaña
        buttonElem.style.display = 'inline-block'; // Mostrar el botón si está oculto

        // Asignamos los valores obtenidos del expositor
        titleElem.textContent = expositor.Nombre || "Nombre no disponible";
        descElem.textContent = expositor.Categoria || "Categoría no disponible";
        imgElem.src = expositor.Logo ? `img/${expositor.Logo}` : 'Expositor no encontrado';
        // Asignamos la URL de la web del expositor al enlace
      
        // Posicionamos y mostramos la tarjeta
        card.style.left = event.pageX + 'px';
        card.style.top = event.pageY + 'px';
        card.style.display = 'block';

        // Agregamos un listener para que no desaparezca al pasar sobre la tarjeta
        card.addEventListener('mouseenter', () => {
            card.style.display = 'block';  // Mantener visible al pasar sobre la tarjeta
        });

        card.addEventListener('mouseleave', hideCard);  // Ocultar al salir de la tarjeta
    } else {
        console.error('Expositor no encontrado');
    }
}

// Función para ocultar la tarjeta
function hideCard() {
    const card = document.getElementById('stand-card');
    card.style.display = 'none';
}
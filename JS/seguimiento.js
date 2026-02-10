document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById("modalSeguimiento");
    const trackLink = document.querySelector(".track-link");
    const closeBtn = document.querySelector(".close-modal");

    // Abrir el modal al hacer clic en el enlace
    trackLink.addEventListener('click', (e) => {
        e.preventDefault(); // Evita que la página recargue
        modal.style.display = "block";
    });

    // Cerrar el modal al hacer clic en la (x)
    closeBtn.addEventListener('click', () => {
        modal.style.display = "none";
    });

    // Cerrar el modal si el usuario hace clic fuera de la caja del contenido
    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});
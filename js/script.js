// ==========================
// ANIMACIÓN SCROLL
// ==========================
const elementos = document.querySelectorAll('.animar');

const mostrarScroll = () => {
    elementos.forEach(el => {
        const top = el.getBoundingClientRect().top;
        const visible = window.innerHeight - 100;

        if (top < visible) {
            el.classList.add('visible');
        }
    });
};

window.addEventListener('scroll', mostrarScroll);
window.addEventListener('load', mostrarScroll);


// ==========================
// MENSAJE BONITO FORMULARIO
// ==========================
const form = document.querySelector(".formulario");
const mensaje = document.getElementById("mensaje-exito");

if (form) {
    form.addEventListener("submit", function() {

        // Mostrar mensaje
        mensaje.classList.add("mostrar");

        // Ocultar después de 3 segundos
        setTimeout(() => {
            mensaje.classList.remove("mostrar");
        }, 3000);
    });
}
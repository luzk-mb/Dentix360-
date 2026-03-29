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
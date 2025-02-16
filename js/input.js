document.addEventListener('DOMContentLoaded', function() {
    const autoResizeInputs = document.querySelectorAll('.auto-resize');

    autoResizeInputs.forEach(input => {
        input.addEventListener('input', function() {
            this.style.width = ((this.value.length + 1) * 8) + 'px';
        });

        // Ajustar el ancho inicial basado en el valor inicial
        input.style.width = ((input.value.length + 1) * 8) + 'px';
    });
});
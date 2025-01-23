import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar todas las imágenes de la página
    let images = document.querySelectorAll('img');    

    images.forEach(function (img) {
        // Si ocurre un error al cargar la imagen
        img.onerror = function () {
            this.src = '/storage/records/set-vinyl-records.jpg'; // Ruta de la imagen por defecto
        };
        
        // Cuando la imagen se carga correctamente
        img.onload = function () {
            checkPlaceholderImage(img);
        };

        // Comprobar si la imagen es un marcador de posición (placeholder) cuando ya se haya cargado
        if (img.complete && img.src.includes('via.placeholder.com')) {
            checkPlaceholderImage(img);
        }
    });
});


function checkPlaceholderImage(img) {
    let imageUrl = img.src;
    console.log('URL de la imagen:', imageUrl);

    // Verificar si la URL de la imagen es un marcador de posición
    if (imageUrl.includes('via.placeholder.com')) {
        img.src = 'public/storage/records/set-vinyl-records.jpg';
    }
}
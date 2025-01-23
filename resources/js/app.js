import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar todas las imágenes de la página
    let images = document.querySelectorAll('img');
    console.log(images);
    

    images.forEach(function (img) {
        // Cuando la imagen se carga correctamente
        img.onload = function () {
            checkPlaceholderImage(img);
        };

        // Si ocurre un error al cargar la imagen
        img.onerror = function () {
            this.src = '/storage/records/set-vinyl-records.jpg'; // Ruta de la imagen por defecto
        };
    });
});


function checkPlaceholderImage(img) {
    let imageUrl = img.src;
    console.log(imageUrl)

    // Verificar si la URL de la imagen es un marcador de posición
    if (imageUrl.includes('via.placeholder.com')) {
        img.src = 'public/storage/records/set-vinyl-records.jpg';
    }
}
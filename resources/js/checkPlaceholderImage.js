function checkPlaceholderImage(img) {
    let imageUrl = img.src;
    console.log(imageUrl)

    // Verificar si la URL de la imagen es un marcador de posición
    if (imageUrl.includes('via.placeholder.com')) {
        img.src = '/images/default-image.jpg'; // Cambiar a la imagen predeterminada
    }
}
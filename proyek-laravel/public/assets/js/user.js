// carousel (baner)
function swapImages() {
    var images = document.querySelectorAll('#carouselExampleIndicators .carousel-inner img');
    var firstImage = images[0].cloneNode(true); // Salin gambar pertama

    // Pindahkan gambar pertama ke posisi terakhir
    document.querySelector('.carousel-inner').appendChild(firstImage);
    document.querySelector('.carousel-inner').removeChild(images[0]);

    // Aktifkan gambar yang baru dipindahkan ke posisi terakhir
    var activeItem = document.querySelector('.carousel-item.active');
    activeItem.classList.remove('active');
    activeItem.nextElementSibling.classList.add('active');
}
document.addEventListener('DOMContentLoaded', function () {
    if (!document.querySelector('.gallery-page')) return;

    const images = [
        'images/car1.jpg',
        'images/car2.jpg',
        'images/car3.jpg',
 'images/car4.jpg',

 'images/car5.jpg',

 'images/car6.jpg',

 'images/car7.jpg',

 'images/car8.jpg',


    ];

    let currentIndex = 0;

    const currentImage = document.getElementById('current-image');
    const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');

    function showImage(index) {
        currentImage.src = images[index];
    }

    prevButton.addEventListener('click', function () {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
        showImage(currentIndex);
    });

    nextButton.addEventListener('click', function () {
        currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
        showImage(currentIndex);
    });
    showImage(currentIndex);
});

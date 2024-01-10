var nomsImages =["can.jpg", "esatic.jpg", "1.jpg", "2.jpg", "3.jpg"];
var index =0;
var imageElement = document.getElementById('imageCarousel');



function changerImage(direction) {
    index = (index + direction + nomsImages.length) % nomsImages.length;
    imageElement.src = "assets/img/" + nomsImages[index];
}
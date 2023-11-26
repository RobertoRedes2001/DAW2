 document.addEventListener("DOMContentLoaded", function () {
    var images = [
        "https://www.dorkaholics.com/wp-content/uploads/2022/03/digimon-card-game.jpeg",
        "https://i.ebayimg.com/images/g/FDUAAOSwz7Jf3BN2/s-l400.jpg",
        "https://static1.thegamerimages.com/wordpress/wp-content/uploads/2022/10/digimon-card-game-best-art-in-the-classic-collection-featured-image.jpg"
    ];

    var imgElement = document.querySelector("#novedades img");
    var currentIndex = 0;

    function changeImage() {
        imgElement.classList.add("fade-out");
        setTimeout(function () {
            imgElement.src = images[currentIndex];
            imgElement.classList.remove("fade-out");
        }, 500); // 500ms es la duración de la transición en CSS
        currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeImage, 5000); // Cambia la imagen cada 10 segundos
  });
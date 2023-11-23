function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

let arrayFotos = ['./images/frutas/1.jpg','./images/frutas/2.jpg','./images/frutas/3.jpg',
'./images/flores/1.jpg','./images/flores/2.jpg','./images/flores/3.jpg'];

let photos = Array.from(document.getElementsByClassName("photo"));
let frutas = [photos[0],photos[1],photos[2]];
let flores = [photos[3],photos[4],photos[5]];

const firstInterval = setInterval(function () {
    // Dividir el array en dos partes
    const firstPart = arrayFotos.slice(0, 3);

    // Barajar ambas partes por separado
    shuffleArray(firstPart);

    // Asignar las imágenes según el array barajado
    frutas.forEach((fruta, index) => {
        fruta.style.backgroundImage = 'url("' + firstPart[index] + '")';
    });
}, 200);

const secondInterval = setInterval(function () {
    // Dividir el array en dos partes
    const secondPart = arrayFotos.slice(3);

    // Barajar ambas partes por separado
    shuffleArray(secondPart);

    // Asignar las imágenes según el array barajado
    flores.forEach((flor, index) => {
        flor.style.backgroundImage = 'url("' + secondPart[index] + '")';
    });
}, 200);

photos[0].addEventListener("click",function(){
    clearInterval(firstInterval);
});
photos[1].addEventListener("click",function(){
    clearInterval(firstInterval);
});
photos[2].addEventListener("click",function(){
    clearInterval(firstInterval);
});

photos[3].addEventListener("click",function(){
    clearInterval(secondInterval);
});
photos[4].addEventListener("click",function(){
    clearInterval(secondInterval);
});
photos[5].addEventListener("click",function(){
    clearInterval(secondInterval);
});
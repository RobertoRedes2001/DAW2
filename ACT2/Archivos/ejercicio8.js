let imagenes = [
    'src/postres/Flan con huevo.jpg',
    'src/postres/Flan con nata.jpg',
    'src/postres/Tarta de manzana.jpg',
    'src/postres/Tarta de queso.jpg',
    'src/postres/Tarta de zanahoria.jpg',
    'src/postres/Tiramisu.jpg'
];

let pos = 0;
document.getElementsByTagName("img")[1].src = imagenes[pos];

document.getElementById("siguiente").addEventListener("click", function () {
    if(pos>=imagenes.length-1){
        pos=0;
        document.getElementsByTagName("img")[1].src = imagenes[pos];
    }else{
        pos++;
        document.getElementsByTagName("img")[1].src = imagenes[pos];
    }
});

document.getElementById("anterior").addEventListener("click", function () {
    if(pos==0){
        pos=imagenes.length-1;
        document.getElementsByTagName("img")[1].src = imagenes[pos];
    }else{
        pos--;
        document.getElementsByTagName("img")[1].src = imagenes[pos];
    }
});

document.getElementsByTagName("img")[1].addEventListener("mousedown", function () {
    titulos=["Flan con huevo","Flan con nata","Tarta de manzana",
"Tarta de queso","Tarta de Zanahoria","Tiramisu"];
    document.getElementsByTagName("h2")[0].innerHTML=titulos[pos];
});

document.getElementsByTagName("img")[1].addEventListener("mouseup", function () {
    document.getElementsByTagName("h2")[0].innerHTML="Tartas";
});
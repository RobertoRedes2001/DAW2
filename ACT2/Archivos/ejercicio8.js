let imagenes = [
    '/ACT2/Archivos/src/postres/Flan con huevo.jpg',
    '/ACT2/Archivos/src/postres/Flan con nata.jpg',
    '/ACT2/Archivos/src/postres/Tarta de manzana.jpg',
    '/ACT2/Archivos/src/postres/Tarta de queso.jpg',
    '/ACT2/Archivos/src/postres/Tarta de zanahoria.jpg',
    '/ACT2/Archivos/src/postres/Tiramisu.jpg'
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
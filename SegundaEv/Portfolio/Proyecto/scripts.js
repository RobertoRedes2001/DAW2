function onClick(card, fullText){
    card.getElementsByTagName("p")[0].innerHTML = "<br>"+fullText;
    card.getElementsByTagName("p")[1].style.display = "none";
}


let quienSoyCompleto = "Mi nombre es Roberto Martínez Avendaño, tengo 23 años y soy un Programador Junior verdaderamente interesado en conocer más a cerca del revolucionario mundo de la web y la información. Desde joven siempre me ha interesado la idea de poder crear material online, tales como aplicaciones o páginas web."
let trayectoriaCompleta = "Curse Desarrollo de Aplicaciones en Florida Universitarias entre los años 2020 y 2024, obteniendo ahí mis dos titulaciones de DAM y DAW respectivamente. En el año 2020 realicé mis prácticas como becario en el colegio San Antonio de Padua II y en el 2023 en la empresa CESUMIN. Actualmente, estoy buscando empleo para poder continuar creciendo de manera profesional.";
let tecnologiasCompleta = "A lo largo de mi recorrido he trabajado con IDEs como VS Code, Enterprise y Eclipse. Las tecnologías con las que más he trabajado a nivel de backend han sido Java, PHP, JS y C# y a nivel de frontend ReactNative (JS), WindowsForms (C#) y Angular (TS). Me defiendo bastante bien en SQL y he estado interactuando con Docker desde hace un año ya. También tengo un buen nivel de manejo de datos con Excel y PowerBi."; 

// Crear un nuevo elemento <a>
var link = document.createElement('a');

// Configurar los atributos del enlace
link.href = '../Curriculum_RMA.pdf';
link.download = 'Curriculum_RMA.pdf';
link.className = 'btn';
link.textContent = 'Mi Curriculum';

// Agregar el enlace al cuerpo del documento (o cualquier otro elemento)
//document.body.appendChild(link);
let card1 = document.getElementById("card1")
card1.getElementsByTagName("p")[1].addEventListener("click", function() {
    onClick(card1, quienSoyCompleto);
    card1.appendChild(link);
});

let card2 = document.getElementById("card2");
card2.getElementsByTagName("p")[1].addEventListener("click", function() {
    onClick(card2, trayectoriaCompleta);
});
let card3 = document.getElementById("card3");
card3.getElementsByTagName("p")[1].addEventListener("click", function() {
    onClick(card3, tecnologiasCompleta);
});
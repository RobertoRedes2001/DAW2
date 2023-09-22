// Seleccionamos los dos primeros párrafos y los guardamos en dos variables:
let parrafoUno = document.getElementsByTagName("p")[0];
let parrafoDos = document.getElementsByTagName("p")[1];

// Con innerHTML vamos a substituir el contenido del segundo párrafo por el del primero:
parrafoDos.innerHTML = parrafoUno.textContent;

// Con innerHTML vamos a substituir el contenido del primer párrafo por su tipo de etiqueta (p):
parrafoUno.innerHTML = parrafoUno.tagName;

// Con innerHTML podemos también escribir código HTML:
document.getElementsByTagName("p")[2].innerHTML = "<h2>Ahora el tercer párrafo es un título de segundo nivel</h2>";
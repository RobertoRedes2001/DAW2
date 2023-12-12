// Podemos guardar la selección en una variable:
let parrafos = document.getElementsByTagName("p");

// Devuelve un array con todos los párrafos.
// Si queremos cambiar el contenidos de todos, podemos iterarlos:

for (let i = 0; i < parrafos.length; i++) {
    parrafos[i].innerHTML = "Elemento cambiado";
}
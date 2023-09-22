// Seleccionamos con selector CSS para la id 'título':
document.querySelector("#titulo").textContent = "Nuevo título";

// Seleccionamos con selector CSS todos los párrafos que estén dentro de un div y los cambiamos:
let parrafos = document.querySelectorAll("div p");

for (let i = 0; i <= parrafos.length; i++) {
  parrafos[i].textContent = "Párrafo cambiado";
}
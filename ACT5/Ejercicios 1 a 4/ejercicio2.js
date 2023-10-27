const imagenes = Array.from(document.getElementsByClassName("photo"));

function cambiarOpacidadSecuencial(imagenes, index) {
  if (index < imagenes.length) {
    imagenes[index].style.opacity = 0.6;
    setTimeout(() => {
      cambiarOpacidadSecuencial(imagenes, index + 1);
    }, 100); // Ajusta el tiempo (en milisegundos) entre cada cambio
  }
}

function cambiarOpacidadSecuencialInversa(imagenes, index) {
  if (index >= 0) {
    imagenes[index].style.opacity = 1;
    setTimeout(() => {
      cambiarOpacidadSecuencialInversa(imagenes, index - 1);
    }, 100); // Ajusta el tiempo (en milisegundos) entre cada cambio
  }
}

let cont = 0;
let interval;

function ejecutarCambioOpacidad() {
  cont % 2 === 0 ? cambiarOpacidadSecuencial(imagenes, 0) :
  cambiarOpacidadSecuencialInversa(imagenes, imagenes.length - 1);
  cont++;
  cont === 4 ? clearInterval(interval) : cont;
}
interval = setInterval(ejecutarCambioOpacidad, 800);


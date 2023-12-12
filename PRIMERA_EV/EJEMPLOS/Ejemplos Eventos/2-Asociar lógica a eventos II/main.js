function miFuncion() {
  this.innerText = new String("Hemos cambiado el párrafo");
}

document.getElementById("parrafoUno").onclick = miFuncion;
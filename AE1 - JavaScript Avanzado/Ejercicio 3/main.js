function cargarSeccion() {
  document.getElementsByTagName("td")[2].innerHTML = "";
  let container = document.createElement("div");
  container.style.display = "flex";
  for (i = 0; i < secciones[seccionPosition].contenido.length; i++) {
    let h1 = document.createElement("h1");
    h1.style.backgroundImage = "url(" +secciones[seccionPosition].contenido[i].imagen+ ")"; // Reemplaza "ruta_de_la_imagen.jpg" con la ruta de tu imagen
    h1.style.backgroundSize = "cover"; // Ajusta el tamaño para cubrir completamente el elemento h1
    h1.style.backgroundPosition = "center"; // Centra la imagen en el elemento h1
    h1.style.width = "100%"; // Establece el ancho
    h1.style.height = "300px"; // Establece la altura
    h1.style.color = "white";
    h1.style.textAlign = "center";
    h1.textContent = secciones[seccionPosition].contenido[i].nombre;
    container.appendChild(h1);
  }
  document.getElementsByTagName("td")[2].appendChild(container);
  document.getElementsByTagName("h1")[0].innerHTML = secciones[seccionPosition].nombre;
}

function siguienteSeccion() {
  if (seccionPosition >= 2) {
    seccionPosition = 0;
  } else {
    seccionPosition++;
  }
  cargarSeccion();
}

function anteriorSeccion() {
  if (seccionPosition <= 0) {
    seccionPosition = 2;
  } else {
    seccionPosition--;
  }
  cargarSeccion();
}

let seccionPosition = 0;

let secciones = [
  {nombre : "BEBIDAS", contenido : [{nombre: "cafe", imagen: './src/cafe/1.jpg'},
  {nombre: "infusiones", imagen: './src/infusiones/1.jpg'},
  {nombre: "alcohol", imagen: './src/alcohol/1.jpg'},]},

  {nombre : "POSTRES", contenido : [{nombre: "tartas", imagen: './src/tartas/1.jpg'},
  {nombre: "fruta", imagen: './src/fruta/1.jpg'},]},

  {nombre : "ENTANTES", contenido : [{nombre: "entrantes", imagen: './src/entrantes/1.jpg'},]},
]

cargarSeccion();

document.getElementById("siguiente").addEventListener("click",siguienteSeccion);
document.getElementById("anterior").addEventListener("click",anteriorSeccion);
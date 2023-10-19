function cargarSeccion() {
  document.getElementsByTagName("td")[2].innerHTML = "";
  let container = document.createElement("div");
  container.style.display = "flex";
  for (i = 0; i < secciones[seccionPosition].contenido.length; i++) {
    let h1 = document.createElement("h1");
    h1.style.backgroundImage = "url(" + secciones[seccionPosition].contenido[i].imagen + ")";
    h1.style.backgroundSize = "cover";
    h1.style.backgroundPosition = "center";
    h1.style.width = "100%";
    h1.style.height = "300px";
    h1.style.color = "white";
    h1.style.textAlign = "center";
    h1.textContent = secciones[seccionPosition].contenido[i].nombre;
    
    // Agregar un evento click a cada h1 para seleccionar la sección
    h1.addEventListener("click", seleccionarSeccion);
    
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

function deleteCategories() {
  let h1sToRemove = document.querySelectorAll('td > div > h1');
  h1sToRemove.forEach((h1) => {
    h1.remove();
  });
}

function deleteImages() {
  let imgsToRemove = document.querySelectorAll('td > img');
  imgsToRemove.forEach((img) => {
    img.remove();
  });
}

function seleccionarSeccion(event){
  let h1Text = event.target.innerText;
  h1Text === '' ?  h1Text = seccionPrev : seccionPrev = h1Text;
  deleteImages();
  deleteCategories();
  for(i=0;i<5;i++){
    let imagen = document.createElement("img");
    imagen.src = './src/'+h1Text+'/'+(i+1)+'.jpg';
    imagen.style.width = '20%';
    imagen.style.height = '20%';
    document.getElementsByTagName("td")[2].appendChild(imagen);
  } 
  let imgs = document.getElementsByTagName('img');
  for(i=0;i<imgs.length;i++){
    imgs[i].addEventListener("click",seleccionarFoto);
  }
}

function seleccionarFoto(event) {
  deleteImages();
  let imgSrc = event.target.src;
  let imagen = document.createElement("img");
  imagen.src = imgSrc;
  document.getElementsByTagName("td")[2].appendChild(imagen);
  imagen.addEventListener("click",seleccionarSeccion);
}

let seccionPosition = 0;
let h1s = document.getElementsByTagName('h1');
let seccionPrev;

let secciones = [
  {nombre : "BEBIDAS", contenido : [{nombre: "cafe", imagen: './src/cafe/1.jpg'},
  {nombre: "infusiones", imagen: './src/infusiones/1.jpg'},
  {nombre: "alcohol", imagen: './src/alcohol/1.jpg'},]},

  {nombre : "POSTRES", contenido : [{nombre: "tartas", imagen: './src/tartas/1.jpg'},
  {nombre: "fruta", imagen: './src/fruta/1.jpg'},]},

  {nombre : "ENTRANTES", contenido : [{nombre: "entrantes", imagen: './src/entrantes/1.jpg'},]},
]

console.log(secciones[seccionPosition].contenido[0].nombre)
cargarSeccion();
document.getElementById("siguiente").addEventListener("click",siguienteSeccion);
document.getElementById("anterior").addEventListener("click",anteriorSeccion);
document.getElementsByTagName("h1")[0].addEventListener("click",cargarSeccion);
for(i=1;i>h1s.length;i++){
  document.getElementsByTagName("h1")[i].addEventListener("click",seleccionarSeccion);
}



// Función para obtener los datos de la API
const getData = async (cantidadCartas, inicio, paginaActual) => {
  try {
    const response = await fetch("https://rickandmortyapi.com/api/character/?page="+paginaActual);
    if (response.ok) {
      const jsonResponse = await response.json();
      console.log(jsonResponse.results.length);
      const resultados = jsonResponse.results.slice(inicio, inicio + cantidadCartas);
      return resultados;
    }
  } catch (error) {
    console.log(error);
    return [];
  }
};

const crearCarta = (character) => {
  //Crea el Div donde ira la "Card"
  const card = document.createElement("div");
  card.className = "card";
  card.appendChild(createThumbnail(character));
  card.appendChild(createCardFooter(character));
  return card;
};

const createThumbnail = (character) => {
  //Crea el div de la portada y le añade su clase correspondiente
  const thumbnail = document.createElement("div");
  thumbnail.className = "thumbnail";
  //Añade la foto para la portada
  const photo = crearFoto(character.image);
  thumbnail.appendChild(photo);
  return thumbnail;
};

const crearFoto = (imageUrl) => {
  //Crea el div donde va la foto y establece la foto como fondo del div
  const photo = document.createElement("div");
  photo.className = "item-0";
  photo.style.background = "url('" + imageUrl + "')";
  photo.style.backgroundSize = "center";
  return photo;
};

const createCardFooter = (character) => {
  //Crea el contenedor donde se establece la informacion
  const cardFooter = document.createElement("div");
  cardFooter.className = "card-footer";
  cardFooter.appendChild(createInfoDiv(character));
  cardFooter.appendChild(createBotonera(character));
  return cardFooter;
};

const createInfoDiv = (character) => {
  //inserta la informacion en el div creado en CardFooter
  const infoDiv = document.createElement("div");
  infoDiv.appendChild(createInfoItem(character.gender, "item-1"));
  infoDiv.appendChild(createInfoItem(character.species, "item-2"));
  infoDiv.appendChild(createInfoItem(character.name, "item-3"));
  infoDiv.appendChild(createInfoItem(character.status, "item-4"));
  return infoDiv;
};

const createInfoItem = (text, className) => {
  const item = document.createElement("h3");
  item.className = className;
  item.textContent = text;
  return item;
};

const createBotonera = (character) => {
  const botonera = document.createElement("div");
  botonera.className = "botonera";
  const trigger = document.createElement("div");
  trigger.id = "trigger";
  trigger.textContent = "Ampliar";

  trigger.addEventListener("click",function(){
    modal.classList.toggle("show-modal");
    const nombre = modal.getElementsByTagName("h1")[0];
    nombre.textContent = character.name;
    modal.getElementsByTagName("div")[0].style.backgroundImage = "url('"+character.image+"')";
    modal.getElementsByTagName("div")[0].style.backgroundSize = "contain";
  })

  botonera.appendChild(trigger);

  return botonera;
};

const renderData = (characters) => {
  const gridContainers = document.querySelectorAll(".grid-container");
  gridContainers.forEach((container) => {
    container.innerHTML = "";
    characters.forEach((character) => {
      const card = crearCarta(character);
      container.appendChild(card);
    });
  });
};

const renderMoreContainer = document.getElementById('render-more');

const anteriorButton = document.createElement("button");
anteriorButton.textContent = "Anterior";
anteriorButton.id = "anterior";
anteriorButton.style.display = "none";

const siguienteButton = document.createElement("button");
siguienteButton.textContent = "Siguiente";
siguienteButton.id = "siguiente";
siguienteButton.style.display = "none";

renderMoreContainer.appendChild(anteriorButton);
renderMoreContainer.appendChild(siguienteButton);

// Función principal

let cantidadCartas = 3;  // Puedes ajustar la cantidad de cartas
let inicio = 0;  // Puedes ajustar la posición de inicio
let paginaActual = 1;

const main = async () => {
  const characters = await getData(cantidadCartas, inicio, paginaActual);
  renderData(characters);
};

main();

let modal = document.getElementsByClassName("modal")[0];
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.classList.toggle("show-modal");
  }
});

document.getElementsByClassName("close-button")[0].addEventListener("click", function () {
  modal.classList.toggle("show-modal");
});

document.getElementsByTagName("button")[0].addEventListener("click", async function(){
  cantidadCartas = 20
  if(paginaActual===1){
    siguienteButton.style.display = "inline-block";
  }else if(paginaActual===42){
    anteriorButton.style.display = "inline-block";
  }else{
    siguienteButton.style.display = "inline-block";
    anteriorButton.style.display = "inline-block";
  }
  const characters = await getData(cantidadCartas, inicio, paginaActual);
  renderData(characters);
  document.getElementsByTagName("button")[0].style.display = "none";
})

siguienteButton.addEventListener("click", async function () {
  paginaActual++;
  document.getElementById("number-page").innerText = paginaActual;
  cantidadCartas = 3;
  inicio = 0;
  const characters = await getData(cantidadCartas, inicio, paginaActual);
  renderData(characters);
  document.getElementsByTagName("button")[0].style.display = "inline-block";
  siguienteButton.style.display = "none";
  anteriorButton.style.display = "none";
});

anteriorButton.addEventListener("click", async function () {
    paginaActual--;
    document.getElementById("number-page").innerText = paginaActual;
    cantidadCartas = 3;
    inicio = 0;
    const characters = await getData(cantidadCartas, inicio, paginaActual);
    renderData(characters);
    document.getElementsByTagName("button")[0].style.display = "inline-block";
    siguienteButton.style.display = "none";
    anteriorButton.style.display = "none";
});
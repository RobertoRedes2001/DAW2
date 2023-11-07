// Función para obtener los datos de la API
const getData = async () => {
  try {
    const response = await fetch("https://rickandmortyapi.com/api/character");
    if (response.ok) {
      const jsonResponse = await response.json();
      return jsonResponse.results.slice(0, 3); // Obtener solo los 3 primeros elementos
    }
  } catch (error) {
    console.log(error);
    return [];
  }
};

const getMoreData = async () => {
  try {
    const response = await fetch("https://rickandmortyapi.com/api/character");
    if (response.ok) {
      const jsonResponse = await response.json();
      return jsonResponse.results.slice(0, 20); // Obtener solo los 3 primeros elementos
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
  photo.style.backgroundSize = "cover";
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
    modal.getElementsByTagName("div")[0].style.backgroundSize = "cover";
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

// Función principal
const main = async () => {
  const characters = await getData();
  renderData(characters);
};

const moreCharacters = async () => {
  const characters = await getMoreData();
  renderData(characters);
};

let modal = document.getElementsByClassName("modal")[0];
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.classList.toggle("show-modal");
  }
});

document.getElementsByClassName("close-button")[0].addEventListener("click", function () {
  modal.classList.toggle("show-modal");
});

main();

document.getElementById('render-more').addEventListener("click",function(){
  moreCharacters();
})

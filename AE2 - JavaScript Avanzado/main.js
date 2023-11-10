// Función para obtener los datos de la API
const getData = async (cantidadCartas, inicio, paginaActual) => {
  try {
    const response = await fetch(
      "https://rickandmortyapi.com/api/character/?page=" + paginaActual
    );
    if (response.ok) {
      const jsonResponse = await response.json();
      console.log(jsonResponse.results.length);
      const resultados = jsonResponse.results.slice(
        inicio,
        inicio + cantidadCartas
      );
      return resultados;
    }
  } catch (error) {
    console.log(error);
    return [];
  }
};

function saveCharacter(character) {
  if (typeof Storage !== "undefined") {
    let favoritos = JSON.parse(localStorage.getItem("favoritos")) || [];
    const nuevoFavorito = {
      name: character.name,
      gender: character.gender,
      species: character.species,
      status: character.status,
      image: character.image,
    };
    favoritos.push(nuevoFavorito);
    localStorage.setItem("favoritos", JSON.stringify(favoritos));
  }
}

function animateName(nameElement, fullName, index) {
  if (cantidadCartas >= 4) {
    if (index >= 3) {
      animateNameFavorites(nameElement, fullName);
    }
  } else {
    animateNameFavorites(nameElement, fullName);
  }
}

function animateNameFavorites(nameElement, fullName) {
  let iterationsLeft = 5;
  let currentLength = 0;
  let currentIteration = 0;

  const intervalId = setInterval(() => {
    if (currentIteration < iterationsLeft) {
      const randomChar =
        currentLength === fullName.length
          ? "" // Última letra es un espacio en blanco
          : getRandomChar();
      const partialName = fullName.substring(0, currentLength) + randomChar;
      nameElement.textContent = partialName;

      currentIteration++;
    } else if (currentLength < fullName.length) {
      currentLength++;
      currentIteration = 0;
    } else {
      clearInterval(intervalId);
    }
  }, 50);
}

function getRandomChar() {
  const characters =
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  const randomIndex = Math.floor(Math.random() * characters.length);
  return characters[randomIndex];
}

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
  photo.style.backgroundImage = "url('" + imageUrl + "')";
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
  infoDiv.appendChild(createInfoItem(character.name, "item-3", character));
  infoDiv.appendChild(createInfoItem(character.status, "item-4"));
  return infoDiv;
};

const createInfoItem = (text, className, character) => {
  const item = document.createElement("h3");
  item.className = className;
  item.textContent = text;

  if (className === "item-3") {
    item.addEventListener("click", function () {
      saveCharacter(character);
    });
  }

  return item;
};

const createBotonera = (character) => {
  const botonera = document.createElement("div");
  botonera.className = "botonera";
  const trigger = document.createElement("div");
  trigger.id = "trigger";
  trigger.textContent = "Ampliar";

  trigger.addEventListener("click", function () {
    modal.classList.toggle("show-modal");
    const nombre = modal.getElementsByTagName("h1")[0];
    nombre.textContent = character.name;
    modal.getElementsByTagName("div")[0].style.backgroundImage =
      "url('" + character.image + "')";
    modal.getElementsByTagName("div")[0].style.backgroundSize = "cover";
    modal.getElementsByTagName("div")[0].style.backgroundPosition = "center";
    modal.getElementsByTagName("div")[0].style.backgroundRepeat = "no-repeat";
  });

  botonera.appendChild(trigger);

  return botonera;
};

const renderData = (characters) => {
  const gridContainers = document.querySelectorAll(".grid-container");
  gridContainers.forEach((container) => {
    container.innerHTML = "";
    characters.forEach((character, index) => {
      const card = crearCarta(character);
      container.appendChild(card);

      // Agrega la clase fade-in a las fotos de las tres primeras cartas
      if (cantidadCartas === 3 && index < 3 && paginaActual!=1) {
        const thumbnail = card.querySelector(".thumbnail");
        thumbnail.classList.add("fade-in");
      }

      animateName(card.querySelector(".item-3"), character.name, index);
    });
  });
};

const renderFavoritos = () => {
  const gridContainers = document.querySelectorAll(".grid-container");
  gridContainers.forEach((container) => {
    container.innerHTML = "";
    const favoritos = JSON.parse(localStorage.getItem("favoritos")) || [];

    // Renderiza los favoritos
    favoritos.forEach((character) => {
      const card = crearCarta(character);
      container.appendChild(card);
      animateNameFavorites(card.querySelector(".item-3"), character.name);
    });
  });
};


const style = document.createElement("style");
style.innerHTML = `
  .fade-in {
    opacity: 0;
    animation: fadeInAnimation 1s ease-in-out forwards;
  }

  @keyframes fadeInAnimation {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
`;
document.head.appendChild(style);

const renderMoreContainer = document.getElementById("render-more");
const favoritosBoton = document.getElementsByTagName("h1")[0];

// Añadir evento clic para mostrar los favoritos (puedes ajustar esto según tus necesidades)
favoritosBoton.addEventListener("click", function () {
  const favoritos = JSON.parse(localStorage.getItem("favoritos")) || [];
  if (favoritos.length > 0) {
    renderFavoritos();
    document.getElementById("number-page").innerText = "Favoritos"
    document.getElementsByTagName("button")[0].style.display = "inline-block";
    document.getElementsByTagName("button")[0].innerText = "Volver";
    siguienteButton.style.display = "none";
    anteriorButton.style.display = "none";
  } else {
    alert("No hay personajes en Favoritos");
  }
});

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

let cantidadCartas = 3; // Puedes ajustar la cantidad de cartas
let inicio = 0; // Puedes ajustar la posición de inicio
let paginaActual = 1;

const main = async () => {
  const characters = await getData(cantidadCartas, inicio, paginaActual);
  renderData(characters);
};

main();
localStorage.clear();

let modal = document.getElementsByClassName("modal")[0];
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.classList.toggle("show-modal");
  }
});

document
  .getElementsByClassName("close-button")[0]
  .addEventListener("click", function () {
    modal.classList.toggle("show-modal");
  });

document
  .getElementsByTagName("button")[0]
  .addEventListener("click", async function () {
    switch (document.getElementsByTagName("button")[0].innerText) {
      case "MOSTRAR MÁS":
        cantidadCartas = 20;
        if (paginaActual === 1) {
          siguienteButton.style.display = "inline-block";
        } else if (paginaActual === 42) {
          anteriorButton.style.display = "inline-block";
        } else {
          siguienteButton.style.display = "inline-block";
          anteriorButton.style.display = "inline-block";
        }
        const characters = await getData(cantidadCartas, inicio, paginaActual);
        renderData(characters);
        document.getElementsByTagName("button")[0].style.display = "none";
        break;
      case "VOLVER":
        paginaActual = 1;
        cantidadCartas = 3;
        document.getElementById("number-page").innerText = paginaActual;
        document.getElementsByTagName("button")[0].innerText = "MOSTRAR MÁS";
        main();
        break;
    }
  });

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

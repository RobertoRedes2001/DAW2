// Crear el pie de pagina
const pieDePagina = document.createElement("div");
pieDePagina.classList.add("header"); // Aplicar estilos similares a los del encabezado
pieDePagina.innerHTML = "<h1>Contacto</h1>";
document.body.appendChild(pieDePagina); // Agregar el pie de página al final de la página

//Crear formulario
const formulario = document.createElement("form");
formulario.id = "miFormulario";

// Crear y configurar los campos de entrada (input)
const campos = [
  { id: "nombre", type: "text", placeholder: "Nombre", required: true },
  {
    id: "primerApellido",
    type: "text",
    placeholder: "Primer Apellido",
    required: true,
  },
  {
    id: "segundoApellido",
    type: "text",
    placeholder: "Segundo Apellido",
    required: true,
  },
  {
    id: "telefono",
    type: "tel",
    placeholder: "Número de Teléfono",
    required: true,
  },
];

campos.forEach((campo) => {
  const input = document.createElement("input");
  input.type = campo.type;
  input.id = campo.id;
  input.placeholder = campo.placeholder;
  input.required = campo.required;
  input.classList.add("input");
  formulario.appendChild(input);
});

// Crear el botón de envío
const enviarButton = document.createElement("button");
enviarButton.type = "submit";
enviarButton.textContent = "Enviar";
enviarButton.classList.add("send");

// Agregar el formulario y el botón al documento
formulario.appendChild(enviarButton);
const cerrarButton = document.createElement("span");
cerrarButton.classList.add("close-button");
cerrarButton.innerHTML=('<span>×</span>');
formulario.appendChild(cerrarButton);

// Agregar un manejador de eventos para el envío del formulario
formulario.addEventListener("submit", function (event) {
  event.preventDefault();

  let regexNom = /^[a-zA-Z\s]*$/;
  let regexNum = /^\d{9}$/;
  const nombre = document.getElementById("nombre").value;
  const primerApellido = document.getElementById("primerApellido").value;
  const segundoApellido = document.getElementById("segundoApellido").value;
  const telefono = document.getElementById("telefono").value;

  if (nombre.match(regexNom) === null) {
    alert("El nombre no esta bien escrito");
  } else if (primerApellido.match(regexNom) === null) {
    alert("El primer apellido no esta bien escrito");
  } else if (segundoApellido.match(regexNom) === null) {
    alert("El segundo apellido no esta bien escrito");
  } else if (telefono.match(regexNum) === null) {
    alert("El numero de telefono no esta bien escrito");
  } else {
    alert("Enviado");
    modal.classList.toggle("show-modal");
    
  }
});

//Crear pantalla modal
const modal = document.createElement("div");
modal.classList.add("modal");
const modalCont = document.createElement("div");
modalCont.classList.add("modal-content");
modalCont.appendChild(formulario);
modal.appendChild(modalCont);
document.body.appendChild(modal);

let theModal = document.getElementsByClassName("modal")[0];

document
  .getElementsByClassName("header")[1]
  .addEventListener("click", function () {
    theModal.classList.toggle("show-modal");
  });

//Cerrar la pantalla
window.addEventListener("click", function (event) {
  if (event.target === theModal) {
    theModal.classList.toggle("show-modal");
  }
});

document.getElementsByClassName("close-button")[0].addEventListener("click", function () {
    modal.classList.toggle("show-modal");
  });

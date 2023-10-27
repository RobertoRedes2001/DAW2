const imagenes = Array.from(document.getElementsByClassName("photo"));

function seleccionarFoto(index) {
    imagenes.map((imagen, i) => {
      if (i === index) {
        imagen.classList.add("elementor-grid-1");
        imagen.classList.remove("elementor-grid-3");
      } else {
        imagen.classList.remove("elementor-grid-1");
        imagen.classList.add("elementor-grid-3");
      }
    });
  }

imagenes.map((imagen,index)=>{
    imagen.addEventListener("click",seleccionarFoto(index));
  })
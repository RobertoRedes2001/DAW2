let alcohol = [
    "./src/alcohol/1.jpg",
    "./src/alcohol/2.jpg",
    "./src/alcohol/3.jpg",
    "./src/alcohol/4.jpg",
    "./src/alcohol/5.jpg",
  ];
  
  let cafe = [
    "./src/cafe/1.jpg",
    "./src/cafe/2.jpg",
    "./src/cafe/3.jpg",
    "./src/cafe/4.jpg",
    "./src/cafe/5.jpg",
  ];
  
  let infusiones = [
    "./src/infusiones/1.jpg",
    "./src/infusiones/2.jpg",
    "./src/infusiones/3.jpg",
    "./src/infusiones/4.jpg",
    "./src/infusiones/5.jpg",
  ];
  
  let bebidas = [{ nombre: "cafe", imagenes : cafe }, { nombre: "infusiones", imagenes : infusiones },
  { nombre: "alcohol", imagenes : alcohol }];
  
  let fruta = [
    "./src/fruta/1.jpg",
    "./src/fruta/2.jpg",
    "./src/fruta/3.jpg",
    "./src/fruta/4.jpg",
    "./src/fruta/5.jpg",
  ];
  
  let tartas = [
    "./src/tartas/1.jpg",
    "./src/tartas/2.jpg",
    "./src/tartas/3.jpg",
    "./src/tartas/4.jpg",
    "./src/tartas/5.jpg",
  ];
  
  let postres = [{ nombre: "fruta", imagenes : fruta}, { nombre: "tartas", imagenes: tartas}];
  
  let entrantes = [
    "./src/entrantes/1.jpg",
    "./src/entrantes/2.jpg",
    "./src/entrantes/3.jpg",
    "./src/entrantes/4.jpg",
    "./src/entrantes/5.jpg",
  ];
  
  // Crea un contenedor para los elementos h1
  var container = document.createElement('div');
  
  // Establece el estilo del contenedor
  container.style.display = 'flex'; // Usa flexbox para colocar los elementos en la misma fila
  
  // Crea tres elementos h1
  for (var i = 0; i < 3; i++) {
      var h1 = document.createElement('h1');
      h1.style.backgroundImage = 'url('+bebidas[i].imagenes[0]+')'; // Reemplaza "ruta_de_la_imagen.jpg" con la ruta de tu imagen
      h1.style.backgroundSize = 'cover'; // Ajusta el tamaño para cubrir completamente el elemento h1
      h1.style.backgroundPosition = 'center'; // Centra la imagen en el elemento h1
      h1.style.width = '300px'; // Establece el ancho
      h1.style.height = '300px'; // Establece la altura
      h1.style.color = 'white';
      h1.style.textAlign = 'center';
      h1.textContent = bebidas[i].nombre;
  
      // Agrega cada h1 al contenedor
      container.appendChild(h1);
  }

document.getElementsByTagName("td")[2].appendChild(container);

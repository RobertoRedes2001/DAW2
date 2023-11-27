function cambiarImagen() {
    var imagen = document.getElementById("idioma");
    // Verificar la fuente actual y cambiarla
    if (imagen.src.endsWith("https://m.media-amazon.com/images/I/21ebY7rg4aL._AC_UY218_.jpg")) {
      imagen.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Flag_of_the_Valencian_Community_%282x3%29.svg/1024px-Flag_of_the_Valencian_Community_%282x3%29.svg.png";
    } else {
      imagen.src = "https://m.media-amazon.com/images/I/21ebY7rg4aL._AC_UY218_.jpg";
    }
  }
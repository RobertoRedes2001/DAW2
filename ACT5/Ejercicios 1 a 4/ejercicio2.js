function cambiarOpacidadDeImagenesSecuencial(imagenes, tiempoIntervalo, index = 0, aumentando = true) {
    if (index >= 0 && index < imagenes.length) {
      imagenes[index].style.opacity = aumentando ? 0 : 1; // Cambiar la opacidad según la dirección
  
      setTimeout(() => {
        imagenes[index].style.opacity = aumentando ? 0.6 : 1; // Cambiar la opacidad al 60% o 100%
  
        if (aumentando && index === imagenes.length - 1) {
          // Cuando llegamos a la última imagen y estamos aumentando
          // Cambiamos inmediatamente a opacidad 1 (100%)
          imagenes[index].style.opacity = 1;
          cambiarOpacidadDeImagenesSecuencial(imagenes, tiempoIntervalo, index - 1, false);
        } else {
          const newIndex = aumentando ? index + 1 : index - 1; // Avanzar o retroceder
          cambiarOpacidadDeImagenesSecuencial(imagenes, tiempoIntervalo, newIndex, aumentando);
        }
      }, tiempoIntervalo);
    }
  }
  
  const imagenes = document.getElementsByClassName("photo");
  cambiarOpacidadDeImagenesSecuencial(imagenes, 100);
  setTimeout(() => {
    cambiarOpacidadDeImagenesSecuencial(imagenes, 100);
  }, 1800);
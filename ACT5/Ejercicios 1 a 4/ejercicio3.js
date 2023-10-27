window.onload = function() {
  const imagenes = Array.from(document.getElementsByClassName("photo"));

  setTimeout(function() {
    let cont = 0;

    const interval = setInterval(function() {
      imagenes.map((imagen) => {
        imagen.style.opacity = (cont % 2 === 0) ? '0.5' : '1';
        imagen.style.width = (cont % 2 === 0) ? '105%' : '100%';
        imagen.style.height = (cont % 2 === 0) ? '105%' : '100%';
      });
      cont++;

      if (cont === 8) {
        clearInterval(interval);

        setTimeout(function() {
          imagenes.map((imagen) => {
            imagen.style.opacity = '1';
            imagen.style.width = '100%';
            imagen.style.height = '100%';
          });
        }, 400);
      }
    }, 400);
  }, 3700);
};

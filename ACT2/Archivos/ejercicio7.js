let modal = document.getElementsByClassName("modal")[0];

for (let i = 1; document.getElementsByTagName("img").length > i; i++) {
  document.getElementsByTagName("img")[i].addEventListener("mouseenter", function (event) {
      if (event.type === "mouseenter") {
        this.style.opacity = 0.5;
      } else {
        this.style.opacity = 1;
      }
    });
  document.getElementsByTagName("img")[i].addEventListener("mouseout", function (event) {
      if (event.type === "mouseenter") {
        this.style.opacity = 0.5;
      } else {
        this.style.opacity = 1;
      }
    });
  document.getElementsByTagName("img")[i].addEventListener("click", function () {
      modal.classList.toggle("show-modal");
      switch (i) {
        case 1:
          document.getElementsByTagName("h1")[1].innerHTML = "Chivito";
          break;
        case 2:
          document.getElementsByTagName("h1")[1].innerHTML = "Blanco y negro";
          break;
        case 3:
          document.getElementsByTagName("h1")[1].innerHTML = "Brascada";
          break;
        case 4:
          document.getElementsByTagName("h1")[1].innerHTML = "Almussafes";
          break;
        case 5:
          document.getElementsByTagName("h1")[1].innerHTML = "Tortilla de patatas";
          break;
        case 6:
          document.getElementsByTagName("h1")[1].innerHTML = "Calamares en alioli";
          break;
      }
    });

  window.addEventListener("click", function (event) {
    if (event.target === modal) {
      modal.classList.toggle("show-modal");
    }
  });
}

document.getElementsByClassName("close-button")[0].addEventListener("click", function () {
    modal.classList.toggle("show-modal");
  });

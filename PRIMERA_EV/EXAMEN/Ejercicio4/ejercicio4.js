function crearCard(titulo,sipnosis){
    //crear los elementos
    let divPhoto = document.createElement("div");
    let divContainer = document.createElement("div");
    let imgHeader = document.createElement("img");
    let spanCaption = document.createElement("span");
    let pSipnosis = document.createElement("p");

    //añadir clases
    divPhoto.classList.add("photo");
    divContainer.classList.add("image-container");
    spanCaption.classList.add("caption");

    //añadir atributos
    imgHeader.src = 'https://www.lavanguardia.com/files/image_948_465/uploads/2020/05/04/5fa922920d3b5.png';
    spanCaption.innerText = titulo;
    pSipnosis.innerText = sipnosis;

    //Adjuntar al body
    divPhoto.appendChild(divContainer);
    divContainer.appendChild(imgHeader);
    divPhoto.appendChild(spanCaption);
    divPhoto.appendChild(pSipnosis);
    document.body.appendChild(divPhoto);
}

const getData = async () => {
    try {
      const response = await fetch("https://swapi.dev/api/films");
      if (response.ok) {
        const jsonResponse = await response.json();
        jsonResponse.results.forEach(movie => {
            let titulo = movie.title;
            let opening = movie.opening_crawl;
            crearCard(titulo,opening);
        });
      }
    } catch (error) {
      console.log(error);
    }
  };


document.getElementsByTagName("span")[0].addEventListener("click",getData)

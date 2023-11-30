const getData = async (paginaActual) => {
    try {
      const response = await fetch(
        "https://rickandmortyapi.com/api/character/?page=" + paginaActual
      );
      if (response.ok) {
        const jsonResponse = await response.json();
        jsonResponse.results.forEach(character => {
            if (typeof Storage !== "undefined") {
                let personajes = JSON.parse(localStorage.getItem("rickymorty")) || [];
                personajes.push(character);
                localStorage.setItem("rickymorty", JSON.stringify(personajes));
            }
        });

      }
    } catch (error) {
      console.log(error);
      return [];
    }
};

function getCharacter(arrayCharacters,nombre){
    arrayCharacters.forEach(character => {
        if(character.name == nombre){
            let char = {name : character.name, img : character.image}
            return char;
        }
    });
}

localStorage.clear();

for(i=0;i<=42;i++){
    getData(i);
}

let modal = document.getElementsByClassName("modal")[0];
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.classList.toggle("show-modal");
  }
});

document.getElementsByClassName("close-button")[0].addEventListener("click", function () {
    modal.classList.toggle("show-modal");
});

document.getElementsByTagName("form")[0].addEventListener("submit",function(event){
    event.preventDefault();
    const rickYMorty =  JSON.parse(localStorage.getItem("rickymorty")) || [];
    if(rickYMorty.length === 846){
        const character = getCharacter(rickYMorty,"Rick Sanchez");
        modal.classList.toggle("show-modal");
        const nombre = modal.getElementsByTagName("h1")[0];
        nombre.textContent = character.name;
        modal.getElementsByTagName("div")[0].style.backgroundImage = "url('" + character.img + "')";
        modal.getElementsByTagName("div")[0].style.backgroundSize = "cover";
        modal.getElementsByTagName("div")[0].style.backgroundPosition = "center";
        modal.getElementsByTagName("div")[0].style.backgroundRepeat = "no-repeat";
    }else{
        alert("No se han terminado de cargar los datos");
    }
})

  
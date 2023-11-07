const getData = async () => {
    try {
      const response = await fetch("https://rickandmortyapi.com/api/character");
      if (response.ok) {
        const jsonResponse = await response.json();
        
      }
    } catch (error) {
      console.log(error);
    }
  };

let carta = document.getElementsByClassName("item-0")[0]
carta.style.background = "url('https://wikimon.net/images/7/72/Agumon.jpg')";
carta.style.backgroundSize = "cover";
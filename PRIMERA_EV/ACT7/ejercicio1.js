const getData = async () => {
    try {
      const response = await fetch("https://api.thecatapi.com/v1/images/search?size=full");
      if (response.ok) {
        const jsonResponse = await response.json();
        const img = document.querySelector("#imagen-gatito");
        if (img) {
          img.src = jsonResponse[0].url;
        } else {
          const newImg = document.createElement("img");
          newImg.src = jsonResponse[0].url;
          newImg.width = 500;
          newImg.height = 500;
          newImg.id = "imagen-gatito";
          document.getElementsByTagName("div")[3].appendChild(newImg);
        }
      }
    } catch (error) {
      console.log(error);
    }
  };
  

document.getElementsByTagName("button")[0].addEventListener("click", getData);

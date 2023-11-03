const getData2 = async () => {
    try {
      const response = await fetch("https://api.thecatapi.com/v1/images/search?limit=10");
      if (response.ok) {
        const jsonResponse = await response.json();
        const div = document.getElementsByTagName("div")[7];
        
        jsonResponse.map((catImage, index) => {
          const img = div.querySelector(`#imagen-gatito-${index}`);
          if (img) {
            img.src = catImage.url;
          } else {
            const newImg = document.createElement("img");
            newImg.src = catImage.url;
            newImg.width = 500;
            newImg.height = 500;
            newImg.id = `imagen-gatito-${index}`;
            div.appendChild(newImg);
          }
        });
      }
    } catch (error) {
      console.log(error);
    }
  };
  
  

document.getElementsByTagName("button")[1].addEventListener("click", getData2);



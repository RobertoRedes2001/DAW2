const getData4 = async () => {
    try {
      const response = await fetch("https://api.github.com/search/users?q=JavaScript");
      if (response.ok) {
        const jsonResponse = await response.json();
        const img = document.querySelector("#profilePic");
        if (img) {
          img.src = jsonResponse.items[0].avatar_url;
        } else {
          const newImg = document.createElement("img");
          newImg.src = jsonResponse.items[0].avatar_url;
          newImg.width = 500;
          newImg.height = 500;
          newImg.id = "profilePic";
          document.getElementsByTagName("div")[15].appendChild(newImg);
        }
      }
    } catch (error) {
      console.log(error);
    }
  };
  

document.getElementsByTagName("button")[3].addEventListener("click", getData4);

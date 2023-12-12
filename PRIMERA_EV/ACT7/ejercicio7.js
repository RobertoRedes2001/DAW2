const getData7 = async (bus,pos) => {
    try {
      const response = await fetch("https://api.github.com/search/users?q="+bus);
      if (response.ok) {
        const jsonResponse = await response.json();
        const img = document.querySelector("#profilePic");
        const login = document.querySelector("#profileName");
        if (img && login) {
          img.src = jsonResponse.items[pos].avatar_url;
          login.innerHTML = jsonResponse.items[pos].id + " : " + jsonResponse.items[pos].login;
        } else {
          const newImg = document.createElement("img");
          const newLogin = document.createElement("h3");
          newImg.src = jsonResponse.items[pos].avatar_url;
          newImg.width = 500;
          newImg.height = 500;
          newImg.id = "profilePic";
          newLogin.innerHTML = jsonResponse.items[pos].id + " : " + jsonResponse.items[pos].login;
          newLogin.id = "profileName";
          document.getElementsByTagName("div")[27].appendChild(newLogin);
          document.getElementsByTagName("div")[27].appendChild(newImg);
        }
      }
    } catch (error) {
      console.log(error);
    }
  };
  
    
    
    document.getElementsByTagName("form")[1].addEventListener("submit", function(event){
      event.preventDefault();
      let busqueda = document.getElementsByTagName("input")[1].value;
      let num = document.getElementsByTagName("input")[2].value;
      getData7(busqueda,num);
    });
    
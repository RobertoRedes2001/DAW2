const getData5 = async () => {
  try {
    const response = await fetch("https://api.github.com/search/users?q=David");
    if (response.ok) {
      const jsonResponse = await response.json();
      const img = document.querySelector("#profilePic");
      const login = document.querySelector("#profileName");
      if (img&login) {
        img.src = jsonResponse.items[0].avatar_url;
        login.innerHTML = jsonResponse.items[0].id +":"+jsonResponse.items[0].login;
      } else {
        const newImg = document.createElement("img");
        const newLogin = document.createElement("h3");
        newImg.src = jsonResponse.items[0].avatar_url;
        newImg.width = 500;
        newImg.height = 500;
        newImg.id = "profilePic";
        newLogin.innerHTML = jsonResponse.items[0].id +" : "+jsonResponse.items[0].login;
        newLogin.id = "profileName";
        document.getElementsByTagName("div")[19].appendChild(newLogin);
        document.getElementsByTagName("div")[19].appendChild(newImg);
        
      }
    }
  } catch (error) {
    console.log(error);
  }
};

document.getElementsByTagName("button")[4].addEventListener("click", getData5);

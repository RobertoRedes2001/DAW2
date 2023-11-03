const getData6 = async (pos) => {
  try {
    const response = await fetch("https://api.github.com/search/users?q=David");
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
        document.getElementsByTagName("div")[23].appendChild(newLogin);
        document.getElementsByTagName("div")[23].appendChild(newImg);
      }
    }
  } catch (error) {
    console.log(error);
  }
};

  
  
  document.getElementsByTagName("form")[0].addEventListener("submit", function(event){
    event.preventDefault();
    let num = document.getElementsByTagName("input")[0].value;
    getData6(num);
  });
  
const getData3 = async () => {
    try {
      const response = await fetch("https://api.github.com/search/users?q=JavaScript");
      if (response.ok) {
        const jsonResponse = await response.json();
        console.log(jsonResponse.items[0]);
      }
    } catch (error) {
      console.log(error);
    }
  };
  
document.getElementsByTagName("button")[2].addEventListener("click", getData3);



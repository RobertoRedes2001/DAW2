document.addEventListener('keypress', function(event) {
    if (event.key === 'a') {
      document.getElementsByTagName("h1")[0].style.color="red";
    }else if(event.key === 'b'){
        document.getElementsByTagName("h1")[0].style.color="blue";
    }else if(event.key === 'c'){
        document.getElementsByTagName("h1")[0].style.color="black";
    }else{
        document.getElementsByTagName("h1")[0].style.color="white";
    }
  });
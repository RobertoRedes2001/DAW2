document.addEventListener('keypress', function(event) {
    if (event.key === 'a') {
      document.getElementsByTagName("h1")[0].style.backgroundColor="red";
    }else if(event.key === 'b'){
        document.getElementsByTagName("h1")[0].style.backgroundColor="blue";
    }else if(event.key === 'c'){
        document.getElementsByTagName("h1")[0].style.backgroundColor="black";
    }else{
        document.getElementsByTagName("h1")[0].style.backgroundColor="#05A8AA";
    }
  });
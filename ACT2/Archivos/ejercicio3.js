let checkStatus = (event) => {
    if (event.type === "mouseout") {
        document.getElementsByTagName("h1")[0].innerHTML = "Casa Pepe";
    } else {
        document.getElementsByTagName("h1")[0].innerHTML = "Bar Mamellas";
    }
}


document.getElementsByClassName("header")[0].addEventListener("mouseout", checkStatus);

document.getElementsByClassName("header")[0].addEventListener("mouseover", checkStatus);
let checkStatus = (event) => {
    if (event.type === "mouseout") {
        document.getElementsByTagName("h1")[0].innerHTML = "Casa Pepe";
    } else {
        document.getElementsByTagName("h1")[0].innerHTML = "Bar Mamellas";
    }
}


document.getElementsByTagName("h1")[0].addEventListener("mouseout", checkStatus);

document.getElementsByTagName("h1")[0].addEventListener("mouseover", checkStatus);
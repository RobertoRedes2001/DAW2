let changeLetters1 = () => {
    document.getElementsByTagName("p")[0].style.color = "Aquamarine";
    document.getElementsByTagName("p")[0].style.fontWeight = "bold";
    document.getElementsByTagName("p")[0].style.fontSize = "20px";
}

let changeLetters2 = () => {
    document.getElementsByTagName("p")[1].style.color = "Aqua";
    document.getElementsByTagName("p")[1].style.fontWeight = "bold";
    document.getElementsByTagName("p")[1].style.fontSize = "30px";
}

let changeLetters3 = () => {
    document.getElementsByTagName("p")[2].style.color = "Cyan";
    document.getElementsByTagName("p")[2].style.fontWeight = "bold";
    document.getElementsByTagName("p")[2].style.fontSize = "40px";
}

let changeLetters4 = () => {
    document.getElementsByTagName("p")[3].style.color = "MediumTurquoise";
    document.getElementsByTagName("p")[3].style.fontWeight = "bold";
    document.getElementsByTagName("p")[3].style.fontSize = "50px";
}

document.getElementsByTagName("p")[0].addEventListener("click", changeLetters1);
document.getElementsByTagName("p")[1].addEventListener("click", changeLetters2);
document.getElementsByTagName("p")[2].addEventListener("click", changeLetters3);
document.getElementsByTagName("p")[3].addEventListener("click", changeLetters4);
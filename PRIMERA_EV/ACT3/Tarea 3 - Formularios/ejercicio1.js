function esLetra(caracter) {
    return (caracter >= 'a' && caracter <= 'z') || (caracter >= 'A' && caracter <= 'Z') || caracter === ' ';
}

function comprobarNombre(cadena) {
    for (var i = 0; i < cadena.length; i++) {
        var caracter = cadena.charAt(i);
        if (!esLetra(caracter)) {
            return true; // La cadena contiene un número o carácter especial
        }
    }
    return false; // La cadena solo contiene letras
}

function getCalificacion(selectedIndex) {
    
    switch(document.getElementsByTagName("option")[selectedIndex].value){
        case "4":
            return document.getElementsByTagName("option")[selectedIndex].innerHTML;
        case "5":
            return document.getElementsByTagName("option")[selectedIndex].innerHTML;
        case "6":
            return document.getElementsByTagName("option")[selectedIndex].innerHTML;
        case "7":
            return document.getElementsByTagName("option")[selectedIndex].innerHTML;
        case "8":
            return document.getElementsByTagName("option")[selectedIndex].innerHTML;
        case "9":
            return document.getElementsByTagName("option")[selectedIndex].innerHTML;
        case "10":
            return document.getElementsByTagName("option")[selectedIndex].innerHTML;
        default:
            alert("Selecciona una calificacion");  
            break;     
    }
}

function getFrecuencia() {
    if(document.getElementById("frequency-low").checked===true){
        return document.getElementsByTagName("label")[0].innerHTML;
    }
    if(document.getElementById("frequency-normal").checked===true){
        return document.getElementsByTagName("label")[1].innerHTML;
    }
    if(document.getElementById("frequency-high").checked===true){
        return document.getElementsByTagName("label")[2].innerHTML;
    }
}

function comprobarDNI(dni){
    let letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
        let suma = 0;
        for(i=0;i<dni.length;i++){
            suma+=dni[i];
        };
        alert(letras[suma%23]);
}

document.getElementsByTagName("form")[0].addEventListener('submit', function(event) {
    event.preventDefault();
    let nombre = document.getElementsByTagName("input")[0].value;
    let apellido1 = document.getElementsByTagName("input")[1].value;
    let apellido2 = document.getElementsByTagName("input")[2].value;
    let dni = document.getElementsByTagName("input")[3].value;

    if(comprobarNombre(nombre)){
        alert("El Nombre no puede contener numeros o caracteres especiales");
    }
    if(comprobarNombre(apellido1)){
        alert("El Apellido no puede contener numeros o caracteres especiales");
    }
    if(comprobarNombre(apellido2)){
        alert("El Apellido no puede contener numeros o caracteres especiales");
    }
    if(dni.length!=8){
        alert("El DNI no se ha introducido correctamente.");
    }else{
        comprobarDNI(dni);
    }

});

document.getElementsByTagName("form")[1].addEventListener('submit', function(event) {
    event.preventDefault();
    let nombre = document.getElementsByTagName("input")[4].value;
    let apellido1 = document.getElementsByTagName("input")[5].value;
    let apellido2 = document.getElementsByTagName("input")[6].value;
    let regex = /^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/;
    
    let email = document.getElementsByTagName("input")[8].value;

    if(comprobarNombre(nombre)){
        alert("El Nombre no puede contener numeros o caracteres especiales");
    }
    if(comprobarNombre(apellido1)){
        alert("El Apellido no puede contener numeros o caracteres especiales");
    }
    if(comprobarNombre(apellido2)){
        alert("El Apellido no puede contener numeros o caracteres especiales");
    }
    if(email.match(regex)===null){
        alert("El email no esta bien escrito");
    }

});

document.getElementsByTagName("form")[2].addEventListener('submit', function(event) {
    event.preventDefault();
    let nickname = document.getElementById("nickname").value;
    let pelicula = document.getElementById("film").value;
    let director = document.getElementById("director").value;
    let anyo = document.getElementById("year").value;
    let select = document.getElementById("category");
    let selectedIndex = select.selectedIndex;
    let calificacion = getCalificacion(selectedIndex);
    let frequency = getFrecuencia();
    let resnya = document.getElementById("message").value;
    let str = "El usuario "+nickname+" ha dejado la siguiente review en la pelicula "+pelicula+" publicada en el año "+anyo+" y dirigida por"+director+": ";
    str+=resnya+"\nCalificacion: "+calificacion+"\nFrecuencia con la que el usuario ve peliculas a la semana: "+frequency;
    if(document.getElementById("human").checked===true){
        document.getElementsByTagName("p")[2].innerHTML=str;
    }else{
        alert("Verificacion requerida");
    }
});
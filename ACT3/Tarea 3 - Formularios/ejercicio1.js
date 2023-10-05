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
    let regex = '/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/';
    
    let email = document.getElementsByTagName("input")[7].value;

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
    let calificacion = "";
    let frequency = "";
    switch(document.getElementById("category").value){
        case "4":
            calificacion = document.getElementById("category").innerHTML;
            break;
        case "5":
            calificacion = document.getElementById("category").innerHTML;
            break;
        case "6":
            calificacion = document.getElementById("category").innerHTML;
            break;
        case "7":
            calificacion = document.getElementById("category").innerHTML;
            break;
        case "8":
            calificacion = document.getElementById("category").innerHTML;
            break;
        case "9":
            calificacion = document.getElementById("category").innerHTML;
            break;
        case "10":
            calificacion = document.getElementById("category").innerHTML;
            break;       
    }
    if(document.getElementsByTagName("input")[15].checked){
        frequency = document.getElementsByTagName("input")[15].innerHTML;
    }
    if(document.getElementsByTagName("input")[16].checked){
        frequency = document.getElementsByTagName("input")[16].innerHTML;
    }
    if(document.getElementsByTagName("input")[17].checked){
        frequency = document.getElementsByTagName("input")[17].innerHTML;
    }

});
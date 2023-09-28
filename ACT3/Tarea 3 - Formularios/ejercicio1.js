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
    if(dni.length===9){
        
    }
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

});

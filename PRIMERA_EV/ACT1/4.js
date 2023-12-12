function calcularNota(x){
    let y;
    
    switch(x){
        case "10":
            y = "Sobresaliente";
            break;
        case "9":
        case "8":
            y = "Notable Alto";
            break;
        case "7":
            y = "Notable Bajo";
            break;
        case "6":
        case "5":
            y = "Suficiente"
            break;
        default:
            y = "Insuficiente";
            break;
    }
    
    return y;
}

let nota = prompt("¿Cual es tu nota?");
alert(calcularNota(nota));
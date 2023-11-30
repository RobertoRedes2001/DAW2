function calcularNota(x){
    if(x>9){
        return "Sobresaliente"
    }else if(x>=8){
        return "Notable alto"
    }else if(x>=7){
        return "Notable bajo"
    }else if(x>=5){
        return "Suficiente"
    }else{
        return "Insuficiente"
    }
}

let nota = prompt("¿Cual es tu nota?");
alert(calcularNota(nota));
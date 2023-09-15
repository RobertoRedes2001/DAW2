function calcularFactorial(x){
    let factorial=1;
    for(i=x;i>0;i--){
       factorial=factorial*i
    }
    alert(factorial);
}

let numero = prompt("Inserte numero para calcular factorial");
calcularFactorial(numero);
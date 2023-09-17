function fibonazi(x){
    let y=x-1;
    return parseInt(y)+parseInt(x);
};

let num = prompt("Introduce un numero");
alert(fibonazi(num))
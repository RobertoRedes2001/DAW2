function calcularParalelogramo(x,y){
    let area = x * y;
    let perimetro = (x*2)+(y*2);
    let tipo = x==y ? "cuadrado" : "rectangulo";
    let resultado = "Area: "+area+" Perimetro: "+perimetro+" Tipo: "+tipo;
    return resultado;
}

let ladoUno = prompt("Introduce un lado");
let ladoDos = prompt("Introduce otro lado");

if(isNaN(ladoUno)||isNaN(ladoDos)||ladoUno==""||ladoDos==""){
    alert("Te crees muy gracioso ¿no?");
}else{
    console.log(calcularParalelogramo(ladoUno, ladoDos));
}

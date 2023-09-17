function zorraAbad(x){
    let y="";
    for(i=x.length-1;i>=0;i--){
        y=y+x[i];
    }
    console.log(y);
    console.log(x);
    if(x==y){
        alert("Es un palíndromo.")
    }else{
        alert("No es un palíndromo.")
    }
}
palabra = prompt("Escribe una palabra")
zorraAbad(palabra);
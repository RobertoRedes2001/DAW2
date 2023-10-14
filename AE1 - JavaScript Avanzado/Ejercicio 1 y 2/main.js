
//Funciones
function cargarSeries(){
    contenido = "series";
    document.getElementsByTagName("h1")[1].innerHTML = series[pos1].nombre;
    document.getElementsByTagName("img")[0].src = series[pos1].imagen;
    document.getElementsByTagName("h2")[0].innerHTML = series[pos1].personajes[pos2];
    document.getElementsByTagName("h3")[0].innerHTML = series[pos1].casting[pos2];
}

function cargarPelis(){
    contenido = "pelis";
    document.getElementsByTagName("h1")[1].innerHTML = peliculas[pos1].nombre;
    document.getElementsByTagName("img")[0].src = peliculas[pos1].imagen;
    document.getElementsByTagName("h2")[0].innerHTML = peliculas[pos1].personajes[pos2];
    document.getElementsByTagName("h3")[0].innerHTML = peliculas[pos1].casting[pos2];
}

function anterior(){
    if(pos1<=0){
        pos1=2;
    }else{
        pos1--;
    }
    if(contenido==="series"){
        cargarSeries();
    }else{
        cargarPelis();
    }
}

function siguiente(){
    if(pos1>=2){
        pos1=0;
    }else{
        pos1++;
    }
    if(contenido==="series"){
        cargarSeries();
    }else{
        cargarPelis();
    }
}

function anteriorActor(){
    if(pos2<=0){
        pos2=2;
    }else{
        pos2--;
    }
    if(contenido==="series"){
        cargarSeries();
    }else{
        cargarPelis();
    }
}

function siguienteActor(){
    if(pos2>=2){
        pos2=0;
    }else{
        pos2++;
    }
    if(contenido==="series"){
        cargarSeries();
    }else{
        cargarPelis();
    }
}

//Contenido

let pos1 = 0;
let pos2 = 0;
let contenido = "series";

let serie1 = {
    nombre : "Los Serrano", 
    imagen : "https://imagenes.elpais.com/resizer/etFwGp03Wp4LjBpxj9P6gTqotys=/1960x1470/cloudfront-eu-central-1.images.arcpublishing.com/prisa/B4SRCEXTJBFHVC7SOUD6G7JSKA.jpg",
    personajes : ["Diego Serrano", "Guillermo Serrano", "Marcos Serrano"], 
    casting : ["Antonio Resines", "Victor Elias", "Fran Perea"],
}
let serie2 = {
    nombre : "One Piece Live Action", 
    imagen : "https://www.mundodeportivo.com/alfabeta/hero/2023/08/netflix-live-action-one-piece-sinopsis-de-los-episodios.jpg",
    personajes : ["Luffy" , "Nami" , "Zoro"], 
    casting : ["Iñaki Godoy", "Emily Rud", "Mackenyu Maeda"],
}
let serie3 = {
    nombre : "Como conoci a vuestra madre", 
    imagen : "https://media.revistagq.com/photos/5ca604b4267a32697a72587f/master/w_1600%2Cc_limit/como_conoci_a_vuestra_madre_capitulo_final_8137.jpg",
    personajes : ["Ted Mosby", "Barney Stinson", "Lily Aldrin"], 
    casting : ["Josh Radnor", "Neil Patrick Harris", "Alyson Hannigan"],
}
let series = [serie1,serie2,serie3];

let peli1 = {
    nombre : "Torrente 2", 
    imagen : "https://i.ytimg.com/vi/rCVq9BNM7w0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLAeb6SKd50ko8zklt77Dh8x1ZnpYw",
    personajes : ["Jose Luis Torrente", "Cuco", "Mauricio Torrente"], 
    casting : ["Santiago Segura", "Gabino Diego", "Tony Leblanc"],
}
let peli2 = {
    nombre : "Padre no hay más que uno", 
    imagen : "https://estaticosgn-cdn.deia.eus/clip/3731888c-1d76-4930-85d8-77da8192e8a6_16-9-discover-aspect-ratio_default_0.jpg",
    personajes : ["Javier", "Dani", "Sara"], 
    casting : ["Santiago Segura", "Carlos Gonzalez", "Martina D'Antiochia"],
}
let peli3 = {
    nombre : "Blade 2", 
    imagen : "https://hips.hearstapps.com/hmg-prod/images/blade-2-2002-wesley-snipes-y-santiago-segura-jpg-1573494372.jpg?crop=1xw:0.9684720457433291xh;center,top&resize=1200:*",
    personajes : ["Blade", "Scud", "Rush"], 
    casting : ["Wesley Snipes", "Norman Reedus", "Santiago Segura"],
}
let peliculas = [peli1,peli2,peli3];

//Elementos

cargarSeries();

document.getElementsByClassName("nutrition")[0].addEventListener("click", cargarSeries);
document.getElementsByClassName("nutrition")[1].addEventListener("click", cargarPelis);
document.getElementsByTagName("a")[1].addEventListener("click", siguienteActor);
document.getElementsByTagName("a")[0].addEventListener("click", anteriorActor);
document.getElementsByTagName("a")[3].addEventListener("click", siguiente);
document.getElementsByTagName("a")[2].addEventListener("click", anterior);

// Accedemos al "body"
document.body;

// Como queremos navegar hasta el "div", tenemos que seleccionar los nodos hijos que tiene.
// Si buscamos document.body.childNodes muestra como resultado NodeList(3) [text, div, text]
// Por tanto, seleccionamos el "div" con document.body.childNodes[1]
// Una vez tenemos seleccionado el div, vamos a buscar sus nodos hijos.
// Para ello volvemos a seleccionar childNodes: 
// La instruccion document.body.childNodes[1].childNodes devolvería NodeList(17)[text, h2, text, p, text, p...]

// Podemos acceder a los distintos nodos, accediendo a su posición. 
// Por ejemplo, el h2 se selecciona con document.body.childNodes[1].childNodes[1]
// Si utilizamos .innerHTML podemos cambiar el contenido -lo veremos con más detalle más adelante-.

document.body.childNodes[1].childNodes[1].innerHTML = "Elemento h2 seleccionado";

// Si queremos acceder al mismo contenido pero utilizando las expresiones indicadas:

// Con document.body.childNodes[1].firstChild vamos al primer elemento de los 17 contenidos en el NodeList.
// A partir de ese nodo podemos ir a su hermano, el h2:

// document.body.childNodes[1].firstChild.nextSibling

// Si en cambio queremos llegar al penúltimo párrafo "• lastChild: Último hijo.", podemos utilizar lastChild:

document.body.childNodes[1].lastChild.previousSibling.previousSibling.previousSibling.innerHTML = "Elemento p seleccionado";
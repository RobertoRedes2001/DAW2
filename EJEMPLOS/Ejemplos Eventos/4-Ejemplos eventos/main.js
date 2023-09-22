// Seleccionamos el primer párrafo con getElementById y le aplicamos con addEventListener el manejador
// de eventos 'click' para que cada vez que el usuario realice click sobre este párrafo, se cambie el texto.
document.getElementById('parrafoUno').addEventListener('click', function () {
    this.innerText = 'Hemos cambiado el párrafo.';
});

// Ahora seleccionamos el segundo párrafo con otro selector -getElementsByTagName y le implementamos un 
// evento doble click -dblclick-.
document.getElementsByTagName('p')[1].addEventListener('dblclick', function () {
    this.innerHTML = 'Hemos cambiado el párrafo.';
});

// Volvemos a utilizar getElementById y esta vez implementamos el evento mouseover:
document.getElementById('parrafoTres').addEventListener('mouseover', function () {
    this.innerHTML = 'Hemos cambiado el párrafo.';
});

// Ahora implementamos mouseout, para que se complete el evento anterior -mouseover-:
document.getElementById('parrafoTres').addEventListener('mouseout', function () {
    this.innerHTML = 'Asociar lógica a eventos.';
});

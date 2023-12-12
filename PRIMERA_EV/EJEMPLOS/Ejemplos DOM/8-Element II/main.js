// Seleccionamos la tabla:
let tabla = document.getElementsByTagName("table")[0];

// Seleccionamos la primera fila:
let primeraFila = tabla.rows[0];

// Seleccionamos la primera celda y la cambiamos, podemos usar textContent o innerHTML:
primeraFila.cells[0].textContent = "Celda cambiada";
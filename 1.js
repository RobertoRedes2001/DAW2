let edad = prompt("¿Cuantos años tienes?");

if (isNaN(edad)) {
  alert("¡Introduce tu edad bien!");
  window.location.href = window.location.href;
} else {
  any = 2023 - edad;
  alert("Naciste en el año... " + any);
}

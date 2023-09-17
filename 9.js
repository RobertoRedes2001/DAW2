function bonoEuromillon() {
  let num;
  let lastNum = 0;
  const boleto = [];
  let repeticion = true;

  //Crea el boleto
  for (i = 0; i < 7; i++) {
    if (i < 5) {
      num = Math.floor(Math.random() * (50 - 1 + 1) + 1);
    } else {
      num = Math.floor(Math.random() * (12 - 1 + 1) + 1);
    }
    boleto.push(num);
    lastNum = boleto[i];
  }

  //Comprueba el boleto

  //Vemos el boleto
  console.log(boleto);
}

bonoEuromillon();

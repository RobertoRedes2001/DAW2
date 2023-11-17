function handleKeyDown(event) {
    const letra = event.key;
  
    if (letra.toLowerCase() === 'backspace') {
      if (letrasIngresadas.length > 0) {
        letrasIngresadas.pop();
        console.log(letrasIngresadas.join(''));
      }
    } else {
      letrasIngresadas.push(letra);
      console.log(letrasIngresadas.join(''));
    }
  
    const password = 'abracadabra';
    if (letrasIngresadas.join('') === password) {
      letrasIngresadas = [];
      alert("Teclado desbloqueado");
      keyboardCont.style.display = 'flex';
    }
  }


const buttons = document.querySelectorAll('.keyboard-button');
const cells = document.querySelectorAll('.activity');
let currentIndex = 0;
const keyboardCont = document.getElementById('keyboard-cont');
keyboardCont.style.display = 'none';
let letrasIngresadas = [];

buttons.forEach((button) => {
    button.addEventListener('click', () => {
        if (button.value === "del") {
            if (currentIndex > 0) {
                cells[currentIndex - 1].textContent = '';
                currentIndex--;
            }
        } else {
            const todasOcupadas = Array.from(cells).every((cell) => cell.textContent !== '');
            if (todasOcupadas) {
                const nuevaCelda = document.createElement('td');
                nuevaCelda.classList.add('activity');
                nuevaCelda.innerText = button.value;
                document.getElementsByTagName('tr')[0].appendChild(nuevaCelda);
                currentIndex++;
            }
            cells[currentIndex].textContent = button.value;
            currentIndex++;
        }
    });
});


window.addEventListener('keydown', handleKeyDown);



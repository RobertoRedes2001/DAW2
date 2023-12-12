//Autor: Gepeto | Revisionado: Roberto
function handleKeyDown(event) {
    const letra = event.key;

    if (letra.toLowerCase() === 'backspace') {
        if (letrasIngresadas.length > 0) {
            letrasIngresadas.pop();
        }
    } else {
        letrasIngresadas.push(letra);
    }

    if (letrasIngresadas.join('') === "abracadabra") {
        letrasIngresadas = [];
        alert("Teclado desbloqueado");
        keyboardCont.style.display = 'flex';
    }
    if (letrasIngresadas.join('') === "patadecabra") {
      letrasIngresadas = [];
      alert("Teclado bloqueado");
      keyboardCont.style.display = 'none';
    }
}

//Autor: Roberto
function saveWord(word) {
    if (typeof(Storage) !== "undefined") {
        let palabrasGuardadas = JSON.parse(localStorage.getItem("palabras")) || [];
        palabrasGuardadas.push(word);
        localStorage.setItem("palabras", JSON.stringify(palabrasGuardadas));
    }
}

//Autor: Roberto
const getData = async (word) => {
  try {
    const response = await fetch("https://api.dictionaryapi.dev/api/v2/entries/en/"+word);
    if (response.ok) {
      const jsonResponse = await response.json();
      let wordDef = {name : word, definition : jsonResponse[0].meanings[0].definitions[0].definition}
      definitionsArray.push(wordDef);
    }
  } catch (error) {
    console.log(error);
  }
};

//Autor: Roberto
function loadDefinitions(){
  definitionsArray.forEach(function(def) {
    const nuevaColumna = document.createElement('tr');
    const nuevaCelda = document.createElement('td');
    nuevaCelda.classList.add('definition');
    nuevaCelda.innerText = def.definition;
    nuevaColumna.appendChild(nuevaCelda);
    document.getElementsByTagName('table')[1].appendChild(nuevaColumna);
});
}

//Autor: Gepeto | Revisionado: Roberto
function reverseWords(words){
  let reverseds = [];
  words.forEach(function(word) {
      let reversedWord = word.split('').sort(function() { return 0.5 - Math.random() }).join('');
      reverseds.push(reversedWord);
  });
  return reverseds;
}

//Autor: Gepeto
function loadWordToTable(word) {
  const tableRow = document.getElementsByTagName("tr")[0];

  word.split("").forEach((letter, index) => {
    const newCell = document.createElement("td");
    newCell.classList.add("activity");
    newCell.innerText = letter;

    newCell.addEventListener("click", () => {
      handleCellClick(newCell, index);
    });

    tableRow.appendChild(newCell);
  });
}

//Autor: Gepeto
function handleCellClick(cell, index) {
  if (firstCellIndex === null) {
    firstCellIndex = index;
    cell.style.backgroundColor = "lightblue";
  } else {
    const cells = Array.from(cell.parentNode.children);
    const temp = cells[firstCellIndex].textContent;
    cells[firstCellIndex].textContent = cell.textContent;
    cell.textContent = temp;
    cells[firstCellIndex].style.backgroundColor = "";
    firstCellIndex = null;
  }
}

//Autor: Roberto | Revisionado: Gepeto
function handleGame(){
  if(gameStart){
    let previousWord = Array.from(document.getElementsByClassName('activity')).map(cell => cell.textContent).join('');;
    previousWord === definitionsArray[currentLevel].name ? score++ : '';
    if(currentLevel >= savedWords.length - 1){
      document.getElementsByTagName('body')[0].innerHTML = '';
      let gameOver = document.createElement('h1');
      let finalScore = document.createElement('h2');
      gameOver.style.textAlign = 'center'; //Esto lo hizo chat porque no
      finalScore.style.textAlign = 'center';//me estaba funcionando el
      finalScore.style.marginTop = '10px'; //display: flex
      gameOver.innerText = 'Game Over';
      finalScore.innerText = score+"/"+savedWords.length;
      document.getElementsByTagName('body')[0].appendChild(gameOver);
      document.getElementsByTagName('body')[0].appendChild(finalScore);
    } else{
      currentLevel++;
      document.getElementsByTagName('tr')[0].innerHTML = '';
      loadWordToTable(unordenedWords[currentLevel]);  
    }
  }else{
    gameStart = true;
    document.getElementsByTagName('tr')[0].innerHTML = '';
    unordenedWords = reverseWords(savedWords)
    loadWordToTable(unordenedWords[currentLevel]);
    loadDefinitions();
  }
}

const buttons = document.querySelectorAll('.keyboard-button');
const cells = document.getElementsByTagName('td');
let currentIndex = 0;
const keyboardCont = document.getElementById('keyboard-cont');
keyboardCont.style.display = 'none';
let letrasIngresadas = [];
let definitionsArray = []; 
let unordenedWords = [];
let savedWords = [];
let score = 0;
let gameStart = false;
let currentLevel = 0;

//Autor: Gepeto | Revisionado: Roberto
buttons.forEach((button) => {
  button.addEventListener('click', (event) => {
      if (button.value === "del") { //Yo implemente desde aqui
          if (currentIndex > 0) {
              currentIndex--;
              cells[currentIndex].textContent = '';
          }
      } else if(button.value === "submit"){ 
        event.preventDefault(); 
        let word = Array.from(cells).map(cell => cell.textContent).join('');  //Chat me dijo como hacer esto
        saveWord(word);
        getData(word);
        const arrayOfWords = JSON.parse(localStorage.getItem("palabras")) || [];
        savedWords = arrayOfWords;
        currentIndex = 0;
        Array.from(cells).map(cell => cell.textContent=''); //hasta aquí
      } else { //esto lo hizo Chat
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

window.addEventListener('keydown', handleKeyDown); //esto lo puso Chat

if (typeof(Storage) !== "undefined") {
  localStorage.setItem("palabras", JSON.stringify([]));
}

document.getElementsByTagName("h1")[0].addEventListener("click",function(){
    savedWords.length > 0 ? handleGame() : alert("Insert words to play");
});

let firstCellIndex = null;

//Esto tambien lo hizo Chat
Array.from(cells).forEach((cell, index) => {
    cell.addEventListener("click", () => {
        if (firstCellIndex === null) {
            firstCellIndex = index;
            cell.style.backgroundColor = "lightblue";
        } else {
            const temp = cells[firstCellIndex].textContent;
            cells[firstCellIndex].textContent = cell.textContent;
            cell.textContent = temp;
            cells[firstCellIndex].style.backgroundColor = "";
            firstCellIndex = null;
        }
    });
});



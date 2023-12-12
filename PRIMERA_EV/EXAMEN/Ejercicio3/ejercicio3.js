function animateName(nameElement, fullName) {
    let iterationsLeft = 5;
    let currentLength = fullName.length;
    let currentIteration = 0;
  
    const randomChars = Array.from({ length: fullName.length }, getRandomChar);
  
    const intervalId = setInterval(() => {
      if (currentIteration < iterationsLeft) {
        const partialName = randomChars
          .slice(0, currentLength)
          .join("") + fullName.slice(currentLength, fullName.length);
  
        nameElement.textContent = partialName;
  
        currentIteration++;
      } else if (currentLength > 0) {
        currentLength--;
        currentIteration = 0;
      } else {
        clearInterval(intervalId);
      }
    }, 30);
  }
  
  function getRandomChar() {
    const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    const randomIndex = Math.floor(Math.random() * characters.length);
    return characters.charAt(randomIndex);
  }
  

let titulos = ["Examen", "Primera","Evaluacion"];
const h2Element = document.getElementsByTagName("h2")[0];
let currentIndex = 0;

function iniciarAnimacion() {
  if (currentIndex < titulos.length) {
    animateName(h2Element, titulos[currentIndex]);
    currentIndex++;
    setTimeout(() => {
        h2Element.textContent === "Evaluacion" ?  h2Element.textContent = "Evaluacion" :  h2Element.textContent = "";
    }, 3000); 
  } else {
    clearInterval(intervalId);
  }
}

iniciarAnimacion();
const intervalId = setInterval(iniciarAnimacion, (titulos.length) * 1000); 





    


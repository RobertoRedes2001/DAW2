import { NgClass, NgStyle } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-game',
  standalone: true,
  imports: [NgClass,NgStyle],
  templateUrl: './game.component.html',
  styleUrl: './game.component.css'
})
export class GameComponent {

  public difLvl : number = 1;
  public gameEnded : boolean = false;
  public gameOnGoing : boolean = false;
  public victory : boolean = false;
  public onChange : boolean = false;
  public currentIndex : number = -1;
  public attempts : number = 3;

  public firstLevelColors : string[] = [
    "red", "yellow", "green", "purple"
  ];

  public answers : string[] = [];

  public secondLevelColors : string[] = [
  "red", "yellow", "green", "purple", 
  "blue", "violet", "orange", "grey", "black"
  ];
  public thirdLevelColors : string[] = [
  "red", "yellow", "green", "purple", 
  "blue", "violet", "orange", "grey", "black", "silver", 
  "fuchsia", "lime", "navy", "aqua", "chartreuse", "cornflowerblue"
  ];

  shuffle(arrayColors : string[]) {
    this.gameOnGoing = true;

    const firstInterval = setInterval(() => {
      arrayColors.sort(() => Math.random() - 0.5);
    }, 100);
  
    setTimeout(() => {
      clearInterval(firstInterval);
  
      this.answers = [...arrayColors];
  
      setTimeout(() => {
        const secondInterval = setInterval(() => {
          arrayColors.sort(() => Math.random() - 0.5);
        }, 100);
        setTimeout(() => {
          clearInterval(secondInterval);
        }, 3000);
      }, 2000);
    }, 3000);
  }
  
  choseColor(index:number){
    this.currentIndex = index;
    this.onChange = true;
  }

  changeColor(index: number, arrayColors : string[]) {
      let newColor : string = arrayColors[index];
      arrayColors[index] = arrayColors[this.currentIndex];
      arrayColors[this.currentIndex] = newColor;
      this.onChange = false;
  }
  
  onCheck(){
    switch(this.difLvl){
      case 1:
        if (this.attempts > 1) {
          if (JSON.stringify(this.answers) === JSON.stringify(this.firstLevelColors)) {
            this.nextLevel();
            this.shuffle(this.secondLevelColors);
          } else {
            this.attempts--;
            alert("Intentos restantes: "+this.attempts);
          }
        } else {
          this.gameEnded = true;
        }
      break;
      case 2:
        if(this.attempts > 1){
          if (JSON.stringify(this.answers) === JSON.stringify(this.secondLevelColors)) {
            this.nextLevel();
            this.shuffle(this.thirdLevelColors);
          } else {
            this.attempts--;
            alert("Intentos restantes: "+this.attempts);
          }
        }else{
          this.gameOnGoing = false;
        }
      break;
      case 3:
        if(this.attempts > 1){
          if (JSON.stringify(this.answers) === JSON.stringify(this.thirdLevelColors)) {
            this.nextLevel();
          } else {
            this.attempts--;
            alert("Intentos restantes: "+this.attempts);
          }
        }else{
          this.gameOnGoing = false;
        }
      break;
    }
  }

  nextLevel(){
    if(this.difLvl<3){
      this.difLvl++;
    }else{
      this.victory = true;
      this.gameEnded = true;
    }
  }

  resetGame(){
    this.gameOnGoing = false;
    this.gameEnded = false;
    this.difLvl = 1;
    this.victory = false;
    this.attempts = 3;
  }
}

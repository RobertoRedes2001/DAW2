import { NgClass } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink, RouterLinkActive } from '@angular/router';

@Component({
  selector: 'app-menu',
  standalone: true,
  imports: [RouterLink, RouterLinkActive, NgClass],
  templateUrl: './menu.component.html',
  styleUrl: './menu.component.css'
})
export class MenuComponent {
  public title: string = "Edificios";
  public links: string[] = ["Hemisferic", "Museo de las Ciencias"];
  public case: string = "oculto";
  public counter: number = 1;
  

  public onClick(): void{
    if (this.counter === 0){
      this.case = "oculto";
      this.counter = 1;
    } else {
      this.case = "visible"
      this.counter = 0;
    }
  }
}

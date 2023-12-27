import { Component } from '@angular/core';

@Component({
  selector: 'app-header',
  standalone: true,
  imports: [],
  templateUrl: './header.component.html',
  styleUrl: './header.component.css'
})
export class HeaderComponent {

  public toggle : boolean = true;
  
  clickFruits() {
    this.toggle = false;
  }

  clickVegetables() {
    this.toggle = true;
  }
}

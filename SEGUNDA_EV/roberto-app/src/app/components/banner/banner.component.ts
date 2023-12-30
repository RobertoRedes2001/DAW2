import { Component } from '@angular/core';
import { NgStyle } from '@angular/common';
import { HomeComponent } from '../../views/home/home.component';
import { LongtermComponent } from '../../views/longterm/longterm.component';
import { ShorttermComponent } from '../../views/shortterm/shortterm.component';
import { GameComponent } from '../../views/game/game.component';

@Component({
  selector: 'app-banner',
  standalone: true,
  imports: [NgStyle, HomeComponent,LongtermComponent,
    ShorttermComponent,GameComponent],
  templateUrl: './banner.component.html',
  styleUrl: './banner.component.css',
})
export class BannerComponent {
 
  public fontSize = '75px';

  // Método para cambiar el tamaño del font al pasar el ratón por encima
  alterSize() {
    this.fontSize = '150px';
  }

  returnSize(){
    this.fontSize = '75px'
  }

}

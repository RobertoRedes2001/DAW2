import { NgStyle } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-header',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './header.component.html',
  styleUrl: './header.component.css'
})
export class HeaderComponent {
  public kind: string = 'fruits';
  public photo: string = 'url(https://s1.eestatic.com/2018/11/21/ciencia/nutricion/nutricion-frutas-higiene_354976032_106782952_1706x960.jpg)';


  public onClick(type: number): void {
    if (type === 1) {
      this.kind = 'fruits';
      this.photo = 'url(https://s1.eestatic.com/2018/11/21/ciencia/nutricion/nutricion-frutas-higiene_354976032_106782952_1706x960.jpg)'
    } else {
      this.kind = 'vegetables';
      this.photo = 'url(https://phantom-marca.unidadeditorial.es/f26736e71a6bfb79e3a2b0c631a1bf4e/resize/828/f/jpg/assets/multimedia/imagenes/2023/05/30/16854588843943.jpg)';
    } 
  }

}

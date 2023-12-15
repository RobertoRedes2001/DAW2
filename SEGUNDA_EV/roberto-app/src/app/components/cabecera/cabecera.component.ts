import { Component } from '@angular/core';
import { NgClass } from '@angular/common';

@Component({
  selector: 'app-cabecera',
  standalone: true,
  imports: [NgClass],
  templateUrl: './cabecera.component.html',
  styleUrl: './cabecera.component.css'
})
export class CabeceraComponent {
 
    public  rotulo : string = "SUPER ULTIMATE BAHAMUT";
    public isOn : boolean = false;
    
    public onClick(){
      this.rotulo != "SUPER ULTIMATE BAHAMUT" ? this.rotulo = "SUPER ULTIMATE BAHAMUT" : this.rotulo = "Carlos Richtofen";
    }
  
}

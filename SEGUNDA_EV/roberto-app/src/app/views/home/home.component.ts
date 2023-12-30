import { Component, ElementRef, ViewChild } from '@angular/core';
import { NgClass, NgStyle } from '@angular/common';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [NgClass, NgStyle],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {
    //Imagenes de los tipos de memoria
    @ViewChild('memory1', { static: true }) memory1!: ElementRef;
    @ViewChild('memory2', { static: true }) memory2!: ElementRef;
    @ViewChild('memory3', { static: true }) memory3!: ElementRef;
    @ViewChild('memory4', { static: true }) memory4!: ElementRef;
    @ViewChild('memory5', { static: true }) memory5!: ElementRef;
    @ViewChild('memory6', { static: true }) memory6!: ElementRef;
    //Imagenes de informacion adicional sobre los tipos de memoria
    @ViewChild('shortterm', { static: true }) shortterm!: ElementRef;
    @ViewChild('longterm', { static: true }) longterm!: ElementRef;
    @ViewChild('declarative', { static: true }) declarative!: ElementRef;
    @ViewChild('procedural', { static: true }) procedural!: ElementRef;
    @ViewChild('sensory', { static: true }) sensory!: ElementRef;
    @ViewChild('verbal', { static: true }) verbal!: ElementRef;
    //Caption del nombre de la memoria
    @ViewChild('memoriaCaption1', { static: true }) memoriaCaption1!: ElementRef;
    @ViewChild('memoriaCaption2', { static: true }) memoriaCaption2!: ElementRef;
    //Variables para controlar los divs y los textos
    public changeImg: boolean = false;
    public changeMem: boolean = false;
    public memoryText: number = 1;
    public memoryType : number = 0;

    changeImage(memory: HTMLImageElement, id: number) {
      this.memoryType = id;
      // Restablecer la visibilidad de todos los elementos
      const memorys = [
        this.memory1,
        this.memory2,
        this.memory3,
        this.memory4,
        this.memory5,
        this.memory6,
      ];
      memorys.forEach((memoryActual: ElementRef) => {
        memoryActual.nativeElement.style.display = 'none';
      });
      // Mostrar el elemento correspondiente
      memory.style.display = 'block';
      const captions = [
        '',
        ' a corto plazo',
        ' a largo plazo',
        ' declarativa',
        ' procedimental',
        ' sensorial',
        ' verbal'
      ];
  
      this.memoriaCaption1.nativeElement.textContent += captions[id];
    
      this.changeImg = true;
      this.memoryText = 2;
    }
  
    changeMemory(id: number) {
      // Restablecer la visibilidad de todos los elementos
      const types = [
        this.shortterm,
        this.longterm,
        this.declarative,
        this.procedural,
        this.sensory,
        this.verbal,
      ];
    
      types.forEach((typeyActual: ElementRef, index: number) => {
        typeyActual.nativeElement.style.display = index + 1 === id ? 'block' : 'none';
      });
    
      this.changeMem = true;
      this.memoryText = 3;
      this.memoriaCaption2.nativeElement.textContent = this.memoriaCaption1.nativeElement.textContent;
    }
    
    returnMain(){
      this.changeImg = false;
      this.changeMem = false;
      this.memoryText = 1;
      this.memoryType = 0;
      const memorys = [
        this.memory1,
        this.memory2,
        this.memory3,
        this.memory4,
        this.memory5,
        this.memory6,
      ];
      memorys.forEach((memoryActual: ElementRef) => {
        memoryActual.nativeElement.style.display = 'inline-block';
      });
      this.memoriaCaption1.nativeElement.textContent = "Memoria"
    }
}

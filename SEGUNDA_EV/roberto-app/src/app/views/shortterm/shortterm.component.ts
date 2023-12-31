import { Component, ElementRef, ViewChild } from '@angular/core';
import { NgStyle, NgClass } from '@angular/common';

@Component({
  selector: 'app-shortterm',
  standalone: true,
  imports: [NgStyle, NgClass],
  templateUrl: './shortterm.component.html',
  styleUrl: './shortterm.component.css'
})
export class ShorttermComponent {

    public position : number = 1;
    @ViewChild('textOne', { static: true }) textOne!: ElementRef;
    @ViewChild('textTwo', { static: true }) textTwo!: ElementRef;
    @ViewChild('textThree', { static: true }) textThree!: ElementRef;
    @ViewChild('boxOne', { static: true }) boxOne!: ElementRef;
    @ViewChild('boxTwo', { static: true }) boxTwo!: ElementRef;
    @ViewChild('boxThree', { static: true }) boxThree!: ElementRef;
    @ViewChild('boxFour', { static: true }) boxFour!: ElementRef;
    @ViewChild('boxFive', { static: true }) boxFive!: ElementRef;
    @ViewChild('boxSix', { static: true }) boxSix!: ElementRef;
    @ViewChild('boxSeven', { static: true }) boxSeven!: ElementRef;
    @ViewChild('boxEight', { static: true }) boxEight!: ElementRef;
    @ViewChild('boxNine', { static: true }) boxNine!: ElementRef;
  
    nextImg() {
      switch (this.position) {
        case 1:
          this.textOne.nativeElement.style.display = 'block';
          
          break;
        case 2:
          this.textTwo.nativeElement.style.display = 'none';
          this.boxFour.nativeElement.style.left = '25%'
          this.boxFive.nativeElement.style.left = '50%'
          this.boxSix.nativeElement.style.left = '75%'
          break;
        case 3:
          this.textTwo.nativeElement.style.display = 'block';
          this.boxFour.nativeElement.style.left = '0%'
          this.boxFive.nativeElement.style.left = '0%'
          this.boxSix.nativeElement.style.left = '0%'
          break;
        case 4:
          this.textThree.nativeElement.style.display = 'none';

          break;
        case 5:
          this.textThree.nativeElement.style.display = 'block';

          break;
        case 6:
          this.textOne.nativeElement.style.display = 'none';

          break;
      }
    }

    lastImg() {
      switch (this.position) {
        case 1:
          this.textOne.nativeElement.style.display = 'block';
          this.textTwo.nativeElement.style.display = 'none';
          this.textThree.nativeElement.style.display = 'none';
          break;
        case 2:
          this.textOne.nativeElement.style.display = 'none';
          this.textTwo.nativeElement.style.display = 'none';
          this.textThree.nativeElement.style.display = 'none';
          break;
        case 3:
          this.textOne.nativeElement.style.display = 'none';
          this.textTwo.nativeElement.style.display = 'block';
          this.textThree.nativeElement.style.display = 'none';
          break;
        case 4:
          this.textOne.nativeElement.style.display = 'none';
          this.textTwo.nativeElement.style.display = 'none';
          this.textThree.nativeElement.style.display = 'none';
          break;
        case 5:
          this.textOne.nativeElement.style.display = 'none';
          this.textTwo.nativeElement.style.display = 'none';
          this.textThree.nativeElement.style.display = 'block';
          break;
        case 6:
          this.textOne.nativeElement.style.display = 'none';
          this.textTwo.nativeElement.style.display = 'none';
          this.textThree.nativeElement.style.display = 'none';
          break;
      }
    }
  
    nextPosition(){
      this.position < 6 ? this.position++ : this.position = 1;
    }

    lastPosition(){
      this.position <= 1 ? this.position = 6 : this.position--;
    }
}

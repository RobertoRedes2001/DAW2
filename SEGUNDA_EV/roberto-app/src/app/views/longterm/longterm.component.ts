import { Component, ElementRef, ViewChild } from '@angular/core';
import { NgStyle } from '@angular/common';
import { interval } from 'rxjs';
import { take } from 'rxjs/operators';

@Component({
  selector: 'app-longterm',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './longterm.component.html',
  styleUrl: './longterm.component.css'
})
export class LongtermComponent {

  @ViewChild('img1', { static: true }) img1!: ElementRef;
  @ViewChild('img2', { static: true }) img2!: ElementRef;
  @ViewChild('img3', { static: true }) img3!: ElementRef;

  @ViewChild('txt1', { static: true }) txt1!: ElementRef;
  @ViewChild('txt2', { static: true }) txt2!: ElementRef;
  @ViewChild('txt3', { static: true }) txt3!: ElementRef;

  ngOnInit(): void {
    // Array de elementos
    const imgElements = [this.img2, this.img3,this.img1];
    const txtElements = [this.txt2, this.txt3,this.txt1];

    // Intervalo cada 5 segundos
    interval(5000)
      .pipe(take(Infinity))
      .subscribe(index => {
        // Ocultar todos los elementos
        imgElements.forEach(img => img.nativeElement.style.display = 'none');
        txtElements.forEach(txt => txt.nativeElement.style.display = 'none');

        // Mostrar el elemento actual
        imgElements[index % imgElements.length].nativeElement.style.display = 'block';
        txtElements[index % txtElements.length].nativeElement.style.display = 'block';
      });
  }
}

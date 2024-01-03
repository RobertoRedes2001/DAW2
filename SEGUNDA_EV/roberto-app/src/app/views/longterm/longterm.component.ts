import { Component } from '@angular/core';
import { NgStyle } from '@angular/common';
import { interval } from 'rxjs';

@Component({
  selector: 'app-longterm',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './longterm.component.html',
  styleUrl: './longterm.component.css'
})
export class LongtermComponent {

  public longTermImgs: string[] = [
    "https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half/public/field_blog_entry_images/1369847707_4085_memory-1.jpg?itok=aZRKeJXR",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTF8a2YKUyrUrEEkYxECnP4zI3LXpfEhhEZhg&usqp=CAU",
    "https://easyscienceforkids.com/wp-content/uploads/2018/04/Memory-facts-18-4-1-758x635.jpg"
  ];

  public longTermTexts: string[] = [
    "La memoria a largo plazo se puede definir como el mecanismo cerebral que nos permite codificar y retener una cantidad prácticamente ilimitada de información durante un periodo largo de tiempo. Los recuerdos que almacenamos en la memoria a largo plazo pueden durar desde unos segundos hasta varios años.",
    "La memoria a largo plazo resulta un elemento clave para realizar nuestras tareas cotidianas sin errores y de forma autónoma. Este tipo de memoria hace referencia a la capacidad del cerebro para almacenar hechos, conocimientos o destrezas y recuperar más tarde esos recuerdos. La memoria a largo plazo es una capacidad muy amplia y compleja que implica una gran cantidad de estructuras cerebrales. Por esto mismo, es muy sensible al daño cerebral. Afortunadamente, la práctica y el entrenamiento cognitivo puede mejorar esta importante función cognitiva.",
    "Un programa en entrenamiento cerebral permite activar y fortalecer nuestra memoria y otras importantes capacidades cognitivas. Los juegos mentales estimulan determinados patrones de activación neuronal. La activación repetida de estos patrones cognitivos puede ayudar a fortalecer las conexiones neuronales implicadas en la memoria y establecer nuevas sinapsis capaces de reorganizar y/o recuperar funciones cognitivas más débiles o dañadas."
  ]

  public cont : number = 0;

  ngOnInit(): void {
    interval(5000).subscribe(() => {
      // Incrementa la variable cont
      this.cont++;

      // Si cont es igual a 3, reinicia a 0
      if (this.cont === 3) {
        this.cont = 0;
      }
    });
  }
}

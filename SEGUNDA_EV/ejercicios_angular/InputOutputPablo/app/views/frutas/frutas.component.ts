import { Component } from '@angular/core';
import { CardComponent } from '../../components/card/card.component';


@Component({
  selector: 'app-frutas',
  standalone: true,
  imports: [CardComponent],
  templateUrl: './frutas.component.html',
  styleUrl: './frutas.component.css'
})
export class FrutasComponent {
  public fruits: { title: string; photo: string }[] = [
    { 
      title: "Platanos",
      photo: "https://s1.eestatic.com/2021/03/09/ciencia/nutricion/564704609_174935756_1706x960.jpg" 
    },

    { 
      title: "Kiwi",
      photo: "https://frutasolivar.com/wp-content/uploads/2019/02/rawpixel-603025-unsplash-e1579691765526.jpg" 
    },

    { 
      title: "Manzanas",
      photo: "https://cdn1.img.sputniknews.lat/img/07e6/0b/08/1132232783_0:257:2731:1793_1920x0_80_0_0_fdbda0e88e9a5ad09cdcc6a7a315c196.jpg" 
    },

    { 
      title: "Peras",
      photo: "https://farmaciaribera.es/blog/wp-content/uploads/2020/01/Beneficios-de-comer-peras-1024x680.jpg" 
    },
  ];
}

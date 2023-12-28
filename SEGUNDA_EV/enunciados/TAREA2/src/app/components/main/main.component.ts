import { Component } from '@angular/core';
import { NgClass, NgStyle } from '@angular/common';

@Component({
  selector: 'app-main',
  standalone: true,
  imports: [NgStyle, NgClass],
  templateUrl: './main.component.html',
  styleUrl: './main.component.css',
})
export class MainComponent {
  public modal: boolean = true;
  public photoModal: string = '';
  public photoTitle: string = '';
  public titles: { title: string; photo: string }[][] = [
    [
      {
        title: 'Platanos',
        photo:
          'url(https://s1.eestatic.com/2021/03/09/ciencia/nutricion/564704609_174935756_1706x960.jpg)',
      },
      {
        title: 'Kiwis',
        photo:
          'url(https://frutasolivar.com/wp-content/uploads/2019/02/rawpixel-603025-unsplash-e1579691765526.jpg)',
      },
      {
        title: 'Manzanas',
        photo:
          'url(https://cdn1.img.sputniknews.lat/img/07e6/0b/08/1132232783_0:257:2731:1793_1920x0_80_0_0_fdbda0e88e9a5ad09cdcc6a7a315c196.jpg)',
      },
      {
        title: 'Peras',
        photo:
          'url(https://farmaciaribera.es/blog/wp-content/uploads/2020/01/Beneficios-de-comer-peras-1024x680.jpg)',
      },
    ],
    [
      {
        title: 'Lechugas',
        photo:
          'url(https://www.lavanguardia.com/files/og_thumbnail/uploads/2021/03/05/60421be64918d.jpeg)',
      },
      {
        title: 'Tomates',
        photo:
          'url(https://thefoodtech.com/wp-content/uploads/2020/06/Componentes-de-calidad-en-el-tomate-828x548.jpg)',
      },
      {
        title: 'Berenjenas',
        photo:
          'url(https://estaticos-cdn.prensaiberica.es/clip/7d08691e-b082-4540-ad4f-51dc14f8d23b_16-9-aspect-ratio_default_0.jpg)',
      },
      {
        title: 'Cebollas',
        photo:
          'url(https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2023/10/02/morada-blanca-charlota-para-que-se-utiliza-cada-tipo-de-cebolla.jpeg)',
      },
    ],
  ];

  public onTitle(column: number, row: number): void {
    this.modal = false;
    this.photoTitle = this.titles[column][row].title;
    this.photoModal = this.titles[column][row].photo;
  }

  public onCloseModal(): void {
    this.modal = true;
  }
}

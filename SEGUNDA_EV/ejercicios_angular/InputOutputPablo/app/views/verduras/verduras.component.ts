import { Component, Input } from '@angular/core';
import { ArticleComponent } from '../../components/article/article.component';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-verduras',
  standalone: true,
  imports: [ArticleComponent, ModalComponent],
  templateUrl: './verduras.component.html',
  styleUrl: './verduras.component.css'
})
export class VerdurasComponent {

  public className : string = 'modal';
  public modalName : string = '';
  public photoName : string = '';

  public vegetables: { title: string; description: string; photo: string }[] = [
    { 
      title: "Lechuga",
      description: 'Lechugas frescas del día',
      photo: "https://www.lavanguardia.com/files/og_thumbnail/uploads/2021/03/05/60421be64918d.jpeg" 
    },

    { 
      title: "Tomate",
      description: 'Tomates del Perelló',
      photo: "https://thefoodtech.com/wp-content/uploads/2020/06/Componentes-de-calidad-en-el-tomate-828x548.jpg" 
    },

    { 
      title: "Berenjena",
      description: 'Berenjenas de Almagro',
      photo: "https://estaticos-cdn.prensaiberica.es/clip/7d08691e-b082-4540-ad4f-51dc14f8d23b_16-9-aspect-ratio_default_0.jpg" 
    },

    { 
      title: "Cebolla",
      description: 'Cebolla dulce',
      photo: "https://imagenes.20minutos.es/files/image_1920_1080/uploads/imagenes/2023/10/02/morada-blanca-charlota-para-que-se-utiliza-cada-tipo-de-cebolla.jpeg" 
    },
  ];

  public onClick(data: {title: string, photo: string}) : void {
    this.className = 'modal show-modal';
    this.modalName = data.title;
    this.photoName = data.photo;
  }

  public onCloseModal(className : string) : void {
    this.className = className;
  }
}

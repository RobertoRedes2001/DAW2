import { Component } from '@angular/core';
import { PostComponent } from '../../components/post/post.component';
import { ArticleComponent } from '../../components/article/article.component';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-pescados',
  standalone: true,
  imports: [PostComponent, ArticleComponent, ModalComponent],
  templateUrl: './pescados.component.html',
  styleUrl: './pescados.component.css'
})
export class PescadosComponent {

  public visible: boolean = true;
  public photo : string = ''; 
  public title : string = '';
  public description: string = '';

  public className : string = 'modal';
  public modalName : string = '';
  public photoName : string = '';

  public fish: { title: string; photo: string }[] = [
    {
      title: "Rodaballo",
      photo: "https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2017/10/19/15084107521488.jpg"
    },

    {
      title: "Rape",
      photo: "https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2017/10/19/15084107530435.jpg"
    },

    {
      title: "Mero",
      photo: "https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2017/10/19/15084107493872.jpg"
    },

    {
      title: "Bonito",
      photo: "https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2017/10/19/15084107503223.jpg"
    },

    {
      title: "Lubina",
      photo: "https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2017/10/19/15084107517092.jpg"
    },

    {
      title: "San Martín",
      photo: "https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2017/10/19/15084107498663.jpg"
    },
  ];

  //Funcion del Post para pillar datos y ser enviados al article
  public onClickChange(data: {title: string, photo: string}) : void {
    this.title = data.title;
    this.photo = data.photo;
    this.visible = false;
    switch (this.title) {
      case 'Rodaballo':
        this.description = 'Rodaballo fresco'
        break;
      case 'Rape':
        this.description = 'Rape del Cantábrico'
        break;
      case 'Mero':
        this.description = 'Mero del Mediterráneo'
        break;
      case 'Bonito':
          this.description = 'Bonito del Norte'
          break;
      case 'Lubina':
          this.description = 'Lubina de estero'
          break;
      case 'San Martín':
        this.description = 'Pez de San Pedro'
        break;
      default:
        console.log('Opción no reconocida');
    }
  }

  public onClick({styleOne: string, styleTwo: string }) : void {
    this.className = 'modal show-modal';
    this.modalName = data.title;
    this.photoName = data.photo;
  }

  public onCloseModal(className : string) : void {
    this.className = className;
    this.visible = true;
  }
  
}
